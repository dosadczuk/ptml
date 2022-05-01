<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <slot> HTML element—part of the Web Components technology suite—is a
 * placeholder inside a web component that you can fill with your own
 * markup, which lets you create separate DOM trees and present them
 * together.
 */
class Slot extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Slot, $text);
    }
}