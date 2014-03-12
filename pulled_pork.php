<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>3/4 pounds pork shoulder ribs</li>
  <li>4 T soy sauce</li>
  <li>6 T Hoisin sauce</li>
  <li>1 T rice vinegar</li>
  <li>1/2 cup pineapple juice</li>
  <li>1 T corn starch</li>
  <li>1/2 cup water</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Put soy sauce, Hoisin sauce, vinegar and pineapple juice in
  crock pot, add meat to coat. Slow cook 8 hours.</li>
  <li>Remove meat and pull apart with forks, disposing of bones. Mix
  starch with water and add to liquid in pot. Return meat and
  mix. Serve over rice.</li>
</ol>

<?php
include('footer.inc');
?>
