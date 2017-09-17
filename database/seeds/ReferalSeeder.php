<?php

use Illuminate\Database\Seeder;
use App\Referal;

class ReferalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new referal();
        $user->user_code 		=	"123456";
        $user->friend_id 		=	"1";
        $user->friend_code	    =	"qweasd";
        $user->save();

        $user = new referal();
        $user->user_code 		=	"zxcvbn";
        $user->friend_id 		=	"2";
        $user->friend_code	    =	"123456";
        $user->save();
    }
}
