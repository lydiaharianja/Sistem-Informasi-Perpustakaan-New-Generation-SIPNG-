<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Borrow;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role_id' => '99',
            'email_verified_at' => now(),
            'password' => Hash::make('admin')
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role_id' => '90',
            'email_verified_at' => now(),
            'password' => Hash::make('user')
        ]);

        Book::create([
            'isbn' => '1111123',
            'title' => 'Matahari',
            'type' => 'Novel',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia'
                ]);

        Book::create([
            'isbn' => '1111134',
            'title' => 'Kalkulus Edisi Kesembilan',
            'type' => 'matematika',
            'author' => 'Purcell',
            'publisher' => 'Erlangga'
                ]);

        Book::create([
            'isbn' => '1111124',
            'title' => 'Hujan',
            'type' => 'Novel',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia'
                ]);

        Book::create([
            'isbn' => '1111135',
            'title' => 'Si Kancil yang Kikir',
            'type' => 'Dongeng Anak',
            'author' => 'Auxtern',
            'publisher' => 'Erlangga'
                ]);

    }
}
