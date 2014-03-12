<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 pound pork or chicken</li>
  <li>1 egg</li>
  <li>1/4 cup soy sauce</li>
  <li>flour (for coating)</li>
  <li>vegetable oil (for frying)</li></ul><br />
<ul>
  <li>1/4 cup sugar</li>
  <li>1/4 cup ketchup</li>
  <li>1/4 cup water</li>
  <li>1/2 can pineapple juice</li>
  <li>1 T soy sauce</li>
  <li>1/4 cup vinegar</li>
  <li>2 T corn starch</li>
</ul><br />
<ul>
  <li>1 bell pepper, chopped</li>
  <li>1 onion, chopped</li>
  <li>2-3 carrots, sliced</li>
  <li>1/2 can pineapple chunks</li>
  <li>sesame seeds</li>
  <li>ginger</li>
  <li>steamed rice</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Mix sauce ingredients and set aside. Mix egg with soy
  sauce. Cube meat and coat in egg mixture, then dip in flour.</li>
  <li>Heat oil for frying, then drop in coated meat for 2-3
  minutes. Remove to paper towel and continue until all meat is
  fried.</li>
  <li>Stir-fry vegetables and sesame seeds with ginger for 1 minute,
  then add sauce mixture. When it thickens, add fried meat and mix
  until coated. Serve hot over rice.</li>
</ol>

<?php
include('footer.inc');
?>
