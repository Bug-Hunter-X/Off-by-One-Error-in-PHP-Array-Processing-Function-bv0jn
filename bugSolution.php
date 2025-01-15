```php
function fixedFunction($arr) {
  if (empty($arr)) {
    return []; // Handle empty array
  }

  $result = [];
  for ($i = 0; $i < count($arr); $i++) {
    // Correct condition: checks against the previous element
    if ($i > 0 && $arr[$i] > $arr[$i - 1]) {
      $result[$i] = $arr[$i];
    } elseif ($i === 0) {
      $result[$i] = $arr[$i]; //include first element
    }
  }
  return $result;
}

$array = [1, 3, 2, 5, 4];
$result = fixedFunction($array);
print_r($result); // Correct Output
```