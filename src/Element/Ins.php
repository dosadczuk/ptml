<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <ins> HTML element represents a range of text that has been added to
 * a document. You can use the del element to similarly represent a range
 * of text that has been deleted from the document.
 */
class Ins extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Ins, $text);
    }
}
