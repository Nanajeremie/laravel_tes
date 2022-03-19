<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        // DB::insert('insert into users (name,email,password) values (?, ?,?)', ['Nana jeremie', 'nanajeremie097@gmail.com','nanajeremie']);
        // DB::update('update users set name =? where id = ?', ['Kabore',1]);
        // DB::delete('delete from users where id = ?', [1]);
        //$users =  DB::select('select * from users');
    //    return $users;

    // $user = new User();
    // $user->name = 'Nana';
    // $user->email = 'nana@gmail.com';
    // $user->password = 'BooNanahhh';
    // $user->save();
    // $users = User::all();
    // return $users;
    // User::where('id',2)->delete();

    // $data = [
    //     'name'=>'Birbahfvfvh2',
    //     'email'=>'briba@gmairvrv3l.com',
    //     'password'=>'nnanahdhdt',
    // ];

    // User::create($data);
    // $users = User::all();
    // return $users;


        return view('home');
    }
    public function post(){
        return 'Ceci est une post';
    }
    public function listPost(){
        return 'Ceci est une liste de posts';
    }
}
