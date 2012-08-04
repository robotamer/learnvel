A learning bundle for the Laravel Framework
========

Laravel Learnvel Bundle => Hands on learning Laravel while reading the laravel documentation  
Once you are done with this go check out the authvel to learn more about routing, and database creation and migration

## Install

Clone directly in to the Laravel bundles folder  

`cd ~/code/laravel/bundles`

clone

```php
git clone git://github.com/robotamer/learnvel.git
```


Add following line to application/bundles.php

```php
'learnvel' => array('auto' => true, 'handles' => 'learnvel'),
``` 
So it should look like this:  
```php
return array(  
    'docs' => array('handles' => 'docs'),   
    'learnvel' => array('auto' => true, 'handles' => 'learnvel'),   
);
```  

## Ready & go
If your Laravel link is:  
http://example.dev  
go to:  
http://example.dev/learnvel  