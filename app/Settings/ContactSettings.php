<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public string $address;
    public string $phone;
    public string $email;

    /**
     * Returns the group name for the contact settings.
     *
     * @return string The group name for the contact settings.
     */
    public static function group(): string
    {
        return 'contact';
    }
}
