<?php

require_once '../vendor/autoload.php';

$config = [
    'propertyA' => 'string',
    'propertyB' => 'int',
    'propertyC' => 'bool'
];


$builder = new \SchemaLogger\Builder\Schema\SchemaBuilder();
$builder->withSchemaVersion("v_0_0alpha")
    ->withSchemaDefinition($config)
    ->build();

//$schema = new \SchemaLogger\Builder\Schema\LogSchema("v0_0_1alpha");
//$stringProperty = new \SchemaLogger\Builder\Schema\Types\StringProperty('propertyA');
//$intProperty = new \SchemaLogger\Builder\Schema\Types\IntProperty('propertyB');
//
//
//$schema->addProperty($stringProperty);
//$schema->addProperty($intProperty);
//
//
////$class->addProperty('stringValue')->setType('string');
////$class->addMethod('getStringValue')->setPublic()->setReturnNullable()->setReturnType('string')
////    ->setBody('return $this->stringValue;');
//
//// to generate PHP code simply cast to string or use echo:
//$schema->dumpClass();

//$demo = new Demo();
//echo $demo->getStringValue();

// or use printer:
/*$printer = new Nette\PhpGenerator\Printer;
echo $printer->printClass($class);
*/
