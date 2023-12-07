<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $created_at = Carbon::now()->format('Y-m-d H:i:s');

        $userRole = [
            ["id" => 1, "name" => "Admin", "created_at" => $created_at, "updated_at" => $created_at],
        ];

        UserRole::insert($userRole);
    }
}
