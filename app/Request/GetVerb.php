<?php
namespace App\Request;

use App\Request\Interfaces\GetVerbInterface;

class GetVerb implements GetVerbInterface {

    public static function getVerb ():string {

        return $_SERVER['REQUEST_METHOD'];

    }

}