<?php

namespace App\Values;

use Spatie\DataTransferObject\DataTransferObject;

class InstitutionFee extends DataTransferObject
{
    /**
     * @var int
     */
    public int $parcelas;

    /**
     * @var float
     */
    public float $taxaJuros;

    /**
     * @var float
     */
    public float $coeficiente;

    /**
     * @var string
     */
    public string $instituicao;

    /**
     * @var string
     */
    public string $convenio;
}
