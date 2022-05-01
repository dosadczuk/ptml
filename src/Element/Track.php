<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAutocapitalize,
	WithClazz,
	WithContenteditable,
	WithContextmenu,
	WithDefault,
	WithDir,
	WithDraggable,
	WithHidden,
	WithId,
	WithItemprop,
	WithKind,
	WithLabel,
	WithLang,
	WithRole,
	WithSlot,
	WithSpellcheck,
	WithSrc,
	WithSrclang,
	WithStyle,
	WithTabindex,
	WithTitle,
	WithTranslate
};
use PTML\Tag;

/**
 * The <track> HTML element is used as a child of the media elements, audio
 * and video. It lets you specify timed text tracks (or time-based data),
 * for example to automatically handle subtitles. The tracks are formatted
 * in WebVTT format (.vtt files) — Web Video Text Tracks.
 */
class Track extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithClazz,
		WithContenteditable,
		WithContextmenu,
		WithDefault,
		WithDir,
		WithDraggable,
		WithHidden,
		WithId,
		WithItemprop,
		WithKind,
		WithLabel,
		WithLang,
		WithRole,
		WithSlot,
		WithSpellcheck,
		WithSrc,
		WithSrclang,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate;

    public function __construct()
    {
        parent::__construct(Tag::Track);
    }
}
