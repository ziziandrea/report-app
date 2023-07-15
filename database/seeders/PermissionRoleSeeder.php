<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManagementAccess\Role;
use App\Models\ManagementAccess\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $permissions = Permission::all();
        $admin_permissions = $permissions->filter(function ($permission) {
            return substr($permission->name, 0, 19) != 'laporan_dosen_table' && substr($permission->name, 0, 19) != 'laporan_kajur_table' && substr($permission->name, 0, 19) != 'laporan_wadir_table';
        });
        Role::findOrFail(1)->permission()->sync($admin_permissions);
        
        // Wadir
        $wadir_permissions = $permissions->filter(function ($permission) {
            return substr($permission->name, 0, 11) != 'management_' && substr($permission->name, 0, 12) != 'master_data_' && substr($permission->name, 0, 6) != 'dosen_' && substr($permission->name, 0, 10) != 'mahasiswa_' && substr($permission->name, 0, 14) != 'laporan_create' && substr($permission->name, 0, 13) != 'laporan_table' && substr($permission->name, 0, 19) != 'laporan_kajur_table' && substr($permission->name, 0, 19) != 'laporan_dosen_table' && substr($permission->name, 0, 14) != 'dashboard_user' && substr($permission->name, 0, 15) != 'dashboard_dosen' && substr($permission->name, 0, 19) != 'dashboard_mahasiswa';
        });
        Role::findOrFail(2)->permission()->sync($wadir_permissions);

        // Kajur
        $kajur_permissions = $permissions->filter(function ($permission) {
            return substr($permission->name, 0, 11) != 'management_' && substr($permission->name, 0, 12) != 'master_data_' && substr($permission->name, 0, 6) != 'dosen_' && substr($permission->name, 0, 10) != 'mahasiswa_' && substr($permission->name, 0, 14) != 'laporan_create' && substr($permission->name, 0, 13) != 'laporan_table' && substr($permission->name, 0, 19) != 'laporan_wadir_table' && substr($permission->name, 0, 19) != 'laporan_dosen_table' && substr($permission->name, 0, 14) != 'dashboard_user' && substr($permission->name, 0, 15) != 'dashboard_dosen' && substr($permission->name, 0, 19) != 'dashboard_mahasiswa';
        });
        Role::findOrFail(3)->permission()->sync($kajur_permissions);
        Role::findOrFail(4)->permission()->sync($kajur_permissions);

        // Dosen
        $dosen_permissions = $permissions->filter(function ($permission) {
            return substr($permission->name, 0, 11) != 'management_' && substr($permission->name, 0, 12) != 'master_data_' && substr($permission->name, 0, 6) != 'dosen_' && substr($permission->name, 0, 10) != 'mahasiswa_' && substr($permission->name, 0, 13) != 'laporan_table' && substr($permission->name, 0, 19) != 'laporan_kajur_table' && substr($permission->name, 0, 19) != 'laporan_wadir_table' && substr($permission->name, 0, 14) != 'dashboard_user' && substr($permission->name, 0, 15) != 'dashboard_dosen' && substr($permission->name, 0, 19) != 'dashboard_mahasiswa';
        });
        Role::findOrFail(5)->permission()->sync($dosen_permissions);
    }
}
