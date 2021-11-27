<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>



<?php
if(isset($_POST['page1'])) {
    $formName=$_POST['formName'];
    $numElements=$_POST['numElements'];

    $form ='';
    $form = '<form method="post" action="page2_1.php">';
    
    for($i=1; $i<=$numElements; $i++){
        $form .= '<h3>Element '.$i.' :</h3>
                    Label <input type="text" name="label_el['.$i.']" required> 
                    Type <select name="fieldType_el['.$i.']" required> 
                            <option value="text"> Text </option> 
                            <option value="number"> Number </option>
                            <option value="password"> Password </option>
                            <option value="range">range</option>
                            <option value="color">color</option>
                            <option value="date">date</option>
                            <option value="datetime-local">datetime-local</option>
                            <option value="time">time</option>
                            <option value="tel">tel</option>
                            <option value="email">email</option>
                            <option value="url">url</option>
                            <option value="search">search</option>
                            <option value="file">file</option>
                            <option value="image">image</option>
                            <option value="hidden">hidden</option>
                            <option value="radio">radio</option>
                            <option value="checkbox">checkbox</option>
                            <option value="button">button</option>
                            <option value="submit">submit</option>
                            <option value="reset">reset</option>
                         </select> 
                     </br></br>';
    }
    $form .= '<input type="text" name="formName" value="'.$formName.'" readonly hidden>';
    $form .= '<input type="text" name="numElements" value="'.$numElements.'" readonly hidden>';
    $form .= '<input type="submit" name="page2" value="Next">';
    $form .= '</form>';
    echo $form;

}
// Process data retreived from same page
/*else if(isset($_POST['page2'])){
    extract($_POST);

    $form ='';
    $form = '<form method="post" action="page3.php">';
    
    for($i=1; $i<=$numElements; $i++){
        $form .=   '<input type="text" name="label_el['.$i.']" value="'.$label_el[$i].'" readonly> 
                    <input type="text" name="fieldType_el['.$i.']" value="'.$fieldType_el[$i].'" readonly>';
                    // Check for input types and display accordingly
                    if($fieldType_el[$i]=='image'){
                        $form .=  '<input type="number" placeholder="height" name="extra_height['.$i.']" size=1>
                                   <input type="number" placeholder="width" name="extra_width['.$i.']" size=1><br>';
                    }else if($fieldType_el[$i]=='range'){
                        $form .= '<input type="number" placeholder="max" name="extra_max['.$i.']" size=1>
                                  <input type="number" placeholder="min" name="extra_min['.$i.']" size=1>
                                  <input type="number" placeholder="step" name="extra_step['.$i.']" size=1><br>';
                    }else if($fieldType_el[$i]=='password' OR $fieldType_el[$i]=='text'){
                        $form .= '<input type="number" placeholder="maxlength" name="extra_maxlength['.$i.']" size=1><br>';
                    }

    }

    $form .= '<input type="text" name="formName" value="'.$formName.'" readonly hidden>';
    $form .= '<input type="text" name="numElements" value="'.$numElements.'" readonly hidden>';
    $form .= '<br/><br/><input type="submit" name="page2" value="Build the form">';
    $form .= '</form>';
    echo $form;



}*/
else{
    echo "Could not catch the form fro page 1";
}

?>
<script src="js.js"></script>   
</body>
</html>
