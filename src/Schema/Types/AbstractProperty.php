<?php

namespace SchemaLogger\Builder\Schema\Types;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\Property;

abstract class AbstractProperty
{
    private $propertyName;

    final public function __construct(string $propertyName)
    {
        $this->propertyName = $propertyName;
    }

    public function addToClass(ClassType $class)
    {
        $this->propertyName;
        $property = new Property($this->propertyName);

        $methodName = 'get' . ucfirst($this->propertyName);
        $getter = new Method($methodName);
        $getter->setReturnNullable(true)
            ->setReturnType("string")
            ->setBody('return $this->' . $this->propertyName . ';');

        $class->addMember($property)->addMember($getter);
    }

    abstract public function getPropertyType() : string;
}
