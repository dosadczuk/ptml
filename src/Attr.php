<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML standard attribute.
 */
enum Attr: string implements AttrInterface
{
    /**
     * Specifies the types of files that the server accepts (only for type="file").
     */
    case Accept = 'accept';

    /**
     * Specifies the character encodings that are to be used for the form submission.
     */
    case AcceptCharset = 'accept-charset';

    /**
     * Specifies a shortcut key to activate/focus an element.
     */
    case Accesskey = 'accesskey';

    /**
     * Specifies where to send the form-data when a form is submitted.
     */
    case Action = 'action';

    /**
     * Specifies an alternate text when the original element fails to display.
     */
    case Alt = 'alt';

    /**
     * Specifies that the script is executed asynchronously (only for external scripts).
     */
    case Async = 'async';

    /**
     * Specifies whether the <form> or the <input> element should have autocomplete enabled.
     */
    case Autocomplete = 'autocomplete';

    /**
     * Specifies that the element should automatically get focus when the page loads.
     */
    case Autofocus = 'autofocus';

    /**
     * Specifies that the audio/video will start playing as soon as it is ready.
     */
    case Autoplay = 'autoplay';

    /**
     * Specifies the character encoding.
     */
    case Charset = 'charset';

    /**
     * Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio").
     */
    case Checked = 'checked';

    /**
     * Specifies a URL which explains the quote/deleted/inserted text.
     */
    case Cite = 'cite';

    /**
     * Specifies one or more classnames for an element (refers to a class in a style sheet).
     */
    case Clazz = 'class';

    /**
     * Specifies the visible width of a text area.
     */
    case Cols = 'cols';

    /**
     * Specifies the number of columns a table cell should span.
     */
    case Colspan = 'colspan';

    /**
     * Gives the value associated with the http-equiv or name attribute.
     */
    case Content = 'content';

    /**
     * Specifies whether the content of an element is editable or not.
     */
    case Contenteditable = 'contenteditable';

    /**
     * Specifies that audio/video controls should be displayed (such as a play/pause button etc).
     */
    case Controls = 'controls';

    /**
     * Specifies the coordinates of the area.
     */
    case Coords = 'coords';

    /**
     * Specifies the URL of the resource to be used by the object.
     */
    case Data = 'data';

    /**
     * Specifies the date and time.
     */
    case Datetime = 'datetime';

    /**
     * Specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate.
     */
    case Default = 'default';

    /**
     * Specifies that the script is executed when the page has finished parsing (only for external scripts).
     */
    case Defer = 'defer';

    /**
     * Specifies the text direction for the content in an element.
     */
    case Dir = 'dir';

    /**
     * Specifies that the text direction will be submitted.
     */
    case Dirname = 'dirname';

    /**
     * Specifies that the specified element/group of elements should be disabled.
     */
    case Disabled = 'disabled';

    /**
     * Specifies that the target will be downloaded when a user clicks on the hyperlink.
     */
    case Download = 'download';

    /**
     * Specifies whether an element is draggable or not.
     */
    case Draggable = 'draggable';

    /**
     * Specifies how the form-data should be encoded when submitting it to the server (only for method="post").
     */
    case Enctype = 'enctype';

    /**
     * Specifies which form element(s) a label/calculation is bound to.
     */
    case For = 'for';

    /**
     * Specifies the name of the form the element belongs to.
     */
    case Form = 'form';

    /**
     * Specifies where to send the form-data when a form is submitted. Only for type="submit".
     */
    case Formaction = 'formaction';

    /**
     * Specifies one or more headers cells a cell is related to.
     */
    case Headers = 'headers';

    /**
     * Specifies the height of the element.
     */
    case Height = 'height';

    /**
     * Specifies that an element is not yet, or is no longer, relevant.
     */
    case Hidden = 'hidden';

    /**
     * Specifies the range that is considered to be a high value.
     */
    case High = 'high';

    /**
     * Specifies the URL of the page the link goes to.
     */
    case Href = 'href';

    /**
     * Specifies the language of the linked document.
     */
    case Hreflang = 'hreflang';

    /**
     * Provides an HTTP header for the information/value of the content attribute.
     */
    case HttpEquiv = 'http-equiv';

    /**
     * Specifies a unique id for an element.
     */
    case Id = 'id';

    /**
     * Specifies an image as a server-side image map.
     */
    case Ismap = 'ismap';

    /**
     * Specifies the kind of text track.
     */
    case Kind = 'kind';

    /**
     * Specifies the title of the text track.
     */
    case Label = 'label';

    /**
     * Specifies the language of the element's content.
     */
    case Lang = 'lang';

    /**
     * Refers to a <datalist> element that contains pre-defined options for an <input> element.
     */
    case List = 'list';

    /**
     * Specifies that the audio/video will start over again, every time it is finished.
     */
    case Loop = 'loop';

    /**
     * Specifies the range that is considered to be a low value.
     */
    case Low = 'low';

    /**
     * Specifies the maximum value.
     */
    case Max = 'max';

    /**
     * Specifies the maximum number of characters allowed in an element.
     */
    case Maxlength = 'maxlength';

    /**
     * Specifies the minimum number of characters allowed in an element.
     */
    case Minlength = 'minlength';

    /**
     * Specifies what media/device the linked document is optimized for.
     */
    case Media = 'media';

    /**
     * Specifies the HTTP method to use when sending form-data.
     */
    case Method = 'method';

    /**
     * Specifies a minimum value.
     */
    case Min = 'min';

    /**
     * Specifies that a user can enter more than one value.
     */
    case Multiple = 'multiple';

    /**
     * Specifies that the audio output of the video should be muted.
     */
    case Muted = 'muted';

    /**
     * Specifies the name of the element.
     */
    case Name = 'name';

    /**
     * Specifies that the form should not be validated when submitted.
     */
    case Novalidate = 'novalidate';

    /**
     * Script to be run on abort.
     */
    case Onabort = 'onabort';

    /**
     * Script to be run after the document is printed.
     */
    case Onafterprint = 'onafterprint';

    /**
     * Script to be run before the document is printed.
     */
    case Onbeforeprint = 'onbeforeprint';

    /**
     * Script to be run when the document is about to be unloaded.
     */
    case Onbeforeunload = 'onbeforeunload';

    /**
     * Script to be run when the element loses focus.
     */
    case Onblur = 'onblur';

    /**
     * Script to be run when a file is ready to start playing (when it has buffered enough to begin).
     */
    case Oncanplay = 'oncanplay';

    /**
     * Script to be run when a file can be played all the way to the end without pausing for buffering.
     */
    case Oncanplaythrough = 'oncanplaythrough';

    /**
     * Script to be run when the value of the element is changed.
     */
    case Onchange = 'onchange';

    /**
     * Script to be run when the element is being clicked.
     */
    case Onclick = 'onclick';

    /**
     * Script to be run when a context menu is triggered.
     */
    case Oncontextmenu = 'oncontextmenu';

    /**
     * Script to be run when the content of the element is being copied.
     */
    case Oncopy = 'oncopy';

    /**
     * Script to be run when the cue changes in a <track> element.
     */
    case Oncuechange = 'oncuechange';

    /**
     * Script to be run when the content of the element is being cut.
     */
    case Oncut = 'oncut';

    /**
     * Script to be run when the element is being double-clicked.
     */
    case Ondblclick = 'ondblclick';

    /**
     * Script to be run when the element is being dragged.
     */
    case Ondrag = 'ondrag';

    /**
     * Script to be run at the end of a drag operation.
     */
    case Ondragend = 'ondragend';

    /**
     * Script to be run when an element has been dragged to a valid drop target.
     */
    case Ondragenter = 'ondragenter';

    /**
     * Script to be run when an element leaves a valid drop target.
     */
    case Ondragleave = 'ondragleave';

    /**
     * Script to be run when an element is being dragged over a valid drop target.
     */
    case Ondragover = 'ondragover';

    /**
     * Script to be run at the start of a drag operation.
     */
    case Ondragstart = 'ondragstart';

    /**
     * Script to be run when dragged element is being dropped.
     */
    case Ondrop = 'ondrop';

    /**
     * Script to be run when the length of the media changes.
     */
    case Ondurationchange = 'ondurationchange';

    /**
     * Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects).
     */
    case Onemptied = 'onemptied';

    /**
     * Script to be run when the media has reach the end (a useful event for messages like "thanks for listening").
     */
    case Onended = 'onended';

    /**
     * Script to be run when an error occurs.
     */
    case Onerror = 'onerror';

    /**
     * Script to be run when the element gets focus.
     */
    case Onfocus = 'onfocus';

    /**
     * Script to be run when there has been changes to the anchor part of the a URL.
     */
    case Onhashchange = 'onhashchange';

    /**
     * Script to be run when the element gets user input.
     */
    case Oninput = 'oninput';

    /**
     * Script to be run when the element is invalid.
     */
    case Oninvalid = 'oninvalid';

    /**
     * Script to be run when a user is pressing a key.
     */
    case Onkeydown = 'onkeydown';

    /**
     * Script to be run when a user presses a key.
     */
    case Onkeypress = 'onkeypress';

    /**
     * Script to be run when a user releases a key.
     */
    case Onkeyup = 'onkeyup';

    /**
     * Script to be run when the element is finished loading.
     */
    case Onload = 'onload';

    /**
     * Script to be run when media data is loaded.
     */
    case Onloadeddata = 'onloadeddata';

    /**
     * Script to be run when metadata (like dimensions and duration) are loaded.
     */
    case Onloadedmetadata = 'onloadedmetadata';

    /**
     * Script to be run just as the file begins to load before anything is actually loaded.
     */
    case Onloadstart = 'onloadstart';

    /**
     * Script to be run when a mouse button is pressed down on an element.
     */
    case Onmousedown = 'onmousedown';

    /**
     * Script to be run as long as the  mouse pointer is moving over an element.
     */
    case Onmousemove = 'onmousemove';

    /**
     * Script to be run when a mouse pointer moves out of an element.
     */
    case Onmouseout = 'onmouseout';

    /**
     * Script to be run when a mouse pointer moves over an element.
     */
    case Onmouseover = 'onmouseover';

    /**
     * Script to be run when a mouse button is released over an element.
     */
    case Onmouseup = 'onmouseup';

    /**
     * Script to be run when a mouse wheel is being scrolled over an element.
     */
    case Onmousewheel = 'onmousewheel';

    /**
     * Script to be run when the browser starts to work offline.
     */
    case Onoffline = 'onoffline';

    /**
     * Script to be run when the browser starts to work online.
     */
    case Ononline = 'ononline';

    /**
     * Script to be run when a user navigates away from a page.
     */
    case Onpagehide = 'onpagehide';

    /**
     * Script to be run when a user navigates to a page.
     */
    case Onpageshow = 'onpageshow';

    /**
     * Script to be run when the user pastes some content in an element.
     */
    case Onpaste = 'onpaste';

    /**
     * Script to be run when the media is paused either by the user or programmatically.
     */
    case Onpause = 'onpause';

    /**
     * Script to be run when the media has started playing.
     */
    case Onplay = 'onplay';

    /**
     * Script to be run when the media has started playing.
     */
    case Onplaying = 'onplaying';

    /**
     * Script to be run when the window's history changes..
     */
    case Onpopstate = 'onpopstate';

    /**
     * Script to be run when the browser is in the process of getting the media data.
     */
    case Onprogress = 'onprogress';

    /**
     * Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode)..
     */
    case Onratechange = 'onratechange';

    /**
     * Script to be run when a reset button in a form is clicked..
     */
    case Onreset = 'onreset';

    /**
     * Script to be run when the browser window is being resized..
     */
    case Onresize = 'onresize';

    /**
     * Script to be run when an element's scrollbar is being scrolled.
     */
    case Onscroll = 'onscroll';

    /**
     * Script to be run when the user writes something in a search field (for <input="search">).
     */
    case Onsearch = 'onsearch';

    /**
     * Script to be run when the seeking attribute is set to false indicating that seeking has ended.
     */
    case Onseeked = 'onseeked';

    /**
     * Script to be run when the seeking attribute is set to true indicating that seeking is active.
     */
    case Onseeking = 'onseeking';

    /**
     * Script to be run when the element gets selected.
     */
    case Onselect = 'onselect';

    /**
     * Script to be run when the browser is unable to fetch the media data for whatever reason.
     */
    case Onstalled = 'onstalled';

    /**
     * Script to be run when a Web Storage area is updated.
     */
    case Onstorage = 'onstorage';

    /**
     * Script to be run when a form is submitted.
     */
    case Onsubmit = 'onsubmit';

    /**
     * Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason.
     */
    case Onsuspend = 'onsuspend';

    /**
     * Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media).
     */
    case Ontimeupdate = 'ontimeupdate';

    /**
     * Script to be run when the user opens or closes the <details> element.
     */
    case Ontoggle = 'ontoggle';

    /**
     * Script to be run when a page has unloaded (or the browser window has been closed).
     */
    case Onunload = 'onunload';

    /**
     * Script to be run each time the volume of a video/audio has been changed.
     */
    case Onvolumechange = 'onvolumechange';

    /**
     * Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data).
     */
    case Onwaiting = 'onwaiting';

    /**
     * Script to be run when the mouse wheel rolls up or down over an element.
     */
    case Onwheel = 'onwheel';

    /**
     * Specifies that the details should be visible (open) to the user.
     */
    case Open = 'open';

    /**
     * Specifies what value is the optimal value for the gauge.
     */
    case Optimum = 'optimum';

    /**
     * Specifies a regular expression that an <input> element's value is checked against.
     */
    case Pattern = 'pattern';

    /**
     * Specifies a short hint that describes the expected value of the element.
     */
    case Placeholder = 'placeholder';

    /**
     * Specifies an image to be shown while the video is downloading, or until the user hits the play button.
     */
    case Poster = 'poster';

    /**
     * Specifies if and how the author thinks the audio/video should be loaded when the page loads.
     */
    case Preload = 'preload';

    /**
     * Specifies that the element is read-only.
     */
    case Readonly = 'readonly';

    /**
     * Specifies the relationship between the current document and the linked document.
     */
    case Rel = 'rel';

    /**
     * Specifies that the element must be filled out before submitting the form.
     */
    case Required = 'required';

    /**
     * Specifies that the list order should be descending (9,8,7...).
     */
    case Reversed = 'reversed';

    /**
     * Specifies the visible number of lines in a text area.
     */
    case Rows = 'rows';

    /**
     * Specifies the number of rows a table cell should span.
     */
    case Rowspan = 'rowspan';

    /**
     * Enables an extra set of restrictions for the content in an <iframe>.
     */
    case Sandbox = 'sandbox';

    /**
     * Specifies whether a header cell is a header for a column, row, or group of columns or rows.
     */
    case Scope = 'scope';

    /**
     * Specifies that an option should be pre-selected when the page loads.
     */
    case Selected = 'selected';

    /**
     * Specifies the shape of the area.
     */
    case Shape = 'shape';

    /**
     * Specifies the width, in characters (for <input>) or specifies the number of visible options (for <select>).
     */
    case Size = 'size';

    /**
     * Specifies the size of the linked resource.
     */
    case Sizes = 'sizes';

    /**
     * Specifies the number of columns to span.
     */
    case Span = 'span';

    /**
     * Specifies whether the element is to have its spelling and grammar checked or not.
     */
    case Spellcheck = 'spellcheck';

    /**
     * Specifies the URL of the media file.
     */
    case Src = 'src';

    /**
     * Specifies the HTML content of the page to show in the <iframe>.
     */
    case Srcdoc = 'srcdoc';

    /**
     * Specifies the language of the track text data (required if kind="subtitles").
     */
    case Srclang = 'srclang';

    /**
     * Specifies the URL of the image to use in different situations.
     */
    case Srcset = 'srcset';

    /**
     * Specifies the start value of an ordered list.
     */
    case Start = 'start';

    /**
     * Specifies the legal number intervals for an input field.
     */
    case Step = 'step';

    /**
     * Specifies an inline CSS style for an element.
     */
    case Style = 'style';

    /**
     * Specifies the tabbing order of an element.
     */
    case Tabindex = 'tabindex';

    /**
     * Specifies the target for where to open the linked document or where to submit the form.
     */
    case Target = 'target';

    /**
     * Specifies extra information about an element.
     */
    case Title = 'title';

    /**
     * Specifies whether the content of an element should be translated or not.
     */
    case Translate = 'translate';

    /**
     * Specifies the type of element.
     */
    case Type = 'type';

    /**
     * Specifies an image as a client-side image map.
     */
    case Usemap = 'usemap';

    /**
     * Specifies the value of the element.
     */
    case Value = 'value';

    /**
     * Specifies the width of the element.
     */
    case Width = 'width';

    /**
     * Specifies how the text in a text area is to be wrapped when submitted in a form.
     */
    case Wrap = 'wrap';

    public function getName(): string
    {
        return strtolower($this->value);
    }
}
