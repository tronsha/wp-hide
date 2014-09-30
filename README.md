WordPress Silence Is Golden
===========================

![](http://instacod.es/file/94822)

Copy the file *hide.php* into the WordPress root directory.

Add the following code into the file, to hide the file:

```php
include_once explode('wp-content', __DIR__)[0] . '/hide.php';
```
