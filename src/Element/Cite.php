<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <cite> HTML element is used to describe a reference to a cited
 * creative work, and must include the title of that work. The reference
 * may be in an abbreviated form according to context-appropriate
 * conventions related to citation metadata.
 */
class Cite extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Cite, $text);
    }
}
