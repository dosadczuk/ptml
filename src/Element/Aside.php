<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <aside> HTML element represents a portion of a document whose
 * content is only indirectly related to the document's main content.
 */
class Aside extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Aside, $text);
    }
}
