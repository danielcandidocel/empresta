<?php

namespace App\Simulator\Filters;

use App\Values\InstitutionFee;
use FilterIterator;
use Iterator;

class InstitutionFeeFilter extends FilterIterator
{
    /**
     * @var array|null
     */
    private ?array $instituicoes;
    /**
     * @var array|null
     */
    private ?array $convenios;
    /**
     * @var int|null
     */
    private ?int $parcela;

    /**
     * InstitutionFreeFilter constructor.
     * @param Iterator $iterator
     * @param array|null $instituicoes
     * @param array|null $convenios
     * @param int|null $parcela
     */
    public function __construct(Iterator $iterator, ?array $instituicoes, ?array $convenios, ?int $parcela)
    {
        parent::__construct($iterator);

        $this->instituicoes = $instituicoes;
        $this->convenios    = $convenios;
        $this->parcela      = $parcela;
    }

    /**
     * @return bool
     */
    public function accept(): bool
    {
        $fee = $this->current();

        if (!is_null($this->instituicoes) && !in_array($fee->instituicao, $this->instituicoes)) {
            return false;
        }

        if (!is_null($this->convenios) && !in_array($fee->convenio, $this->convenios)) {
            return false;
        }

        if (!is_null($this->parcela) && $fee->parcelas !== $this->parcela) {
            return false;
        }

        return true;
    }

    /**
     * @return InstitutionFee
     */
    public function current(): InstitutionFee
    {
        return parent::current();
    }
}