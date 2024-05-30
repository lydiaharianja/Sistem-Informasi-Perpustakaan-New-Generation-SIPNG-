<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReturnController extends Controller
{
    public function index(){
        $auth = Auth::user();
        $data = [
            'auth' => $auth,
        ];
        return view('pages.Return.index', $data);
    }
}
