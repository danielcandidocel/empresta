<?php

namespace App\Simulator;

use App\Values\CovenantCollection;
use App\Values\InstitutionCollection;
use App\Values\InstitutionFeeCollection;

class SimulatorService implements SimulatorServiceContract
{
    public CovenantCollection $covenants;
    public InstitutionCollection $institutions;
    public InstitutionFeeCollection $institutionsFee;

    /**
     * SimulatorService constructor.
     */
    public function __construct()
    {
        $this->covenants        = CovenantCollection::create($this->loadData('app/convenios.json'));
        $this->institutions     = InstitutionCollection::create($this->loadData('app/instituicoes.json'));
        $this->institutionsFee  = InstitutionFeeCollection::create($this->loadData('app/taxas_instituicoes.json'));
    }

    /**
     * @param float $amount
     * @param array|null $instituicoes
     * @param array|null $convenios
     * @param int|null $parcela
     * @return array
     */
    public function simulate(float $amount, ?array $instituicoes, ?array $convenios, ?int $parcela): array
    {
        $simulations = [];

        foreach($this->institutionsFee->filter($instituicoes, $convenios, $parcela) as $fee) {
            $simulations[$fee->instituicao][] = [
                'taxa'          => $fee->taxaJuros,
                'parcelas'      => $fee->parcelas,
                'valor_parcela' => round($amount * $fee->coeficiente, 2),
                'convenio'      => $fee->convenio
            ];
        }

        return $simulations;
    }

    /**
     * @param string $path
     * @return mixed
     */
    protected function loadData(string $path)
    {
        $data = file_get_contents(storage_path($path));
        return json_decode($data, true);
    }
}
