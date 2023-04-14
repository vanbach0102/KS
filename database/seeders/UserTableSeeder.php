<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();

        $admin = Admin::create([
            'admin_name' => 'BachAdmin',
            'admin_email' => 'vanbach010@gmail.com',
            'admin_phone' => '0812895548',
            'admin_password' => md5('123123123'),
        ]);
        $author = Admin::create([
            'admin_name' => 'BachAuthor',
            'admin_email' => 'vanbach0103@gmail.com',
            'admin_phone' => '0812895548',
            'admin_password' => md5('123123123'),
        ]);
        $user = Admin::create([
            'admin_name' => 'BachUser',
            'admin_email' => 'vanbach010@gmail.com',
            'admin_phone' => '0812895548',
            'admin_password' => md5('123123123'),
        ]);

        $admin->role()->attach($adminRole);
        $admin->role()->attach($authorRole);
        $admin->role()->attach($userRole);
    }
}
