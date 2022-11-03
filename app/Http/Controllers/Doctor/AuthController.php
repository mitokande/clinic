<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Validation\Rules;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(){
        return view('doctors.login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        /** @var  $model */
        $model = Doctor::query()->where('email',$request->get('email'))->firstOrFail();

        if(!Hash::check($request->get('password'),$model->password)){

            return back()->with('error','Email or Password is incorrect.');
        }
        Auth::guard('patients')->logout();
        Auth::guard('doctors')->login($model);
        session(['guard'=>'doctors']);
        return redirect()->route('doctor.dashboard');

    }
    public function register(){
        return view('doctors.register');
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
            'email' => ['required', 'string',  'max:255', 'unique:doctors'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Doctor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => Doctor::getUsername($request->first_name." ".$request->last_name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('doctors')->login($user);

        return redirect('/doctor/dashboard');
    }
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('doctors')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        session()->forget('guard');

        return redirect('/');
    }
}
