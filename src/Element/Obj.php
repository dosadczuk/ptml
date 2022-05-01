<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <object> HTML element represents an external resource, which can be
 * treated as an image, a nested browsing context, or a resource to be
 * handled by a plugin.
 */
class Obj extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Obj, $text);
    }
}
