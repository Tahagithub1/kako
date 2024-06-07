<?php

// defined('BASE_PATH') OR die("permission Deny");

function diePage($msg) {
    ?>
<style>
    	#error{
			 color: #D8000C;
			background-color: #FFBABA;
             padding: 10px 20px ;
             border: solid 2px red;
             border-radius: 22px;
             display: flex;
             align-items: center;
             justify-content: center;
             width: 99% !important;
             font-size: 14px;

             
		}
</style>
<div  id="error" class="rounded-full">
<svg style="margin: 0 8px;" width="20px" xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-3">      
<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
          </svg>    
 <p><?= $msg ?></p>
</div>
    <?php
    die();
    }
    
    function dd($var)  {
      echo "<pre style='color:red'>";
      var_dump($var);
      echo "</pre>";
    }


    function SiteUrl($uri = '') {
    //    return BASE_URL . $uri;
    }
?>