<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <p> HTML element represents a paragraph. Paragraphs are usually
 * represented in visual media as blocks of text separated from adjacent
 * blocks by blank lines and/or first-line indentation, but HTML paragraphs
 * can be any structural grouping of related content, such as images or
 * form fields.
 */
class P extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::P, $text);
    }
}
