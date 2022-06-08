<?php

/*namespace Database\Seeders;*/

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * データベースに対するデータ設定の実行
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'group' => 'levtech',
                'name' => '太郎',
                'type' => '2022.June',
                'name_photo' => 'milk',
        ]);
        
        DB::table('posts')->insert([
                'group' => 'nogizaka46',
                'name' => 'nanase',
                'type' => '2022.June',
                'name_photo' => 'milk',
        ]);
        
        
    }
}
