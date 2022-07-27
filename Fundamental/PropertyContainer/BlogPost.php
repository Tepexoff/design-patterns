<?php

namespace Fundamental\PropertyContainer;

class BlogPost extends PropertyContainer
{
    private $title;

    public function __construct($title)
    {
           $this->title = $title;
    }
}