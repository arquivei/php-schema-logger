<?php

namespace SchemaLogger\Builder\Schema\Types;

class StringProperty extends AbstractProperty
{
    public function getPropertyType(): string
    {
        return "string";
    }

}
