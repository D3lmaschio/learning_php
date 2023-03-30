<?php
#[Attribute]
class MyAttribute {

    public function __construct(int $var)
    {
        echo "A resposta pra tudo é: $var" . PHP_EOL;
    }
}

#[MyAttribute(42)]
class Entity {

    #[MyAttribute(42)]
    public string $PublicEP;
    private string $PrivateEP;

    public function publicMethod(): void
    {
        echo "Você usou o método público da classe MyEntity." . PHP_EOL;
    }

    private function privateMethod(): void
    {
        echo "Você usou o método privado da classe MyEntity." . PHP_EOL;
    }
}

$class = new ReflectionClass(Entity::class);
$object = $class->newInstanceWithoutConstructor();

$properties = $class->getProperties();
$methods = $class->getMethods();

var_dump($properties);
echo PHP_EOL;
var_dump($methods);
echo PHP_EOL;

$publicProp = $properties[0];
$publicProp->setValue($object, 'Valor setado na propriedade publica via reflection.');
var_dump($publicProp->getValue($object));


$privProp = $properties[1];
$privProp->setValue($object, 'Valor setado na propriedade privada via reflection.');
var_dump($privProp->getValue($object));

$pubMethod = $methods[0];
$pubMethod->invoke($object);

$privMethod = $methods[1];
$privMethod->invoke($object);