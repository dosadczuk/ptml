<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <time> HTML element represents a specific period in time. It may
 * include the datetime attribute to translate dates into machine-readable
 * format, allowing for better search engine results or custom features
 * such as reminders.
 */
class Time extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Time, $text);
    }
}
