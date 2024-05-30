<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class APIBorrowsController extends Controller
{
    public function get(){
        $borrows = DB::table('borrows')->orderBy('start_date')->get();
        foreach ($borrows as $key => $b) {
            $borrows[$key]->user = DB::table('users')->select('name', 'id')->where('id', $b->user_id)->first();
            $borrows[$key]->book = DB::table('books')->select('title', 'id')->where('id', $b->book_id)->first();
        }
        $data = [
            'status' => true,
            'message' => "Ok",
            'data' => [
                'total' => sizeof($borrows),
                'borrows' => $borrows
            ]
        ];
        return json_encode($data);
    }


    public function post(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'exists:users,id'],
            'book_id' => ['required', 'exists:books,id'],
        ]);


        if($validator->fails()){
            $data = [
                'status' => false,
                'message' => "Format data tidak benar",
            ];
            return json_encode($data);
        }

        $user = DB::table('users')->where('id', $request->user_id)->first();
        if(! $user){
            $data = [
                'status' => false,
                'message' => "Pengguna belum tersedia",
            ];
            return json_encode($data);
        }


        $book = DB::table('books')->where('id', $request->book_id)->first();
        if(! $book){
            $data = [
                'status' => false,
                'message' => "Buku ini belum tersedia",
            ];
            return json_encode($data);
        }


        $newBorrow = new Borrow();
        $newBorrow->user_id = $request->user_id;
        $newBorrow->book_id = $request->book_id;
        $newBorrow->start_date = Carbon::now();
        $newBorrow->grace_date = Carbon::now()->addDays(7);
        $newBorrow->save();

        $data = [
            'status' => true,
            'message' => "Berhasil menambahkan data",
            'data' => $newBorrow
        ];
        return response()->json($data,201);

    }


    public function put(Request $request){

        $validator = Validator::make($request->all(), [
            'borrow_id' => ['required', 'exists:borrows,id'],
        ]);


        if($validator->fails()){
            $data = [
                'status' => false,
                'message' => "Format data tidak benar",
            ];
            return response()->json($data, 400);
        }

        $borrow = DB::table('borrows')->where('id', $request->borrow_id)->first();
        if(!$borrow){
            $data = [
                'status' => false,
                'message' => "Data peminjaman tidak tersedia",
            ];
            return response()->json($data, 404);
        }


        $newBorrow = Borrow::where('id', $request->borrow_id)->first();
        $newBorrow->end_date = Carbon::now();
        $newBorrow->save();

        $data = [
            'status' => true,
            'message' => "Update successfully",
            'data' => $newBorrow
        ];
        return response()->json($data, 201);
    }

    public function delete(Request $request){

        $validator = Validator::make($request->all(), [
            'borrow_id' => ['required', 'exists:borrows,id'],
        ]);


        if($validator->fails()){
            $data = [
                'status' => false,
                'message' => "Format data tidak benar",
            ];
            return response()->json($data, 400);
        }

        $borrow = DB::table('borrows')->where('id', $request->borrow_id)->first();
        if(!$borrow){
            $data = [
                'status' => false,
                'message' => "Data peminjaman tidak tersedia",
            ];
            return response()->json($data, 404);
        }


        $newBorrow = Borrow::where('id', $request->borrow_id)->first();
        $newBorrow->delete();

        $data = [
            'status' => true,
            'message' => "Deleted successfully",
        ];
        return response()->json($data, 200);
    }

}
