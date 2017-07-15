<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        User::create([
            "name"=>"admin",
            "email"=>"admin@admin.com",
            "password"=>bcrypt('123456'),
            "created_at" => $now,
            "updated_at" => $now,

        ]);

        DB::table('role_user')->insert(["role_id"=>1,"user_id"=>1]);
        DB::table('role_user')->insert(["role_id"=>2,"user_id"=>1]);
        DB::table('role_user')->insert(["role_id"=>3,"user_id"=>1]);
        DB::table('role_user')->insert(["role_id"=>4,"user_id"=>1]);
        DB::table('role_user')->insert(["role_id"=>5,"user_id"=>1]);
    }
}


/*
 //
        $now = date('Y-m-d H:i:s');
        $kullanicilar= new \App\User([
           'name'=>'admin',
           'email'=>'admin@admin.com',
           'password'=> Hash::make('test'),
           'created_at' => $now,
           'updated_at' => $now,
           'rol' => 'admin',
        ]);
        $kullanicilar->save();

        $kullanicilar= new \App\User([
            'name'=>'user',
            'email'=>'user@user.com',
            'password'=> Hash::make('test'),
            'created_at' => $now,
            'updated_at' => $now,
            'rol' => 'user',
        ]);
        $kullanicilar->save();
*/