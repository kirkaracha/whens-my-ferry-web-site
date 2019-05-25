<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Admin;

use Illuminate\Http\Request;
use WhensMyFerry\Data\Operators\Operator;
use WhensMyFerry\Data\Operators\OperatorRepositoryInterface;

class OperatorController extends BaseAdminController
{
    /** @var OperatorRepositoryInterface $operatorRepository */
    protected $operatorRepository;

    public function __construct(OperatorRepositoryInterface $operatorRepository)
    {
        $this->operatorRepository = $operatorRepository;

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

    public function show(Operator $operator)
    {
        //
    }

    public function edit(Operator $operator)
    {
        //
    }

    public function update(Request $request, Operator $operator)
    {
        //
    }

    public function delete(Operator $operator)
    {
        //
    }
}
