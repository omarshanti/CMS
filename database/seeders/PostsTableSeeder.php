<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user1 = User::create([
            'name' => 'Omar Yousef',
            'email' => 'omar@yousef.com',
            'role' => 'USR',
            'password' => Hash::make('123123'),
        ]);
      $user2 = User::create([
            'name' => 'Ahmad Hammad',
            'email' => 'ahmad@hammad.com',
            'role' => 'USR',
            'password' => Hash::make('123123'),
        ]);
        $cat1 = Category::create([
            'name' => 'News'
        ]);
        $post1 = $user1->posts()->create([
           'title' => 'Top 5 brilliant content marketing strategies',
           'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from',
           'category_id' => $cat1->id,
           'photo' => '/posts/1.jpg'
        ]);

        $cat2 = Category::create([
            'name' => 'Marketing'
        ]);
        $post2 = $user1->posts()->create([
           'title' => 'We relocated our office to a new designed garage',
           'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from',
           'category_id' => $cat2->id,
           'photo' => '/posts/2.jpg'
        ]);

        $cat3 = Category::create([
            'name' => 'Design'
        ]);
        $post3 = $user2->posts()->create([
           'title' => 'Best practices for minimalist design with example',
           'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from',
           'category_id' => $cat3->id,
           'photo' => '/posts/3.jpg'
        ]);

        $cat4 = Category::create([
            'name' => 'Product'
        ]);
        $post4 = $user2->posts()->create([
           'title' => 'Top 5 brilliant content marketing strategies',
           'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from',
           'category_id' => $cat4->id,
           'photo' => '/posts/4.jpg'
        ]);

        $cat5 = Category::create([
            'name' => 'Partnership'
        ]);
        $post5 = $user1->posts()->create([
           'title' => 'This is why its time to ditch dress codes at work',
           'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from',
           'category_id' => $cat5->id,
           'photo' => '/posts/5.jpg'
        ]);

        $cat6 = Category::create([
            'name' => 'Offers'
        ]);
        $post6 = $user2->posts()->create([
           'title' => 'Best practices for minimalist design with example',
           'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from',
           'category_id' => $cat6->id,
           'photo' => '/posts/6.jpg'
        ]);

        $tag1 = Tag::create([
            'tag' => 'Record'
        ]);
        $tag2 = Tag::create([
            'tag' => 'Progress'
        ]);
        $tag3 = Tag::create([
            'tag' => 'Customers'
        ]);

        $post1->tags()->attach([$tag1->id,$tag2->id]);
        $post2->tags()->attach([$tag2->id,$tag3->id]);
        $post3->tags()->attach([$tag1->id,$tag3->id]);
    }
}
