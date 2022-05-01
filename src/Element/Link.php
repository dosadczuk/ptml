<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{WithAccesskey,
    WithAutocapitalize,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithCrossorigin,
    WithDir,
    WithDraggable,
    WithHidden,
    WithHref,
    WithHreflang,
    WithId,
    WithImportance,
    WithIntegrity,
    WithItemprop,
    WithLang,
    WithMedia,
    WithReferrerpolicy,
    WithRel,
    WithRole,
    WithSizes,
    WithSlot,
    WithSpellcheck,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate,
    WithType};
use PTML\Tag;

/**
 * The <link> HTML element specifies relationships between the current
 * document and an external resource. This element is most commonly used to
 * link to CSS, but is also used to establish site icons (both "favicon"
 * style icons and icons for the home screen and apps on mobile devices)
 * among other things.
 */
class Link extends Element
{
    use WithAccesskey,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithCrossorigin,
        WithDir,
        WithDraggable,
        WithHidden,
        WithHref,
        WithHreflang,
        WithId,
        WithImportance,
        WithIntegrity,
        WithItemprop,
        WithLang,
        WithMedia,
        WithReferrerpolicy,
        WithRel,
        WithRole,
        WithSizes,
        WithSlot,
        WithSpellcheck,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate,
        WithType;

    public function __construct()
    {
        parent::__construct(Tag::Link);
    }
}
