<?php

 if (isset ($_GET['page']))
 {
     $page=$_GET['page'].'.php';
     
     if (file_exists('include/' .$page))
     {
            include('include' .$page);
     }
     else
     {
            include('include/iskola.php');
     }
 }
else
{
    include('include/iskola.php');
}

?>
