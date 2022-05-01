<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <i> HTML element represents a range of text that is set off from the
 * normal text for some reason, such as idiomatic text, technical terms,
 * taxonomical designations, among others. Historically, these have been
 * presented using italicized type, which is the original source of the <i>
 * naming of this element.
 */
class I extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::I, $text);
    }
}
