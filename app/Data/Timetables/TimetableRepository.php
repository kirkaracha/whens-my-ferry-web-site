<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Timetables;

use WhensMyFerry\Data\BaseRepository;

class TimetableRepository extends BaseRepository implements TimetableRepositoryInterface
{
    public function __construct(Timetable $timetable)
    {
        parent::__construct($timetable);
    }
}
