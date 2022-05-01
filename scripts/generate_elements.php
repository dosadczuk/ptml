<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use phpDocumentor\Reflection\DocBlockFactory;
use PTML\Tag;

$ctor_empty_template = ltrim('
<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * %2$s
 */
class %1$s extends Element
{
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

use PTML\{Element, Tag};

/**
 * %2$s
 */
class %1$s extends Element
{
    public function __construct(\Stringable|string $text = \'\')
    {
        parent::__construct(Tag::%1$s, $text);
    }
}
');

foreach (Tag::cases() as $tag) {
    $filename = "{$tag->name}.php";
    $contents = $tag->isSelfClosing()
        ? sprintf($ctor_empty_template, $tag->name, getComment($tag))
        : sprintf($ctor_param_templated, $tag->name, getComment($tag));

    saveToSrc($filename, $contents);
}

function getComment(Tag $tag): string
{
    $description = DocBlockFactory::createInstance()
        ->create(new ReflectionEnumBackedCase($tag, $tag->name))
        ->getSummary();

    return preg_replace("/\n/", "\n * ", $description);
}

function saveToSrc(string $filename, string $contents): void
{
    file_put_contents(__DIR__ . '/../src/Element/' . $filename, $contents,);
}
