<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Post HTML',
                'category' => 'html',
                'level' => 'mudah',
                'tool' => 'vscode, html, nodejs',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post HTML 2',
                'category' => 'html',
                'level' => 'mudah',
                'tool' => 'vscode, html, nodejs, css, react',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post HTML 3',
                'category' => 'html',
                'level' => 'menengah',
                'tool' => 'vscode, html, nodejs',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post CSS 1',
                'category' => 'css',
                'level' => 'mudah',
                'tool' => 'vscode, html, nodejs',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post CSS 2',
                'category' => 'css',
                'level' => 'menengah',
                'tool' => 'vscode, html, nodejs',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post PHP',
                'category' => 'php',
                'level' => 'mudah',
                'tool' => 'vscode, php, nodejs',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post JS',
                'category' => 'js',
                'level' => 'mudah',
                'tool' => 'vscode, html, nodejs',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post SQL 1',
                'category' => 'sql',
                'level' => 'mudah',
                'tool' => 'vscode, html, nodejs, css',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
            [
                'title' => 'Post SQL 2',
                'category' => 'sql',
                'level' => 'menengah',
                'tool' => 'vscode, html, react',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
                'id_yt' => 'kcl1OpkDGHU',
            ],
        ];
        foreach ($data as $value){
            $rep = strtolower($value['title']);
            Post::insert([
                'id_user' => 1,
                'title' => $value['title'],
                'slug' => str_replace(' ','-',$rep),
                'category' => $value['category'],
                'level' => $value['level'],
                'tool' => $value['tool'],
                'about' => $value['about'],
                'id_yt' => $value['id_yt'],
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ]);
        }
    }
}
