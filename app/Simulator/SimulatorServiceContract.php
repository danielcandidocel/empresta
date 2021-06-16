<?php


namespace App\Simulator;


use App\Values\CovenantCollection;
use App\Values\InstitutionCollection;
use App\Values\InstitutionFeeCollection;

/**
 * Interface SimulatorServiceContract
 * @property CovenantCollection $covenants
 * @property InstitutionCollection $institutions
 * @property InstitutionFeeCollection $institutionsFee
 * @package App\Simulator
 */
interface SimulatorServiceContract
{
    public function simulate(float $amount, ?array $instituicoes, ?array $convenios, ?int $parcelas): array;
}
