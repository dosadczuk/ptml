<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <rt> HTML element specifies the ruby text component of a ruby
 * annotation, which is used to provide pronunciation, translation, or
 * transliteration information for East Asian typography. The <rt> element
 * must always be contained within a ruby element.
 */
class Rt extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Rt, $text);
    }
}