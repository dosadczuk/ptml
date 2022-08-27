<?php
declare(strict_types=1);

namespace PTML;

/**
 * @internal
 */
final class AttributesConverter
{
    /**
     * Convert `mixed` attribute value to proper HTML attribute value.
     */
    public function convert(mixed $value): string
    {
        return match (gettype($value)) {
            'boolean'           => $this->convertBoolean($value),
            'integer', 'double' => $this->convertNumber($value),
            'string'            => $this->convertString($value),
            'array'             => $this->convertArray($value),
            'object'            => $this->convertObject($value),
            default             => throw new \RuntimeException('Invalid attribute value')
        };
    }

    private function convertBoolean(bool $value): string
    {
        return '';
    }

    private function convertNumber(int|float $value): string
    {
        return (string)$value;
    }

    private function convertString(string $value): string
    {
        return $value;
    }

    private function convertArray(array $values): string
    {
        if (!array_is_list($values)) {
            // convert `map` to `string`
            $output = [];
            foreach ($values as $key => $value) {
                $output[] = sprintf('%s:%s', $key, $value);
            }

            return implode(';', $output);
        }

        // convert `list` to `string`
        return implode(',', $values);
    }

    private function convertObject(object $value): string
    {
        if ($value instanceof \DateTimeInterface) {
            return $value->format('Y-m-d\TH:i:s');
        }

        if ($value instanceof \Stringable) {
            return (string)$value;
        }

        return serialize($value);
    }
}
