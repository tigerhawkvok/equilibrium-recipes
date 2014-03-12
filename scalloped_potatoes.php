<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>5 large potatoes, thinly sliced</li>
  <li>3/4 cup chopped onion</li>
  <li>3 T butter</li>
  <li>1/4 cup flour</li>
  <li>1 3/4 cup chicken broth</li>
  <li>2 T mayonnaise</li>
  <li>salt, pepper, paprika</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>In greased 9x13 pan, layer potatoes and onions.</li>
  <li>In saucepan, melt butter, stir in flour until smooth. Gradually
  add broth, mayonnaise, salt, and pepper. Cook and stir for 2
  minutes, until thick and bubbly.</li>
  <li>Pour over potatoes, sprinkle with paprika. Cover and bake at
  325 for 2 hours.</li>
</ol>

<?php
include('footer.inc');
?>
