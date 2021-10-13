<?php

namespace Picqer\BolRetailerV5\Model;

// This class is auto generated by OpenApi\ModelGenerator
class TotalPeriod extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'period' => [ 'model' => SearchTermsPeriod::class, 'array' => false ],
            'total' => [ 'model' => null, 'array' => false ],
            'countries' => [ 'model' => SearchTermsCountry::class, 'array' => true ],
        ];
    }

    /**
     * @var SearchTermsPeriod
     */
    public $period;

    /**
     * @var int The number of customer visits on the search page.
     */
    public $total;

    /**
     * @var SearchTermsCountry[]
     */
    public $countries = [];
}
