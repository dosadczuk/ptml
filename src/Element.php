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
     */
    private Attrs $_attrs;

    /**
     * Element's children.
     */
    private Children $_children;

    public function __construct(Tag $tag, \Stringable|string $text = '')
    {
        $this->_uid = uniqid('element', more_entropy: true);
        $this->_tag = $tag;
        $this->_text = (string)$text;
        $this->_attrs = new Attrs();
        $this->_children = new Children();
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
        return $this->_attrs->values();
    }

    public function attr(AttrInterface|string $name): ?string
    {
        return $this->_attrs->get($name);
    }

    public function with(AttrInterface|string $name, string $value = ''): static
    {
        $this->_attrs->set($name, $value);

        return $this;
    }

    public function exists(AttrInterface|string $name): bool
    {
        return $this->_attrs->has($name);
    }

    public function without(AttrInterface|string $name): static
    {
        $this->_attrs->del($name);

        return $this;
    }

    /**
     * @return ElementInterface[]
     */
    public function children(): array
    {
        return $this->_children->values();
    }

    public function append(ElementInterface ...$children): static
    {
        $this->_children->add(...$children);

        return $this;
    }

    public function remove(ElementInterface ...$children): static
    {
        $this->_children->del(...$children);

        return $this;
    }

    public function contains(ElementInterface $child): bool
    {
        return $this->_children->has($child);
    }

    public function html(): string
    {
        if ($this->_tag->isSelfClosing()) {
            return sprintf(
                '<%s%s%s />',
                $this->tag(),
                $this->_attrs->empty() ? '' : ' ',
                $this->_attrs
            );
        }

        return sprintf(
            '<%s%s%s>%s%s</%s>',
            $this->tag(),
            $this->_attrs->empty() ? '' : ' ',
            $this->_attrs,
            $this->text(),
            $this->_children,
            $this->tag()
        );
    }

    /**
     * @return \RecursiveIterator<int, ElementInterface>|null
     */
    public function getChildren(): ?\RecursiveIterator
    {
        return new \RecursiveArrayIterator($this->children());
    }

    public function hasChildren(): bool
    {
        return !$this->_children->empty();
    }

    public function current(): ?ElementInterface
    {
        return $this->_children->current();
    }

    public function next(): void
    {
        $this->_children->next();
    }

    public function key(): string
    {
        return $this->_children->key();
    }

    public function valid(): bool
    {
        return $this->_children->valid();
    }

    public function rewind(): void
    {
        $this->_children->rewind();
    }

    public function count(): int
    {
        return $this->_children->count();
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
