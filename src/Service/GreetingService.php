<?php

declare(strict_types=1);

namespace App\Service;

interface GreetingService
{
    public function greet(string $name): string;
}
