<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
    WithAlt,
    WithAutocapitalize,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithCoords,
    WithDir,
    WithDownload,
    WithDraggable,
    WithHidden,
    WithHref,
    WithHreflang,
    WithId,
    WithItemprop,
    WithLang,
    WithMedia,
    WithPing,
    WithReferrerpolicy,
    WithRel,
    WithRole,
    WithShape,
    WithSlot,
    WithSpellcheck,
    WithStyle,
    WithTabindex,
    WithTarget,
    WithTitle,
    WithTranslate
};
use PTML\Tag;

/**
 * The <area> HTML element defines an area inside an image map that has
 * predefined clickable areas. An image map allows geometric areas on an
 * image to be associated with Hyperlink.
 */
class Area extends Element
{
    use WithAccesskey,
        WithAlt,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithCoords,
        WithDir,
        WithDownload,
        WithDraggable,
        WithHidden,
        WithHref,
        WithHreflang,
        WithId,
        WithItemprop,
        WithLang,
        WithMedia,
        WithPing,
        WithReferrerpolicy,
        WithRel,
        WithRole,
        WithShape,
        WithSlot,
        WithSpellcheck,
        WithStyle,
        WithTabindex,
        WithTarget,
        WithTitle,
        WithTranslate;

    public function __construct()
    {
        parent::__construct(Tag::Area);
    }
}
