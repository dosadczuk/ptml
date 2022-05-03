<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use phpDocumentor\Reflection\DocBlockFactory;
use PTML\Old\Attr;

$template = ltrim('
<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait With%1$s
{
    /**
     * %2$s
     */
    public function with%1$s(string $value, bool $append = true): static
    {
        $this->with(Attr::%1$s, $value, $append);

        return $this;
    }
    
    public function without%1$s(): static
    {
        $this->without(Attr::%1$s);
        
        return $this;
    }
} 
');

foreach (Attr::cases() as $attr) {
    $filename = "With{$attr->name}.php";
    $contents = sprintf($template, $attr->name, getComment($attr));

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
