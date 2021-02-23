<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Siswa',
                'telp' => '213123',
                'username' => 'siswa',
                'email' => 'siswa@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('qweqwe'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

        $user = User::create([
            'name' => 'Admin',
            'telp' => '213123',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => '1',
            'password' => bcrypt('qweqwe'),
        ]);

        Role::create(['name' => 'Siswa']);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
