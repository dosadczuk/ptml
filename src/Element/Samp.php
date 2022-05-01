<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <samp> HTML element is used to enclose inline text which represents
 * sample (or quoted) output from a computer program. Its contents are
 * typically rendered using the browser's default monospaced font (such as
 * Courier or Lucida Console).
 */
class Samp extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Samp, $text);
    }
}
