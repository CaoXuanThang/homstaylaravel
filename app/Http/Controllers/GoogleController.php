<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        
        $user = Socialite::driver('google')->user();
    
    // Kiểm tra xem người dùng có tồn tại trong hệ thống không
    $existingUser = User::where('email', $user->email)->first();
    
    if ($existingUser) {
        // Đăng nhập người dùng
        auth()->login($existingUser, true);
    } else {
        // Tạo người dùng mới
        $newUser = new User([
            'name' => $user->name,
            'email' => $user->email,
            'password' => bcrypt('randompassword') // Hoặc có thể tạo mật khẩu ngẫu nhiên
        ]);
        $newUser->save();
        auth()->login($newUser, true);
    }
    
    return redirect()->route('home'); // Điều hướng sau khi đăng nhập
    }
    
}
