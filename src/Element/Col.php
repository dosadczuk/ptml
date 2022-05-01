<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <col> HTML element defines a column within a table and is used for
 * defining common semantics on all common cells. It is generally found
 * within a colgroup element.
 */
class Col extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Col);
    }
}
