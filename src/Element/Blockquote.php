<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <blockquote> HTML element indicates that the enclosed text is an
 * extended quotation. Usually, this is rendered visually by indentation
 * (see Notes for how to change it). A URL for the source of the quotation
 * may be given using the cite attribute, while a text representation of
 * the source can be given using the cite element.
 */
class Blockquote extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Blockquote, $text);
    }
}
