<?php
declare(strict_types=1);

namespace PTML\Test\Stub;

use PTML\Element;
use PTML\Tag;

class Anchor extends Element
{
    public function __construct(string $text)
    {
        parent::__construct(Tag::A, $text);
    }
}
