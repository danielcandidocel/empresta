<?php

namespace App\Values;

use Spatie\DataTransferObject\DataTransferObjectCollection;

class CovenantCollection extends DataTransferObjectCollection
{
    /**
     * @param array $data
     * @return CovenantCollection
     */
    public static function create(array $data): CovenantCollection
    {
        return new static(Covenant::arrayOf($data));
    }
}
