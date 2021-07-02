<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //app()[PermissionRegistrar::class]->forgetCachedPermissions();
        //clerk's permission
        Permission::create(['name' => 'crud_case']);

        
        //central permission
        Permission::create(['name' => 'crud_station']);
        Permission::create(['name' => 'crud_department']);
        permission::create(['name'=> 'crud_officer']);

        // Branch_Admin permission
        Permission::create(['name' => 'view_department']);
        Permission::create(['name'=> 'view_officer']);
        

        $role_one = Role::create(['name'=>'central']);
        $role_two = Role::create(['name'=>'branch_admin']);
        $role_three = Role::create(['name'=>'clerk']);

        $role_one->givePermissionTo('crud_station');
        $role_one->givePermissionTo('crud_department');
        $role_one->givePermissionTo('crud_officer');

        $role_two->givePermissionTo('view_department');
        $role_two->givePermissionTo('view_officer');

        $role_three->givePermissionTo('crud_case');


    }
}
