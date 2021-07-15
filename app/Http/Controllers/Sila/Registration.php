<?php

namespace App\Http\Controllers\Sila;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SilaController;
use Carbon\Carbon;
use DateTime;
use Silamoney\Client\Api\SilaApi;
use Silamoney\Client\Domain\User;
use Illuminate\Http\Request;
use Silamoney\Client\Domain\UserBuilder;

class Registration extends Controller
{

    public function Register(Request $request)
    {


        $appHandle = 'dev_app.amanahexpress.com';
        $privateKey = '3d897a6f149bfd42670c0e0562d612d276a03eda49147f4b267bac48a082f30f';



        $client = SilaApi::fromDefault($appHandle, $privateKey);


//        dd($client);


//            $request->validate([
//            $request->userHandle =>['required' , 'string' ,'regex:/^\S*$/u'],
//            $request->first_name =>['required' , 'string' ,'regex:/^\S*$/u'],
//            $request->last_name =>['required' , 'string' ,'regex:/^\S*$/u'],
//            $request->address =>['required' , 'string'],
//            $request->city =>['required' , 'string'],
//            $request->state =>['required' , 'string'],
//            $request->zipcode =>['required' , 'numeric' ,'regex:/^\S*$/u'],
//            $request->ssn =>['required' , 'numeric' ,'regex:/^\S*$/u'],
//            $request->phone_number =>['required' , 'numeric' ,'regex:/^\S*$/u' , 'max:10'],
//            $request->email =>['required' , 'unique:users,email' ,'valid'],
//            $request->birthdate =>['required' , 'date'],
//        ]);




        $userHandle = 'user.silamoney.eth';
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $streetAddress = $request->address;
        $city = $request->city;
        $state = $request->state; // 2 characters code only
        $postalCode = $request->zipcode; // can be 5 or 9 digits format
        $phone = $request->phone_number;
        $email = $request->email;
        $cryptoAddress = '0xabc123abc123abc123'; // Hex-encoded blockchain address (prefixed with "0x")
        $identityNumber = $request->ssn; // SSN format
        $birthDate = new Carbon(new DateTime($request->input('birthdate')));


//        dd($request->all());

//        $user = new User($userHandle, $firstName, $lastName, $streetAddress, null, $city, $state, $postalCode, $phone, $email, $identityNumber, '',  $birthDate , null);
//        dd($user);
        $builder = new UserBuilder();
        $user = $builder->handle($userHandle)->firstName($firstName)->lastName($lastName)->address($streetAddress)->city($city)->state($state)->zipCode($postalCode)
            ->phone($phone)->email($email)->identityNumber($identityNumber)->cryptoAddress($cryptoAddress)->birthDate($birthDate)->build();





        // Call the api
        $response = $client->register($user);

// Success 200
        echo $response->getStatusCode(); // 200
        echo $response->getData()->getReference(); // Random reference number
        echo $response->getData()->getStatus(); // SUCCESS
        echo $response->getData()->getMessage(); // User was successfully register



    }
}
