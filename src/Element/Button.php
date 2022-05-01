<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <button> HTML element is an interactive element activated by a user
 * with a mouse, keyboard, finger, voice command, or other assistive
 * technology. Once activated, it then performs a programmable action, such
 * as submitting a form or opening a dialog.
 */
class Button extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Button, $text);
    }
}
