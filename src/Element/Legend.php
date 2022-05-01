<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <legend> HTML element represents a caption for the content of its
 * parent fieldset.
 */
class Legend extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Legend, $text);
    }
}
