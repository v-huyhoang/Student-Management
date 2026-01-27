<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface RepositoryInterface
{
    public function getAll(): Collection;
    public function getPaginated(int $perPage = 15): LengthAwarePaginator;
    public function find(int|string $id): ?Model;
    public function create(array $data): Model;
    public function update(int|string $id, array $data): bool;
    public function delete(int|string $id): bool;
}
