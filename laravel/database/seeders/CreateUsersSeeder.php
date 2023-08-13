<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin lochi',
               'email'=>'adminlochi@gmail.com',
               'user_type'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Student lochi',
               'email'=>'studentlochi@gmail.com',
               'user_type'=> 'student',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Teacher lochi',
               'email'=>'teacherlochi@gmail.com',
               'user_type'=>'teacher',
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}