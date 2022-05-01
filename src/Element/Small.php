<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <small> HTML element represents side-comments and small print, like
 * copyright and legal text, independent of its styled presentation. By
 * default, it renders text within it one font-size smaller, such as from
 * small to x-small.
 */
class Small extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Small, $text);
    }
}
