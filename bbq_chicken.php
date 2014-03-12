<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>BBQ Sauce</li>
  <li>2 tsp garlic powder</li>
  <li>2 tsp onion powder</li>
  <li>2 tsp paprika</li>
  <li>1 tsp oil</li>
  <li>2 cloves crushed garlic</li>
  <li>1/2 tsp seasoned salt</li>
  <li>2 chicken breasts</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Rinse chicken in cold water thoroughly, and slash peices</li>
  <li>Marinate in mix of above for a minimum of 30 minutes.</li>
  <li>Heat oven fo 450 F. Bake for 20 minutes, covered.</li>
  <li>Uncover chicken, flip, and bake for another 20 minutes.</li>
</ol>

<?php
include('footer.inc');
?>
