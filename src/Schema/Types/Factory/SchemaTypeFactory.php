<?php

namespace SchemaLogger\Builder\Schema\Types\Factory;

use SchemaLogger\Builder\Schema\Types\AbstractProperty;
use SchemaLogger\Builder\Schema\Types\IntProperty;
use SchemaLogger\Builder\Schema\Types\StringProperty;

class SchemaTypeFactory
{
    public function create(string $type, string $propertyName) : AbstractProperty
    {
        $property = null;
        switch ($type) {
            case 'int':
                $property = new IntProperty($propertyName);
                break;
            default:
                $property = new StringProperty($propertyName);
                break;
        }

        return $property;
    }
}
