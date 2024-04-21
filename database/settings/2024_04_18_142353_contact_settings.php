<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.phone', '+01 1234567890');
        $this->migrator->add('contact.email', 'demo@gmail.com');
        $this->migrator->add('contact.address', '123 Main Street, Anytown, USA 12345');
    }
};
