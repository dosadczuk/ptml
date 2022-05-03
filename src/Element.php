<?php
declare(strict_types=1);

namespace PTML;

class Element implements ElementInterface
{
    /**
     * Output element with given methods.
     */
    public readonly ElementOutput $output;

    /**
     * Unique identifier.
     */
    protected string $uid;

    /**
     * Element tag.
     */
    protected string $tag;

    /**
     * Set of element's attributes.
     */
    protected Attributes $attributes;

    public function __construct(Tag|string $tag)
    {
        if ($tag instanceof Tag) {
            $tag = $tag->value;
        }

        $this->output = new ElementOutput($this);
        $this->uid = uniqid('element-', more_entropy: false);
        $this->tag = $tag;
        $this->attributes = new Attributes();
    }

    public function uid(): string
    {
        return $this->uid;
    }

    public function is(string $uid): bool
    {
        return $this->uid === $uid;
    }

    public function tag(): string
    {
        return $this->tag;
    }

    public function typeOf(Tag|string $tag): bool
    {
        if ($tag instanceof Tag) {
            $tag = $tag->value;
        }

        return $this->tag === $tag;
    }

    public function attr(AttributeInterface|string $name): ?string
    {
        return $this->attributes->get($name);
    }

    public function attrs(): array
    {
        return $this->attributes->values();
    }

    public function with(AttributeInterface|string $attr, string $value, bool $append = true): static
    {
        $this->attributes->set($attr, $value, $append);

        return $this;
    }

    public function without(AttributeInterface|string $attr): static
    {
        $this->attributes->rem($attr);

        return $this;
    }

    public function has(AttributeInterface|string $attr): bool
    {
        return $this->attributes->has($attr);
    }

    public function equalsTo(ElementInterface $value): bool
    {
        return $this->uid() === $value->uid();
    }

    public function differsFrom(ElementInterface $value): bool
    {
        return $this->uid() !== $value->uid();
    }

    public function html(): string
    {
        return sprintf(
            '<%s%s%s />',
            $this->tag,
            $this->attributes->empty() ? '' : ' ',
            $this->attributes
        );
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
