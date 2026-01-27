<?php

namespace App\DTOs;

use Illuminate\Http\Request;

abstract class BaseDTO
{
    /**
     * Create a DTO from a Request object.
     * 
     * @param array $data
     * @return static
     */
    abstract public static function fromRequest(array $data): static;

    /**
     * Convert DTO to array.
     * 
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
