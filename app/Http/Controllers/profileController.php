<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function fetchData()
    {
        $profile = User::all()->toArray();
        return $profile;
    }
    public function index( Request $request)
    {
        $data= array(
            'title'=>'Profile',
            'profile'=>User::find($request->session()->get('user_id'))
        );
        return view('profile.show', $data);
    }

}
