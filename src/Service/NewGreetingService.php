<?php

declare(strict_types=1);

namespace App\Service;

final class NewGreetingService implements GreetingService
{
    public function greet(string $name): string
    {
        return sprintf('Bonjour, %s !', $name);
    }
}
