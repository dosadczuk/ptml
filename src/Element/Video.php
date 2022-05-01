<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <video> HTML element embeds a media player which supports video
 * playback into the document. You can use video> for audio content as
 * well, but the audio element may provide a more appropriate user
 * experience.
 */
class Video extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Video, $text);
    }
}
