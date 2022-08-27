<?php
declare(strict_types=1);

namespace PTML;

class ElementWithChildren extends Element implements ElementWithChildrenInterface
{
    /**
     * Query `one` element from children.
     */
    public readonly QueryElementOne $query_one;

    /**
     * Query `all` elements from children.
     */
    public readonly QueryElementAll $query_all;

    /**
     * Inner text.
     */
    protected string $text;

    /**
     * Set of element's children.
     */
    protected Children $children;

    public function __construct(Tag|string $tag, \Stringable|string $text = '')
    {
        parent::__construct($tag);

        $this->text = (string)$text;
        $this->children = new Children();
        $this->query_one = new QueryElementOne($this);
        $this->query_all = new QueryElementAll($this);
    }

    public function text(): string
    {
        return $this->text;
    }

    public function children(): array
    {
        return $this->children->values();
    }

    public function append(ElementInterface ...$children): static
    {
        $this->children->add($children);

        return $this;
    }

    public function remove(ElementInterface ...$children): static
    {
        $this->children->rem($children);

        return $this;
    }

    public function contains(ElementInterface $child): bool
    {
        return $this->children->has($child);
    }

    public function current(): ?ElementInterface
    {
        return $this->children->current();
    }

    public function next(): void
    {
        $this->children->next();
    }

    public function key(): string
    {
        return $this->children->key();
    }

    public function valid(): bool
    {
        return $this->children->valid();
    }

    public function rewind(): void
    {
        $this->children->rewind();
    }

    public function count(): int
    {
        return $this->children->count();
    }

    /**
     * @return \RecursiveIterator<int, ElementInterface>
     */
    public function getChildren(): \RecursiveIterator
    {
        return new \RecursiveArrayIterator($this->children());
    }

    public function hasChildren(): bool
    {
        return $this->children->empty() === false;
    }

    public function html(): string
    {
        return sprintf(
            '<%s%s%s>%s%s</%s>',
            $this->tag,
            $this->attributes->empty() ? '' : ' ',
            $this->attributes,
            $this->text,
            $this->children,
            $this->tag
        );
    }
}
