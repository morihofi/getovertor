## What is getovertor?
PHP function to get a string over the Tor network

## Dependencies

 - Tor (https://www.torproject.org/) must be run as daemon
 - PHP must be installed
 - (Apache2 is optional)
## How to use
Create a PHP-file and include the *getovertor.php* file like this:

    <?php
    require_once("getovertor.php"); //Imports getovertor function

	  ...

To receive a string, you can use this:

    <?php
    require_once("getovertor.php"); //Imports getovertor function
    
    $recievedfromtor = getovertor("xyz.onion"); //Gets the source-code of xyz.onion.
    //You can also get the source-code from github.com like this:
    //getovertor("github.com");
    echo $recievedfromtor; //Outputs the variable $recievedfromtor
