<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>2 chicken breasts, cut into strips</li>
  <li>2 T butter</li>
  <li>2 cans cream of chicken soup</li>
  <li>1 onion, chopped</li>
  <li>2-3 carrots, sliced</li>
  <li>2-3 stalks celery, chopped</li>
  <li>1/2 cup peas</li>
  <li>pepper. salt, herbs, etc.</li></ul>
<br /><ul>
  <li>2 cups flour</li>
  <li>1/2 t salt</li>
  <li>1 egg</li>
  <li>5 T butter</li>
  <li>1/2 cup milk</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Place chicken, 2 T butter, cream of chicken and vegetables in
  slow cooker, cover with water or broth, and cook 5-6 hours on
  high.</li>
  <li>Make dough from flour, 1/2 t salt, egg, 5 T butter and milk,
  form thin 1.5" strips, and add to pot 45 minutes before done.</li>
</ol>

<?php
include('footer.inc');
?>
