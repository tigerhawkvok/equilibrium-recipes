<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 pound ground beef (Veggie: 1x Gimme Lean, 2x Quorn)</li>
  <li>2 eggs (Veggie: 3)</li>
  <li>1/2 cup bread crumbs or oatmeal (Veggie: double)</li>
  <li>2 cloves garlic, crushed (Veggie: double)</li>
  <li>1/2 cup Parmesan cheese (Veggie: double)</li>
  <li>1/4 cup chopped parsley, sage, oregano, or whatever (Veggie: double)</li>
  <li>3 T olive oil</li>
  <li>1 1/2 jars tomato sauce</li>
  <li>1 pound spaghetti</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Mix beef, crumbs/oatmeal, garlic, eggs, cheese, and
  herbs. Season with salt and pepper. Put tomato sauce on low heat.</li>
  <li>Heat oil in skillet. Form 1 inch balls of meat mixture and
  saute until no pink is visible, turning.</li>
  <li>Drop meatballs into sauce, cook on low until pasta ready.</li>
  <li>Boil water for spaghetti, cook, drain, and serve with meatballs
  on top. Serve with red wine, sprigs of fresh basil, and Parmesan cheese.</li>
</ol>

<?php
include('footer.inc');
?>
