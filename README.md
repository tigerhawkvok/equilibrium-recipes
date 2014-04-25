Recipes!
=======================

http://revealedsingularity.net/recipes/index.php

A fork for just KR can be found at http://www.quantum-immortal.net/rspradley/recipes/root.php

# How to include these recipes in your page

Include this anywhere in your root loop:

```php
{
  /*
   * Takes an array with duplicate keys and renames the keys.
   */
  $r = is_array($a1) ? $a1:array();
  if(is_array($a2))
    {
      foreach($a2 as $k=>$v)
        {
          $skip = false;
          if(key_exists($k,$r) && !is_numeric($k))
            {
              $i=2;
              while(key_exists($kt,$r)) $i++;
              $k = $k+"-"+$i;
            }
          else if (key_exists($k,$r) && is_numeric($k))
            {
              $r[]=$v;
              $skip = true;
            }
          if(!$skip) $r[$k]=$v;
        }
    }
  return array_unique($r);
}

function includeTarget($url)
{
  try
    {
      $opts = array(
        'http'=>array(
          'method'=>'GET',
          'timeout'=>3.5
        )
      );
      $context = stream_context_create($opts);
      $json=@file_get_contents($url,false,$context);
      if($json === false) return $fill;
      $fill=json_decode($json,true);
    }
  catch (Exception $e)
    {
      return is_array($fill) ? array():$fill;
    }
  return is_array($fill) ? array():$fill;
}
```

Then, once you have the list of your own files, add the following line:

```php
  // Multimerge above will append a number to the end of the recipe name in case of duplicate versions.
  $list=array_multimerge($list,includeTarget('FULL_URL_TO_TARGET/api.php'));
  /*
   * Since the keys contain recipe names, 
   * and the values may contain full URLs, 
   * sort by the keys
   */
  ksort($list);
```

# How to add

**This assumes you have an account**. Otherwise, [join GitHub](https://github.com/join) and make me add you as a collaborator, or email your mod of [`template.php`](https://github.com/tigerhawkvok/equilibrium-recipes/blob/master/template.php) to me directly.

1. Take [the template file `template.php`](https://github.com/tigerhawkvok/equilibrium-recipes/blob/master/template.php), and copy its contents.

2. Create a new file

  > <img src='https://f.cloud.github.com/assets/165937/2404368/bea0bd1e-aa3a-11e3-8559-9f57ff258490.png'/>

3. Paste the contents of the template in the editor, edit, and save! Just name the file `name_of_my_recipe.php`. Shoot me an email to update the site to get it up fast, otherwise I'll notice it in a bit and update.
