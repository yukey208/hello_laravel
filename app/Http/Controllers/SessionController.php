<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionController extends Controller
{
    public function create(){
    	return view ('session.create');
    }
    // 验证登陆框内容是否符合规定
    public function stroe(Request $request){
    	$credentials = $this->validate($request,[
    		'email' => 'required|email|max:255',
    		'password'=>'required'
    	]);
    	// 验证登陆项
    	if (Auth::attempt($credentials)) {
    		session()->flash('success','欢迎回来！');
    		return redirect()->route('users.show',[Auth::user()]);
    	}else{
    		session()->flash('danger','很抱歉，用户名或密码不正确，请重新填写！');
    		return redirect()->back()->withInput();
    	}
    	return;
    }

}
