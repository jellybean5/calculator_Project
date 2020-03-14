<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <!--This is the calculater we see on the website-->
    <form method="get">
      <input style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'" type="text" name="num1" placeholder="Number 1">
       <select style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'" name="operator">
        <option >None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <input style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'" type="text" name="num2" placeholder="Number 2">
     
      <button style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'" type="submit" name="submit">Equals</button>
    </form>

    <h1 style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'">The answer is:</h1>
    
    <?php
      //This is the PHP script that calculates in the background

      //First we check if the button has been clicked
      if (isset($_GET['submit'])) {
        //Then we get all the data from the form
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

      // ADDED SOLUTION VARIABLES FOR EACH EQUATION

        $add_solution = $result1 + $result2;

        $subtract_solution = $result1 - $result2;

        $multiply_solution = $result1 * $result2;

        $divide_solution = $result1 / $result2;

        //Here we check which operator the user chose, and we perform the calculation
        switch ($operator) {
          case "None":
            echo "You need to select an operator!";
            break;
          case "Add":
            echo "<h1>$add_solution</h1>";
            break;
          case "Subtract":
            echo "<h1>$subtract_solution</h1>";
            break;
          case "Multiply":
            echo "<h1>$multiply_solution</h1>";
            break;
          case "Divide":
            echo "<h1>$divide_solution</h1>";
            break;
          default:
            echo "Error!";
            break;
        }
      }

    ?>
  </body>
</html>
