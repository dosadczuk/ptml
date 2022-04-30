<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML standard attribute.
 */
enum Attr: string implements AttrInterface
{
    /**
     * List of types the server accepts, typically a file type.
     */
    case Accept = 'accept';

    /**
     * List of supported charsets.
     */
    case AcceptCharset = 'accept-charset';

    /**
     * Keyboard shortcut to activate or add focus to the element.
     */
    case Accesskey = 'accesskey';

    /**
     * The URI of a program that processes the information submitted via the
     * form.
     */
    case Action = 'action';

    /**
     * Specifies the horizontal alignment of the element.
     */
    case Align = 'align';

    /**
     * Specifies a feature-policy for the iframe.
     */
    case Allow = 'allow';

    /**
     * Alternative text in case an image can't be displayed.
     */
    case Alt = 'alt';

    /**
     * Executes the script asynchronously.
     */
    case Async = 'async';

    /**
     * Sets whether input is automatically capitalized when entered by user
     */
    case Autocapitalize = 'autocapitalize';

    /**
     * Indicates whether controls in this form can by default have their values
     * automatically completed by the browser.
     */
    case Autocomplete = 'autocomplete';

    /**
     * The element should be automatically focused after the page loaded.
     */
    case Autofocus = 'autofocus';

    /**
     * The audio or video should play as soon as possible.
     */
    case Autoplay = 'autoplay';

    /**
     * Contains the time range of already buffered media.
     */
    case Buffered = 'buffered';

    /**
     * From the Media Capture specification, specifies a new file can be
     * captured.
     */
    case Capture = 'capture';

    /**
     * Declares the character encoding of the page or script.
     */
    case Charset = 'charset';

    /**
     * Indicates whether the element should be checked on page load.
     */
    case Checked = 'checked';

    /**
     * Contains a URI which points to the source of the quote or change.
     */
    case Cite = 'cite';

    /**
     * Often used with CSS to style elements with common properties.
     */
    case Clazz = 'class';

    /**
     * Defines the number of columns in a textarea.
     */
    case Cols = 'cols';

    /**
     * The colspan attribute defines the number of columns a cell should span.
     */
    case Colspan = 'colspan';

    /**
     * A value associated with http-equiv or name depending on the context.
     */
    case Content = 'content';

    /**
     * Indicates whether the element's content is editable.
     */
    case Contenteditable = 'contenteditable';

    /**
     * Defines the ID of a <menu> element which will serve as the element's
     * context menu.
     */
    case Contextmenu = 'contextmenu';

    /**
     * Indicates whether the browser should show playback controls to the user.
     */
    case Controls = 'controls';

    /**
     * A set of values specifying the coordinates of the hot-spot region.
     */
    case Coords = 'coords';

    /**
     * How the element handles cross-origin requests
     */
    case Crossorigin = 'crossorigin';

    /**
     * Specifies the Content Security Policy that an embedded document must
     * agree to enforce upon itself.
     */
    case Csp = 'csp';

    /**
     * Specifies the URL of the resource.
     */
    case Data = 'data';

    /**
     * Indicates the date and time associated with the element.
     */
    case Datetime = 'datetime';

    /**
     * Indicates the preferred method to decode the image.
     */
    case Decoding = 'decoding';

    /**
     * Indicates that the track should be enabled unless the user's preferences
     * indicate something different.
     */
    case Default = 'default';

    /**
     * Indicates that the script should be executed after the page has been
     * parsed.
     */
    case Defer = 'defer';

    /**
     * Defines the text direction. Allowed values are ltr (Left-To-Right) or
     * rtl (Right-To-Left)
     */
    case Dir = 'dir';

    /**
     * Specifies that the text direction will be submitted.
     */
    case Dirname = 'dirname';

    /**
     * Indicates whether the user can interact with the element.
     */
    case Disabled = 'disabled';

    /**
     * Indicates that the hyperlink is to be used for downloading a resource.
     */
    case Download = 'download';

    /**
     * Defines whether the element can be dragged.
     */
    case Draggable = 'draggable';

    /**
     * Defines the content type of the form data when the method is POST.
     */
    case Enctype = 'enctype';

    /**
     * The enterkeyhint specifies what action label (or icon) to present for
     * the enter key on virtual keyboards. The attribute can be used with form
     * controls (such as the value of textarea elements), or in elements in an
     * editing host (e.g., using contenteditable attribute).
     */
    case Enterkeyhint = 'enterkeyhint';

    /**
     * Describes elements which belongs to this one.
     */
    case For = 'for';

    /**
     * Indicates the form that is the owner of the element.
     */
    case Form = 'form';

    /**
     * Indicates the action of the element, overriding the action defined in
     * the <form>.
     */
    case Formaction = 'formaction';

    /**
     * If the button/input is a submit button (type="submit"), this attribute
     * sets the encoding type to use during form submission. If this attribute
     * is specified, it overrides the enctype attribute of the button's form
     * owner.
     */
    case Formenctype = 'formenctype';

    /**
     * If the button/input is a submit button (type="submit"), this attribute
     * sets the submission method to use during form submission (GET, POST,
     * etc.). If this attribute is specified, it overrides the method attribute
     * of the button's form owner.
     */
    case Formmethod = 'formmethod';

    /**
     * If the button/input is a submit button (type="submit"), this boolean
     * attribute specifies that the form is not to be validated when it is
     * submitted. If this attribute is specified, it overrides the novalidate
     * attribute of the button's form owner.
     */
    case Formnovalidate = 'formnovalidate';

    /**
     * If the button/input is a submit button (type="submit"), this attribute
     * specifies the browsing context (for example, tab, window, or inline
     * frame) in which to display the response that is received after
     * submitting the form. If this attribute is specified, it overrides the
     * target attribute of the button's form owner.
     */
    case Formtarget = 'formtarget';

    /**
     * IDs of the <th> elements which applies to this element.
     */
    case Headers = 'headers';

    /**
     * Prevents rendering of given element, while keeping child elements, e.g.
     * script elements, active.
     */
    case Hidden = 'hidden';

    /**
     * Indicates the lower bound of the upper range.
     */
    case High = 'high';

    /**
     * The URL of a linked resource.
     */
    case Href = 'href';

    /**
     * Specifies the language of the linked resource.
     */
    case Hreflang = 'hreflang';

    /**
     * Defines a pragma directive.
     */
    case HttpEquiv = 'http-equiv';

    /**
     * Often used with CSS to style a specific element. The value of this
     * attribute must be unique.
     */
    case Id = 'id';

    /**
     * Indicates the relative fetch priority for the resource.
     */
    case Importance = 'importance';

    /**
     * Specifies a Subresource Integrity value that allows browsers to verify
     * what they fetch.
     */
    case Integrity = 'integrity';

    /**
     * Provides a hint as to the type of data that might be entered by the user
     * while editing the element or its contents. The attribute can be used
     * with form controls (such as the value of textarea elements), or in
     * elements in an editing host (e.g., using contenteditable attribute).
     */
    case Inputmode = 'inputmode';

    /**
     * Indicates that the image is part of a server-side image map.
     */
    case Ismap = 'ismap';

    /**
     * Add properties to an item.
     */
    case Itemprop = 'itemprop';

    /**
     * Specifies the kind of text track.
     */
    case Kind = 'kind';

    /**
     * Specifies a user-readable title of the element.
     */
    case Label = 'label';

    /**
     * Defines the language used in the element.
     */
    case Lang = 'lang';

    /**
     * Identifies a list of pre-defined options to suggest to the user.
     */
    case List = 'list';

    /**
     * Indicates whether the media should start playing from the start when
     * it's finished.
     */
    case Loop = 'loop';

    /**
     * Indicates the upper bound of the lower range.
     */
    case Low = 'low';

    /**
     * Indicates the maximum value allowed.
     */
    case Max = 'max';

    /**
     * Defines the maximum number of characters allowed in the element.
     */
    case Maxlength = 'maxlength';

    /**
     * Defines the minimum number of characters allowed in the element.
     */
    case Minlength = 'minlength';

    /**
     * Specifies a hint of the media for which the linked resource was designed.
     */
    case Media = 'media';

    /**
     * Defines which HTTP method to use when submitting the form. Can be GET
     * (default) or POST.
     */
    case Method = 'method';

    /**
     * Indicates the minimum value allowed.
     */
    case Min = 'min';

    /**
     * Indicates whether multiple values can be entered in an input of the type
     * email or file.
     */
    case Multiple = 'multiple';

    /**
     * Indicates whether the audio will be initially silenced on page load.
     */
    case Muted = 'muted';

    /**
     * Name of the element. For example used by the server to identify the
     * fields in form submits.
     */
    case Name = 'name';

    /**
     * This attribute indicates that the form shouldn't be validated when
     * submitted.
     */
    case Novalidate = 'novalidate';

    /**
     * Indicates whether the contents are currently visible (in the case of a
     * <details> element) or whether the dialog is active and can be interacted
     * with (in the case of a <dialog> element).
     */
    case Open = 'open';

    /**
     * Indicates the optimal numeric value.
     */
    case Optimum = 'optimum';

    /**
     * Defines a regular expression which the element's value will be validated
     * against.
     */
    case Pattern = 'pattern';

    /**
     * The ping attribute specifies a space-separated list of URLs to be
     * notified if a user follows the hyperlink.
     */
    case Ping = 'ping';

    /**
     * Provides a hint to the user of what can be entered in the field.
     */
    case Placeholder = 'placeholder';

    /**
     * A URL indicating a poster frame to show until the user plays or seeks.
     */
    case Poster = 'poster';

    /**
     * Indicates whether the whole resource, parts of it or nothing should be
     * preloaded.
     */
    case Preload = 'preload';

    /**
     * Indicates whether the element can be edited.
     */
    case Readonly = 'readonly';

    /**
     * Specifies which referrer is sent when fetching the resource.
     */
    case Referrerpolicy = 'referrerpolicy';

    /**
     * Specifies the relationship of the target object to the link object.
     */
    case Rel = 'rel';

    /**
     * Indicates whether this element is required to fill out or not.
     */
    case Required = 'required';

    /**
     * Indicates whether the list should be displayed in a descending order
     * instead of a ascending.
     */
    case Reversed = 'reversed';

    /**
     * Defines an explicit role for an element for use by assistive
     * technologies.
     */
    case Role = 'role';

    /**
     * Defines the number of rows in a text area.
     */
    case Rows = 'rows';

    /**
     * Defines the number of rows a table cell should span over.
     */
    case Rowspan = 'rowspan';

    /**
     * Stops a document loaded in an iframe from using certain features (such
     * as submitting forms or opening new windows).
     */
    case Sandbox = 'sandbox';

    /**
     * Defines the cells that the header test (defined in the th element)
     * relates to.
     */
    case Scope = 'scope';

    /**
     * Defines a value which will be selected on page load.
     */
    case Selected = 'selected';

    /**
     * Specifies the shape of the area.
     */
    case Shape = 'shape';

    /**
     * Defines the width of the element (in pixels). If the element's type
     * attribute is text or password then it's the number of characters.
     */
    case Size = 'size';

    /**
     * Specifies the size of the linked resource.
     */
    case Sizes = 'sizes';

    /**
     * Assigns a slot in a shadow DOM shadow tree to an element.
     */
    case Slot = 'slot';

    /**
     * Specifies the number of columns to span.
     */
    case Span = 'span';

    /**
     * Indicates whether spell checking is allowed for the element.
     */
    case Spellcheck = 'spellcheck';

    /**
     * The URL of the embeddable content.
     */
    case Src = 'src';

    /**
     * Specifies the HTML content of the page to show in the <iframe>.
     */
    case Srcdoc = 'srcdoc';

    /**
     * Specifies the language of the track text data (required if
     * kind="subtitles").
     */
    case Srclang = 'srclang';

    /**
     * One or more responsive image candidates.
     */
    case Srcset = 'srcset';

    /**
     * Defines the first number if other than 1.
     */
    case Start = 'start';

    /**
     * Specifies the legal number intervals for an input field.
     */
    case Step = 'step';

    /**
     * Defines CSS styles which will override styles previously set.
     */
    case Style = 'style';

    /**
     * Overrides the browser's default tab order and follows the one specified
     * instead.
     */
    case Tabindex = 'tabindex';

    /**
     * Specifies where to open the linked document (in the case of an <a>
     * element) or where to display the response received (in the case of a
     * <form> element)
     */
    case Target = 'target';

    /**
     * Text to be displayed in a tooltip when hovering over the element.
     */
    case Title = 'title';

    /**
     * Specify whether an element's attribute values and the values of its Text
     * node children are to be translated when the page is localized, or
     * whether to leave them unchanged.
     */
    case Translate = 'translate';

    /**
     * Defines the type of the element.
     */
    case Type = 'type';

    /**
     * Specifies an image as a client-side image map.
     */
    case Usemap = 'usemap';

    /**
     * Defines a default value which will be displayed in the element on page
     * load.
     */
    case Value = 'value';

    /**
     * For the elements listed here, this establishes the element's width.
     * Note: For all other instances, such as <div>, this is a legacy
     * attribute, in which case the CSS width property should be used instead.
     */
    case Width = 'width';

    /**
     * Indicates whether the text should be wrapped.
     */
    case Wrap = 'wrap';

    public function name(): string
    {
        return $this->value;
    }
}
