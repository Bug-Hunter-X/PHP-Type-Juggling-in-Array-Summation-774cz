```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = ['1', '2', '3', '4', '5'];
echo calculateSum($numbers); // Output: 15 (Notice: Type juggling)

$numbers = [1, 2, 'abc', 4, 5];
echo calculateSum($numbers); // Output: 12 (Notice: Type juggling and potential error)

$numbers = [];
echo calculateSum($numbers); // Output: 0 (Correct)
```