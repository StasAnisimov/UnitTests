<?php


namespace App\ToTest\Database;


use Illuminate\Support\Facades\DB;

class UserManager
{
    public static function write()
    {
        DB::table('users')->insert([
            ['name' => 'John'],
            ['name' => 'Clarisa'],
            ['name' => 'Remy'],
            ['name' => 'Jacky'],
            ['name' => 'Daniel'],
        ]);
    }

    public static function delete() {
        DB::table('users')->delete();
    }
}
