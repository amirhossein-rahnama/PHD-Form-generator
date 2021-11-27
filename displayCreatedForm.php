<?php

$formId = $_GET['formId'];
$formName = $_GET['formName'];


// Create connection
$con=mysqli_connect('localhost:3307','dbuser', 'dbpass','db');

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM formElements where formId = $formId";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<h2>$formName</h2>";
  echo "<form name=$formName>";
  while($row = mysqli_fetch_assoc($result)) {
    if($row['fieldType']=='image'){
      echo $row['label'].": <input type='".$row['fieldType']."' width='".$row['width']."'height='".$row['height']."'>";
    }
    elseif($row['fieldType']=='range'){
      echo $row['label'].": <input type=".$row['fieldType']." max=".$row['max']."min=".$row['min']."step=".$row['step'].">";
    }
    elseif($row['fieldType']=='password' OR $row['fieldType']=='text'){
        echo $row['label'].": <input type=".$row['fieldType']." maxlength=".$row['maxlength']."size=".$row['size'].">";
    }
     elseif($row['fieldType']=='number'){
      echo $row['label'].": <input type=".$row['fieldType']." max=".$row['max']."min=".$row['min']."size=".$row['size'].">";
    }
     elseif($row['fieldType']=='tel'){
      echo $row['label'].": <input type=".$row['fieldType']."pattern=".$row['pattern'].">";
    }
     elseif($row['fieldType']=='date'){
      echo $row['label'].": <input type=".$row['fieldType']." max=".$row['dmax']."min=".$row['dmin'].">";
    }
     elseif($row['fieldType']=='time'){
      echo $row['label'].": <input type=".$row['fieldType']." max=".$row['tmax']."min=".$row['tmin'].">";
    }
     elseif($row['fieldType']=='datetime-local'){
      echo $row['label'].": <input type=".$row['fieldType']." max=".$row['dtmax']."min=".$row['dtmin'].">";
    }
     elseif($row['fieldType']=='checkbox'){
      echo $row['label'].": <input type=".$row['fieldType']." name='".$row['namech']."'>";
    }
     elseif($row['fieldType']=='radio'){
      echo $row['label'].": <input type=".$row['fieldType']." name='".$row['namera']."'>";
    }
    else{
        
      echo $row['label'].": <input type=".$row['fieldType'].">";
    }
    echo "<br>";
  }

  echo "</form>";

} else {
  echo "0 results";
}

mysqli_close($con);

?>
