<?php
declare(strict_types=1);

namespace PTML\CLI\Helper;

final class IO
{
    public static function saveToSource(string $file_name, string $file_contents, string $sub_dir = null): void
    {
        $directory = __DIR__ . '/../../src';
        if ($sub_dir !== null) {
            $directory .= '/' . $sub_dir;
        }

        if (!is_dir($directory) && !mkdir($directory, 0665, true) && !is_dir($directory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $directory));
        }

        if (file_put_contents($directory . '/' . $file_name, $file_contents) === false) {
            throw new \RuntimeException(sprintf('File "%s" was not created', $file_name));
        }
    }
}
