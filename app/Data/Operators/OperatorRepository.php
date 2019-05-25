<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Operators;

use WhensMyFerry\Data\BaseRepository;

class OperatorRepository extends BaseRepository implements OperatorRepositoryInterface
{
    public function __construct(Operator $operator)
    {
        parent::__construct($operator);
    }
}
