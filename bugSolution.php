```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately, e.g., throw an exception or log an error.
      trigger_error("Non-numeric value encountered in array: " . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = ['1', '2', '3', '4', '5'];
echo calculateSum($numbers); // Output: 15

$numbers = [1, 2, 'abc', 4, 5];
echo calculateSum($numbers); // Output: 12 (Warning: Non-numeric value encountered in array: abc)

$numbers = [];
echo calculateSum($numbers); // Output: 0
```