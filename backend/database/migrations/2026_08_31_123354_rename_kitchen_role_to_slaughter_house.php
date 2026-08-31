<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if the roles table exists before trying to run DB queries
        if (DB::connection()->getSchemaBuilder()->hasTable('roles')) {
            DB::table('roles')->where('name', 'kitchen')->update(['name' => 'slaughter_house']);
        }
        
        if (DB::connection()->getSchemaBuilder()->hasTable('users')) {
            DB::table('users')->where('role', 'kitchen')->update(['role' => 'slaughter_house']);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (DB::connection()->getSchemaBuilder()->hasTable('roles')) {
            DB::table('roles')->where('name', 'slaughter_house')->update(['name' => 'kitchen']);
        }

        if (DB::connection()->getSchemaBuilder()->hasTable('users')) {
            DB::table('users')->where('role', 'slaughter_house')->update(['role' => 'kitchen']);
        }
    }
};
