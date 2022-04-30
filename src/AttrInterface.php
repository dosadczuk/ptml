<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML attribute.
 */
interface AttrInterface
{
    /**
     * Returns name of attribute.
     */
    public function name(): string;
}
