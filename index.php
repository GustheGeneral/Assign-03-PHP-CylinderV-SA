<!DOCTYPE html>
<html>

<head>
  <!--Meta Data-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta author="Gustav Ihlenfeld">
  <title>V and & SA of a Cylinder</title>
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
  <h1>Volume and Surface Area, with PHP</h1>
  <img src="./images/cylinder.jpg" alt="cylinder" style="float: right; margin: 0 10px;">

  <p></p>
  <p><i><b>Enter the value below in the box to calculate the Volume and Surface Area of a Cylinder<b></i></p>

  <!-- Input boxes for side A, side B, and height -->
  <form action="./result.php" method="post" target="results">
    <label for="farenheit">Farenheit:</label>
    <input type="number" id="farenheit" name="farenheit" placeholder="Farenheit" step="0.01" required>">
    <br></br>
    <!--Function-->
    <button type="submit">Calculate Celsius</button>
  </form>
  <p id="output"></p>
  <iframe name="results" id="results" src="result.php"></iframe>
</body>
</html>