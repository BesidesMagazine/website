<?php

namespace App\Http\Controllers;

use App\Editor;
use App\Http\Requests\AdminAuthenticationRequest;
use App\Http\Requests\AdminCreateEditorRequest;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{

	public function __construct(){
        $this->middleware('auth', ['except' => [
            'login',
            'authenticate',
        ]]);
    }

	public function index(){
    	return view('admin.index');
	}

	public function login(){
		if(Auth::check())
			return redirect('index');
        else
        	return view('admin.login');
    }

    public function logout(){
    	Auth::logout();
        return redirect('login');
    }

    public function register(){
    	return view('admin.register');
    }

    public function authenticate(AdminAuthenticationRequest $request){
    	if(Auth::attempt(['email'=>$request->email, 'password' => $request->password])){
        	return redirect()->intended('article');
        } else{
        	return redirect()->back();
        }
    }

    public function createEditor(AdminCreateEditorRequest $request){

        $editor = new Editor();
        $editor->email    = $request->email;
        $editor->name     = $request->name;
        $editor->password = bcrypt($request->password);
        $editor->save();
        Auth::login($editor);
        return redirect()->route('admin');

    }



}
