<?php

declare(strict_types=1);

namespace App;

final class ToggleRouter
{
    public function featureIsEnabled(string $name): bool
    {
        // NOTE: This is for demo purpose.
        // A proper production feature flag should be fetched from database, environment variable or a 3rd party service.
        return file_exists(\dirname(__DIR__).'/'.$name);
    }
}
