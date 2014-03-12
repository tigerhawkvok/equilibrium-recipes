<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>4 T butter</li>
  <li>2-3 onions, sliced</li>
  <li>3-5 carrots, sliced</li>
  <li>2 pounds Kielbasa (either whole or bite-sized)</li>
  <li>2 bottles beer</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Saute onions and carrots in butter. Add Kielbasa and brown 3-4
  mins each side.</li>
  <li>Pour in beer and bring to a boil. Turn heat to low and simmer
  30 minutes or until sauce reduces. Serve with or over sp&#0228;tzle,
  noodles, potatoes, or rice.</li>
</ol>
<p>Note: add 1/4 cup brown sugar for glaze-y sauce?</p>
<?php
include('footer.inc');
?>
