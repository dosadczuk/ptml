<?php
declare(strict_types=1);

namespace PTML\Example;

require_once __DIR__ . '/../vendor/autoload.php';

use PTML\Example\Component\BootstrapButton;
use PTML\Example\Component\BootstrapIcon;

$button = new BootstrapButton('primary', 'Sample button');
$button->append(new BootstrapIcon('user'));

echo $button;
