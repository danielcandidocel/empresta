<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Simulator\SimulatorServiceContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CovenantsController extends Controller
{
    /**
     * @var SimulatorServiceContract
     */
    private SimulatorServiceContract $service;

    /**
     * CovenantsController constructor.
     * @param SimulatorServiceContract $service
     */
    public function __construct(SimulatorServiceContract $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json($this->service->covenants->toArray());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
