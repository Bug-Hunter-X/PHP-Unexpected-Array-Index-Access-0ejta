```php
<?php
function processData(array $data): array {
  $result = [];
  foreach ($data as $innerArray) {
    // Check if the inner array is not empty
    if (!empty($innerArray)) {
      $firstElement = $innerArray[0];
      $result[] = $firstElement * 2;
    } else {
      // Handle the case of an empty inner array appropriately.
      // For example, you can add a default value or skip the empty array.
      $result[] = 0; // Or any other suitable default value
    }
  }
  return $result; }

$data = [[1, 2, 3], [4, 5], [6], []]; //Added an empty array
$processedData = processData($data);
print_r($processedData); //Output will handle the empty array gracefully
?>
```