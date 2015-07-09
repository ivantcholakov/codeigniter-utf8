UTF-8 for CodeIgniter
=====================

UTF-8 string support for CodeIgniter based on Kohana's implementation.

This feature is provided by the class UTF8. Its methods are UTF-8 compatible alternatives to the following PHP string functions:

    ltrim()
    ord()
    rtrim()
    strcasecmp()
    strcspn()
    str_ireplace()
    stristr()
    strlen()
    str_pad()
    strpos()
    strrev()
    strrpos()
    str_split()
    strspn()
    strtolower()
    strtoupper()
    substr()
    substr_replace()
    trim()
    ucfirst()
    ucwords()

There are also some other useful methods, browse code to get familiar with them.

Installation
------------

1. Preview the file application/third_party/kohana/utf8/Kohana_UTF8.php and check the technical requirements described there. This feature has been tested with CodeIgniter 3.0.0-dev, also, it is expected to work on CodeIgniter 2.x.
2. Move the content of the directories application/classes, application/hooks, application/third_party/kohana to their corresponding places in your CodeIgniter based site.
3. Copy the setting from the file application/config/hooks.php and paste it inside the corresponding file in your site application/config/hooks.php. This (additional) hook is to register a class autoloader.
4. In your site open the file application/config/config.php and find the setting $config['enable_hooks']. Set it to TRUE.
5. Test the instalation with the example below.

An Example for Quick Testing
----------------------------

```php
$string = 'Iñtërnâtiônàlizætiøn';

echo UTF8::strlen($string);
// Expected result: 20

echo '<br />';

echo UTF8::substr($string, 0, 10) . UTF8::substr($string, 10);
// Expected result: Iñtërnâtiônàlizætiøn
```

License Information
-------------------

* For the original code about adaptation to CodeIgniter:  
Author: Ivan Tcholakov <ivantcholakov@gmail.com>, 2013-2015  
License: The MIT License, http://opensource.org/licenses/MIT

* For Kohana team's code:  
License: GNU LGPL 2.1, http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt
