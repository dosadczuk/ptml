# PTML

Build HTML elements using PHP classes. Library provides predefined values for: `Aria`, `Attr` and `Tag`.

Source of HTML definitions for:

1. [Tags](https://developer.mozilla.org/en-US/docs/Web/HTML/Element)
2. [Attributes](https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes)
3. [ARIA](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes)

## Define element

### Define very basic element

```php
use PTML\{Old\Element,Old\Tag};

echo new Element(Tag::Img); // <img />
echo new Element(Tag::Button); // <button></button>
echo new Element(Tag::Button, 'Sample text'); // <button>Sample text</button> 
```

### Define element with attributes

```php
use PTML\{Old\Aria,Old\Attr,Old\Data,Old\Element,Old\Tag};

$element = new Element(Tag::Button, 'Sample text');
$element->with(Attr::Type, 'submit');
echo $element;
// <button type="submit">
//     Sample text
// </button>

$element = new Element(Tag::Img);
$element->with(Attr::Src, '/images/sample.gif');
$element->with(Attr::Alt, 'sample image');
$element->with(Aria::Hidden, 'true');
echo $element;
// <img src="/images/sample.gif" alt="sample image" aria-hidden="true" />

$element = new Element(Tag::Button, 'Sample text');
$element->with(Attr::Type, 'submit');
$element->with(Data::new('test'), 'test');
echo $element;
// <button type="submit" data-test="test">
//     Sample text
// </button>
```

### Define element with children

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

// icon
$i = new Element(Tag::I);
$i->with(Attr::Clazz, 'fa fa-user');

// link
$a = new Element(Tag::A);
$a->with(Attr::Href, "localhost:8080");
$a->append($i);

echo $a;
// <a href="localhost:8080">
//     <i class="fa fa-user"></i>
// </a>
```

## Element methods

### Get element identifier

```php
use PTML\{Old\Element,Old\Tag};

$element = new Element(Tag::I);
echo $element->uid(); // '<unique identifier>'
```

### Get element tag

```php
use PTML\{Old\Element,Old\Tag};

$element = new Element(Tag::I);
echo $element->tag(); // 'i'
```

### Get element text

```php
use PTML\{Old\Element,Old\Tag};

$element = new Element(Tag::I, 'Sample text');
echo $element->text(); // 'Sample text'
```

### Add element attribute

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

$element = new Element(Tag::Button);
$element->with(Attr::Type, '<type>');
```

### Get element attributes

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

$element = new Element(Tag::Button);
$element->with(Attr::Type, '<type>');
$element->with(Attr::Name, '<name>');

echo $element->attrs(); // [ '<type>', '<name>' ]
```

### Check if element has an attribute

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

$element = new Element(Tag::Button);
$element->with(Attr::Type, '<type>');

echo $element->exists(Attr::Type); // true
echo $element->exists(Attr::Name); // false
```

### Remove element attribute

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

$element = new Element(Tag::Button);
$element->with(Attr::Type, '<type>');

// remove attribute
$element->without(Attr::Type);
```

### Add element children

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

$root = new Element(Tag::Button);
$root->with(Attr::Type, '<type>');

// append children
$root->append(new Element(Tag::Img));
```

### Check if element have children

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

$root = new Element(Tag::Button);
$root->with(Attr::Type, '<type>');

$child1 = new Element(Tag::Img);
$child2 = new Element(Tag::Img);

$root->append($child1);

echo $root->contains($child1); // true
echo $root->contains($child2); // false
```

### Remove element children

```php
use PTML\{Old\Attr,Old\Element,Old\Tag};

$root = new Element(Tag::Button);
$root->with(Attr::Type, '<type>');

$child = new Element(Tag::Img);
$root->append($child);

// remove child
$root->remove($child);
```

### Get element as HTML

```php
use PTML\{Old\Aria,Old\Attr,Old\Element,Old\Tag};

$a = new Element(Tag::A, 'Sample link');
$a->with(Attr::Href, 'localhost');

$i = new Element(Tag::I);
$i->with(Attr::Clazz, 'fa fa-user');
$i->with(Aria::Hidden, 'true');

$a->append($i);

echo $a->html();
// <a href="localhost">
//     <i class="fa fa-user" aria-hidden="true"></i>
// </a>
```
