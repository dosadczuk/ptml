<?php
declare(strict_types=1);

namespace PTML;

final class QueryElementAll
{
    public function __construct(
        private ElementWithChildrenInterface $element
    ) {
    }

    /**
     * Find elements by `tag`.
     *
     * @return ElementInterface[]
     */
    public function byTag(Tag|string $tag): array
    {
        $elements = [];

        /** @var ElementInterface $child */
        foreach ($this->element->getChildren() as $child) {
            if ($child->typeOf($tag)) {
                $elements[] = $child;
            }
        }

        return $elements;
    }

    /**
     * Find elements by `attribute`. If `value` is provided, compare `attribute` value with `given` value.
     *
     * @return ElementInterface[]
     */
    public function byAttr(AttributeInterface|string $attr, string $value = null): array
    {
        $elements = [];

        /** @var ElementInterface $child */
        foreach ($this->element->getChildren() as $child) {
            if ($value !== null) {
                // if `value` is given, compare with value
                if ($this->element->attr($attr) === $value) {
                    $elements[] = $child;
                }
            } else {
                // if `value` is not given, check if attribute exists
                if ($this->element->has($attr)) {
                    $elements[] = $child;
                }
            }
        }

        return $elements;
    }
}
