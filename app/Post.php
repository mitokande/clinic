<?php // File: app/Post.php

namespace App;

use Corcel\Model\Post as Corcel;

class Post extends Corcel
{
    protected $connection = 'wordpress';

    public function customMethod() {
        //
    }
}