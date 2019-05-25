<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Admin;

use Illuminate\Http\Request;
use WhensMyFerry\Data\Lines\Line;
use WhensMyFerry\Data\Lines\LineRepositoryInterface;

class LineController extends BaseAdminController
{
    /** @var LineRepositoryInterface $lineRepository */
    protected $lineRepository;

    public function __construct()
    {
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

    public function show(Line $line)
    {
        //
    }

    public function edit(Line $line)
    {
        //
    }

    public function update(Request $request, Line $line)
    {
        //
    }

    public function delete(Line $line)
    {
        //
    }
}
