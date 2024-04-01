<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('secret'),
        ]);
        Order::factory()->count(20)->create();
        Content::create([
            'name' => 'home',
            'title' => 'Lets Make A Difference',
            'message' => "\"Start your journey towards a cleaner planet today! Join our plastic recycling initiative and not only contribute to a greener environment but also earn exciting rewards along the way. Together, let's turn plastic waste into valuable resources and make a lasting impact on our planet. Join us now and be a part of the change!\"",
            'cta_text' => 'Create New Order',
            'bg_img' => 'uploads/bg.png',
        ]);
    }
}
