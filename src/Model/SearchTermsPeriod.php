<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class SearchTermsPeriod extends AbstractModel
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
            'day' => [ 'model' => null, 'array' => false ],
            'week' => [ 'model' => null, 'array' => false ],
            'month' => [ 'model' => null, 'array' => false ],
            'year' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Day number in the ISO-8601 standard.
     */
    public $day;

    /**
     * @var string Week number in the ISO-8601 standard.
     */
    public $week;

    /**
     * @var string Month number in the ISO-8601 standard.
     */
    public $month;

    /**
     * @var string Year number in the ISO-8601 standard.
     */
    public $year;
}
