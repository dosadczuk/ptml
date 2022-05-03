<?php
declare(strict_types=1);

namespace PTML;

final class ElementSearch
{
    public function __construct(
        private ElementWithChildrenInterface $element
    ) {
    }

    /**
     * Finds first match of element with given uid.
     */
    public function findByUid(string $uid): ?ElementInterface
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
     * Finds first match of element with given tag.
     */
    public function findByTag(Tag|string $tag): ?ElementInterface
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
     * Finds first match of element with given attribute.
     */
    public function findByAttr(AttributeInterface|string $attr): ?ElementInterface
    {
        /** @var ElementInterface $child */
        foreach ($this->element->getChildren() as $child) {
            if ($child->has($attr)) {
                return $child;
            }
        }

        return null;
    }
}
