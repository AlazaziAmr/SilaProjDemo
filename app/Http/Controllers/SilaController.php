<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Silamoney\Client\Api\SilaApi;
use Silamoney\Client\Domain\{BalanceEnvironments,Environments};

class SilaController extends Controller
{
    public function credentials()
    {
//        require_once 'vendor/autoload.php';


        // Load your credentials
        $appHandle = 'dev_app.amanahexpress.com';
        $privateKey = '3d897a6f149bfd42670c0e0562d612d276a03eda49147f4b267bac48a082f30f';

        // Create your client
        // From default sandbox environments
        $client = SilaApi::fromDefault($appHandle, $privateKey);


        // Generate wallet
//        $wallet = $client->generateWallet();
//        echo $wallet->getAddress(); // Wallet public address
//        echo $wallet->getPrivateKey(); // Wallet private key

    }
}
