<?php

namespace App\Factory;

use App\Entity\Client;

class ClientFactory
{
    private function __construct()
    {
        // ne rien faire
    }

    public static function create()
    {
        return new Client();
    }

    public static function fixture()
    {
        return new Client();
    }
}
