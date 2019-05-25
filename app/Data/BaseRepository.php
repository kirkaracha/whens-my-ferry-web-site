<?php declare(strict_types=1);

namespace WhensMyFerry\Data;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Notifications\Notifiable;

class BaseRepository implements BaseRepositoryInterface
{
    use Notifiable;

    /** @var BaseModel $model */
    public $model;

    /** @var string $tableName */
    public $tableName;

    /** @var string $singularEntity */
    private $singularEntity;

    public function __construct(BaseModel $model)
    {
        $this->model = $model;

        $this->tableName = $this->model->getTable();
        $this->singularEntity = str_singular($this->tableName);
    }

    public function getAll(array $columns = ['*'], string $orderBy = 'created_at', string $order = 'asc')
    {
        return $this->model
            ->select($columns)
            ->orderBy($orderBy, $order)
            ->get();
    }

    public function getByColumn(string $column, $value, array $columns = ['*'])
    {
        try {
            return $this->model
                ->where($column, '=', $value)
                ->first($columns);
        } catch (ModelNotFoundException $e) {
            throw new ModelNotFoundException($e);
        }
    }

    public function getById(int $id, array $columns = ['*'])
    {
        return $this->getByColumn('id', $id, $columns);
    }

    public function getBySlug(string $slug, array $columns = ['*'])
    {
        return $this->getByColumn('slug', $slug, $columns);
    }

    public function getDropdownItems(string $column, string $orderBy = 'id', string $direction = 'asc')
    {
        return $this->model
            ->orderBy($orderBy, $direction)
            ->pluck($column, 'id')
            ->toArray();
    }

    public function paginate(int $perPage = 1, array $columns = ['*'])
    {
        return $this->model->paginate($perPage, $columns);
    }

    public function create(array $data)
    {
        $entity = new $this->model;
        $entity->fill($data);
        $entity->save();

        return $entity;
    }

    public function update(int $id, array $data)
    {
        $entity = $this->model->findOrFail($id);
        $entity->fill($data);
        $entity->save();

        return $entity;
    }

    public function delete(int $id)
    {
        return $this->model->delete($id);
    }

    public function __call($method, $parameters)
    {
        return call_user_func_array([$this->model, $method], $parameters);
    }
}
