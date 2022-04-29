<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML attribute.
 */
interface AttrInterface
{
    /**
     * Returns type of attribute.
     */
    public function getType(): AttrType;

    /**
     * Returns name of attribute.
     */
    public function getName(): string;
}
