Recipes!
=======================

https://papayapythons.com/recipes/

A fork for just KR can be found at http://www.quantum-immortal.net/rspradley/recipes/root.php


# How to add a new recipe

**This assumes you have an account**. Otherwise, [join GitHub](https://github.com/join) and make me add you as a collaborator, or email your mod of [`template.php`](https://github.com/tigerhawkvok/equilibrium-recipes/blob/master/template.php) to me directly.

1. Take [the template file `template.php`](https://github.com/tigerhawkvok/equilibrium-recipes/blob/master/template.php), and copy its contents.

2. Create a new file

  > <img src='https://f.cloud.github.com/assets/165937/2404368/bea0bd1e-aa3a-11e3-8559-9f57ff258490.png'/>

3. Paste the contents of the template in the editor, edit, and save! Just name the file `name_of_my_recipe.php`. Shoot me an email to update the site to get it up fast, otherwise I'll notice it in a bit and update.


# How to include these recipes in your own site

Include this anywhere in your root loop:

```php
function array_multimerge($a1,$a2)
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
          if(array_key_exists($k,$r) && !is_numeric($k))
            {
              $i=2;
              $kt = $k."-".$i;
              while(key_exists($kt,$r))
                {
                  $i++;
                  $kt = $k."-".$i;
                }
              $k = $kt;
            }
          else if (key_exists($k,$r) && is_numeric($k))
            {
              $r[]=$v;
              $skip = true;
            }
          if(!$skip) $r[$k]="\n\t<li><a href='$v'>$k</a></li>";;
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
      $list=array();
      foreach($fill as $key=>$value)
        {
          $list[strtolower($key)]=$value;
        }
    }
  catch (Exception $e)
    {
      return is_array($list) ? $list:array();
    }
  return is_array($list) ? $list:array();
}
```

Then, once you have the list of your own files (check out `dirList()` in `index.php` for how I do it), add the following line into you list generator:

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
