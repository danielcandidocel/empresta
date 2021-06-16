<?php

namespace App\Values;

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
}
