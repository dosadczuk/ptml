<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <table> HTML element represents tabular data — that is, information
 * presented in a two-dimensional table comprised of rows and columns of
 * cells containing data.
 */
class Table extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Table, $text);
    }
}
