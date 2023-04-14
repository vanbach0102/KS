<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Admin::class,function (Faker $faker){
    return [
        'admin_email' => $faker->unique()->safeEmail,
        'admin_password' => 'f5bb0c8de146c67b44babbf4e6584cc0',
        'admin_name' => $faker->name,
        'admin_phone' => '0812895548',
    ];
});
$factory->afterCreating(Admin::class,  function ($admin){
    $role = Role::where('name','user')->get();
    $admin->role()->sync($role->pluck('role_id')->toArray());

});
