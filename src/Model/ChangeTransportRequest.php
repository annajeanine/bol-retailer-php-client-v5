<?php

namespace Picqer\BolRetailerV5\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ChangeTransportRequest extends AbstractModel
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
            'transporterCode' => [ 'model' => null, 'array' => false ],
            'trackAndTrace' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string
     */
    public $transporterCode;

    /**
     * @var string The track and trace code that is associated with this transport.
     */
    public $trackAndTrace;
}
