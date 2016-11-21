<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    protected $redirectTo = '/admin/usuarios';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'apellidoPaterno' => 'required|max:255',
            'apellidoMaterno' => 'required|max:255',
            'email' => 'required|email|max:255|unique:usuarios',
            'password' => 'required|min:6|confirmed',
            'role' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $usuario = new Usuario($data);
        $usuario->password = bcrypt($data['password']);
        $usuario->save();
        return $usuario;
        /*return Usuario::create([
            'nombre' => $data['nombre'],
            'apellidoPaterno' => $data['apellidoPaterno'],
            'apellidoMaterno' => $data['apellidoMaterno'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);*/
    }
}
