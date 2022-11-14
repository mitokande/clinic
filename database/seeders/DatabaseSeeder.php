<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Doctor;
use App\Models\DoctorTitle;
use App\Models\MedicineField;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('medicine_fields')->insert([
            ['name'=>'Allergy and immunology'],
            ['name'=>'Anesthesiology'],
            ['name'=>'Dermatology'],
            ['name'=>'Diagnostic radiology'],
            ['name'=>'Emergency medicine'],
            ['name'=>'Family medicine'],
            ['name'=>'Internal medicine'],
            ['name'=>'Medical genetics'],
            ['name'=>'Neurology'],
            ['name'=>'Nuclear medicine'],
            ['name'=>'Obstetrics and gynecology'],
            ['name'=>'Ophthalmology'],
            ['name'=>'Pathology'],
            ['name'=>'Pediatrics'],
            ['name'=>'Physical medicine and rehabilitation'],
            ['name'=>'Preventive medicine'],
            ['name'=>'Psychiatry'],
            ['name'=>'Radiation oncology'],
            ['name'=>'Surgery'],
            ['name'=>'Urology']
        ]);
        DB::table('doctor_titles')->insert([
            ['title_name'=>'Intern'],
            ['title_name'=>'Prof. Dr.'],
            ['title_name'=>'Doç. Dr.'],
            ['title_name'=>'Dr.']
        ]);

        DB::table('doctors')->insert([
            'username' => 'omer-toprak',
            'first_name' => 'Ömer',
            'last_name' => 'Toprak',
            'email' => 'benmithat18@gmail.com',
            'telephone' => '5397245035',
            'password' => Hash::make('123123123'),
            'medicine_field_id' => MedicineField::find(1)->id,
            'doctor_title_id'=> DoctorTitle::find(3)->id,
            'profile_picture' => 'https://img.freepik.com/premium-vector/doctor-icon-avatar-white_136162-58.jpg'
        ]);
        DB::table('patients')->insert([
           'first_name' => 'Mithat Can',
           'last_name' => 'Turan',
           'email' => 'benmithat18@gmail.com',
           'telephone' => '5397245035',
           'password' => Hash::make('123123123')
        ]);

        $this->call([
            UserReviewsSeeder::class,
        ]);
    }
}
