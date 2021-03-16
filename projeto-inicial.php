<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Mateus Araujo',
    new \DateTimeImmutable('1998-07-23')
);

echo $student->age();
