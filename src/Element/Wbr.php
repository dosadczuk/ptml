<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <wbr> HTML element represents a word break opportunity—a position
 * within text where the browser may optionally break a line, though its
 * line-breaking rules would not otherwise create a break at that location.
 */
class Wbr extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Wbr);
    }
}
