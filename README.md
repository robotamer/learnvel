A learning bundle for the Laravel Framework
========

Laravel Learnvel Bundle => Hands on learning Laravel while reading the laravel documentation


Clone directly in to the Laravel bundles folder  

`cd ~/code/laravel/bundles`

clone

`git clone git://github.com/RoboTamer/learnvel.git`  


Add following line to application/bundles.php

`'learnvel' => array('auto' => true, 'handles' => 'learnvel'), `  
So it should look like this:  
`return array(  
    'docs' => array('handles' => 'docs'),   
    'learnvel' => array('auto' => true, 'handles' => 'learnvel'),   
);`  

## Redy & go
If your Laravel link is:  
http://example.dev  
go to:  
http://example.dev/learnvel  