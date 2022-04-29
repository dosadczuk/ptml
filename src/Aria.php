<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML `aria-*` attribute.
 */
enum Aria: string implements AttrInterface
{
    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-activedescendant
     */
    case Activedescendant = 'activedescendant';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-atomic
     */
    case Atomic = 'atomic';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-autocomplete
     */
    case Autocomplete = 'autocomplete';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-braillelabel
     */
    case Braillelabel = 'braillelabel';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-brailleroledescription
     */
    case Brailleroledescription = 'brailleroledescription';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-busy
     */
    case Busy = 'busy';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-checked
     */
    case Checked = 'checked';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-colcount
     */
    case Colcount = 'colcount';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-colindex
     */
    case Colindex = 'colindex';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-colindextext
     */
    case Colindextext = 'colindextext';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-colspan
     */
    case Colspan = 'colspan';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-controls
     */
    case Controls = 'controls';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-current
     */
    case Current = 'current';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-describedby
     */
    case Describedby = 'describedby';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-description
     */
    case Description = 'description';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-details
     */
    case Details = 'details';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-disabled
     */
    case Disabled = 'disabled';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-dropeffect
     */
    case Dropeffect = 'dropeffect';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-errormessage
     */
    case Errormessage = 'errormessage';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-expanded
     */
    case Expanded = 'expanded';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-flowto
     */
    case Flowto = 'flowto';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-grabbed
     */
    case Grabbed = 'grabbed';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-haspopup
     */
    case Haspopup = 'haspopup';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-hidden
     */
    case Hidden = 'hidden';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-invalid
     */
    case Invalid = 'invalid';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-keyshortcuts
     */
    case Keyshortcuts = 'keyshortcuts';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-label
     */
    case Label = 'label';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-labelledby
     */
    case Labelledby = 'labelledby';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-level
     */
    case Level = 'level';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-live
     */
    case Live = 'live';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-multiline
     */
    case Multiline = 'multiline';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-multiselectable
     */
    case Multiselectable = 'multiselectable';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-orientation
     */
    case Orientation = 'orientation';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-owns
     */
    case Owns = 'owns';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-placeholder
     */
    case Placeholder = 'placeholder';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-posinset
     */
    case Posinset = 'posinset';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-pressed
     */
    case Pressed = 'pressed';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-readonly
     */
    case Readonly = 'readonly';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-relevant
     */
    case Relevant = 'relevant';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-required
     */
    case Required = 'required';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-roledescription
     */
    case Roledescription = 'roledescription';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-rowcount
     */
    case Rowcount = 'rowcount';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-rowindex
     */
    case Rowindex = 'rowindex';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-rowindextext
     */
    case Rowindextext = 'rowindextext';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-rowspan
     */
    case Rowspan = 'rowspan';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-selected
     */
    case Selected = 'selected';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-setsize
     */
    case Setsize = 'setsize';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-sort
     */
    case Sort = 'sort';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-valuemax
     */
    case Valuemax = 'valuemax';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-valuemin
     */
    case Valuemin = 'valuemin';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-valuenow
     */
    case Valuenow = 'valuenow';

    /**
     * @link https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-valuetext
     */
    case Valuetext = 'valuetext';

    public function getName(): string
    {
        return strtolower("aria-{$this->value}");
    }
}
