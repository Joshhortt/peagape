
<!--15: Exercise Using PHP | Let's Build a Calculator | PHP Tutorial | Learn PHP Programming-->
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Calculator</title>
</head>
<body>

<form>
  <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
      <option>None</option>
      <option>Add</option>
      <option>Sub</option>
      <option>Mult</option>
      <option>Div</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculator</button>
</form>

<p>The answer is:</p>

<?php

if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
      case None:
      echo "you need to select a method";
      break;
      case Add:
      echo $result1 + $result2;
      break;
      case Sub:
      echo $result1 - $result2;
      break;
      case Mult:
      echo $result1 * $result2;
      break;
      case Div:
      echo $result1 / $result2;
      break;
    }
}

?>

</body>
</html>
