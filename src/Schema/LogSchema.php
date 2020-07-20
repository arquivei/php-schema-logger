<?php

namespace SchemaLogger\Builder\Schema;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;
use SchemaLogger\Builder\Schema\Types\AbstractProperty;

class LogSchema
{
    private $baseNamespace;
    private $schemaClass;

    public function __construct(string $version)
    {
        $this->baseNamespace = $this->buildBaseNamespace($version);
        $this->schemaClass = $this->buildRootClass($this->baseNamespace);
    }

    public function addProperty(AbstractProperty $property) : void
    {
        $property->addToClass($this->schemaClass);
    }

    public function dumpClass() : void
    {
        echo $this->baseNamespace;
    }

    private function buildBaseNamespace(string $version) : PhpNamespace
    {
        return new PhpNamespace("SchemaLogger\\$version");
    }

    private function buildRootClass(PhpNamespace $namespace) : ClassType
    {
        $rootClass = new ClassType("SchemaRoot");
        $rootClass->setFinal()->addComment("Auto generated using Schema Logger");
        $namespace->add($rootClass);
        return $rootClass;
    }
}
