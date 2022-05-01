<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <progress> HTML element displays an indicator showing the completion
 * progress of a task, typically displayed as a progress bar.
 */
class Progress extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Progress, $text);
    }
}
