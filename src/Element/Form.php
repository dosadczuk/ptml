<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <form> HTML element represents a document section containing
 * interactive controls for submitting information.
 */
class Form extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Form, $text);
    }
}
