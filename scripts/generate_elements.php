<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use phpDocumentor\Reflection\DocBlockFactory;
use PTML\Old\Tag;

$tag_to_attrs = include 'tag_to_attrs.php';

$ctor_empty_template = ltrim('
<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    %3$s
};
use PTML\Tag;

/**
 * %2$s
 */
class %1$s extends Element
{
    use %4$s;

    public function __construct()
    {
        parent::__construct(Tag::%1$s);
    }
}
');

$ctor_param_templated = ltrim('
<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    %3$s
};
use PTML\Tag;

/**
 * %2$s
 */
class %1$s extends Element
{
    use %4$s;

    public function __construct(\Stringable|string $text = \'\')
    {
        parent::__construct(Tag::%1$s, $text);
    }
}
');

foreach (Tag::cases() as $tag) {
    $filename = "{$tag->name}.php";
    $contents = $tag->isSelfClosing()
        ? sprintf($ctor_empty_template, $tag->name, getComment($tag), ...getTraits($tag))
        : sprintf($ctor_param_templated, $tag->name, getComment($tag), ...getTraits($tag));

    saveToSrc($filename, $contents);
}

function getComment(Tag $tag): string
{
    $description = DocBlockFactory::createInstance()
        ->create(new ReflectionEnumBackedCase($tag, $tag->name))
        ->getSummary();

    return preg_replace("/\n/", "\n * ", $description);
}

function getTraits(Tag $tag): array
{
    global $tag_to_attrs;

    $traits = [];
    foreach ($tag_to_attrs($tag) as $attr) {
        $traits[] = "\tWith{$attr->name}";
    }

    $imports = trim(implode(",\n", $traits));
    $uses = trim(implode(",\n\t", $traits));

    return [$imports, $uses];
}

function saveToSrc(string $filename, string $contents): void
{
    file_put_contents(__DIR__ . '/../src/Element/' . $filename, $contents,);
}
