<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
        // Add database
        require('../../config.php');
        $con = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
        //mysqli_select_db(DB_DATABASE, $con);
        $SQL = "alter TABLE `" . DB_PREFIX . "banner_image` add column geolocation int ";
        mysqli_query( $con,$SQL);
        die('Setup Successful !');
?>
