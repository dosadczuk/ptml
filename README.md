# PTML

Build _HTML_ elements using _PHP_ classes. Use predefined elements or define your own. Elements
can have attributes, and some of them children. Use multiple elements to create unique
components or complex views/templates.

Library provides definition of known HTML **tags**, **attributes** and **aria**, from source:

1. https://developer.mozilla.org/en-US/docs/Web/HTML/Element
2. https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
3. https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes

## How to use it?

Library provides definition for elements such as `div`, `span`, etc. Pick one of them and
create instance of the element:

```php
use PTML\Element\Div;

echo new Div('Sample text');
```

```html
<!-- output: -->
<div>Sample text</div>
```

It is that simple. The same approach is for another elements, pick one and use constructor
to create an instance.

Elements can have **attributes**, you can use predefined values or create custom. Library provides
definitions for **standardized**, **aria** and **data** attributes.

Let's try to modify `div` from the example above and add some attributes, one of each type:

```php
use PTML\Element\Div;
use PTML\{Aria, Attr, Data};

$div = new Div('Sample text');
$div->with(Attr::Id, 'sampleId');               // standard
$div->with(Aria::Label, 'sample div');          // aria-*
$div->with(Data::new('test'), 'sample value');  // data-*

echo $div;
```

```html
<!-- output (formatted): -->
<div id="sampleId" aria-label="sample div" data-test="sample value">
	Sample text
</div>
```

There is no limitation on maximum attributes per element. You can attach as many as you need.

If you need to add an attribute and there is no definition for it, you can create one by yourself:

```php
use PTML\Element\Div;

$div = new Div('Sample text');
$div->with('custom-attribute', 'value');    // custom

echo $div;
```

```html
<!-- output: -->
<div custom-attribute="value">Sample text</div>
```

Knowing the basics, let's try to recreate _Bootstrap_ button with _Font Awesome 6_ icon:

```php
use PTML\Element\{Button, I};
use PTML\{Attr, Aria};

// 1. create button
$btn = new Button('Click me!');
$btn->with(Attr::Clazz, 'btn btn-primary')

// 2. create icon
$icon = new I();
$icon->with(Attr::Clazz, 'fa-solid fa-bolt');
$icon->with(Aria::Hidden, 'true');

// 3. append the icon to the button
$btn->append($icon);

echo $btn;
```

```html
<!-- output (formatted): -->
<button class="btn btn-primary">
	<i class="fa-solid fa-bolt" aria-hidden="true"></i>
	Click me!
</button>
```

## How to define elements?

Using predefined elements is easy, but how to create the custom ones? Let's try to create
a _Font Awesome_ icon:

```php
use PTML\Element\I;
use PTML\{Attr, Aria};

class BoltIcon extends I 
{
    public function __construct() 
    {
        parent::__construct();
        
        $this->with(Attr::Clazz, 'fa-solid fa-bolt');
        $this->with(Aria::Hidden, 'true');
    }
}

echo new BoltIcon();
```

```html
<!-- output: -->
<i class="fa-solid fa-bolt" aria-hidden="true"></i>
```

Simple enough, using inheritance you can extend `I` element and use constructor to provide
required attributes.

## How to define attributes?

If you need an attribute, which is not provided by the library, you can define it:

```php
use PTML\AttributeInterface;

class CustomAttribute implements AttributeInterface 
{
    public function name() : string
    {
        return 'custom-attribute';
    }
}
```

From now onwards, you can use it on any element:

```php
use PTML\Element\Div;

$div = new Div('Sample text');
$div->with(new CustomAttribute(), 'value');

echo $div;
```

```html
<!-- output: -->
<div custom-attribute="value">Sample text</div>
```

## How to define components?

Let's say component is an element, which is composed of at least two elements. Components
may have children, but also may not. Library provides interfaces to handle both cases:
`ElementWithChildrenInterface` and `ElementInterface`. Default implementations are provided
by library, so you don't need to define them by your own.

Knowing the basics, let's once again try to create _Bootstrap_ button with _Font Awesome_ icon:

```php
use PTML\Element\{Button, I};
use PTML\{Attr, Aria};

class ButtonWithIcon extends Button 
{
    public function __construct(ElementInterface $icon, \Stringable|string $text = '') 
    {
        parent::__construct($text);
        
        $this->with(Attr::Clazz, 'btn btn-primary');
        $this->append($icon);
    }
}
```

We've created component to create a button with an icon. Constructor requires to any element,
which will be used as an icon. Now we can instantiate it:

```php
echo new ButtonWithIcon(new BoltIcon(), 'Click me!');
```

```html
<!-- output (formatted): -->
<button class="btn btn-primary">
	<i class="fa-solid fa-bolt" aria-hidden="true"></i>
	Click me!
</button>
```
