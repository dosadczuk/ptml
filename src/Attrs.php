<?php
declare(strict_types=1);

namespace PTML;

/**
 * @extends \ArrayObject<string, string>
 */
final class Attrs extends \ArrayObject
{
    public function __construct()
    {
        parent::__construct([], 0, \ArrayIterator::class);
    }

    /**
     * Check if attributes exist.
     */
    public function empty(): bool
    {
        return $this->count() === 0;
    }

    /**
     * Returns array of attributes.
     *
     * @return array<string, string>
     */
    public function values(): array
    {
        return $this->getArrayCopy();
    }

    /**
     * Sets given attribute or replaces if attribute is added already.
     */
    public function set(AttrInterface|string $attr, string $value, bool $append): void
    {
        if ($attr instanceof AttrInterface) {
            $attr = $attr->name();
        }

        // append only if attr exists, otherwise it's a new attr
        if ($append && $this->has($attr)) {
            $value = sprintf('%s %s', $this[$attr], $value);
        }

        $this[$attr] = trim($value);
    }

    /**
     * Returns attribute or NULL if not exists.
     */
    public function get(AttrInterface|string $attr): ?string
    {
        if ($attr instanceof AttrInterface) {
            $attr = $attr->name();
        }

        return $this[$attr] ?? null;
    }

    /**
     * Checks if attribute exists.
     */
    public function has(AttrInterface|string $attr): bool
    {
        if ($attr instanceof AttrInterface) {
            $attr = $attr->name();
        }

        return isset($this[$attr]);
    }

    /**
     * Removes given attribute.
     */
    public function del(AttrInterface|string $attr): void
    {
        if ($attr instanceof AttrInterface) {
            $attr = $attr->name();
        }

        unset($this[$attr]);
    }

    /**
     * Converts children to HTML.
     */
    public function html(): string
    {
        $output = [];
        foreach ($this as $name => $value) {
            $output[] = sprintf('%s="%s"', $name, $value);
        }

        return implode(' ', $output);
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
