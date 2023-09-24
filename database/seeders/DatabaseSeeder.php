<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
        ]);
        
         $adminRole = Role::firstOrCreate(['name' => 'admin']);
         $manageUsers = Permission::create(['name' => 'manage-users']);
 
         $adminRole->permissions()->attach([$manageUsers->id]);
 
         $userRole = Role::firstOrCreate(['name' => 'usuario']);
         $createPost = Permission::create(['name' => 'create-post']);
 
         $userRole->permissions()->attach([$createPost->id]);
 
    }






        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

