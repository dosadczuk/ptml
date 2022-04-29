<?php
declare(strict_types=1);

namespace PTML\Example;

require_once __DIR__ . '/../vendor/autoload.php';

use PTML\ElementOutput;
use PTML\Example\Component\{Btn, Container, Icon, Lnk};

$container = new Container(
    Btn::primary('Sample button')
        ->icon(new Icon('user')),

    Lnk::primary('http://localhost:8080', 'Sample link')
        ->icon(new Icon('user'))
);

$output = new ElementOutput($container);
$output->toFile('container.html');
$output->toStdOut();
