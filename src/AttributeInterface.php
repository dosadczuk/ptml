<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML attribute.
 */
interface AttributeInterface
{
    /**
     * Returns name of attribute.
     */
    public function name(): string;
}
