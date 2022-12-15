<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ardhi Harry',
            'username' => 'ardhiharry',
            'email' => 'ardhiharry@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('ardhi1998')
        ]);
        
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Fanky Nurila',
        //     'email' => 'fankynurila@gmail.com',
        //     'password' => bcrypt('fanky')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();

        // Post::create([
            //     'category_id' => 1,
            //     'user_id' => 1,
            //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum. Illo sint dolorum enim non similique nihil esse natus velit dolorem asperiores suscipit nisi deserunt voluptatum nostrum dolor, ex eligendi sed quod, quidem, nesciunt vitae deleniti error! Iure praesentium reprehenderit impedit id dicta itaque repellat quisquam ipsam esse repellendus, adipisci cupiditate a, non at. Quibusdam quidem, ea minima debitis distinctio, blanditiis, reiciendis sequi explicabo vel odit dolorum quasi. Cum nostrum mollitia, porro, repudiandae quos labore optio vero, provident odio dicta alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Id aut totam aspernatur, quia, nihil vitae minus odio saepe earum dolore, optio ea amet laboriosam harum.'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum. Illo sint dolorum enim non similique nihil esse natus velit dolorem asperiores suscipit nisi deserunt voluptatum nostrum dolor, ex eligendi sed quod, quidem, nesciunt vitae deleniti error! Iure praesentium reprehenderit impedit id dicta itaque repellat quisquam ipsam esse repellendus, adipisci cupiditate a, non at. Quibusdam quidem, ea minima debitis distinctio, blanditiis, reiciendis sequi explicabo vel odit dolorum quasi. Cum nostrum mollitia, porro, repudiandae quos labore optio vero, provident odio dicta alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Id aut totam aspernatur, quia, nihil vitae minus odio saepe earum dolore, optio ea amet laboriosam harum.'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum. Illo sint dolorum enim non similique nihil esse natus velit dolorem asperiores suscipit nisi deserunt voluptatum nostrum dolor, ex eligendi sed quod, quidem, nesciunt vitae deleniti error! Iure praesentium reprehenderit impedit id dicta itaque repellat quisquam ipsam esse repellendus, adipisci cupiditate a, non at. Quibusdam quidem, ea minima debitis distinctio, blanditiis, reiciendis sequi explicabo vel odit dolorum quasi. Cum nostrum mollitia, porro, repudiandae quos labore optio vero, provident odio dicta alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Id aut totam aspernatur, quia, nihil vitae minus odio saepe earum dolore, optio ea amet laboriosam harum.'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Fourth Post',
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nisi harum modi explicabo. Saepe, quam vero excepturi, odit placeat cupiditate velit harum enim illo animi exercitationem veritatis odio cum. Illo sint dolorum enim non similique nihil esse natus velit dolorem asperiores suscipit nisi deserunt voluptatum nostrum dolor, ex eligendi sed quod, quidem, nesciunt vitae deleniti error! Iure praesentium reprehenderit impedit id dicta itaque repellat quisquam ipsam esse repellendus, adipisci cupiditate a, non at. Quibusdam quidem, ea minima debitis distinctio, blanditiis, reiciendis sequi explicabo vel odit dolorum quasi. Cum nostrum mollitia, porro, repudiandae quos labore optio vero, provident odio dicta alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Id aut totam aspernatur, quia, nihil vitae minus odio saepe earum dolore, optio ea amet laboriosam harum.'
        // ]);
        
    }
}