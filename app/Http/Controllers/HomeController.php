<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $auth = Auth::user();
        $total = new stdClass;
        $total->users = User::count();
        $total->books = Book::count();
        $total->borrows = Borrow::whereNull('end_date')->count();
        $total->returns = Borrow::whereNotNull('end_date')->count();
        $data = [
            'auth' => $auth,
            'total' => $total,
        ];
        return view('home', $data);
    }

    public function getBooks(){
        $auth = Auth::user();
        $data = [
            'auth' => $auth,
        ];
        return view('pages.books.get', $data);
    }


}
