<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAutocapitalize,
	WithAutoplay,
	WithBuffered,
	WithClazz,
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
	WithPoster,
	WithPreload,
	WithRole,
	WithSlot,
	WithSpellcheck,
	WithSrc,
	WithStyle,
	WithTabindex,
	WithTitle,
	WithTranslate,
	WithWidth
};
use PTML\Tag;

/**
 * The <video> HTML element embeds a media player which supports video
 * playback into the document. You can use video> for audio content as
 * well, but the audio element may provide a more appropriate user
 * experience.
 */
class Video extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithAutoplay,
		WithBuffered,
		WithClazz,
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
		WithPoster,
		WithPreload,
		WithRole,
		WithSlot,
		WithSpellcheck,
		WithSrc,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate,
		WithWidth;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Video, $text);
    }
}
