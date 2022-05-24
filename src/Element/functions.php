<?php
declare(strict_types=1);

namespace PTML\Element;

/**
 * The <a> HTML element (or anchor element), with its href attribute,
 * creates a hyperlink to web pages, files, email addresses, locations in
 * the same page, or anything else a URL can address.
 */
function a(\Stringable|string $text): A
{
    return new A($text);
}

/**
 * The <abbr> HTML element represents an abbreviation or acronym; the
 * optional title attribute can provide an expansion or description for the
 * abbreviation. If present, title must contain this full description and
 * nothing else.
 */
function abbr(\Stringable|string $text): Abbr
{
    return new Abbr($text);
}

/**
 * The <address> HTML element indicates that the enclosed HTML provides
 * contact information for a person or people, or for an organization.
 */
function address(\Stringable|string $text): Address
{
    return new Address($text);
}

/**
 * The <area> HTML element defines an area inside an image map that has
 * predefined clickable areas. An image map allows geometric areas on an
 * image to be associated with Hyperlink.
 */
function area(): Area
{
    return new Area();
}

/**
 * The <article> HTML element represents a self-contained composition in a
 * document, page, application, or site, which is intended to be
 * independently distributable or reusable (e.g., in syndication). Examples
 * include: a forum post, a magazine or newspaper article, or a blog entry,
 * a product card, a user-submitted comment, an interactive widget or
 * gadget, or any other independent item of content.
 */
function article(\Stringable|string $text): Article
{
    return new Article($text);
}

/**
 * The <aside> HTML element represents a portion of a document whose
 * content is only indirectly related to the document's main content.
 */
function aside(\Stringable|string $text): Aside
{
    return new Aside($text);
}

/**
 * The <audio> HTML element is used to embed sound content in documents. It
 * may contain one or more audio sources, represented using the src
 * attribute or the source element: the browser will choose the most
 * suitable one. It can also be the destination for streamed media, using a
 * MediaStream.
 */
function audio(\Stringable|string $text): Audio
{
    return new Audio($text);
}

/**
 * The <b> HTML element is used to draw the reader's attention to the
 * element's contents, which are not otherwise granted special importance.
 */
function b(\Stringable|string $text): B
{
    return new B($text);
}

/**
 * The <base> HTML element specifies the base URL to use for all relative
 * URLs in a document. There can be only one <base> element in a document.
 */
function base(): Base
{
    return new Base();
}

/**
 * The <bdi> HTML element tells the browser's bidirectional algorithm to
 * treat the text it contains in isolation from its surrounding text. It's
 * particularly useful when a website dynamically inserts some text and
 * doesn't know the directionality of the text being inserted.
 */
function bdi(\Stringable|string $text): Bdi
{
    return new Bdi($text);
}

/**
 * The <bdo> HTML element overrides the current directionality of text, so
 * that the text within is rendered in a different direction.
 */
function bdo(\Stringable|string $text): Bdo
{
    return new Bdo($text);
}

/**
 * The <blockquote> HTML element indicates that the enclosed text is an
 * extended quotation. Usually, this is rendered visually by indentation
 * (see Notes for how to change it). A URL for the source of the quotation
 * may be given using the cite attribute, while a text representation of
 * the source can be given using the cite element.
 */
function blockquote(\Stringable|string $text): Blockquote
{
    return new Blockquote($text);
}

/**
 * The <body> HTML element represents the content of an HTML document.
 */
function body(\Stringable|string $text): Body
{
    return new Body($text);
}

/**
 * The <br> HTML element produces a line break in text (carriage-return).
 */
function br(): Br
{
    return new Br();
}

/**
 * The <button> HTML element is an interactive element activated by a user
 * with a mouse, keyboard, finger, voice command, or other assistive
 * technology. Once activated, it then performs a programmable action, such
 * as submitting a form or opening a dialog.
 */
function button(\Stringable|string $text): Button
{
    return new Button($text);
}

/**
 * Use the HTML <canvas> element with either the canvas scripting API or
 * the WebGL API to draw graphics and animations.
 */
function canvas(\Stringable|string $text): Canvas
{
    return new Canvas($text);
}

/**
 * The <caption> HTML element specifies the caption (or title) of a table.
 */
function caption(\Stringable|string $text): Caption
{
    return new Caption($text);
}

/**
 * The <cite> HTML element is used to describe a reference to a cited
 * creative work, and must include the title of that work. The reference
 * may be in an abbreviated form according to context-appropriate
 * conventions related to citation metadata.
 */
function cite(\Stringable|string $text): Cite
{
    return new Cite($text);
}

/**
 * The <code> HTML element displays its contents styled in a fashion
 * intended to indicate that the text is a short fragment of computer code.
 */
function code(\Stringable|string $text): Code
{
    return new Code($text);
}

/**
 * The <col> HTML element defines a column within a table and is used for
 * defining common semantics on all common cells. It is generally found
 * within a colgroup element.
 */
function col(): Col
{
    return new Col();
}

/**
 * The <colgroup> HTML element defines a group of columns within a table.
 */
function colgroup(\Stringable|string $text): Colgroup
{
    return new Colgroup($text);
}

/**
 * The <data> HTML element links a given piece of content with a
 * machine-readable translation. If the content is time- or date-related,
 * the time element must be used.
 */
function data(\Stringable|string $text): Data
{
    return new Data($text);
}

/**
 * The <datalist> HTML element contains a set of option elements that
 * represent the permissible or recommended options available to choose
 * from within other controls.
 */
function datalist(\Stringable|string $text): Datalist
{
    return new Datalist($text);
}

/**
 * The <dd> HTML element provides the description, definition, or value for
 * the preceding term (dt) in a description list (dl).
 */
function dd(\Stringable|string $text): Dd
{
    return new Dd($text);
}

/**
 * The <del> HTML element represents a range of text that has been deleted
 * from a document. This can be used when rendering "track changes" or
 * source code diff information, for example. The ins element can be used
 * for the opposite purpose: to indicate text that has been added to the
 * document.
 */
function del(\Stringable|string $text): Del
{
    return new Del($text);
}

/**
 * The <details> HTML element creates a disclosure widget in which
 * information is visible only when the widget is toggled into an "open"
 * state. A summary or label must be provided using the summary element.
 */
function details(\Stringable|string $text): Details
{
    return new Details($text);
}

/**
 * The <dfn> HTML element is used to indicate the term being defined within
 * the context of a definition phrase or sentence. The p element, the dt/dd
 * pairing, or the section element which is the nearest ancestor of the
 * <dfn> is considered to be the definition of the term.
 */
function dfn(\Stringable|string $text): Dfn
{
    return new Dfn($text);
}

/**
 * The <dialog> HTML element represents a dialog box or other interactive
 * component, such as a dismissible alert, inspector, or subwindow.
 */
function dialog(\Stringable|string $text): Dialog
{
    return new Dialog($text);
}

/**
 * The <div> HTML element is the generic container for flow content. It has
 * no effect on the content or layout until styled in some way using CSS
 * (e.g. styling is directly applied to it, or some kind of layout model
 * like Flexbox is applied to its parent element).
 */
function div(\Stringable|string $text): Div
{
    return new Div($text);
}

/**
 * The <dl> HTML element represents a description list. The element
 * encloses a list of groups of terms (specified using the dt element) and
 * descriptions (provided by dd elements). Common uses for this element are
 * to implement a glossary or to display metadata (a list of key-value
 * pairs).
 */
function dl(\Stringable|string $text): Dl
{
    return new Dl($text);
}

/**
 * The <dt> HTML element specifies a term in a description or definition
 * list, and as such must be used inside a dl element. It is usually
 * followed by a dd element; however, multiple <dt> elements in a row
 * indicate several terms that are all defined by the immediate next dd
 * element.
 */
function dt(\Stringable|string $text): Dt
{
    return new Dt($text);
}

/**
 * The <em> HTML element marks text that has stress emphasis. The <em>
 * element can be nested, with each level of nesting indicating a greater
 * degree of emphasis.
 */
function em(\Stringable|string $text): Em
{
    return new Em($text);
}

/**
 * The <embed> HTML element embeds external content at the specified point
 * in the document. This content is provided by an external application or
 * other source of interactive content such as a browser plug-in.
 */
function embed(): Embed
{
    return new Embed();
}

/**
 * The <fieldset> HTML element is used to group several controls as well as
 * labels (label) within a web form.
 */
function fieldset(\Stringable|string $text): Fieldset
{
    return new Fieldset($text);
}

/**
 * The <figcaption> HTML element represents a caption or legend describing
 * the rest of the contents of its parent figure element.
 */
function figcaption(\Stringable|string $text): Figcaption
{
    return new Figcaption($text);
}

/**
 * The <figure> HTML element represents self-contained content, potentially
 * with an optional caption, which is specified using the figcaption
 * element. The figure, its caption, and its contents are referenced as a
 * single unit.
 */
function figure(\Stringable|string $text): Figure
{
    return new Figure($text);
}

/**
 * The <footer> HTML element represents a footer for its nearest ancestor
 * sectioning content or sectioning root element. A <footer> typically
 * contains information about the author of the section, copyright data or
 * links to related documents.
 */
function footer(\Stringable|string $text): Footer
{
    return new Footer($text);
}

/**
 * The <form> HTML element represents a document section containing
 * interactive controls for submitting information.
 */
function form(\Stringable|string $text): Form
{
    return new Form($text);
}

/**
 * The <h1> to <h6> HTML elements represent six levels of section headings.
 */
function h1(\Stringable|string $text): H1
{
    return new H1($text);
}

/**
 * The <h1> to <h6> HTML elements represent six levels of section headings.
 */
function h2(\Stringable|string $text): H2
{
    return new H2($text);
}

/**
 * The <h1> to <h6> HTML elements represent six levels of section headings.
 */
function h3(\Stringable|string $text): H3
{
    return new H3($text);
}

/**
 * The <h1> to <h6> HTML elements represent six levels of section headings.
 */
function h4(\Stringable|string $text): H4
{
    return new H4($text);
}

/**
 * The <h1> to <h6> HTML elements represent six levels of section headings.
 */
function h5(\Stringable|string $text): H5
{
    return new H5($text);
}

/**
 * The <h1> to <h6> HTML elements represent six levels of section headings.
 */
function h6(\Stringable|string $text): H6
{
    return new H6($text);
}

/**
 * The <head> HTML element contains machine-readable information (metadata)
 * about the document, like its title, scripts, and style sheets.
 */
function head(\Stringable|string $text): Head
{
    return new Head($text);
}

/**
 * The <header> HTML element represents introductory content, typically a
 * group of introductory or navigational aids. It may contain some heading
 * elements but also a logo, a search form, an author name, and other
 * elements.
 */
function header(\Stringable|string $text): Header
{
    return new Header($text);
}

/**
 * The <hr> HTML element represents a thematic break between
 * paragraph-level elements: for example, a change of scene in a story, or
 * a shift of topic within a section.
 */
function hr(): Hr
{
    return new Hr();
}

/**
 * The <html> HTML element represents the root (top-level element) of an
 * HTML document, so it is also referred to as the root element. All other
 * elements must be descendants of this element.
 */
function html(\Stringable|string $text): Html
{
    return new Html($text);
}

/**
 * The <i> HTML element represents a range of text that is set off from the
 * normal text for some reason, such as idiomatic text, technical terms,
 * taxonomical designations, among others. Historically, these have been
 * presented using italicized type, which is the original source of the <i>
 * naming of this element.
 */
function i(\Stringable|string $text): I
{
    return new I($text);
}

/**
 * The <iframe> HTML element represents a nested browsing context,
 * embedding another HTML page into the current one.
 */
function iframe(\Stringable|string $text): Iframe
{
    return new Iframe($text);
}

/**
 * The <img> HTML element embeds an image into the document.
 */
function img(): Img
{
    return new Img();
}

/**
 * The <input> HTML element is used to create interactive controls for
 * web-based forms in order to accept data from the user; a wide variety of
 * types of input data and control widgets are available, depending on the
 * device and user agent. The <input> element is one of the most powerful
 * and complex in all of HTML due to the sheer number of combinations of
 * input types and attributes.
 */
function input(): Input
{
    return new Input();
}

/**
 * The <ins> HTML element represents a range of text that has been added to
 * a document. You can use the del element to similarly represent a range
 * of text that has been deleted from the document.
 */
function ins(\Stringable|string $text): Ins
{
    return new Ins($text);
}

/**
 * The <kbd> HTML element represents a span of inline text denoting textual
 * user input from a keyboard, voice input, or any other text entry device.
 */
function kbd(\Stringable|string $text): Kbd
{
    return new Kbd($text);
}

/**
 * The <label> HTML element represents a caption for an item in a user
 * interface.
 */
function label(\Stringable|string $text): Label
{
    return new Label($text);
}

/**
 * The <legend> HTML element represents a caption for the content of its
 * parent fieldset.
 */
function legend(\Stringable|string $text): Legend
{
    return new Legend($text);
}

/**
 * The <li> HTML element is used to represent an item in a list. It must be
 * contained in a parent element: an ordered list (ol), an unordered list
 * (ul), or a menu (menu). In menus and unordered lists, list items are
 * usually displayed using bullet points. In ordered lists, they are
 * usually displayed with an ascending counter on the left, such as a
 * number or letter.
 */
function li(\Stringable|string $text): Li
{
    return new Li($text);
}

/**
 * The <link> HTML element specifies relationships between the current
 * document and an external resource. This element is most commonly used to
 * link to CSS, but is also used to establish site icons (both "favicon"
 * style icons and icons for the home screen and apps on mobile devices)
 * among other things.
 */
function link(): Link
{
    return new Link();
}

/**
 * The <main> HTML element represents the dominant content of the body of a
 * document. The main content area consists of content that is directly
 * related to or expands upon the central topic of a document, or the
 * central functionality of an application.
 */
function main(\Stringable|string $text): Main
{
    return new Main($text);
}

/**
 * The <map> HTML element is used with area elements to define an image map
 * (a clickable link area).
 */
function map(\Stringable|string $text): Map
{
    return new Map($text);
}

/**
 * The <mark> HTML element represents text which is marked or highlighted
 * for reference or notation purposes, due to the marked passage's
 * relevance or importance in the enclosing context.
 */
function mark(\Stringable|string $text): Mark
{
    return new Mark($text);
}

/**
 * The <menu> HTML element is a semantic alternative to ul. It represents
 * an unordered list of items (represented by li elements), each of which
 * represents a link or other command that the user can activate.
 */
function menu(\Stringable|string $text): Menu
{
    return new Menu($text);
}

/**
 * The <meta> HTML element represents Metadata that cannot be represented
 * by other HTML meta-related elements, like base, link, script, style or
 * title.
 */
function meta(): Meta
{
    return new Meta();
}

/**
 * The <meter> HTML element represents either a scalar value within a known
 * range or a fractional value.
 */
function meter(\Stringable|string $text): Meter
{
    return new Meter($text);
}

/**
 * The <nav> HTML element represents a section of a page whose purpose is
 * to provide navigation links, either within the current document or to
 * other documents. Common examples of navigation sections are menus,
 * tables of contents, and indexes.
 */
function nav(\Stringable|string $text): Nav
{
    return new Nav($text);
}

/**
 * The <noscript> HTML element defines a section of HTML to be inserted if
 * a script type on the page is unsupported or if scripting is currently
 * turned off in the browser.
 */
function noscript(\Stringable|string $text): Noscript
{
    return new Noscript($text);
}

/**
 * The <object> HTML element represents an external resource, which can be
 * treated as an image, a nested browsing context, or a resource to be
 * handled by a plugin.
 */
function obj(\Stringable|string $text): Obj
{
    return new Obj($text);
}

/**
 * The <ol> HTML element represents an ordered list of items — typically
 * rendered as a numbered list.
 */
function ol(\Stringable|string $text): Ol
{
    return new Ol($text);
}

/**
 * The <optgroup> HTML element creates a grouping of options within a
 * select element.
 */
function optgroup(\Stringable|string $text): Optgroup
{
    return new Optgroup($text);
}

/**
 * The <option> HTML element is used to define an item contained in a
 * select, an optgroup, or a datalist element. As such, <option> can
 * represent menu items in popups and other lists of items in an HTML
 * document.
 */
function option(\Stringable|string $text): Option
{
    return new Option($text);
}

/**
 * The <output> HTML element is a container element into which a site or
 * app can inject the results of a calculation or the outcome of a user
 * action.
 */
function output(\Stringable|string $text): Output
{
    return new Output($text);
}

/**
 * The <p> HTML element represents a paragraph. Paragraphs are usually
 * represented in visual media as blocks of text separated from adjacent
 * blocks by blank lines and/or first-line indentation, but HTML paragraphs
 * can be any structural grouping of related content, such as images or
 * form fields.
 */
function p(\Stringable|string $text): P
{
    return new P($text);
}

/**
 * The <picture> HTML element contains zero or more source elements and one
 * img element to offer alternative versions of an image for different
 * display/device scenarios.
 */
function picture(\Stringable|string $text): Picture
{
    return new Picture($text);
}

/**
 * The <portal> HTML element enables the embedding of another HTML page
 * into the current one for the purposes of allowing smoother navigation
 * into new pages.
 */
function portal(\Stringable|string $text): Portal
{
    return new Portal($text);
}

/**
 * The <pre> HTML element represents preformatted text which is to be
 * presented exactly as written in the HTML file. The text is typically
 * rendered using a non-proportional, or monospaced, font. Whitespace
 * inside this element is displayed as written.
 */
function pre(\Stringable|string $text): Pre
{
    return new Pre($text);
}

/**
 * The <progress> HTML element displays an indicator showing the completion
 * progress of a task, typically displayed as a progress bar.
 */
function progress(\Stringable|string $text): Progress
{
    return new Progress($text);
}

/**
 * The <q> HTML element indicates that the enclosed text is a short inline
 * quotation. Most modern browsers implement this by surrounding the text
 * in quotation marks. This element is intended for short quotations that
 * don't require paragraph breaks; for long quotations use the blockquote
 * element.
 */
function q(\Stringable|string $text): Q
{
    return new Q($text);
}

/**
 * The <rp> HTML element is used to provide fall-back parentheses for
 * browsers that do not support display of ruby annotations using the ruby
 * element. One <rp> element should enclose each of the opening and closing
 * parentheses that wrap the rt element that contains the annotation's
 * text.
 */
function rp(\Stringable|string $text): Rp
{
    return new Rp($text);
}

/**
 * The <rt> HTML element specifies the ruby text component of a ruby
 * annotation, which is used to provide pronunciation, translation, or
 * transliteration information for East Asian typography. The <rt> element
 * must always be contained within a ruby element.
 */
function rt(\Stringable|string $text): Rt
{
    return new Rt($text);
}

/**
 * The <ruby> HTML element represents small annotations that are rendered
 * above, below, or next to base text, usually used for showing the
 * pronunciation of East Asian characters. It can also be used for
 * annotating other kinds of text, but this usage is less common.
 */
function ruby(\Stringable|string $text): Ruby
{
    return new Ruby($text);
}

/**
 * The <s> HTML element renders text with a strikethrough, or a line
 * through it. Use the <s> element to represent things that are no longer
 * relevant or no longer accurate. However, <s> is not appropriate when
 * indicating document edits; for that, use the del and ins elements, as
 * appropriate.
 */
function s(\Stringable|string $text): S
{
    return new S($text);
}

/**
 * The <samp> HTML element is used to enclose inline text which represents
 * sample (or quoted) output from a computer program. Its contents are
 * typically rendered using the browser's default monospaced font (such as
 * Courier or Lucida Console).
 */
function samp(\Stringable|string $text): Samp
{
    return new Samp($text);
}

/**
 * The <script> HTML element is used to embed executable code or data; this
 * is typically used to embed or refer to JavaScript code. The <script>
 * element can also be used with other languages, such as WebGL's GLSL
 * shader programming language and JSON.
 */
function script(\Stringable|string $text): Script
{
    return new Script($text);
}

/**
 * The <section> HTML element represents a generic standalone section of a
 * document, which doesn't have a more specific semantic element to
 * represent it. Sections should always have a heading, with very few
 * exceptions.
 */
function section(\Stringable|string $text): Section
{
    return new Section($text);
}

/**
 * The <select> HTML element represents a control that provides a menu of
 * options.
 */
function select(\Stringable|string $text): Select
{
    return new Select($text);
}

/**
 * The <slot> HTML element—part of the Web Components technology suite—is a
 * placeholder inside a web component that you can fill with your own
 * markup, which lets you create separate DOM trees and present them
 * together.
 */
function slot(\Stringable|string $text): Slot
{
    return new Slot($text);
}

/**
 * The <small> HTML element represents side-comments and small print, like
 * copyright and legal text, independent of its styled presentation. By
 * default, it renders text within it one font-size smaller, such as from
 * small to x-small.
 */
function small(\Stringable|string $text): Small
{
    return new Small($text);
}

/**
 * The <source> HTML element specifies multiple media resources for the
 * picture, the audio element, or the video element. It is an empty
 * element, meaning that it has no content and does not have a closing tag.
 */
function source(): Source
{
    return new Source();
}

/**
 * The <span> HTML element is a generic inline container for phrasing
 * content, which does not inherently represent anything. It can be used to
 * group elements for styling purposes (using the class or id attributes),
 * or because they share attribute values, such as lang. It should be used
 * only when no other semantic element is appropriate. <span> is very much
 * like a div element, but div is a block-level element whereas a
 * <span> is an inline element.
 */
function span(\Stringable|string $text): Span
{
    return new Span($text);
}

/**
 * The <strong> HTML element indicates that its contents have strong
 * importance, seriousness, or urgency. Browsers typically render the
 * contents in bold type.
 */
function strong(\Stringable|string $text): Strong
{
    return new Strong($text);
}

/**
 * The <style> HTML element contains style information for a document, or
 * part of a document. It contains CSS, which is applied to the contents of
 * the document containing the <style> element.
 */
function style(\Stringable|string $text): Style
{
    return new Style($text);
}

/**
 * The <sub> HTML element specifies inline text which should be displayed
 * as subscript for solely typographical reasons. Subscripts are typically
 * rendered with a lowered baseline using smaller text.
 */
function sub(\Stringable|string $text): Sub
{
    return new Sub($text);
}

/**
 * The <summary> HTML element specifies a summary, caption, or legend for a
 * details element's disclosure box. Clicking the <summary> element toggles
 * the state of the parent <details> element open and closed.
 */
function summary(\Stringable|string $text): Summary
{
    return new Summary($text);
}

/**
 * The <sup> HTML element specifies inline text which is to be displayed as
 * superscript for solely typographical reasons. Superscripts are usually
 * rendered with a raised baseline using smaller text.
 */
function sup(\Stringable|string $text): Sup
{
    return new Sup($text);
}

/**
 * The <table> HTML element represents tabular data — that is, information
 * presented in a two-dimensional table comprised of rows and columns of
 * cells containing data.
 */
function table(\Stringable|string $text): Table
{
    return new Table($text);
}

/**
 * The <tbody> HTML element encapsulates a set of table rows (tr elements),
 * indicating that they comprise the body of the table (table).
 */
function tbody(\Stringable|string $text): Tbody
{
    return new Tbody($text);
}

/**
 * The <td> HTML element defines a cell of a table that contains data. It
 * participates in the table model.
 */
function td(\Stringable|string $text): Td
{
    return new Td($text);
}

/**
 * The <template> HTML element is a mechanism for holding HTML that is not
 * to be rendered immediately when a page is loaded but may be instantiated
 * subsequently during runtime using JavaScript.
 */
function template(\Stringable|string $text): Template
{
    return new Template($text);
}

/**
 * The <textarea> HTML element represents a multi-line plain-text editing
 * control, useful when you want to allow users to enter a sizeable amount
 * of free-form text, for example a comment on a review or feedback form.
 */
function textarea(\Stringable|string $text): Textarea
{
    return new Textarea($text);
}

/**
 * The <tfoot> HTML element defines a set of rows summarizing the columns
 * of the table.
 */
function tfoot(\Stringable|string $text): Tfoot
{
    return new Tfoot($text);
}

/**
 * The <th> HTML element defines a cell as header of a group of table
 * cells. The exact nature of this group is defined by the scope and
 * headers attributes.
 */
function th(\Stringable|string $text): Th
{
    return new Th($text);
}

/**
 * The <thead> HTML element defines a set of rows defining the head of the
 * columns of the table.
 */
function thead(\Stringable|string $text): Thead
{
    return new Thead($text);
}

/**
 * The <time> HTML element represents a specific period in time. It may
 * include the datetime attribute to translate dates into machine-readable
 * format, allowing for better search engine results or custom features
 * such as reminders.
 */
function time(\Stringable|string $text): Time
{
    return new Time($text);
}

/**
 * The <title> HTML element defines the document's title that is shown in a
 * Browser's title bar or a page's tab. It only contains text; tags within
 * the element are ignored.
 */
function title(\Stringable|string $text): Title
{
    return new Title($text);
}

/**
 * The <tr> HTML element defines a row of cells in a table. The row's cells
 * can then be established using a mix of td (data cell) and th (header
 * cell) elements.
 */
function tr(\Stringable|string $text): Tr
{
    return new Tr($text);
}

/**
 * The <track> HTML element is used as a child of the media elements, audio
 * and video. It lets you specify timed text tracks (or time-based data),
 * for example to automatically handle subtitles. The tracks are formatted
 * in WebVTT format (.vtt files) — Web Video Text Tracks.
 */
function track(): Track
{
    return new Track();
}

/**
 * The <u> HTML element represents a span of inline text which should be
 * rendered in a way that indicates that it has a non-textual annotation.
 */
function u(\Stringable|string $text): U
{
    return new U($text);
}

/**
 * The <ul> HTML element represents an unordered list of items, typically
 * rendered as a bulleted list.
 */
function ul(\Stringable|string $text): Ul
{
    return new Ul($text);
}

/**
 * The <var> HTML element represents the name of a variable in a
 * mathematical expression or a programming context. It's typically
 * presented using an italicized version of the current typeface, although
 * that behavior is browser-dependent.
 */
function variable(\Stringable|string $text): Variable
{
    return new Variable($text);
}

/**
 * The <video> HTML element embeds a media player which supports video
 * playback into the document. You can use video> for audio content as
 * well, but the audio element may provide a more appropriate user
 * experience.
 */
function video(\Stringable|string $text): Video
{
    return new Video($text);
}

/**
 * The <wbr> HTML element represents a word break opportunity—a position
 * within text where the browser may optionally break a line, though its
 * line-breaking rules would not otherwise create a break at that location.
 */
function wbr(): Wbr
{
    return new Wbr();
}

