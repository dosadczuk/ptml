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

    /**
     * Iteration current position.
     */
    private int $_position = 0;

    public function __construct(Tag $tag, \Stringable|string $text = '') // TODO: Maybe replace $text with child
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
        // TODO: Maybe throw exception if tag is self-closing
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
            if ($this->_attrs->empty()) {
                return sprintf('<%s />', $this->tag());
            }

            return sprintf('<%s %s />', $this->tag(), $this->_attrs);
        }

        if ($this->_attrs->empty()) {
            return sprintf(
                '<%s>%s%s</%s>',
                $this->tag(),
                $this->text(),
                $this->_children,
                $this->tag()
            );
        }

        return sprintf(
            '<%s %s>%s%s</%s>',
            $this->tag(),
            $this->_attrs,
            $this->text(),
            $this->_children,
            $this->tag()
        );
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
