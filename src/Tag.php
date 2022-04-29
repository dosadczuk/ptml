<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML tag.
 */
enum Tag: string
{
    /**
     * Defines a hyperlink.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
     */
    case A = 'a';

    /**
     * Defines an abbreviation or an acronym.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/abbr
     */
    case Abbr = 'abbr';

    /**
     * Defines contact information for the author/owner of a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/address
     */
    case Address = 'address';

    /**
     * Defines an area inside an image map.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
     */
    case Area = 'area';

    /**
     * Defines an article.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article
     */
    case Article = 'article';

    /**
     * Defines content aside from the page content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside
     */
    case Aside = 'aside';

    /**
     * Defines embedded sound content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
     */
    case Audio = 'audio';

    /**
     * Defines bold text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b
     */
    case B = 'b';

    /**
     * Specifies the base URL/target for all relative URLs in a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
     */
    case Base = 'base';

    /**
     * Isolates a part of text that might be formatted in a different direction from other text outside it.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdi
     */
    case Bdi = 'bdi';

    /**
     * Overrides the current text direction.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdo
     */
    case Bdo = 'bdo';

    /**
     * Defines a section that is quoted from another source.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
     */
    case Blockquote = 'blockquote';

    /**
     * Defines the document's body.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
     */
    case Body = 'body';

    /**
     * Defines a single line break.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
     */
    case Br = 'br';

    /**
     * Defines a clickable button.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
     */
    case Button = 'button';

    /**
     * Used to draw graphics, on the fly, via scripting (usually JavaScript).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
     */
    case Canvas = 'canvas';

    /**
     * Defines a table caption.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
     */
    case Caption = 'caption';

    /**
     * Defines the title of a work.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite
     */
    case Cite = 'cite';

    /**
     * Defines a piece of computer code.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/code
     */
    case Code = 'code';

    /**
     * Specifies column properties for each column within a <colgroup> element.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
     */
    case Col = 'col';

    /**
     * Specifies a group of one or more columns in a table for formatting.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
     */
    case Colgroup = 'colgroup';

    /**
     * Adds a machine-readable translation of a given content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/data
     */
    case Data = 'data';

    /**
     * Specifies a list of pre-defined options for input controls.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
     */
    case Datalist = 'datalist';

    /**
     * Defines a description/value of a term in a description list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
     */
    case Dd = 'dd';

    /**
     * Defines text that has been deleted from a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/del
     */
    case Del = 'del';

    /**
     * Defines additional details that the user can view or hide.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
     */
    case Details = 'details';

    /**
     * Specifies a term that is going to be defined within the content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dfn
     */
    case Dfn = 'dfn';

    /**
     * Defines a dialog box or window.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
     */
    case Dialog = 'dialog';

    /**
     * Defines a section in a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
     */
    case Div = 'div';

    /**
     * Defines a description list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
     */
    case Dl = 'dl';

    /**
     * Defines a term/name in a description list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
     */
    case Dt = 'dt';

    /**
     * Defines emphasized text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/em
     */
    case Em = 'em';

    /**
     * Defines a container for an external application.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
     */
    case Embed = 'embed';

    /**
     * Groups related elements in a form.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
     */
    case Fieldset = 'fieldset';

    /**
     * Defines a caption for a <figure> element.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption
     */
    case Figcaption = 'figcaption';

    /**
     * Specifies self-contained content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure
     */
    case Figure = 'figure';

    /**
     * Defines a footer for a document or section.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer
     */
    case Footer = 'footer';

    /**
     * Defines an HTML form for user input.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
     */
    case Form = 'form';

    /**
     *  Defines HTML headings.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1 to h6
     */
    case H1ToH6 = 'h1 to h6';

    /**
     * Contains metadata/information for the document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
     */
    case Head = 'head';

    /**
     * Defines a header for a document or section.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header
     */
    case Header = 'header';

    /**
     *  Defines a thematic change in the content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
     */
    case Hr = 'hr';

    /**
     * Defines the root of an HTML document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
     */
    case Html = 'html';

    /**
     * Defines a part of text in an alternate voice or mood.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i
     */
    case I = 'i';

    /**
     * Defines an inline frame.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
     */
    case Iframe = 'iframe';

    /**
     * Defines an image.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
     */
    case Img = 'img';

    /**
     * Defines an input control.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
     */
    case Input = 'input';

    /**
     * Defines a text that has been inserted into a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ins
     */
    case Ins = 'ins';

    /**
     * Defines keyboard input.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/kbd
     */
    case Kbd = 'kbd';

    /**
     * Defines a label for an <input> element.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
     */
    case Label = 'label';

    /**
     * Defines a caption for a <fieldset> element.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
     */
    case Legend = 'legend';

    /**
     * Defines a list item.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
     */
    case Li = 'li';

    /**
     * Defines the relationship between a document and an external resource (most used to link to style sheets).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
     */
    case Link = 'link';

    /**
     * Specifies the main content of a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main
     */
    case Main = 'main';

    /**
     * Defines an image map.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/map
     */
    case Map = 'map';

    /**
     * Defines marked/highlighted text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
     */
    case Mark = 'mark';

    /**
     * Defines metadata about an HTML document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
     */
    case Meta = 'meta';

    /**
     * Defines a scalar measurement within a known range (a gauge).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
     */
    case Meter = 'meter';

    /**
     * Defines navigation links.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav
     */
    case Nav = 'nav';

    /**
     * Defines an alternate content for users that do not support client-side scripts.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript
     */
    case Noscript = 'noscript';

    /**
     * Defines a container for an external application.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/object
     */
    case Object = 'object';

    /**
     * Defines an ordered list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
     */
    case Ol = 'ol';

    /**
     * Defines a group of related options in a drop-down list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
     */
    case Optgroup = 'optgroup';

    /**
     * Defines an option in a drop-down list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
     */
    case Option = 'option';

    /**
     * Defines the result of a calculation.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
     */
    case Output = 'output';

    /**
     * Defines a paragraph.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p
     */
    case P = 'p';

    /**
     * Defines a parameter for an object.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
     */
    case Param = 'param';

    /**
     * Defines a container for multiple image resources.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture
     */
    case Picture = 'picture';

    /**
     * Defines preformatted text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/pre
     */
    case Pre = 'pre';

    /**
     * Represents the progress of a task.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress
     */
    case Progress = 'progress';

    /**
     * Defines a short quotation.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
     */
    case Q = 'q';

    /**
     * Defines what to show in browsers that do not support ruby annotations.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rp
     */
    case Rp = 'rp';

    /**
     * Defines an explanation/pronunciation of characters (for East Asian typography).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rt
     */
    case Rt = 'rt';

    /**
     * Defines a ruby annotation (for East Asian typography).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ruby
     */
    case Ruby = 'ruby';

    /**
     * Defines text that is no longer correct.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/s
     */
    case S = 's';

    /**
     * Defines sample output from a computer program.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/samp
     */
    case Samp = 'samp';

    /**
     * Defines a client-side script.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
     */
    case Script = 'script';

    /**
     * Defines a section in a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section
     */
    case Section = 'section';

    /**
     * Defines a drop-down list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
     */
    case Select = 'select';

    /**
     * Defines smaller text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/small
     */
    case Small = 'small';

    /**
     * Defines multiple media resources for media elements (<video> and <audio>).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
     */
    case Source = 'source';

    /**
     * Defines a section in a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
     */
    case Span = 'span';

    /**
     * Defines important text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong
     */
    case Strong = 'strong';

    /**
     * Defines style information for a document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
     */
    case Style = 'style';

    /**
     * Defines sub-scripted text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sub
     */
    case Sub = 'sub';

    /**
     * Defines a visible heading for a <details> element.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
     */
    case Summary = 'summary';

    /**
     * Defines superscripted text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sup
     */
    case Sup = 'sup';

    /**
     * Defines a container for SVG graphics.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/svg
     */
    case Svg = 'svg';

    /**
     * Defines a table.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
     */
    case Table = 'table';

    /**
     * Groups the body content in a table.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody
     */
    case Tbody = 'tbody';

    /**
     * Defines a cell in a table.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
     */
    case Td = 'td';

    /**
     * Defines a container for content that should be hidden when the page loads.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
     */
    case Template = 'template';

    /**
     * Defines a multiline input control (text area).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
     */
    case Textarea = 'textarea';

    /**
     * Groups the footer content in a table.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot
     */
    case Tfoot = 'tfoot';

    /**
     * Defines a header cell in a table.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
     */
    case Th = 'th';

    /**
     * Groups the header content in a table.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
     */
    case Thead = 'thead';

    /**
     * Defines a specific time (or datetime).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/time
     */
    case Time = 'time';

    /**
     * Defines a title for the document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
     */
    case Title = 'title';

    /**
     * Defines a row in a table.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tr
     */
    case Tr = 'tr';

    /**
     * Defines text tracks for media elements (<video> and <audio>).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
     */
    case Track = 'track';

    /**
     * Defines some text that is not articulated and styled differently from normal  text.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/u
     */
    case U = 'u';

    /**
     * Defines an unordered list.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
     */
    case Ul = 'ul';

    /**
     * Defines a variable.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/var
     */
    case Var = 'var';

    /**
     * Defines embedded video content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video
     */
    case Video = 'video';

    /**
     * Defines a possible line-break.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/wbr
     */
    case Wbr = 'wbr';

    public function isSelfClosing(): bool
    {
        return match ($this) {
            self::Area,
            self::Base,
            self::Br,
            self::Col,
            self::Embed,
            self::Hr,
            self::Img,
            self::Input,
            self::Link,
            self::Meta,
            self::Param,
            self::Source,
            self::Track,
            self::Wbr => true,
            default   => false
        };
    }
}
