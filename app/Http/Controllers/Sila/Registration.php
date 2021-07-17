<?php

namespace App\Http\Controllers\Sila;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SilaController;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Silamoney\Client\Api\SilaApi;
use Silamoney\Client\Domain\User;
use Illuminate\Http\Request;
use Silamoney\Client\Domain\UserBuilder;
use Silamoney\Client\Security\EcdsaUtil;

class Registration extends Controller
{

    public function Register(Request $request)
    {


        $appHandle = 'dev_app.amanahexpress.com';
        $privateKey = '3d897a6f149bfd42670c0e0562d612d276a03eda49147f4b267bac48a082f30f';

        $client = SilaApi::fromDefault($appHandle,$privateKey);

//        $wallet = $client->generateWallet();
//        echo $wallet->getAddress(); // Wallet public address
//        echo $wallet->getPrivateKey();

//        dd($wallet);
        $privateKey = '0x3d897a6f149bfd42670c0e0562d612d276a03eda49147f4b267bac48a082f30f';
        $address = '0x3598967774f324d12acfd13d36281146855f9f7b';
        $wallet = $client->generateWallet($privateKey, $address);




//    dd($wallet);

         function validator(array $data)
    {
        return Validator::make($data, [
            'userHandle' =>['required' , 'string' ,'regex:/^\S*$/u'],
            'first_name' =>['required' , 'string' ,'regex:/^\S*$/u'],
            'last_name' =>['required' , 'string' ,'regex:/^\S*$/u'],
            'address' =>['required' , 'string'],
            'city' =>['required' , 'string'],
            'state' =>['required' , 'string'],
            'zipcode' =>['required' , 'numeric' ,'regex:/^\S*$/u'],
            'ssn' =>['required' , 'numeric' ,'regex:/^\S*$/u'],
            'phone_number' =>['required' , 'numeric' ,'regex:/^\S*$/u' , 'max:10'],
            'email' =>['required' , 'unique:users,email' ,'valid'],
            'birthdate' =>['required' , 'date'],
        ]);
    }




        $userHandle = 'user.silamoney.eth';
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $streetAddress = $request->address;
        $city = $request->city;
        $state = $request->state; // 2 characters code only
        $postalCode = $request->zipcode; // can be 5 or 9 digits format
        $phone = $request->phone_number;
        $email = $request->email;
        $cryptoAddress = '0x3598967774f324d12acfd13d36281146855f9f7b'; // Hex-encoded blockchain address (prefixed with "0x")
        $identityNumber = $request->ssn; // SSN format
        $birthDate = new Carbon(new DateTime($request->input('birthdate')));



// Create user object
        $user = new User($userHandle, $firstName, $lastName, null, null, null, null, null, null, null, null, $cryptoAddress, $birthDate);

//        dd($request->all());

//        $user = new User($userHandle, $firstName, $lastName, $streetAddress, null, $city, $state, $postalCode, $phone, $email, $identityNumber, '',  $birthDate , null);
//        dd($user);
//        $builder = new UserBuilder();
//        $user = $builder->handle($userHandle)->firstName($firstName)->lastName($lastName)->address($streetAddress)->city($city)->state($state)->zipCode($postalCode)
//            ->phone($phone)->email($email)->identityNumber($identityNumber)->cryptoAddress($cryptoAddress)->birthDate($birthDate)->build();
//



        $response = $client->register($user);
//dd($user);
        // Call the api
//        dd($client);

        dd($response);
// Success 200
        echo $response->getStatusCode(); // 200
//        echo $response->getData()->getReference(); // Random reference number
//        echo $response->getData()->getStatus(); // SUCCESS
//        echo $response->getData()->getMessage(); // User was successfully register
//
    }
}
