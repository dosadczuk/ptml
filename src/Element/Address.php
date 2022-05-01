<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <address> HTML element indicates that the enclosed HTML provides
 * contact information for a person or people, or for an organization.
 */
class Address extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Address, $text);
    }
}
