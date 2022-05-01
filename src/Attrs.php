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
    public function set(AttrInterface|string $name, string $value): void
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        $this[$name] = $value;
    }

    /**
     * Returns attribute or NULL if not exists.
     */
    public function get(AttrInterface|string $name): ?string
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        return $this[$name] ?? null;
    }

    /**
     * Checks if attribute exists.
     */
    public function has(AttrInterface|string $name): bool
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        return isset($this[$name]);
    }

    /**
     * Removes given attribute.
     */
    public function del(AttrInterface|string $name): void
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        unset($this[$name]);
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
