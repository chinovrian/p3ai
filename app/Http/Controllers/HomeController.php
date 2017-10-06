<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use DB;
use Auth;
use App\Dosen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'nip'=>'required',
            'username'=>'required',
            'password'=>'required',

        ]);

        $user=new User();
        $user->name_user=$request->input('name');
        $user->email=$request->input('email');
        $user->nip=$request->input('nip');
        $user->username=$request->input('username');
        $user->password=bcrypt($request->input('password'));
    
       
        if($user->save())
        {
            $user->attachRole($request->input('roles'));

            if($request->input('roles')==4)
               {
                $dosen=new Dosen();
                $id=DB::table('users')->max('id');
                $dosen->user_id =$id;
                $dosen->email=$user->email;
                $dosen->save();
               }
            
        }

         return view('auth.login')->with('message','Register sukses, silahkan Login');
         
    }

}
