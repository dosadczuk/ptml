<?php
declare(strict_types=1);

namespace PTML\Example\Component;

use PTML\Attr;
use PTML\Element;
use PTML\ElementInterface;
use PTML\Tag;

final class Lnk extends Element
{
    public function __construct(
        string $href,
        string $accent,
        \Stringable|string $text = ''
    ) {
        parent::__construct(Tag::A, $text);

        $this->with(Attr::Href, $href);
        $this->with(Attr::Clazz, "link-$accent");
    }

    public static function primary(
        string $href,
        \Stringable|string $text = ''
    ): self {
        return new self($href, 'primary', $text);
    }

    public static function success(
        string $href,
        \Stringable|string $text = ''
    ): self {
        return new self($href, 'success', $text);
    }

    public static function warning(
        string $href,
        \Stringable|string $text = ''
    ): self {
        return new self($href, 'warning', $text);
    }

    public function icon(ElementInterface $icon): self
    {
        $this->append($icon);

        return $this;
    }
}
