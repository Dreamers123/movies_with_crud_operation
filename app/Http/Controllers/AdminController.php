<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        User::create($request->all());
        return 'success';
        return $request->all();
    }
    public function login()
    {

        //$adminss= User::simplePaginate(10);  /*total() is not available when using simple paginate,So don't use simple paginate*/

        return  view('admin.login');

    }
}
