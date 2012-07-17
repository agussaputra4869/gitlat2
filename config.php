<?php

/* ******************************** 

   *** General Configuration    ***

   *** Author Asutarko          ***

   *** Versi 2.0.0              ***

   ******************************** */



include "db_config2.php";






//Requirement

include INC_DIR."/debug.php";

include INC_DIR."/functions.php";

include INC_DIR."/class_database.php";

include INC_DIR."/class_user.php";

$users=new user;

$cek=$users->user_check_cookie();

 

$database = new database();

?> 