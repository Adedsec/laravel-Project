<?php

use App\Book;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user) {
            //dd(factory(Book::class)->make()->toArray())->categories()->attach([1, 2, 3])->toArray()->authors()->attach([2, 3]);
            $book = $user->books()->create(factory(Book::class)->make()->toArray());
            $c1 = random_int(0, 2);
            //dd($c1);
            $book->categories()->attach([random_int(1, 10), random_int(1, 10), random_int(1, 10)]);
            $book->authors()->attach([random_int(1, 10), random_int(1, 10)]);
        });
    }
}
