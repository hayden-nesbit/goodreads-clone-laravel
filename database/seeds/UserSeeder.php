<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Book::class, 100)->create();
        factory(App\User::class, 50)->create();
        factory(App\Author::class, 65)->create();

        $bookCount = 100;
        for($i = 1; $i <= $bookCount; $i++){
            DB::table('author_book')->insert([
                'book_id' => $i,
                'author_id' => rand(1, 65)
            ]);
        }

        $shelfCount = 5;
        for($i = 1; $i <= $shelfCount; $i++){
            DB::table('shelves')->insert([
                'book_id' => rand(1, 100),
                'user_id' => rand(1, 50)
            ]);
        }
    }
}
