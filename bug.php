```php
function buggyFunction($arr) {
  if (empty($arr)) {
    return []; // Handle empty array
  }

  $result = [];
  foreach ($arr as $key => $value) {
    // Incorrect condition leading to skipping some elements
    if ($value > $arr[$key -1] ) {
        $result[$key] = $value;
    }
  }
  return $result;
}

$array = [1, 3, 2, 5, 4];
$result = buggyFunction($array);
print_r($result); // Output will be incorrect
```