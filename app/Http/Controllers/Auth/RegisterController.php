<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CONTACT_LIST;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register(Request $request)
    {
        //return $request;
        //validation
        $this->validate($request,[
            'email'=>'required|unique:users',
            'name'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'password'=>
                [Password::min(8)->mixedCase()->letters()->numbers()->symbols()],
            'photo'=>'required|mimes:jpg,png,jpeg'
        ]);
        //store image
        if ( $request->hasFile('photo'))
        {
            $img = $request->file('photo');
            $unique_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();

            $img->move(public_path('storage/user'),$unique_name);
        }
        //store data
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'password' =>password_hash($request->password,PASSWORD_DEFAULT),
            'image' => $unique_name,
        ]);

        $notification = array(
            'message' => 'Registration is successful!',
            'alert-type' => 'success'
        );


        return redirect()->route('login')->with($notification);

    }
}
