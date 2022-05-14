<?php
declare(strict_types=1);

namespace PTML;

final class AttributeConverter
{
    /**
     * Convert `mixed` attribute value to proper HTML attribute value.
     */
    public static function convert(mixed $value): string
    {
        return match (gettype($value)) {
            'boolean'           => self::convertBoolean($value),
            'integer', 'double' => self::convertNumber($value),
            'string'            => self::convertString($value),
            'array'             => self::convertArray($value),
            'object'            => self::convertObject($value),
            default             => throw new \RuntimeException('Invalid attribute value')
        };
    }

    private static function convertBoolean(bool $value): string
    {
        return '';
    }

    private static function convertNumber(int|float $value): string
    {
        return (string)$value;
    }

    private static function convertString(string $value): string
    {
        return $value;
    }

    private static function convertArray(array $values): string
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

    private static function convertObject(object $value): string
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
