<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear usuarios
        $user1 = User::create(['name' => 'Usuario 1', 'email' => 'usuario1@example.com', 'password' => bcrypt('password')]);
        //...crear más usarios...

        //Asignar roles a usuarios
        $user1->roles()->attach([Role::where('name', 'admin')->first()->id]);
       //...asignar más roles a usuarios...

       // Crear usuario administrador
       $adminRole = Role::where('name', 'admin')->first();
       $userAdmin = User::create(['name' => 'Administrador', 'email' => 'admin@example.com', 'password' => bcrypt('admin')]);
       $userAdmin->roles()->attach([$adminRole->id]);

       //...crear más usuarios...
    }
}
