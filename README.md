# PTML

Build HTML elements using PHP classes. Use predefined HTML elements or create your own. Each element can have attributes
and some of them can have children. Using multiple elements create unique components or even templates.

Library provides predefined values for `Tag`, `Attr` and `Aria`:

1. https://developer.mozilla.org/en-US/docs/Web/HTML/Element
2. https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
3. https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes

## How to use predefined elements?

Library provides predefined HTML elements, e.g. div, span, etc. Each of them can be use by its own, e.g.:

```php
use PTML\Element\Div;

echo new Div('Sample text inside of the div');
```

```shell
$: <div>Sample text inside of the div</div>
```

Every single element can have attributes. Library provides predefined names for standard HTML attributes and ARIAs as
well. Let's modify `div` from the previous example and add attributes:

```php
use HTML\Element\Div;
use PTML\{Aria, Attr, Data};

$div = new Div('Sample text inside of the div');
$div->with(Attr::Id, 'myDiv');                  // standard attribute
$div->with(Aria::Label, 'sample div');          // aria-* attribute
$div->with(Data::new('my-value'), 'test')       // data-* attribute

echo $div;
```

```shell
$: <div id="myDiv" aria-label="sample div" data-my-value="test">Sample text inside of the div</div>
```

Now, let's say you have a custom attribute:

```php
use HTML\Element\Div;

$div = new Div('Sample text inside of the div');
$div->with('my-attribute', 'value');            // custom attribute

echo $div;
```

```shell
$: <div my-attribute="value">Sample text inside of the div</div>
```

Let's try to create something bigger. You probably know that colorful button with text and icon on the right-hand side.
To create it, we are going to use one button element (outer) and icon element (inner).

```php
use PTML\{Aria, Attr};
use PTML\Element\{Button, I};

$ico = new I();
$ico->with(Attr::Clazz, 'fa-solid fa-bolt');
$ico->with(Aria::Hidden, 'true');

$btn = new Button('Click me!');
$btn->append($ico);

echo $btn;
```

```shell
$: <button>Click me!<i class="fa-solid fa-bolt" aria-hidden="true"></i></button>
```

## How to define elements?

We know how to use predefine component, but how to define custom elements? Let's try to create icon from the example
above:

```php
use PTML\{Aria, Attr};
use PTML\Element\I;

class BoltIcon extends I {

    public function __construct() {
        parent::__construct();
        
        $this->with(Attr::Clazz, 'fa-solid fa-bolt');
        $this->with(Aria::Hidden, 'true');    
    }
}

echo new BoltIcon();
```

```shell
$: <i class="fa-solid fa-bolt" aria-hidden="true"></i>
```

There are two types of elements: **with** and **without** children. We can say that **with** children extends **without**.
Library provides interfaces for both of them: `ElementWithChildrenInterface` and `ElementInterface`, and base classes: `ElementWithChildren`
and `Element`. Every _element_ related function is using _interface_, base classes are just to simplify things while creating custom elements.
You can extend base class or implement interface by your own.

Let's try recreating the same icon but using base class:

```php
use PTML\{Aria, Attr, ElementWithChildren, Tag};

// <i> is not self-closing tag, so we use "with children"
class BoltIcon extends ElementWithChildren {
    
    public function __construct() {
        parent::__construct(Tag::I); // define that it's <i> using enum
        
        $this->with(Attr::Clazz, 'fa-solid fa-bolt');
        $this->with(Aria::Hidden, 'true');
    }
}

echo new BoltIcon();
```

```shell
$: <i class="fa-solid fa-bolt" aria-hidden="true"></i>
```

Result it exactly the same, as expected!

## How to define components?

Now we will try to recreate button (from the example above) but using new class:

```php
use PTML\Element\Button;

class Btn extends Button {

    public function __construct() {
        parent::__construct('Click me!');
     
        // BoltIcon is from the example above
        $this->append(new BoltIcon());   
    }
}

echo new Btn();
```

```shell
$: <button>Click me!<i class="fa-solid fa-bolt" aria-hidden="true"></i></button>
```

As you can see, method is exactly the same but with different "blocks".
