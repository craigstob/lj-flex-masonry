# Local Jungle Flex Masonry

To use this plugin simply install and activate it. Then put this CSS _class_ selector on the parent node you want to
transform the children to masonry.

```html
.masonry_gallery
```

For example the markup could look like:

```html

<div class="masonry_gallery">
    <div>one</div>
    <div>two</div>
    <div>three</div>
    <div>etc</div>
</div>
```

Or a list:

```html

<ul class="masonry_gallery">
    <li>One</li>
    <li>Two</li>
    <li>Three</li>
</ul>
```

To control the breakpoints of the columns find this section of the code located in the lj.flex.masonry.php file and edit
to your liking:

```php
breakpointCols: {
          'min-width: 600px': 3,
          // 'min-width: 1200px': 5,
          // 'min-width: 992px': 4,
          // 'min-width: 768px': 3,
          'min-width: 300px': 2,
        },
```