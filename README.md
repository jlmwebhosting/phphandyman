PHP Handyman
============

PHP handyman is a collection of PHP-functions to extend the standard library.

Requirements
============

PHP SPL is used, therefore PHP 5 or newer required.


How to use
----------

Just include/require the class-file and call it:

```php
<?php

require('lib/handyman/String.php');

$somestring = "Just another annoying placeholder for a more useful string";

if (true === String::startswith($somestring, 'Ruby')){
	echo 'String started with Ruby';
} else{
	//do something spectacular
}

?>
```