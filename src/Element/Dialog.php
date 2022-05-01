<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <dialog> HTML element represents a dialog box or other interactive
 * component, such as a dismissible alert, inspector, or subwindow.
 */
class Dialog extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Dialog, $text);
    }
}
