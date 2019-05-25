<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Holidays;

use WhensMyFerry\Data\BaseRepository;

class HolidayRepository extends BaseRepository implements HolidayRepositoryInterface
{
    public function __construct(Holiday $holiday)
    {
        parent::__construct($holiday);
    }
}
