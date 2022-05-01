<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <bdo> HTML element overrides the current directionality of text, so
 * that the text within is rendered in a different direction.
 */
class Bdo extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Bdo, $text);
    }
}
