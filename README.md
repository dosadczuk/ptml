# PTML

Build HTML elements using PHP classes.

## Examples

### Basic element

```php
use PTML\{Element, Tag};

echo new Element(Tag::A);

// output: <a ></a>
```

### Basic element with text

```php
use PTML\{Element, Tag};

echo new Element(Tag::A, 'Sample text');

// output: <a >Sample text</a>
```

### Basic element with attribute

```php
use PTML\{Attr, Element, Tag};

$link = new Element(Tag::A, 'Sample text');
$link->with(Attr::Href, 'https://localhost:8080');

echo $link;

// output: <a href="https://localhost:8080">Sample text</a>
```

### Basic element with attributes

```php
use PTML\{Attr, Element, Tag};

$link = new Element(Tag::Button, 'Sample text');
$link->with(Attr::Name, 'submit-btn');
$link->with(Attr::Type, 'submit');

echo $link;

// output: <button name="submit-btn" type="submit">Sample text</button>
```
