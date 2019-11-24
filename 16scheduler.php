
<!--16: Exercise Using PHP | Scheduled Message Programming | PHP Tutorial | Learn PHP Programming-->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
  <title>Scheduler</title>
</head>
<body>



<?php

// https://www.w3schools.com/php/func_date_date.asp

$dayofweek = date("w");
  echo $dayofweek;

  switch ($dayofweek)  {
    case 1:
      echo "It is Monday!";
      break;
    case 2:
        echo "It is Tuesday!";
      break;
    case 3:
        echo "It is Wednesday!";
      break;
    case 4:
        echo "<p class=red>It is Thursday!</p>";
      break;
    case 5:
        echo "<p>It is Friday!</p>";
      break;
    case 6:
         echo "It is Saturday!";
      break;
    case 0:
        echo "It is Sunday!";
      break;
  }


?>

</body>
</html>
