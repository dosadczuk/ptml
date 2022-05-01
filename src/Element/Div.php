<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <div> HTML element is the generic container for flow content. It has
 * no effect on the content or layout until styled in some way using CSS
 * (e.g. styling is directly applied to it, or some kind of layout model
 * like Flexbox is applied to its parent element).
 */
class Div extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Div, $text);
    }
}
