<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Admin;

use Illuminate\Http\Request;
use WhensMyFerry\Data\Stops\Stop;
use WhensMyFerry\Data\Stops\StopRepositoryInterface;

class StopController extends BaseAdminController
{
    /** @var StopRepositoryInterface $stopRepository */
    protected $stopRepository;

    public function __construct(StopRepositoryInterface $stopRepository)
    {
        $this->stopRepository = $stopRepository;

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

    public function show(Stop $stop)
    {
        //
    }

    public function edit(Stop $stop)
    {
        //
    }

    public function update(Request $request, Stop $stop)
    {
        //
    }

    public function delete(Stop $stop)
    {
        //
    }
}
