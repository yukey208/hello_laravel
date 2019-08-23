<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    //
    public function singup(){
    	return view('users.singup');
    }
    public function show(User $user){
    	return view('users.show',compact('user'));
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required|max:50',
    		'email' => 'required|email|unique:users|max:255',
    		'password' => 'required|confirmed|min:6'
    	]);
    	$user = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),

    	]);
        // 设置注册后自动登录
        Auth::login($user);
        
    	session()->flash('success','注册成功，欢迎你入驻本站微博。');
    	return redirect()->route('users.show',[$user]);
    }
}
