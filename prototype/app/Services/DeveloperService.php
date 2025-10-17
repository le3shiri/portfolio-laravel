<?php

namespace App\Services;

class DeveloperService
{
    public function getDeveloperProfile()
    {
        return [
            'name' => 'Aymane El Dev',
            'role' => 'Full Stack Developer',
            'bio' => 'Je suis passionné par le développement web, surtout Laravel & Vue.js.',
            'email' => 'aymane@example.com'
        ];
    }
}
