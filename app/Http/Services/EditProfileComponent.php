<?php

namespace App\Http\Services;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

interface EditProfileComponent{

    public function save_profile(User $model,Request $request);

}
