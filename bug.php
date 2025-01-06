```php
<?php
function processData(array $data): array {
  // Assume $data is an array of arrays, each inner array having at least one element.
  $result = [];
  foreach ($data as $innerArray) {
    $firstElement = $innerArray[0]; // Potential error: accessing non-existent index
    // ... process $firstElement ...
    $result[] = $firstElement * 2; // Further processing
  }
  return $result; }

$data = [[1, 2, 3], [4, 5], [6]];
$processedData = processData($data);
print_r($processedData);
?>
```