<?php

class HomeController extends BaseController {
  
  public function home()
  {
    return View::make('index');
  }
	
	public function showLogin()
	{
	    return View::make('login');
	}
	
	public function doLogin()
	{
	  
	  //validate info
	  $rules = array(
	    'username' => 'required',
	    'password' => 'required|alphaNum|min:3'
	  );
	  
	  //run validation
	  $validator = Validator::make(Input::all(), $rules);
	  
	  //if Validator fails redirect back to form
	  if($validator->fails()) {
	    return Redirect::to('login')
	    ->withErrors($validator)
	    ->withInput(Input::except('password'));
	  } else {
	    //create user data
	    $userdata = array(
	      'username' => Input::get('username'),
	      'password' => Input::get('password')
	    );
	    
	    //attempt to login
	    if(Auth::attempt($userdata)) {
	      return Redirect::to('/');
	    } else {
	      return Redirect::to('login');
	    }
	  }
	  
	}

}
