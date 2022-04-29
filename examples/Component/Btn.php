<?php
declare(strict_types=1);

namespace PTML\Example\Component;

use PTML\Attr;
use PTML\Element;
use PTML\ElementInterface;
use PTML\Tag;

final class Btn extends Element
{
    public function __construct(string $accent, \Stringable|string $text = '')
    {
        parent::__construct(Tag::Button, $text);

        $this->with(Attr::Clazz, "btn btn-$accent");
    }

    public static function primary(\Stringable|string $text = ''): self
    {
        return new self('primary', $text);
    }

    public static function success(\Stringable|string $text = ''): self
    {
        return new self('success', $text);
    }

    public static function warning(\Stringable|string $text = ''): self
    {
        return new self('warning', $text);
    }

    public function icon(ElementInterface $icon): self
    {
        $this->append($icon);

        return $this;
    }
}
