<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Stops;

use WhensMyFerry\Data\BaseRepositoryInterface;

interface StopRepositoryInterface extends BaseRepositoryInterface {
    public function updateOrCreateStops(int $operatorId, $stops);
}
