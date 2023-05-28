<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $permission_lists = [
            'tambah data',
            'edit data',
            'hapus data'
        ];
        foreach ($permission_lists as $key ) {
            Permission::create(['name' => $key]);
        }

        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo([
            'tambah data',
            'edit data',
            'hapus data'
        ]);
        
        $role2 = Role::create(['name' => 'supir']);
        $role2->givePermissionTo([
            'tambah data',
            'edit data'
        ]);

        // create owner
        $user = \App\Models\User::factory()->create([
            'name'  => 'Admin Program',
            'email' => 'admin@gmail.com',
        ]);
        $user->assignRole($role1);

        // create admin
        $user = \App\Models\User::factory()->create([
            'name'  => 'Supir Program',
            'email' => 'supir@gmail.com',
        ]);
        $user->assignRole($role2);

    }
}
