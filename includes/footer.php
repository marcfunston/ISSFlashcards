<?php

/*
 * Title: ISS Flashcards Footer Page
 * Author: Marc Funston
 * Purpose: This page contains the top part of the html. 
 * Bugs: None known at this time
 * Last Edit Date: 4/01/2018
 * Last Edit Date: 5/6/2021 Checking before upload to github
 * 
 * 
 */

?>

<!-- END BLOG ENTRIES -->

</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/img_me.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Hi! I'm Marc</b></h4>
      <p>Just a little Flashcard program to help you study. Knowledge is the Gateway to a Bigger World!.</p>
    </div>
  </div><hr>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">

<?php 

// set page values
$previousPage = $page - 1;
$nextPage = $page + 1;

?>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">

<div class="w3-row">
    <div class="w3-half w3-container">
        <form action="index.php" method="post">
            <input type="hidden" name="page" value=<?php echo"$previousPage"; ?>>
            <button class="w3-button w3-black w3-padding-large w3-margin-bottom w3-right" input type="submit" name="submit" value="Next" />Previous</button>
        </form>
    </div>

    <div class="w3-half w3-container">
        <form action="index.php" method="post">
            <input type="hidden" name="page" value=<?php echo"$nextPage"; ?>>
            <button class="w3-button w3-black w3-padding-large w3-margin-bottom" input type="submit" name="submit" value="Next" />Next</button>
        </form>
    </div>
</div>
  
</footer>
</body>
</html>