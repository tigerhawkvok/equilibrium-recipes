<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>2 Tbsp butter ("European Style" low moisture is better)</li>
  <li>
    1 md/lg onion
  </li>
  <li>4 cloves garlic</li>
  <li>1 tsp salt</li>
  <li>1 tsp ginger</li>
  <li>1 tsp cayenne</li>
  <li>0.5 tsp cinnamon</li>
  <li>0.5 tsp tumeric</li>
  <li>1 Tbsp paprika</li>
  <li>2 tsp cumin</li>
  <li>1 Tbsp sugar</li>
  <li>14oz tomato sauce</li>
  <li>1.25 cup heavy cream</li>
  <li>2 lbs sugar (Veggie: 2 pkg Quorn Naked Chik'n Cutlets/Tenders)</li>
  <li>1 Tbsp sesame oil (Veggie: 2 Tbsp)</li>
  <li>0.5 tsp curry</li>
  <li>Veggie, optional: ~ 1.5 tsp Bragg's Amino Acids</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Dice onion (medium-small chunks), and prepare skinned garlic</li>
  <li>In a rammakin or small cup, mix cumin, salt, ginger, cayenne, cinnamon, and tumeric.</li>
  <li>Heat butter over medium heat until mostly melted, then add in onion.</li>
  <li>Stir onion until translucent, ~5 min.</li>
  <li>Crush garlic into saute&eacute;ing onions and stir till fragrant, ~1 min.</li>
  <li>
    Dump spice rammakin into saute&eacute;, and stir together.
    (Keep stirring to prevent burning of spices. If it starts to burn, add ~1 Tbsp more butter).
    Fry until fragrant, ~1 minute.
  </li>
  <li>
    Add tomato sauce to mixture. Wait until it comes to a boil, then reduce to a simmer for 10 minutes.
  </li>
  <li>Dice chicken into medium pieces.</li>
  <li>Mix in cream, paprika, and sugar into sauce. Bring back to a simmer on medium, then reduce back to simmer.</li>
  <li>Stir often until sauce thickens, ~10 minutes.</li>
  <li>Start rice about now if you want.</li>
  <li>Put oil into separate skillet, heat oil then add chicken and curry (and Braggs, if present)</li>
  <li>Sear chicken until lightly browned.</li>
  <li>Transfer chicken and pan juices into sauce</li>
  <li>Simmer for 30 minutes.</li>
</ol>

<?php
include('footer.inc');
?>
