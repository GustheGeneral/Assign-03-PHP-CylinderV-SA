<!DOCTYPE html>
<html>

<head>
  <!--Meta Data-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta author="Gustav Ihlenfeld">
  <title>Volume and Surface Area of a Cylinder</title>
  <meta class="ICD2O - Technology and Innovations">
  <!--CSS-->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!--favicon-->
  <link rel="apple-touch-icon" sizes="192x192" href="./favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io/site.webmanifest">
</head>

<body>
  <!--Header-->
  <h1>Volume and Surface Area of a Cylinder, with PHP</h1>
  <img src="./images/formula.png" alt="cylinder" style="float: right; margin: 0 10px;">

  <p></p>
  <p><i><b>Enter the value below in the box to calculate the Volume and Surface Area of a Cylinder<b></i></p>

  <!-- Input boxes for radius and height -->
  <form action="./result.php" method="post" target="results">
    <label for="radius">Radius:</label>
    <input type="number" step="any" id="radius" name="radius" required>
    <br><br>
    <label for="height">Height:</label>
    <input type="number" step="any" id="height" name="height" required>
    <br><br>
    <!-- Submit button -->
    <button type="submit">Calculate Volume and Surface Area</button>
  </form>
  <!-- Output iframe -->
  <iframe name="results" id="results" src="result.php"></iframe>
</body>
</html>
