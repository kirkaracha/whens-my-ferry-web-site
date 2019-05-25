<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Admin;

use WhensMyFerry\Data\Timetables\Timetable;
use Illuminate\Http\Request;
use WhensMyFerry\Data\Timetables\TimetableRepositoryInterface;

class TimetableController extends BaseAdminController
{
    /** @var TimetableRepositoryInterface $timetableRepository */
    protected $timetableRepository;

    public function __construct(TimetableRepositoryInterface $timetableRepository)
    {
        $this->timetableRepository = $timetableRepository;

        parent::__construct();
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Timetable $timetable)
    {
        //
    }

    public function edit(Timetable $timetable)
    {
        //
    }

    public function update(Request $request, Timetable $timetable)
    {
        //
    }

    public function delete(Timetable $timetable)
    {
        //
    }
}
