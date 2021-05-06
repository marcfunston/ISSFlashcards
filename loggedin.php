<?php 

/*
 * Title: ISS Flashcards Logged In Page
 * Author: Marc Funston
 * Purpose: This page sends the user to a page that connects to the rest of the site.
 *          
 * Bugs: None known at this time
 * Last Edit Date: 3/31/2018
 * Last Edit Date: 5/6/2021 Checking before upload to github
 * 
 * 
 */


$page_title = 'Logged In';
include ('includes/head.php');

			// Print a message:
            echo"   <div class=\"w3-card-4 w3-margin w3-white\">\n";
            echo"       <div class=\"w3-container\">\n";
            echo"       <h1>You are now logged in!</h1>\n";
            echo"       </div>\n";
            echo"   </div>\n";


 include ('includes/footerPlain.php'); ?>