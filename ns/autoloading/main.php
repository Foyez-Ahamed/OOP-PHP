<?php 

namespace CloudStorage;

include("autoloader.php");

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

class Main{
    function __construct() {
        $mailer =  new Mailer();
        $mailer->sendMail();

        echo "<br>";

        // filesystem uses /

        $scanner = new Scanner();
        $scanner->scan();

        echo "<br>";

        $jpeg = new Jpeg();

        echo $jpeg->getDimension();

    }
}

new Main();
