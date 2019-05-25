<?php declare(strict_types=1);

namespace WhensMyFerry\Data\StopPlaces;

use WhensMyFerry\Data\BaseRepository;

class StopPlaceRepository extends BaseRepository implements StopPlaceRepositoryInterface
{
    public function __construct(StopPlace $stopPlace)
    {
        parent::__construct($stopPlace);
    }
}
