<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <section> HTML element represents a generic standalone section of a
 * document, which doesn't have a more specific semantic element to
 * represent it. Sections should always have a heading, with very few
 * exceptions.
 */
class Section extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Section, $text);
    }
}
