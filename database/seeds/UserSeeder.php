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
        factory(App\User::class, 50)->create();
        factory(App\Author::class, 65)->create();
        factory(App\Book::class, 100)->create();

        $userCount = 50;
        for($i = 1; $i <= $userCount; $i++){
            DB::table('containers')->insert(array(
                array('name' => 'want-to-read', 'created_by' => $i),
                array('name' => 'currently-reading', 'created_by' => $i),
                array('name' => 'read', 'created_by' => $i)
            ));
        }
        
        $bookCount = 100;
        for($i = 1; $i <= $bookCount; $i++){
            DB::table('author_book')->insert([
                'book_id' => $i,
                'author_id' => rand(1, 65)
            ]);
        }

        $containerCount = 3;
        for($i = 1; $i <= $userCount; $i++){
            DB::table('book_container')->insert([
                'book_id' => $i,
                'container_id' => $i
        ]);
            for($j = 1; $j <= $containerCount; $j++){
                DB::table('book_container')->insert([
                    'book_id' => $i,
                    'user_id' => $j
            ]);
            }
        }

    }
}
