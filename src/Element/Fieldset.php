<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <fieldset> HTML element is used to group several controls as well as
 * labels (label) within a web form.
 */
class Fieldset extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Fieldset, $text);
    }
}
