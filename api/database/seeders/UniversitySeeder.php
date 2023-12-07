<?php

namespace Database\Seeders;

use App\Models\University;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $created_at = Carbon::now()->format('Y-m-d H:i:s');

        $university = [
            ["id" => 1, "name" => "Fakir Mohan University", "state" => "Odisha", "landmark" => "Remuna Golei", "pincode" => "756121", "created_at" => $created_at, "updated_at" => $created_at],
        ];

        University::insert($university);
    }
}
