<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML standard attribute.
 */
enum Attr: string implements AttrInterface
{
    public function getType(): AttrType
    {
        // TODO: Implement getType() method.
    }

    public function getName(): string
    {
        return strtolower($this->value);
    }
}
