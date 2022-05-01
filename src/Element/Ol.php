<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <ol> HTML element represents an ordered list of items — typically
 * rendered as a numbered list.
 */
class Ol extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Ol, $text);
    }
}
