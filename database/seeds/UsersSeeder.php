<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username 	=	"kilamieaz";
        $user->name 		=	"sultan";
        $user->email 		=	"im.sultaan@gmai.com";
        $user->password 	=	bcrypt('qweasd');
        $user->mobile		=	"082281000518";
        $user->gender       =   1;
        $user->membership 	=	1;
        $user->code_referal	=	"qweasd";
        $user->friend_code	=	"first";
        $user->save();

        $user = new User();
        $user->username 	= 	"k4k1kukek0";  
        $user->name 		=	"imam";
        $user->email 		=	"k4k1kukek0sm@gmail.com";
        $user->password 	=	bcrypt('qweasd');
        $user->mobile		=	"082281000518";
        $user->gender 		=	1;
        $user->membership   =   1;
        $user->code_referal	=	"123456";
        $user->friend_code	=	"qweasd";
        $user->save();

        $user = new User();
        $user->username 	= 	"shylchemist";  
        $user->name 		=	"muttaqin";
        $user->email 		=	"k4k1kukek0sm1@gmail.com";
        $user->password 	=	bcrypt('qweasd');
        $user->mobile		=	"082281000518";
        $user->gender 		=	1;
        $user->membership   =   1;
        $user->code_referal	=	"zxcvbn";
        $user->friend_code	=	"123456";
        $user->save();
    }
}

