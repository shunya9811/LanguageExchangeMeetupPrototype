<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Libraries\User;
use App\Libraries\Meeting;
use Faker\Factory as FakerFactory;

class ClassController extends Controller{
    public function showHome(){
        // クラスを生成する
        $users = $this->createUser();
        $meetups = $this->createMeetup();

        return view('index', compact('users', 'meetups'));
    }

    public function showUsers(){
        $users = $this->createUser();
        return view('users', compact('users'));
    }

    public function showMeetup(){
        $meetups = $this->createMeetup();
        return view('meetup', compact('meetups'));
    }

    public function createUser(){
        $users = [];
        $faker = FakerFactory::create("en_US");

        for ($i = 0; $i < 5; $i++){
            $currUser = new User(
                $faker->name,
                $faker->firstName,
                $faker->lastName,
                $faker->randomElement($array=['man','woman']),
                $faker->date($format='Y-m-d',$max='now'),
                $faker->languageCode(),
                $faker->languageCode(),
                $faker->languageCode(),
                []
            );  
            array_push($users, $currUser);
        }

        return $users;
    }

    public function createMeetup(){
        $faker = FakerFactory::create("en_US");
        
        $meetups = [];
        for($j = 0; $j < 5; $j++){
            $max = rand(2, 20);
            $min = $max % 2 == 0 ? $max / 2 : ($max - 1) / 2;
            $currMeetup = new Meeting(
                $faker->name,
                $faker->title(),
                $faker->date(),
                $faker->city(),
                $faker->languageCode(),
                $faker->languageCode(),
                [],
                $max,
                $min
            );
            array_push($meetups, $currMeetup);
        }
        return $meetups;
    }
}