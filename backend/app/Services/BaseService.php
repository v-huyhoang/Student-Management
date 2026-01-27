<?php

namespace App\Services;

abstract class BaseService
{
    /**
     * Handle errors consistently.
     */
    protected function handleError(\Throwable $e, string $message = 'An error occurred'): void
    {
        // Log the error
        \Log::error($message . ': ' . $e->getMessage(), [
            'exception' => $e,
            'trace' => $e->getTraceAsString(),
        ]);

        throw $e;
    }
}
