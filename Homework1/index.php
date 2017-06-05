
<html>

<head>
  <meta charset="utf-8">
  <title>ДЗ1 Недилько</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php
    $arrayVar = array();
    for ($i=0; $i<=10; $i++) {
      array_push($arrayVar, "Элемент $i");
    };
    echo "<p>Элементы с нечетными индексами</p>";
    foreach ($arrayVar as $itemIndex => $itemVar) {
      if ($itemIndex%2 > 0) {
        echo "<b class='indexes'>$itemIndex</b>: $itemVar", "</br>";
        }
    }
    
    echo "<p>Элементы с четными индексами</p>";
    foreach ($arrayVar as $itemIndex => $itemVar) {
      if ($itemIndex%2 == 0) {
        echo "<b class='indexes'>$itemIndex</b>: $itemVar", "</br>";
        }
    }
    
  ?>
</body>
</html>
