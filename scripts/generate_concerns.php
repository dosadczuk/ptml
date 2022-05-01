<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use phpDocumentor\Reflection\DocBlockFactory;
use PTML\Attr;

$template = ltrim('
<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

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
    $filename = "With{$attr->name}.php";
    $contents = sprintf($template, $attr->name, lcfirst($attr->name), getComment($attr));

    saveToSrc($filename, $contents);
}

function getComment(Attr $attr): string
{
    $description = DocBlockFactory::createInstance()
        ->create(new ReflectionEnumBackedCase($attr, $attr->name))
        ->getSummary();

    return preg_replace("/\n/", "\n     * ", $description);
}

function saveToSrc(string $filename, string $contents): void
{
    file_put_contents(__DIR__ . '/../src/Element/Concern/' . $filename, $contents,);
}
