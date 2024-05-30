<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;
use Carbon\Carbon;

class BorrowController extends Controller
{
    public function index(){
        $auth = Auth::user();
        $borrows = Borrow::all();

        foreach($borrows as $k => $b){
            $borrows[$k]->user = User::where('id', $b->user_id)->first();
            $borrows[$k]->book = Book::where('id', $b->book_id)->first();
        }

        $data = [
            'auth' => $auth,
            'borrows'=>$borrows,
        ];
        return view('pages.borrows.index', $data);
    }

    public function create()
    {
        $auth = Auth::user();
        $users = User::all();
        $books = Book::all();
        $data = [
            'auth' => $auth,
            'users' => $users,
            'books' => $books,
        ];
        return view('pages.borrows.create', $data);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'user_id' => ['required', 'exists:users,id'],
            'book_id' => ['required', 'exists:books,id'],
        ]);


        $newBorrow = new Borrow();
        $newBorrow->user_id = $request->user_id;
        $newBorrow->book_id = $request->book_id;
        $newBorrow->start_date = Carbon::now();
        $newBorrow->grace_date = Carbon::now()->addDays(7);
        $newBorrow->save();

        return redirect()->route('borrows');
    }

    public function edit($borrow_id)//borrow $borrow)
    {
        $auth = Auth::user();
        $borrow = Borrow::where('id', $borrow_id)->first();
        $borrow->user = User::where('id', $borrow->user_id)->first();
        $borrow->book = Book::where('id', $borrow->book_id)->first();

        $data = [
            'auth' => $auth,
            'borrow' => $borrow,
        ];
        return view('pages.borrows.edit', $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'borrow_id' => ['required', 'exists:borrows,id'],
        ]);

        $newBorrow = Borrow::where('id', $request->borrow_id)->first();
        $newBorrow->end_date = Carbon::now();
        $newBorrow->save();

        return redirect()->route('borrows');
    }

    public function destroy($borrow_id)
    {
        $newBorrow = Borrow::where('id', $borrow_id)->first();
        $newBorrow->delete();
        return redirect()->route('borrows');
    }

}
