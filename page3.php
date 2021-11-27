<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>



<?php
if(isset($_POST['page2_1'])) {
    extract($_POST);
    $formName = $_POST['formName'];

    $con=mysqli_connect('localhost:3307','dbuser', 'dbpass','db');
    
    if(!$con){
        exit(mysqli_connect_error());
    }
    // Insert to form table
    $query='INSERT INTO form(formName) VALUES(?)';
    $stmt=  mysqli_stmt_init($con);
    
    if(mysqli_stmt_prepare($stmt, $query)){
        mysqli_stmt_bind_param($stmt, 's', $formName);
      
        if(!mysqli_stmt_execute($stmt)){
            exit('ERROR:'.mysqli_stmt_errno($stmt).' '.mysqli_stmt_error($stmt));
        }
        if(mysqli_stmt_affected_rows($stmt)>0)
        {   
            echo "success";
            // header("Location:showform.php");
            // exit();
        }
        else{
            echo 'A problem occured.';
        }
            mysqli_stmt_close($stmt);
    }
    else{
        echo 'querry error';
    }
    
    
  $query = "SELECT id FROM form WHERE formName = '".$formName."'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        $row = mysqli_fetch_assoc($result);
        $formId = $row["id"];
    } else {
    echo "0 results";
    }
 extract($_POST);
  for($i=1;$i<=$numElements; $i++){        
        $query = "INSERT INTO formElements(formId,label,fieldType";
        $values = "";        
        if($fieldType_el[$i]=='image'){
            $query .= ",height, width)";
            $values .= ", $extra_height[$i], $extra_width[$i] ";
        }
        else if($fieldType_el[$i]=='range'){
            $query .= ",max, min)";
            $values .= ",$extra_max[$i], $extra_min[$i]";
        }
        else if($fieldType_el[$i]=='number'){
            $query .= ",max, min,size)";
            $values .= ",$extra_max[$i], $extra_min[$i],$extra_size[$i]";
        }
        else if($fieldType_el[$i]=='password' OR $fieldType_el[$i]=='text'){
            $query .= ", maxlength,size)";
            $values .= ",$extra_maxlength[$i],$extra_size[$i]";
        }
        
         else if($fieldType_el[$i]=='date'){
            $query .= ",dmax, dmin)";
            $values .= ",$extra_dmax[$i], $extra_dmin[$i]";
        }
         else if($fieldType_el[$i]=='datetime-local'){
            $query .= ",dtmax, dtmin)";
            $values .= ",$extra_dtmax[$i], $extra_dtmin[$i]";
        }
        else if($fieldType_el[$i]=='time'){
            $query .= ",tmax, tmin)";
            $values .= ",$extra_tmax[$i], $extra_tmin[$i]";
        }
        else if($fieldType_el[$i]=='checkbox'){
            $query .= ",namech)";
            $values .= ", $namech[$i]";
        }
        else if($fieldType_el[$i]=='radio'){
            $query .= ",namera)";
            $values .= ",$namera[$i]";
        }
        else{
            $query .= ")";
            $values .= "";
        }

        $query .= "VALUES($formId, '$label_el[$i]','$fieldType_el[$i]' $values)";
    
        if (!mysqli_query($con, $query)) {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }

    header("Location:displayCreatedForm.php?formId=$formId&formName=$formName");
    exit();



    mysqli_close($con);
}
?>
<script src="js.js"></script>   
</body>
</html>
