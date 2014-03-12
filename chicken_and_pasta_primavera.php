<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>10.75 oz cream of mushroom soup</li>
  <li>3/4 cup milk</li>
  <li>1/4 cup grated parmesan</li>
  <li>1/8 tsp pepper</li>
  <li>2 cups broccoli florets</li>
  <li>1/8 tsp garlic powder</li>
  <li>2 carrots, thinly sliced</li>
  <li>1.5 cups farfalle pasta</li>
  <li>10oz chicken chunks (2x5oz cans), drained</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Cook &amp; drain pasta</li>
  <li>Meanwhile, prepare cream sauce. In a medium saucepan, mix
  together cream of mushroom soup, milk, parmesan, pepper, brocolli,
  garlic powder, and carrots.</li>
  <li>Bring to a boil over medium heat, then reduce to low and cover</li>
  <li>Simmer for 10 minutes or until veggies are tender</li>
  <li>Stir pasta and chicken into cream sauce and heat through</li>
</ol>

<?php
include('footer.inc');
?>
