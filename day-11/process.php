<?php

$names = [
  "Doe",
  "Smith",
  "Johnson",
  "James",
  "Brown",
  "Davis",
  "Miller",
  "Wilson",
  "Moore",
  "Taylor",
  "Anderson",
  "Thomas",
  "Jackson",
  "White",
  "Harris",
  "Martin",
  "Thompson",
  "Garcia",
  "Martinez",
  "Robinson",
  "Clark",
  "Rodriguez",
  "Lewis",
  "Lee",
  "Walker",
  "Hall",
  "Allen",
  "Young",
  "Hernandez",
  "King",
  "Wright",
  "Lopez",
  "Hill",
  "Scott",
  "Green",
  "Adams",
  "Baker",
  "Gonzalez",
  "Nelson",
  "Carter",
  "Mitchell",
  "Perez",
  "Roberts",
  "Turner",
  "Phillips",
  "Campbell",
  "Parker",
  "Evans",
  "Edwards",
  "Collins",
  "Stewart",
];


$query = $_REQUEST['q'];
$suggestions = [];

if ($query !== "") {
  $query = strtolower($query);
  $len = strlen($query);
  foreach ($names as $name) {
    if (stristr($query, substr($name, 0, $len))) {
      $suggestions[] = $name;
    }
  }
}

echo json_encode($suggestions);
// echo implode(", ", $suggestions);
