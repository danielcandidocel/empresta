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

    public function __construct(string $path = null)
    {
        $this->covenants        = CovenantCollection::create($this->loadData('app/convenios.json'));
        $this->institutions     = InstitutionCollection::create($this->loadData('app/instituicoes.json'));
        $this->institutionsFee  = InstitutionFeeCollection::create($this->loadData('app/taxas_instituicoes.json'));
    }

    protected function loadData(string $path)
    {
        $data = file_get_contents(storage_path($path));
        return json_decode($data, true);
    }
}
