<?php
if(isset($_POST['page2'])){
    extract($_POST);

    $form ='';
    $form = '<form method="post" action="page3.php">';
    
    for($i=1; $i<=$numElements; $i++){
        $form .=   '<br/><input type="text" name="label_el['.$i.']" value="'.$label_el[$i].'" readonly> 
                    <input type="text" name="fieldType_el['.$i.']" value="'.$fieldType_el[$i].'" readonly>';
                    // Check for input types and display accordingly
                    if($fieldType_el[$i]=='image'){
                       $form .=  '<input type="number" placeholder="height" name="extra_height['.$i.']" size=1 required>
                                   <input type="number" placeholder="width" name="extra_width['.$i.']" size=1 required><br>';
                    }else if($fieldType_el[$i]=='range'){
                       $form .= '<input type="number" placeholder="max" name="extra_max['.$i.']" size=1 required>
                                  <input type="number" placeholder="min" name="extra_min['.$i.']" size=1 required>
                                  <input type="number" placeholder="step" name="extra_step['.$i.']" size=1 required><br>';
                    }else if($fieldType_el[$i]=='password' OR $fieldType_el[$i]=='text'){
                       $form .= '<input type="number" placeholder="maxlength" name="extra_maxlength['.$i.']" size=1 required>
                                <input type="number" placeholder="size" name="extra_size['.$i.']" size=1  required> <br>';
                    }else if($fieldType_el[$i]=='number'){
                        $form .= '<input type="number" placeholder="max" name="extra_max['.$i.']" size=1 required>
                                  <input type="number" placeholder="min" name="extra_min['.$i.']" size=1 required><br>';
                    }else if($fieldType_el[$i]=='date'){
                      $form .= '<input type="date" placeholder="max" name="extra_dmax['.$i.']" size=1 required>
                                  <input type="date" placeholder="min" name="extra_dmin['.$i.']" size=1 required><br>';
                    }else if($fieldType_el[$i]=='datetime-local'){ 
                      $form .= '<input type="datetime-local" placeholder="max" name="extra_dtmax['.$i.']" size=1 required>
                                  <input type="datetime-local" placeholder="min" name="extra_dtmin['.$i.']" size=1 required><br>';
                    }else if($fieldType_el[$i]=='time'){
                       $form .= '<input type="time" placeholder="max" name="extra_tmax['.$i.']" size=1 required>
                                  <input type="time" placeholder="min" name="extra_tmin['.$i.']" size=1 required><br>';
                    }
                    else if($fieldType_el[$i]=='checkbox'){
                      $form .= '<input type="text" placeholder="name" name="namech['.$i.']" size=1 required><br/>';
                    }
                    else if($fieldType_el[$i]=='radio'){
                      $form .= '<input type="text" placeholder="name" name="namera['.$i.']" size=1 required><br/>';
                    }
                    

    }

    $form .= '<input type="text" name="formName" value="'.$formName.'" readonly hidden>';
    $form .= '<input type="text" name="numElements" value="'.$numElements.'" readonly hidden>';
    $form .= '<br/><br/><input type="submit" name="page2_1" value="Build the form">';
    $form .= '</form>';
    echo $form;



}


?>