<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <textarea> HTML element represents a multi-line plain-text editing
 * control, useful when you want to allow users to enter a sizeable amount
 * of free-form text, for example a comment on a review or feedback form.
 */
class Textarea extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Textarea, $text);
    }
}
