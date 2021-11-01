<?php

// Print current date

echo date('d-m-Y H:i:s'). '<br>';

// Print yesterday

echo date('d-m-Y H:i:s', time() - 60 * 60 * 24). '<br>';

// Different format: https://www.php.net/manual/en/function.date.php

echo date('F j Y H:i:s'). '<br>';

// Print current timestamp

echo time(). '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$parseDate = date_parse('2021-11-01 13:27');

echo '<pre>';
print_r($parseDate);
echo '<pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

$dayString = 'Nov 1 2021 13:30:30';

$dateFormat = date_parse_from_format('F j Y H:i:s', $dayString);

echo '<pre>';
print_r($dateFormat);
echo '<pre>';
