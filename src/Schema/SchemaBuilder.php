<?php

namespace SchemaLogger\Builder\Schema;

use SchemaLogger\Builder\Schema\Types\Factory\SchemaTypeFactory;

class SchemaBuilder
{
    private $schemaVersion;
    private $schemaDefinition;
    private $typeFactory;

    public function __construct()
    {
        $this->typeFactory = new SchemaTypeFactory();
    }

    public function withSchemaVersion(string $schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
        return $this;
    }

    public function withSchemaDefinition(array $schemaDefinition)
    {
        $this->schemaDefinition = $schemaDefinition;
        return $this;
    }

    final public function build() : LogSchema
    {
        $schema = new LogSchema($this->schemaVersion);

        foreach ($this->schemaDefinition as $name => $type) {
            $property = $this->typeFactory->create($type, $name);
            $schema->addProperty($property);
        }
        $schema->dumpClass();
        return $schema;
    }
}
