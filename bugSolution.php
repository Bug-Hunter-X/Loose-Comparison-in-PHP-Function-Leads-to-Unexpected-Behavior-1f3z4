```php
<?php
function my_function($a, $b) {
  if ($a === 0) {
    return $b;
  }
  return $a + $b;
}

$result = my_function(0, 5);
echo $result; // Output: 5

$result = my_function(0, 0); 
echo $result; //Output: 0

$result = my_function(5, 0);
echo $result; // Output: 5

$result = my_function('0', 5); // added test case
echo $result; // Output: 5

$result = my_function(0, '5'); //added test case
echo $result; //Output: 5
?>
```