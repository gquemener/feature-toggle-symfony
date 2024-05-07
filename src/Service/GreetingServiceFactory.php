<?php

declare(strict_types=1);

namespace App\Service;

use App\ToggleRouter;

final class GreetingServiceFactory
{
    public function __construct(
        private readonly ToggleRouter $toggleRouter,
    ) {
    }

    public function create(): GreetingService
    {
        if ($this->toggleRouter->featureIsEnabled('frenchGreeting')) {
            return new NewGreetingService();
        }
        return new LegacyGreetingService();
    }
}
