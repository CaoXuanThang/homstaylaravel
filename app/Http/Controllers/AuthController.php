<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        $title = 'Login';
        return view('login',compact('title'));
    }

    public function login(AuthRequest $request){
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->route('home')->with('success', 'Đăng nhập thành công!'); // Chuyển hướng đến trang dashboard sau khi đăng nhập thành công
        }

        // Đăng nhập không thành công
        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác',
            'password' => 'Sai mật khẩu',

        ])->onlyInput('email');
    }

    public function showRegister(){
        $title = 'Register';
        return view('register',compact('title'));
    }

    public function register(AuthRequest $request){
        $register = new User();

        // Gán các giá trị từ yêu cầu vào các thuộc tính của mô hình
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = $request->password;

        // Lưu thể hiện mới của danh mục bất động sản vào cơ sở dữ liệu
        $register->save();

        // Chuyển hướng đến tuyến đường  với thông báo thành công
        return redirect()->route('login')->with('success', 'Đăng ký thành công');

    }

    public function logout()
    {
        Auth::logout();
        
        // Điều hướng người dùng đến trang khác sau khi đăng xuất (tùy chọn)
        return redirect()->route('home');
    }
}
