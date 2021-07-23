<!DOCTYPE html>
<html>
  <head>
    <title>Open Hours Example</title>
  </head>
  <body>
    <h1>Hells Kitchen</h1>
    <?php
      date_default_timezone_set("America/Los_Angeles");
      if (date("l") == "Sunday")
      {
        echo "Sorry we are closed today you donkey!";
      }
      else
      {
        echo "We are open today from 10am to 9pm";
      }
    ?>
  </body>
</html>
