<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{WithAccesskey,
    WithAutocapitalize,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithDir,
    WithDraggable,
    WithHidden,
    WithId,
    WithItemprop,
    WithLang,
    WithMedia,
    WithRole,
    WithSizes,
    WithSlot,
    WithSpellcheck,
    WithSrc,
    WithSrcset,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate,
    WithType};
use PTML\Tag;

/**
 * The <source> HTML element specifies multiple media resources for the
 * picture, the audio element, or the video element. It is an empty
 * element, meaning that it has no content and does not have a closing tag.
 */
class Source extends Element
{
    use WithAccesskey,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithDir,
        WithDraggable,
        WithHidden,
        WithId,
        WithItemprop,
        WithLang,
        WithMedia,
        WithRole,
        WithSizes,
        WithSlot,
        WithSpellcheck,
        WithSrc,
        WithSrcset,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate,
        WithType;

    public function __construct()
    {
        parent::__construct(Tag::Source);
    }
}
