<?php
    class greeting
    {
        public $str = "Hello, World";

        function show()
        {
            return $this -> str;
        }
    }

    $msg = new greeting;
    var_dump($msg);
    echo"<hr>";

    echo "This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>