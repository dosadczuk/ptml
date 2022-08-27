<?php
declare(strict_types=1);

namespace PTML;

final class QueryElementOne
{
    public function __construct(
        private ElementWithChildrenInterface $element
    ) {
    }

    /**
     * Find element by `uid`.
     */
    public function byUid(string $uid): ?ElementInterface
    {
        /** @var ElementInterface $child */
        foreach ($this->element->getChildren() as $child) {
            if ($child->is($uid)) {
                return $child;
            }
        }

        return null;
    }

    /**
     * Find element by `tag`.
     */
    public function byTag(Tag|string $tag): ?ElementInterface
    {
        /** @var ElementInterface $child */
        foreach ($this->element->getChildren() as $child) {
            if ($child->typeOf($tag)) {
                return $child;
            }
        }

        return null;
    }

    /**
     * Find element by `attribute`. If `value` is provided, compare `attribute` value with `given` value.
     */
    public function byAttr(AttributeInterface|string $attr, string $value = null): ?ElementInterface
    {
        /** @var ElementInterface $child */
        foreach ($this->element->getChildren() as $child) {
            if ($value !== null) {
                // if `value` is given, compare with value
                if ($this->element->attr($attr) === $value) {
                    return $child;
                }
            } else {
                // if `value` is not given, check if attribute exists
                if ($this->element->has($attr)) {
                    return $child;
                }
            }
        }

        return null;
    }
}
