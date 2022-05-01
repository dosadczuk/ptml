<?php
declare(strict_types=1);

namespace PTML;

final class ElementOutput
{
    public function __construct(
        private ElementInterface $element
    ) {
    }

    /**
     * Output element to given file path.
     */
    public function toFile(string $file_path): bool
    {
        return file_put_contents($file_path, $this->element->html()) !== false;
    }

    /**
     * Output element to standard output.
     */
    public function toStdOut(): void
    {
        print $this->element;
    }
}
