<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <hr> HTML element represents a thematic break between
 * paragraph-level elements: for example, a change of scene in a story, or
 * a shift of topic within a section.
 */
class Hr extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Hr);
    }
}
