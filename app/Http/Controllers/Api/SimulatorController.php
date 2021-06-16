<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\SimulatorRequest;
use App\Simulator\SimulatorServiceContract;
use Illuminate\Http\JsonResponse;

class SimulatorController extends Controller
{
    /**
     * @var SimulatorServiceContract
     */
    private SimulatorServiceContract $service;

    /**
     * SimulatorController constructor.
     * @param SimulatorServiceContract $service
     */
    public function __construct(SimulatorServiceContract $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     * @param SimulatorRequest $request
     * @return JsonResponse
     */
    public function __invoke(SimulatorRequest $request): JsonResponse
    {
        $simulations = $this->service->simulate($request->valor_emprestimo, $request->instituicoes, $request->convenios, $request->parcela);

        return response()->json($simulations);
    }
}
