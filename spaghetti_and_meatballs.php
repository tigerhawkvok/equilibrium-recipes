<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 pound ground wild boar/beef/bison (Veggie: Impossible burger, thawed slowly at room temp. Fast thawing will result in crumbly meatballs)</li>
  <li>2 eggs (Veggie: 3)</li>
  <li>1/2 cup bread crumbs or oatmeal</li>
  <li>2 cloves garlic, crushed</li>
  <li>1/2 cup Parmesan cheese</li>
  <li>1/4 cup chopped or dried parsley, sage, oregano, basil, or whatever</li>
  <li>3 T olive oil</li>
  <li>1 1/2 jars tomato sauce</li>
  <li>1 pound spaghetti</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Mix meat, crumbs/oatmeal, garlic, eggs, cheese, and
  herbs. Season with salt and pepper. Put tomato sauce on low heat.</li>
  <li>Preheat oven to 350 F</li>
  <li>Heat oil in skillet. Form 1 inch balls of meat mixture and
  saute. Shake the skillet while they cook to keep from sticking, then turn to the other side and repeat.</li>
  <li>Remove the browned meatballs from the skillet, and transfer to the oven in a 9x13 (or, if you used a cast iron pan, just put that in the oven). Bake for 15-20 minutes. They do not need to be cooked through.</li>
  <li>Drop meatballs into sauce, cook on low for 20 minutes. (They will finish cooking here).</li>
  <li>Boil water for spaghetti, cook, drain, and serve with meatballs
  on top. Serve with red wine, sprigs of fresh basil, and Parmesan cheese.</li>
</ol>

<?php
include('footer.inc');
?>
