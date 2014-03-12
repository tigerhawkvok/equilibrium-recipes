<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 pound ground beef</li>
  <li>1/3 cup bread crumbs or oatmeal</li>
  <li>1 egg</li>
  <li>1 packet onion soup mix</li>
  <li>salt, pepper, herbs</li>
  <li>5? sliced mushrooms</li>
  <li>1.5 cups water</li>
  <li>2 T gravy powder</li>
  <li>2 t Worcestershire Sauce</li>
  <li>1/4 t mustard powder</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Mix onion soup mix with 1.5 cups water.</li>
  <li>Mix beef, egg, crumbs/oatmeal, herbs, salt, pepper and 1/3 cup
  of onion soup mixture. Form 4 patties and brown in skillet.</li>
  <li>Mix remaining soup, gravy, mushrooms, Worcestershire sauce, and
  mustard. Pour over patties.</li>
  <li>Cover and cook for 20 minutes, occasionally flipping patties.</li>
</ol>

<?php
include('footer.inc');
?>
