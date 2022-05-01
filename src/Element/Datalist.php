<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <datalist> HTML element contains a set of option elements that
 * represent the permissible or recommended options available to choose
 * from within other controls.
 */
class Datalist extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Datalist, $text);
    }
}
