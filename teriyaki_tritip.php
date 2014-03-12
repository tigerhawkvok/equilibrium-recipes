<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
<li>1 2-3 lb tri-tip roast (make sure it has a layer of fat on one side; sometimes retarded butchers remove this fat, even though it's so delicious!)</li>
<li>3/4 cup soy sauce</li>
<li>3/8 cup white sugar</li>
<li>3/8 cup brown sugar</li>
<li>3/8 cup sake (filtered)</li>
<li>3/8 cup mirin</li>
<li>1 Tblspoon garlic, minced</li>
<li>1 Tblspoon sesame seeds</li>
<li>grind of black pepper</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
<li>Mix sauce ingredients together, put tri-tip in large freezer bag and pour in sauce to marinate. Marinate overnight (or at least 3 hours) in fridge. </li>
<li>Preheat oven to 450; pour off marinade (but save it!)</li>
<li>Put tri-tip in pyrex baking pan (9x13 is best) and cook for 20 minutes (caramelization and Maillard reactions occur at this high temp: gives the nice brown coating). </li>
<li>Reduce heat to 350, cook another 20 mins for rare, 30 for medium. </li>
<li>Remove from heat and let rest for AT LEAST 15 MINUTES! (you can tent it with aluminum foil to keep it warm, but if you cut too soon the juices will run out and the meat will be dry). </li>
<li>Meanwhile, heat the reserved teriyaki sauce in a saucepan until just simmering. </li>
<li>Mix 1/4 cup of cornstarch with 1/4 cup cold water until dissolved, then pour into sauce. </li>
<li>Heat on medium until thickened. </li>
<li>Pour over cuts of meat, rice, or pretty much anything.</li>
</ol>

<?php
include('footer.inc');
?>
