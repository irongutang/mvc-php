<?php
return array(
    'blog/bad' => 'blog/index/bad', 
    'blog/good' => 'blog/index/good',
    'blog/([0-9]+)' => 'blog/view/$1',
    
    'good' => 'good/index',
    'good/([0-9]+)' => 'good/view/$1',
    
    'gallery' => 'gallery/index',
    'gallery/([0-9]+)' => 'gallery/view/$1',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    'hot-([0-9]+)' => 'site/index/$1',
    'contact' => 'site/contact',
    '' => 'site/index',
);