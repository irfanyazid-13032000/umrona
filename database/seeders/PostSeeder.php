<?php

namespace Database\Seeders;

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
        $posts = [
            [
                'title' => 'Post 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'title' => 'Post 2',
                'content' => 'Nulla eu sagittis purus, nec feugiat mauris.'
            ],
            [
                'title' => 'Post 3',
                'content' => 'Praesent posuere ligula et elit efficitur, a facilisis dolor ullamcorper.'
            ],
            // Tambahkan data lain sesuai kebutuhan Anda
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
