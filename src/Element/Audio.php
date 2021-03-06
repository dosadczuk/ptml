<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element\Concern\{
    WithAccesskey,
    WithAutocapitalize,
    WithAutoplay,
    WithBuffered,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithControls,
    WithCrossorigin,
    WithDir,
    WithDraggable,
    WithHidden,
    WithId,
    WithItemprop,
    WithLang,
    WithLoop,
    WithMuted,
    WithPreload,
    WithRole,
    WithSlot,
    WithSpellcheck,
    WithSrc,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate
};
use PTML\ElementWithChildren;
use PTML\Tag;

/**
 * The <audio> HTML element is used to embed sound content in documents. It
 * may contain one or more audio sources, represented using the src
 * attribute or the source element: the browser will choose the most
 * suitable one. It can also be the destination for streamed media, using a
 * MediaStream.
 */
class Audio extends ElementWithChildren
{
    use WithAccesskey,
        WithAutocapitalize,
        WithAutoplay,
        WithBuffered,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithControls,
        WithCrossorigin,
        WithDir,
        WithDraggable,
        WithHidden,
        WithId,
        WithItemprop,
        WithLang,
        WithLoop,
        WithMuted,
        WithPreload,
        WithRole,
        WithSlot,
        WithSpellcheck,
        WithSrc,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Audio, $text);
    }
}
