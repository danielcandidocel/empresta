<?php

namespace App\Values;

use App\Simulator\Filters\InstitutionFeeFilter;
use Spatie\DataTransferObject\DataTransferObjectCollection;

class InstitutionFeeCollection extends DataTransferObjectCollection
{
    /**
     * @param array $data
     * @return InstitutionFeeCollection
     */
    public static function create(array $data): InstitutionFeeCollection
    {
        return new static(InstitutionFee::arrayOf($data));
    }

    /**
     * @param array|null $instituicoes
     * @param array|null $convenios
     * @param int|null $parcela
     * @return InstitutionFeeFilter
     */
    public function filter(?array $instituicoes, ?array $convenios, ?int $parcela): InstitutionFeeFilter
    {
        return new InstitutionFeeFilter($this->iterator, ...func_get_args());
    }
}
