<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>4 Tbsp unsalted butter</li>
  <li>2 cups chopped onions</li>
  <li>1 lbs fresh mushrooms, sliced</li>
  <li>1.5 tsp dried dill</li>
  <li>1 tsp paprika</li>
  <li>1 Tbsp soy sauce</li>
  <li>1 Tbsp worchestire sauce</li>
  <li>2 cups chicken broth</li>
  <li>1 cup milk</li>
  <li>3 Tbsp flour</li>
  <li>1 tsp salt</li>
  <li>2 tsp lemon juice</li>
  <li>1/4 cup chopped fresh parsley</li>
  <li>1/2 cup sour cream</li>
  <li>pepper to taste</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Melt the butter in a large pot over medium heat. Saute the onions in the butter for 5 minutes.</li>
  <li>Add the mushrooms and saute for 5 more minutes.</li>
  <li>Stir in the dill, paprika, soy sauce, worchestire, and broth. Reduce heat to low, cover, and simmer for 15 minutes.</li>
  <li>In a separate small bowl, whisk the milk and flour together. Pour this into the soup and stir well to blend.</li>
  <li>Cover and simmer for 15 more minutes, stirring occasionally.</li>
  <li>Finally, stir in the salt, ground black pepper, lemon juice, parsley and sour cream. Mix together and allow to heat through over low heat, about 3 to 5 minutes. Do not boil. Serve immediately.</li>
</ol>

<?php
include('footer.inc');
?>
