<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;//seederクラスを引き継いでいる
use App\Models\Blog;


class BlogsTableSeeder extends Seeder//seederから継承してBlogsTableSeederを作る
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()//データベースに追加する処理をこの中に書く
    {
        \App\Models\Blog::factory(15)->create();
    }
}
