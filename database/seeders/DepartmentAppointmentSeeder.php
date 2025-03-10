<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DepartmentAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert departments
        DB::table('departments')->insert([
            ['id' => 1, 'name' => 'eyes', 'description' => 'eye treatment and treatment of any issues related ...', 'image' => 'https://southbayeyes.com/wp-content/uploads/2017/01/47sec_Eye.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'ears', 'description' => 'ear treatment and treatment of any issues related ...', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRlQ2w9oOwHEOUmarMSfi4oz1HAwFCty6uGg&s', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'psychiatry', 'description' => 'psychiatry pro consultation', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqdV8p3yP0xLWTnYGEdvalXzwJFE82syUq0g&s', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'name' => 'Bone', 'description' => 'Bone surgery', 'image' => 'https://oaidocs.com/wp-content/uploads/2019/02/2.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'name' => 'muscle pain', 'description' => 'muscle pain', 'image' => 'https://firstaidcoursesdarwin.com.au/wp-content/uploads/2022/12/b2.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'name' => 'Knee', 'description' => 'knee pain', 'image' => 'https://www.medcare.ae/fileadmin//user_upload/knee_big.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Insert appointments
        DB::table('appointments')->insert([
            ['department_name' => 'eyes', 'department_id' => 1, 'appointment_date' => '2022-05-08 12:00:00', 'taken' => 0],
            ['department_name' => 'eyes', 'department_id' => 1, 'appointment_date' => '2022-05-08 14:00:00', 'taken' => 0],
            ['department_name' => 'eyes', 'department_id' => 1, 'appointment_date' => '2022-05-08 15:00:00', 'taken' => 0],

            ['department_name' => 'ears', 'department_id' => 2, 'appointment_date' => '2022-05-08 12:00:00', 'taken' => 0],
            ['department_name' => 'ears', 'department_id' => 2, 'appointment_date' => '2022-05-08 14:00:00', 'taken' => 0],
            ['department_name' => 'ears', 'department_id' => 2, 'appointment_date' => '2022-05-08 15:00:00', 'taken' => 0],

            ['department_name' => 'psychiatry', 'department_id' => 3, 'appointment_date' => '2022-05-08 12:00:00', 'taken' => 0],
            ['department_name' => 'psychiatry', 'department_id' => 3, 'appointment_date' => '2022-05-08 14:00:00', 'taken' => 0],
            ['department_name' => 'psychiatry', 'department_id' => 3, 'appointment_date' => '2022-05-08 15:00:00', 'taken' => 0],
        ]);
    }
}
