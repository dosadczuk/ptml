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

    public function empty(): bool
    {
        return $this->count() === 0;
    }

    public function values(): array
    {
        return $this->getArrayCopy();
    }

    public function get(AttrInterface|string $name): ?string
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        return $this[$name] ?? null;
    }

    public function set(AttrInterface|string $name, string $value): void
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        $this[$name] = $value;
    }

    public function has(AttrInterface|string $name): bool
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        return isset($this[$name]);
    }

    public function del(AttrInterface|string $name): void
    {
        if ($name instanceof AttrInterface) {
            $name = $name->name();
        }

        unset($this[$name]);
    }

    public function __toString(): string
    {
        $output = [];
        foreach ($this as $name => $value) {
            $output[] = sprintf('%s="%s"', $name, $value);
        }

        return implode(' ', $output);
    }
}
