<?php

    //-------------------------//
    // Page
    //-------------------------//

    $Actual_Page = (empty($_GET['p'])) ? '' : $_GET['p'];

    //-------------------------//
    // Client
    //-------------------------//

    $Company_Name  = "Company Name";

    //-------------------------//
    // Languages
    //-------------------------//

    include("languages/languages.php");
    $Language = $_SESSION['language'];

    //-------------------------//
    // Meta
    //-------------------------//

    $Description_Site  = "";
    $Keywords_Site     = $Company_Name."";

    //-------------------------//
    // General
    //-------------------------//

    $Host_Site      = $_SERVER["HTTP_HOST"];
    $Footer_Rights  = "©{$Company_Name} ".date("Y").". {$Copyright}";

    //-------------------------//
    // Links
    //-------------------------//

    $Login_Link = "https://my.client.com/";
    $Register_Link = "{$Login_Link}join/{$user_replica}";
    
?>