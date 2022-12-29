<?php

declare(strict_types=1);

use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

/** @var \Psr\Container\ContainerInterface $container */
$container = require 'config/container.php';

class User
{
    /**
     * @var Name
     */
    public Name $name;

    /**
     * @var Contact[]
     */
    public array $contacts;
    public int $age;
    public DateTimeImmutable $createdAt;
}

class Name
{
    #[SerializedName('first_name')]
    public string $firstName;
    #[SerializedName('last_name')]
    public string $lastName;
}

class Contact
{
    public string $type;
    public string $value;
}

$reflectionExtractor = new ReflectionExtractor();
$phpDocExtractor = new PhpDocExtractor();
$propertyTypeExtractor = new PropertyInfoExtractor([$reflectionExtractor], [$phpDocExtractor, $reflectionExtractor], [$phpDocExtractor], [$reflectionExtractor], [$reflectionExtractor]);
$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
$metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);
$encoders = [new XmlEncoder(), new JsonEncoder()];
$normalizers = [
    new DateTimeNormalizer([
        DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s\Z'
    ]),
    new ArrayDenormalizer(),
    new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter, null, $propertyTypeExtractor)
];

$serializer = new Serializer($normalizers, $encoders);

$data = <<<EOF
{
    "name": {
        "first_mame": "Mykhailo",
        "last_name": "Zuiev"
    },
    "contacts": [
        {
            "type":"email",
            "value":"test@mail.loc"
        }
    ],
    "createdAt": "2022-12-29T12:19:13.701Z"
}
EOF;

//$data = <<<EOF
//{
//    "createdAt": "2022-12-29T12:19:13.701Z"
//}
//EOF;
//
$user = $serializer->deserialize($data, User::class, 'json');

var_dump($user);

//$name = new Name();
//$name->firstName = 'James';
//$name->lastName = 'Bond';
//
//$user = new User();
//$user->name = $name;
//$user->createdAt = new DateTimeImmutable();
//
//var_dump($serializer->serialize($user, 'json'));
