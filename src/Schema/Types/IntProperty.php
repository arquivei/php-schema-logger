<?php

namespace SchemaLogger\Builder\Schema\Types;

class IntProperty extends AbstractProperty
{
    public function getPropertyType(): string
    {
        return 'int';
    }
}
