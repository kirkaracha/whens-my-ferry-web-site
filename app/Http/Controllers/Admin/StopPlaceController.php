<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Admin;

use Illuminate\Http\Request;
use WhensMyFerry\Data\StopPlaces\StopPlace;
use WhensMyFerry\Data\StopPlaces\StopPlaceRepositoryInterface;

class StopPlaceController extends BaseAdminController
{
    /** @var StopPlaceRepositoryInterface $stopPlaceRepository */
    protected $stopPlaceRepository;

    public function __construct(StopPlaceRepositoryInterface $stopPlaceRepository)
    {
        $this->stopPlaceRepository = $stopPlaceRepository;

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

    public function show(StopPlace $stopPlace)
    {
        //
    }

    public function edit(StopPlace $stopPlace)
    {
        //
    }

    public function update(Request $request, StopPlace $stopPlace)
    {
        //
    }

    public function delete(StopPlace $stopPlace)
    {
        //
    }
}
