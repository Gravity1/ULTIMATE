<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    


<h1>Campus wifi</h1>

<table class="rtable">
  <thead>
    <tr>
      <th>Wifi name</th>
      <th>strength</th>
      <th>traffic</td>
      <th>location</th>
      <th>last update`</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>eduroam lib</td>
      <td>-30dB</td>
      <td>34</td>
      <td>n/a</td>
      <td>01:07</td>
    </tr>
    <tr>
      <td>eduroam cherry park</td>
      <td>-50dB</td>
      <td>145</td>
      <td>n/a</td>
      <td>00:59</td>
    </tr>
    <tr>
      <td>eduroam hall 7</td>
      <td>-69dB</td>
      <td>22</td>
      <td>n/a</td>
      <td>00:59</td>
    </tr>
    <tr>
      <td>Internet from the moon</td>
      <td>-88dB</td>
      <td>0</td>
      <td>n/a</td>
      <td>01:01</td>
    </tr>
    <tr>
      <td>jkuat wireless test</td>
      <td>-42dB</td>
      <td>117</td>
      <td>n/a</td>
      <td>00:58</td>
    </tr>
    <tr>
      <td>eduroam pavilion</td>
      <td>-90dB</td>
      <td>5</td>
      <td>n/a</td>
      <td>01:22</td>
    </tr>
    <tr>
      <td>scc 105</td>
      <td>-40dB</td>
      <td>19</td>
      <td>n/a</td>
      <td>01:18</td>
    </tr>
  </tbody>
</table>
<!-- 
<p><a target="_blank" href="http://dbushell.com/2016/03/04/css-only-responsive-tables/">See my blog article for more information</a></p>

<h3>Optional adjustments to suit your content:</h3>

<ul>
  <li><code>white-space: nowrap</code> is optional on the <code>&lt;table&gt;</code> element</li>
  <li>Add <code>min-width</code> to cells to better space content</li>
  <li>Wrap the flip CSS in a media query?</li>
</ul>

<p><strong>Please note:</strong> this CodePen has Autoprefixer enabled. You may need vendor prefixes for full CSS gradient and Flexbox support.</p>

<p><strong>Supports:</strong> IOS7+, Android 4.3+</p>

<p><strong>by: <a target="_blank" href="http://dbushell.com/">David Bushell</a></strong>
 -->

</body>
</html>

<?php
$servername = "localhost";
$username = "id16028170_root";
$password = "9$nA^3o9F&7Z!6";
$dbname = "id16028170_membersdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>