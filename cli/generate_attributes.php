<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use PTML\Attr;
use PTML\CLI\Helper\IO;

$TEMPLATE = ltrim('
<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait With%1$s
{
    /**
     * %3$s
     */
    public function %2$s(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::%1$s, $value);
        
        return $this;
    }
}
');

foreach (Attr::cases() as $attr) {
    $description = (new ReflectionEnumBackedCase(Attr::class, $attr->name))->getDocComment();
    $description = trim(str_replace('*', '', substr($description, 3, -2)));

    $filename = "With{$attr->name}.php";
    $contents = sprintf($TEMPLATE, $attr->name, lcfirst($attr->name), $description);

    IO::saveToSource($filename, $contents, 'Element/Attribute');
}
