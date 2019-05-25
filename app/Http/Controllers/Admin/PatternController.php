<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Admin;

use Illuminate\Http\Request;
use WhensMyFerry\Data\Patterns\Pattern;
use WhensMyFerry\Data\Patterns\PatternRepositoryInterface;

class PatternController extends BaseAdminController
{
    /** @var PatternRepositoryInterface $patternRepository */
    protected $patternRepository;

    public function __construct(PatternRepositoryInterface $patternRepository)
    {
        $this->patternRepository = $patternRepository;

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

    public function show(Pattern $pattern)
    {
        //
    }

    public function edit(Pattern $pattern)
    {
        //
    }

    public function update(Request $request, Pattern $pattern)
    {
        //
    }

    public function delete(Pattern $pattern)
    {
        //
    }
}
