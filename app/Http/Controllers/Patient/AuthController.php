<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use App\Models\Patient;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(){
        return view('patients.login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        /** @var  $model */
        $model = Patient::query()->where('email',$request->get('email'))->firstOrFail();

        if(!Hash::check($request->get('password'),$model->password)){

            return back()->with('error','Email or Password is incorrect.');
        }

        Auth::guard('doctors')->logout();
        Auth::guard('patients')->login($model);
        session(['guard'=>'patients']);
        return redirect()->route('patient.dashboard');

    }
    public function register(){
        return view('patients.register');
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:patients'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $fileName = time().$request->file('profile_picture')->getClientOriginalName();
        $request->file('profile_picture')->move(public_path("images/patients/profile"), $fileName);
        $user = Patient::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
            'profile_picture' => $fileName
        ]);


        event(new Registered($user));



        Auth::guard('doctors')->logout();
        Auth::guard('patients')->login($user);
        session(['guard'=>'patients']);
        Mail::send("misc.email-registration",["name"=>$user->getFullName()],function ($message) use(&$user){
            $message->to($user->email,$user->getFullName())->subject("Registration Complete");
        });
        return redirect('patient'.RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('patients')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        session()->forget('guard');
        return redirect('/');
    }
}
