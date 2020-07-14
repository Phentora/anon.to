<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Recaptcha implements Rule
{

    public function passes($attribute, $value)
    {
        $recaptcha = new \ReCaptcha\ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
        $resp = $recaptcha->verify($value, get_ip());
        if ($resp->isSuccess()) {
            return true;
        }

        return false;
    }

    public function message()
    {
        return 'Verification failed. You might be a robot!';
    }
}
