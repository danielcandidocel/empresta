<?php

namespace App\Values;

use Spatie\DataTransferObject\DataTransferObjectCollection;

class InstitutionCollection extends DataTransferObjectCollection
{
    /**
     * @param array $data
     * @return InstitutionCollection
     */
    public static function create(array $data): InstitutionCollection
    {
        return new static(Institution::arrayOf($data));
    }
}
