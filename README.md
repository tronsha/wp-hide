WordPress Hide
==============

:ghost: *Silence Is Golden*

Copy the file **wp-hide.php** into the WordPress root directory.

Add the following code into the file, to hide the file:

```php
defined('ABSPATH') or (@include_once explode('wp-content', __DIR__)[0] . '/wp-hide.php') or die;
```
![](http://instacod.es/file/94822)
