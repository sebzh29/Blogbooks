<?php

namespace App\Security;

class SignatureComponents
{

    public function __construct()
    {
    }

    public function getSignedUrl()
    {
        return 'https://example.com';
    }

    public function getExpirationMessageKey()
    {
        return 'expires_at';
    }

    public function getExpirationMessageData()
    {
        return '2021-12-31';
    }

}