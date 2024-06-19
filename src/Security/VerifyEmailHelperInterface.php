<?php

namespace App\Security;

use http\Client\Request;

class VerifyEmailHelperInterface
{
    public function generateSignature(string $verifyEmailRouteName, string $id, string $email): SignatureComponents
    {
        // Generate a signed URL safe to email and then return it
        return new SignatureComponents();
    }

    public function validateEmailConfirmationFromRequest(Request $request, string $id, string $email): void
    {
        // Validate the URL and throw an exception if the URL is not valid
    }


}