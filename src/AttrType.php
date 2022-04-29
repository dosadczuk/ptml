<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML attribute value type.
 */
enum AttrType
{
    /**
     * Attribute without value, e.g. `href="localhost:8080"`.
     */
    case String;

    /**
     * Attribute without value, e.g. `minlength="10"`.
     */
    case Int;

    /**
     * Attribute without value, e.g. `min="2.0"`.
     */
    case Float;

    /**
     * Attribute without value, e.g. `disabled`.
     */
    case Bool;

    /**
     * Attribute without value, e.g. `accept="image/*,.pdf"`.
     */
    case Array;
}
