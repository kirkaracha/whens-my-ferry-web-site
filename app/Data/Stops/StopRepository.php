<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Stops;

use WhensMyFerry\Data\BaseRepository;

class StopRepository extends BaseRepository implements StopRepositoryInterface
{
    public function __construct(Stop $stop)
    {
        parent::__construct($stop);
    }

    public function updateOrCreateStops(int $operatorId, $stops)
    {
        foreach ($stops as $stop) {
            $this->model->updateOrCreate(
                [
                    'api_id' => $stop->id,
                    'name' => $stop->Name
                ],
                [
                    'latitude' => $stop->Location->Latitude,
                    'longitude' => $stop->Location->Longitude
                ]
            );
        }
    }
}
