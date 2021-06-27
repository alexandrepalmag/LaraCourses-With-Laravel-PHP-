<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'name' => "Alexandre",
            'email' => "admin@gmail.com",
            'password' => bcrypt("123456")
        ];
        if (User::where('email', '=', $datas['email'])->count()) {

            $user = User::where('email', '=', $datas['email'])->first();
            $user->update($datas);

            echo "User changed";

        } else {
            User::create($datas);

            echo "User created";
        }
    }
}
