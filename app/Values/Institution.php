<?php

namespace App\Values;

use Spatie\DataTransferObject\DataTransferObject;

class Institution extends DataTransferObject
{
    /**
     * @var string
     */
    public string $chave;
    /**
     * @var string
     */
    public string $valor;
}
