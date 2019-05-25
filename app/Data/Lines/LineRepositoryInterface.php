<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Lines;

use WhensMyFerry\Data\BaseRepositoryInterface;

interface LineRepositoryInterface extends BaseRepositoryInterface {
    public function updateOrCreateLines(int $operatorId, $lines);
}
