<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class APIBooksController extends Controller
{
    public function get(){
        $books = DB::table('books')->orderBy('title')->get();
        $data = [
            'status' => true,
            'message' => "Ok",
            'data' => [
                'total' => sizeof($books),
                'books' => $books
            ]
        ];
        return json_encode($data);
    }

    public function post(Request $request){

        $validator = Validator::make($request->all(), [
            'isbn' => ['required'],
            'title' => ['required'],
            'type' => ['required'],
            'author' => ['required'],
            'publisher' => ['required'],
        ]);


        if($validator->fails()){
            $data = [
                'status' => false,
                'message' => "Format data tidak benar",
            ];
            return json_encode($data);
        }


        $book = DB::table('books')->where('isbn', $request->isbn)->first();
        if($book){
            $data = [
                'status' => false,
                'message' => "Buku dengan ISBN ini telah tersedia",
            ];
            return json_encode($data);
        }


        DB::table('books')->insert([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'type' => $request->type,
            'author' => $request->author,
            'publisher' => $request->publisher
            
        ]);

        $data = [
            'status' => true,
            'message' => "Berhasil menambahkan data"
        ];
        return response()->json($data,201);

    }

    public function put(Request $request){

        $validator = Validator::make($request->all(), [
            'book_id' => ['required'],
            'isbn' => ['required'],
            'title' => ['required'],
            'type' => ['required'],
            'author' => ['required'],
            'publisher' => ['required'],
        ]);


        if($validator->fails()){
            $data = [
                'status' => false,
                'message' => "Format data tidak benar",
            ];
            return response()->json($data, 400);
        }

        $book = DB::table('books')->where('id', $request->book_id)->first();
        if(!$book){
            $data = [
                'status' => false,
                'message' => "Data buku tidak tersedia",
            ];
            return response()->json($data, 404);
        }

        if($request->isbn != $book->isbn){
            $book_isbn = DB::table('books')->where('isbn', $request->isbn)->first();
            if($book_isbn){
                $data = [
                    'status' => false,
                    'message' => "ISBN Buku telah tersedia",
                ];
                return response()->json($data, 404);
            }
        }

        DB::table('books')->where('id', $request->book_id)->update([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'type' => $request->type,
            'author' => $request->author,
            'publisher' => $request->publisher,
            
        ]);


        $data = [
            'status' => true,
            'message' => "Update successfully"
        ];
        return response()->json($data, 201);
    }



    public function delete(Request $request){

        $validator = Validator::make($request->all(), [
            'book_id' => ['required'],
        ]);

                if($validator->fails()){
            $data = [
                'status' => false,
                'message' => "Format data tidak benar",
            ];
            return json_encode($data);
        }

        $book = DB::table('books')->where('id', $request->book_id)->first();
        if(!$book){
            $data = [
                'status' => false,
                'message' => "Data buku tidak tersedia",
            ];
            return json_encode($data);
        }

        DB::table('books')->where('id', $request->book_id)->delete();
        $data = [
            'status' => true,
            'message' => "Berhasil menghapus data"
        ];
        return json_encode($data);
    }


}
