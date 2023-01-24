<?php

error_reporting(E_ALL);

if(!isset($_GET["q"]) or strlen($_GET["q"]) < 3) {
    http_response_code(400);
    die();
}

header("Content-Type: application/json");

//   Artificial Delay
sleep(1);


  $host_name = 'db5000252119.hosting-data.io';
  $database = 'dbs246210';
  $user_name = 'dbu482127';
  $password = 'soad1288P6rdyrbstr90?!';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    $query = "
    SELECT p.id 
        .p.country
    FROM countries p
    WHERE country LIKE :country_name
    ORDER BY p.country 
        .p.country
    LIMIT 10
    ";
  } catch (PDOException $e) {
    echo "Fehler!: " . $e->getMessage() . "<br/>";
    die();
  }

//   Execute query
$query_statement = $db_conn->prepare($query);
$query_statement->execute([
    "country" => "%" . $_GET["q"] . "%"
]);

// parse results
$item_results = $query_statement->fetchAll(PDO::FETCH_ASSOC);
$item_results = array_map(function(array $item) {
    return [
        "country" => utf8_encode($item["country"]),
    ];
}, $item_results);

// build overall result
$result = [
    "time" => gmdate(DATE_ISO8601),
    "query" => $_GET["q"],
]

?>