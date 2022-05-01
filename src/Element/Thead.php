<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <thead> HTML element defines a set of rows defining the head of the
 * columns of the table.
 */
class Thead extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Thead, $text);
    }
}
