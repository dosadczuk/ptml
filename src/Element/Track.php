<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <track> HTML element is used as a child of the media elements, audio
 * and video. It lets you specify timed text tracks (or time-based data),
 * for example to automatically handle subtitles. The tracks are formatted
 * in WebVTT format (.vtt files) — Web Video Text Tracks.
 */
class Track extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Track);
    }
}
