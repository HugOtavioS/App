<?php
namespace App\Routes;

use Config\Exception;

class RouteException implements Exception {
    private $excption;
    public function __construct()
    {
        
    }
    public function teste ()
    {
        echo "RoteException";
    }
}