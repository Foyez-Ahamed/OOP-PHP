<?php

namespace CloudStorage\FileSystem\Files\Images;

use \CloudStorage\FileSystem\Files\Contacts\ImageContact;

class Jpeg implements ImageContact{
    function getDimension()
    {
        return "This is jpeg file";
    }
}