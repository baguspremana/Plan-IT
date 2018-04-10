<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\pemiliklahan;
//use Auth;



class PemiliklahanController extends Controller
{
    // url redirect jika sudah login
    
    protected $redirectTo = 'lahan.index';
    
    // konstruktor
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
    // fungsi ke login form
    public function ShowRegisterForm(){

        return view('pemiliklahan.registerview');
    }

    // register pemiliklahan
    public function register(Request $request){
        //validasi data
        $this->validator($request->all())->validate();

        //membuat pemilik penyewa
        $pemilik = $this->create($request->all());

        // autentukasi penyewa
        $this->guard()->login($pemilik);

        //redirect penyewa

        return redirect($this->redirectpath);



    }

    // validasi input pemilik
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pemiliks',
            'ktp' => 'required|numeric',
            'no_telp' => 'required|string|max:18',
            'username' => 'required|string|max:30|unique:pemiliks',
            'password' => 'required|string|min:6|confirmed',
 
        ]);
    }

    //masuk ke db
    protected function create(array $data)
    {
        return Pemilik::create([
            'nama_depan' => $data['nama_depan'],
            'nama_belakang' => $data['nama_belakang'],
            'email' => $data['email'],
            'ktp' => $data['ktp'],
            'no_telp' => $data ['no_telp'],
            'username' => $data ['username'],
            'password' => bcrypt($data['password']),
        ]);
    }


    // check apakah sesuai dengan role



    //login pemilik
    public function showloginpemilik(){

        // jika pemilik lahan sudah login
        if ($this->guard()->check()) {
            return redirect()->route('lahan.index');
        }
        return view('pemiliklahan.login');
    }

    // validasi input login
    public function attemptlogin (Request $request){
        $this->validate($request, [
            'email'=> 'required|string',
            'password' => 'required|string',
        ]);
        // login system
        if($this->guard()->attempt(['email' =>$request->email, 'password' =>$request->password], $request->filled('remember'))) {
            $pemilik = $this->guard()->user()->id;
            return redirect()->route('lahan.index');
        }
        return $this->sendFailedLoginResponse($request);
    }

    // fungsi exception jika login gagal
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    // logout pada pemilik
    public function logout(Request $request){
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    protected function guard(){
        return Auth::guard('web_pemiliklahans');
    }
}
