<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Admin;

use Illuminate\Http\Request;
use WhensMyFerry\Data\Holidays\Holiday;
use WhensMyFerry\Data\Holidays\HolidayRepositoryInterface;

class HolidayController extends BaseAdminController
{
    /** @var HolidayRepositoryInterface $holidayRepository */
    protected $holidayRepository;

    public function __construct(HolidayRepositoryInterface $holidayRepository)
    {
        $this->holidayRepository = $holidayRepository;

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

    public function show(Holiday $holiday)
    {
        //
    }

    public function edit(Holiday $holiday)
    {
        //
    }

    public function update(Request $request, Holiday $holiday)
    {
        //
    }

    public function delete(Holiday $holiday)
    {
        //
    }
}
