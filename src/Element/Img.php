<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{WithAccesskey,
    WithAlign,
    WithAlt,
    WithAutocapitalize,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithCrossorigin,
    WithDecoding,
    WithDir,
    WithDraggable,
    WithHidden,
    WithId,
    WithImportance,
    WithIsmap,
    WithItemprop,
    WithLang,
    WithReferrerpolicy,
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
    WithUsemap,
    WithWidth};
use PTML\Tag;

/**
 * The <img> HTML element embeds an image into the document.
 */
class Img extends Element
{
    use WithAccesskey,
        WithAlign,
        WithAlt,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithCrossorigin,
        WithDecoding,
        WithDir,
        WithDraggable,
        WithHidden,
        WithId,
        WithImportance,
        WithIsmap,
        WithItemprop,
        WithLang,
        WithReferrerpolicy,
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
        WithUsemap,
        WithWidth;

    public function __construct()
    {
        parent::__construct(Tag::Img);
    }
}
