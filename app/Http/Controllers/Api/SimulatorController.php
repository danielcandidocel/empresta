<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\SimulatorRequest;
use App\Simulator\SimulatorServiceContract;
use Illuminate\Http\Request;

class SimulatorController extends Controller
{
    private SimulatorServiceContract $service;

    public function __construct(SimulatorServiceContract $service)
    {
        $this->service = $service;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SimulatorRequest $request)
    {
//        $this->service->institutionsFee->
        return $request;
        return response()->json($this->service->institutionsFee->toArray());
    }
}
