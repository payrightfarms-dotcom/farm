<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('admin:reset {email=admin@payrightfarms.com} {password=Diode4me123@}', function ($email, $password) {
    Role::firstOrCreate(['name' => 'admin']);

    $user = User::updateOrCreate(
        ['email' => $email],
        [
            'name' => 'Admin',
            'password' => Hash::make($password),
            'is_active' => true,
            'role' => 'admin',
            'approved_by' => 1,
        ]
    );

    $user->syncRoles('admin');

    $this->info("Admin user [{$email}] successfully updated with password [{$password}].");
})->purpose('Create or update admin user credentials');
