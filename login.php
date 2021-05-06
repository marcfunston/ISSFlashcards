<?php # Script 12.3 - login.php
/*
 * Title: ISS Flashcards Register Page
 * Author: Marc Funston
 * Purpose: This page processes the login form submission.
 * 			Upon successful login, the user is redirected.
 * 			Two included files are necessary.
 * 			Send NOTHING to the Web browser prior to the setcookie() lines!
 *          
 * Bugs: None known at this time
 * Last Edit Date: 3/31/2018
 * Last Edit Date: 5/6/2021 Checking before upload to github
 * 
 * 
 */

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// For processing the login:
	require ('includes/login_functions.inc.php');
	
	// Need the database connection:
	require ('includes/mysqli_connect.php');
		
	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
	
	if ($check) { // OK!
		
		// Set the cookies:
		setcookie ('user_id', $data['user_id']);
		setcookie ('first_name', $data['first_name']);
		setcookie ('logged_in', true);
		setcookie ('admin', $data['admin']);
		
		// Redirect:
		redirect_user('loggedin.php');
			
	} else { // Unsuccessful!

		// Assign $data to $errors for error reporting
		// in the login_page.inc.php file.
		$errors = $data;

	}
		
	mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
include ('includes/login_page.inc.php');
?>