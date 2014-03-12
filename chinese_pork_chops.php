<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1/2 cup soy sauce</li>
  <li>1/4 cup brown sugar</li>
  <li>2 Tbsp lemon juice</li>
  <li>1 Tbsp oil</li>
  <li>1/2 tsp ginger</li>
  <li>1/8 tsp garlic powder</li>
  <li>6 boneless pork chops</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>In a bowl, mix soy sauce, brown sugar, lemon juice, vegetable
  oil, ginger, and garlic powder.</li>
  <li>Set aside some of the mixture in a seperate bowl for marinating
  during cooking</li>
  <li>Pierce the pork chops on both sides with a fork, place in a
  large plastic bag, and cover with remaining marinade.</li>
  <li>Refridgerate for 6-8 hours</li>
  <li>Preheat grill for high heat</li>
  <li>Lightly oil the grill grate. </li>
  <li>Grill pork chops 6-8 minutes per side, marinating often with
  reserved marinade.</li>
</ol>

<?php
include('footer.inc');
?>
