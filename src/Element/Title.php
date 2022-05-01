<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <title> HTML element defines the document's title that is shown in a
 * Browser's title bar or a page's tab. It only contains text; tags within
 * the element are ignored.
 */
class Title extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Title, $text);
    }
}
