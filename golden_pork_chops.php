<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>3 pork chops</li>
  <li>1/8 tsp seasoned salt</li>
  <li>1/8 tsp pepper</li>
  <li>Garlic to taste</li>
  <li>1 Tbsp cream</li>
  <li>1/2 chopped onion</li>
  <li>1/4 cup sliced mushrooms</li>
  <li>~10 oz cream of mushroom soup</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Preheat oven to 375 F</li>
  <li>Rinse pork chops, and pat dry</li>
  <li>Brown with onions, garlic, and mushrooms</li>
  <li>Place pork chops in 9x13 baking dish</li>
  <li>In a seperate small bowl, combine onion, mushrooms, and
  soup.</li>
  <li>Mix together well and spoon over pork chops</li>
  <li>Cover and bake for 45 minues, then uncover and bake for 15
  minutes. They are done when internam temperature reaches 160 F</li>
  <li>Add cream and serve.</li>
</ol>

<?php
include('footer.inc');
?>
