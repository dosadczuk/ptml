<?php
declare(strict_types=1);

namespace PTML;

class Element implements ElementInterface
{
    /**
     * Unique identifier.
     */
    private string $_uid;

    /**
     * HTML tag.
     */
    private Tag $_tag;

    /**
     * Inner text.
     */
    private string $_text;

    /**
     * HTML attributes.
     *
     * @var array<string, string>
     */
    private array $attributes = [];

    /**
     * Element's children.
     *
     * @var ElementInterface[]
     */
    private array $_children = [];

    /**
     * Iteration current position.
     */
    private int $_position = 0;

    public function __construct(Tag $tag, \Stringable|string $text = '')
    {
        $this->_uid = uniqid('element', more_entropy: true);
        $this->_tag = $tag;
        $this->_text = (string)$text;
    }

    public function uid(): string
    {
        return $this->_uid;
    }

    public function tag(): string
    {
        return $this->_tag->value;
    }

    public function text(): string
    {
        return $this->_text;
    }

    public function attrs(): array
    {
        return $this->attributes;
    }

    public function attr(AttrInterface|string $name): mixed
    {
        if ($name instanceof AttrInterface) {
            $name = $name->getName();
        }

        return $this->attributes[$name] ?? null;
    }

    public function with(AttrInterface|string $name, string $value = ''): static
    {
        if ($name instanceof AttrInterface) {
            $name = $name->getName();
        }

        $this->attributes[$name] = $value;

        return $this;
    }

    public function without(AttrInterface|string $name): static
    {
        if ($name instanceof AttrInterface) {
            $name = $name->getName();
        }

        unset($this->attributes[$name]);

        return $this;
    }

    /**
     * @return ElementInterface[]
     */
    public function children(): array
    {
        return $this->_children;
    }

    public function exists(ElementInterface $child): bool
    {
        foreach ($this->_children as $_child) {
            if ($_child->uid() === $child->uid()) {
                return true;
            }
        }

        return false;
    }

    public function append(ElementInterface ...$children): static
    {
        $this->_children = array_merge($this->_children, $children);

        return $this;
    }

    public function remove(ElementInterface ...$children): static
    {
        $this->_children = array_udiff($this->_children, $children,
            function (ElementInterface $a, ElementInterface $b): int {
                return strcmp($a->uid(), $b->uid());
            }
        );

        return $this;
    }

    public function html(): string
    {
        $attributes = [];
        foreach ($this->attributes as $name => $value) {
            $attributes[] = sprintf('%s="%s"', $name, $value);
        }
        $attributes = implode(' ', $attributes);

        if ($this->_tag->isSelfClosing()) {
            return sprintf('<%s %s />', $this->tag(), $attributes);
        }

        $children = [];
        foreach ($this->_children as $child) {
            $children[] = $child->html();
        }
        $children = implode(' ', $children);

        return sprintf(
            '<%s %s>%s%s</%s>',
            $this->tag(),
            $attributes,
            $this->text(),
            $children,
            $this->tag()
        );
    }

    public function getChildren(): ?\RecursiveIterator
    {
        return new \RecursiveArrayIterator($this->_children);
    }

    public function hasChildren(): bool
    {
        return $this->count() > 0;
    }

    public function current(): ?ElementInterface
    {
        return $this->_children[$this->_position] ?? null;
    }

    public function next(): void
    {
        $this->_position++;
    }

    public function key(): int
    {
        return $this->_position;
    }

    public function valid(): bool
    {
        return isset($this->_children[$this->_position]);
    }

    public function rewind(): void
    {
        $this->_position = 0;
    }

    public function count(): int
    {
        return count($this->_children);
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
