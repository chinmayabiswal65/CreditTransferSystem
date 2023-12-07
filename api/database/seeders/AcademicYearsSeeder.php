<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AcademicYearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $created_at = Carbon::now()->format('Y-m-d H:i:s');

        $academicYears = [];

        $academicYears[] = ["name" => '2018-2019', "start_year" => '2018', "end_year" => '2019', "status" => 1, "created_at" => $created_at, "updated_at" => $created_at];
        $academicYears[] = ["name" => '2019-2020', "start_year" => '2019', "end_year" => '2020', "status" => 1, "created_at" => $created_at, "updated_at" => $created_at];
        $academicYears[] = ["name" => '2020-2021', "start_year" => '2020', "end_year" => '2021', "status" => 1, "created_at" => $created_at, "updated_at" => $created_at];
        $academicYears[] = ["name" => '2021-2022', "start_year" => '2021', "end_year" => '2022', "status" => 1, "created_at" => $created_at, "updated_at" => $created_at];
        $academicYears[] = ["name" => '2022-2023', "start_year" => '2022', "end_year" => '2023', "status" => 1, "created_at" => $created_at, "updated_at" => $created_at];
        $academicYears[] = ["name" => '2023-2024', "start_year" => '2023', "end_year" => '2024', "status" => 1, "created_at" => $created_at, "updated_at" => $created_at];
        $academicYears[] = ["name" => '2024-2025', "start_year" => '2024', "end_year" => '2025', "status" => 0, "created_at" => $created_at, "updated_at" => $created_at];
        $academicYears[] = ["name" => '2025-2026', "start_year" => '2025', "end_year" => '2026', "status" => 0, "created_at" => $created_at, "updated_at" => $created_at];

        AcademicYear::insert($academicYears);
    }
}
