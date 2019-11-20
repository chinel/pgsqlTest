<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(

                array(
                    'id' => 1,
                    'name' => "mary ann",
                    'comments' => "Do you mean this, i am probably amazed,"
                ),
                array(
                    'id' => 2,
                    'name' => "john paul",
                    'comments' => "ooh i am sorry, cool that's nice, that's not fair,"
                )
            )
        );
    }
}
