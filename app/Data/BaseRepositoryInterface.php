<?php declare(strict_types=1);

namespace WhensMyFerry\Data;

interface BaseRepositoryInterface
{
    public function getAll(array $columns = ['*'], string $orderBy = 'created_at', string $order = 'asc');

    public function getByColumn(string $attribute, $value, array $columns = ['*']);

    public function getById(int $id, array $columns = ['*']);

    public function getBySlug(string $slug, array $columns = ['*']);

    public function getDropdownItems(string $column, string $orderBy = 'id', string $direction = 'asc');

    public function paginate(int $perPage = 1, array $columns = ['*']);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

    public function __call($method, $parameters);
}
