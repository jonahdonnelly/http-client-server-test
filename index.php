<?php
require __DIR__ . '/../vendor/autoload.php';

# TIP: Use the $_SERVER Sugerglobal to get all the data your need from the Client's HTTP Request.

# TIP: HTTP headers are printed natively in PHP by invoking header().
#      Ex. header('Content-Type', 'text/html');

date_default_timezone_set('Canada/Montreal');
 $file = 'index.php';
echo "HTTP/1.1 200 OK" . "<br>";

class info {


        function date() {
            echo "Date: ".date('D, d M Y H:i:s T')."<br>";
        }

        function server() {
            echo "Server: ".gethostbyname("localhost") . "<br>";

        }

        function dateModified() {
            echo "Last-Modified: ".date('D, d M Y H:i:s T.',filectime($file));
        }

        function length() {

            $bodyLength = strlen($body);
            echo $bodyLength;


        function timeStamp(){
            $time = date("h:i:sa");
            echo $time;

    }
        }

}

class user {

    function layout(){
        echo "<section>
            <h2>Send us a Message</h2>
            <form method=\"POST\">
                   <strong> To:</strong> <input type=\"text\" id=\"to\"> </input><br>
                   <strong> Subject:</strong><input type=\"text\" id=\"subject\"></input><br>
                   <strong> Message:</strong><input type=\"text\" id=\"message\"></input><br>
                    <strong> From:</strong><input type=\"text\" id=\"From\"></input><br>
                   <input type=\"submit\" ></input>
            </form>
        </section>
        ";
    }

}

class getUser{

    function getInfo(){

    }
}

$class = new info();
        $class->date();
        $class->server();
        $class->dateModified();
        $class->length();
        // $class->timeStamp();

$class2 = new user();

        $class2->layout();

require_once('../library/classes/Message.php');

?>