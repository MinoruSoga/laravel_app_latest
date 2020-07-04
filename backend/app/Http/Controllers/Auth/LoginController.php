<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
      return 'name';
    }
    // protected function validateLogin(Request $request) //この関数をコピペ
    protected function validateLogin(\Illuminate\Http\Request $request) // Illuminate\Http\Requestに変更
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'login_password' => 'required|string',
            // 'id' => 'required|integer' //この一行を追加
        ]);
    }
    


}
