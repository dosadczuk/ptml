<?php
declare(strict_types=1);

namespace PTML;

/**
 * @extends \ArrayObject<string, string>
 */
final class Attributes extends \ArrayObject
{
    private AttributesConverter $converter;

    /**
     * @param array<string, string> $values
     */
    public function __construct(array $values = [])
    {
        parent::__construct($values);

        $this->converter = new AttributesConverter();
    }

    /**
     * Checks if attributes exist.
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
        return (array)$this;
    }

    /**
     * Returns attribute or NULL if not exists.
     */
    public function get(AttributeInterface|string $attr): ?string
    {
        if ($attr instanceof AttributeInterface) {
            $attr = $attr->name();
        }

        return $this[$attr] ?? null;
    }

    /**
     * Sets attribute or replaces if attribute is added already.
     */
    public function set(AttributeInterface|string $attr, mixed $value): void
    {
        if ($attr instanceof AttributeInterface) {
            $attr = $attr->name();
        }

        $this[$attr] = $this->converter->convert($value);
    }

    /**
     * Checks if attribute exists.
     */
    public function has(AttributeInterface|string $attr): bool
    {
        if ($attr instanceof AttributeInterface) {
            $attr = $attr->name();
        }

        return isset($this[$attr]);
    }

    /**
     * Removes given attribute.
     */
    public function delete(AttributeInterface|string $attr): void
    {
        if ($attr instanceof AttributeInterface) {
            $attr = $attr->name();
        }

        unset($this[$attr]);
    }

    /**
     * Converts children to HTML.
     */
    public function html(): string
    {
        $attributes = [];

        /**
         * @var string $name
         * @var string $value
         */
        foreach ($this as $name => $value) {
            $attributes[] = sprintf('%s="%s"', $name, $value);
        }

        return implode(' ', $attributes);
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
