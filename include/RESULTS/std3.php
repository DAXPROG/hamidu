<?php

$myresult .= '
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Mathematics</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['mathematics'].'</td>';

        if($run['mathematics'] >=0 && $run['mathematics'] < 30){
         $mathematics = 'F';
         $remark1 = 'NOT GOOD';
         
        }else if($run['mathematics'] >= 30 && $run['mathematics'] <= 44){
         $mathematics = 'D';
         $remark1 = 'AVERAGE';
         
        }else if($run['mathematics'] >= 45 && $run['mathematics'] <= 64){
         $mathematics = 'C';
         $remark1 = 'GOOD';
         
       }else if($run['mathematics'] >= 65 && $run['mathematics'] <= 74){
         $mathematics = 'B';
         $remark1 = 'VERRY GOOD';
         
       }else if($run['mathematics'] >= 75 && $run['mathematics'] <= 100){
         $mathematics = 'A';
         $remark1 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$mathematics.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark1.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Kiswahili</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['kiswahili'].'</td>';
        if($run['kiswahili'] >=0 && $run['kiswahili'] < 30){
         $kiswahili = 'F';
         $remark2 = 'NOT GOOD';
         
        }else if($run['kiswahili'] >= 30 && $run['kiswahili'] <= 44){
         $kiswahili = 'D';
         $remark2 = 'AVERAGE';
         
        }else if($run['kiswahili'] >= 45 && $run['kiswahili'] <= 64){
         $kiswahili = 'C';
         $remark2 = 'GOOD';
         
       }else if($run['kiswahili'] >= 65 && $run['kiswahili'] <= 74){
         $kiswahili = 'B';
         $remark2 = 'VERRY GOOD';
         
       }else if($run['kiswahili'] >= 75 && $run['kiswahili'] <= 100){
         $kiswahili = 'A';
         $remark2 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$kiswahili.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark2.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">English</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['english'].'</td>';
        if($run['english'] >=0 && $run['english'] < 30){
         $english = 'F';
         $remark3 = 'NOT GOOD';
         
        }else if($run['english'] >= 30 && $run['english'] <= 44){
         $english = 'D';
         $remark3 = 'AVERAGE';
         
        }else if($run['english'] >= 45 && $run['english'] <= 64){
         $english = 'C';
         $remark3 = 'GOOD';
         
       }else if($run['english'] >= 65 && $run['english'] <= 74){
         $english = 'B';
         $remark3 = 'VERRY GOOD';
         
       }else if($run['english'] >= 75 && $run['english'] <= 100){
         $english = 'A';
         $remark3 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$english.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark3.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Civics</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['civics_and_moral_education'].'</td>';
        if($run['civics_and_moral_education'] >=0 && $run['civics_and_moral_education'] < 30){
         $civics_and_moral_education = 'F';
         $remark4 = 'NOT GOOD';
         
        }else if($run['civics_and_moral_education'] >= 30 && $run['civics_and_moral_education'] <= 44){
         $civics_and_moral_education = 'D';
         $remark4 = 'AVERAGE';
         
        }else if($run['civics_and_moral_education'] >= 45 && $run['civics_and_moral_education'] <= 64){
         $civics_and_moral_education = 'C';
         $remark4 = 'GOOD';
         
       }else if($run['civics_and_moral_education'] >= 65 && $run['civics_and_moral_education'] <= 74){
         $civics_and_moral_education = 'B';
         $remark4 = 'VERRY GOOD';
         
       }else if($run['civics_and_moral_education'] >= 75 && $run['civics_and_moral_education'] <= 100){
         $civics_and_moral_education = 'A';
         $remark4 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$civics_and_moral_education.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark4.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Social</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['social_studies'].'</td>';
        if($run['social_studies'] >=0 && $run['social_studies'] < 30){
         $social_studies = 'F';
         $remark5 = 'NOT GOOD';
         
        }else if($run['social_studies'] >= 30 && $run['social_studies'] <= 44){
         $social_studies = 'D';
         $remark5 = 'AVERAGE';
         
        }else if($run['social_studies'] >= 45 && $run['social_studies'] <= 64){
         $social_studies = 'C';
         $remark5 = 'GOOD';
         
       }else if($run['social_studies'] >= 65 && $run['social_studies'] <= 74){
         $social_studies = 'B';
         $remark5 = 'VERRY GOOD';
         
       }else if($run['social_studies'] >= 75 && $run['social_studies'] <= 100){
         $social_studies = 'A';
         $remark5 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$social_studies.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark5.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Science</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['science'].'</td>';
        if($run['science'] >=0 && $run['science'] < 30){
         $science = 'F';
         $remark6 = 'NOT GOOD';
         
        }else if($run['science'] >= 30 && $run['science'] <= 44){
         $science = 'D';
         $remark6 = 'AVERAGE';
         
        }else if($run['science'] >= 45 && $run['science'] <= 64){
         $science = 'C';
         $remark6 = 'GOOD';
         
       }else if($run['science'] >= 65 && $run['science'] <= 74){
         $science = 'B';
         $remark6 = 'VERRY GOOD';
         
       }else if($run['science'] >= 75 && $run['science'] <= 100){
         $science = 'A';
         $remark6 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$science.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark6.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Vocation</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['vocation_skills'].'</td>';
        if($run['vocation_skills'] >=0 && $run['vocation_skills'] < 30){
         $vocation_skills = 'F';
         $remark7 = 'NOT GOOD';
         
        }else if($run['vocation_skills'] >= 30 && $run['vocation_skills'] <= 44){
         $vocation_skills = 'D';
         $remark7 = 'AVERAGE';
         
        }else if($run['vocation_skills'] >= 45 && $run['vocation_skills'] <= 64){
         $vocation_skills = 'C';
         $remark7 = 'GOOD';
         
       }else if($run['vocation_skills'] >= 65 && $run['vocation_skills'] <= 74){
         $vocation_skills = 'B';
         $remark7 = 'VERRY GOOD';
         
       }else if($run['vocation_skills'] >= 75 && $run['vocation_skills'] <= 100){
         $vocation_skills = 'A';
         $remark7 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$vocation_skills.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark7.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Religion</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$run['religion'].'</td>';
        if($run['religion'] >=0 && $run['religion'] < 30){
         $religion = 'F';
         $remark8 = 'NOT GOOD';
         
        }else if($run['religion'] >= 30 && $run['religion'] <= 44){
         $religion = 'D';
         $remark8 = 'AVERAGE';
         
        }else if($run['religion'] >= 45 && $run['religion'] <= 64){
         $religion = 'C';
         $remark8 = 'GOOD';
         
       }else if($run['religion'] >= 65 && $run['religion'] <= 74){
         $religion = 'B';
         $remark8 = 'VERRY GOOD';
         
       }else if($run['religion'] >= 75 && $run['religion'] <= 100){
         $religion = 'A';
         $remark8 = 'EXCELLENT!';
         }
        
        $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$religion.'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark8.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Total</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;"  colspan="3">'.$run['total'].'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Average</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;" colspan="2">'.$run['average'].'</td>';
        if($run['average'] >= 50 && $run['average'] <= 100){
         $remark9 = 'PASS';
        }else{
         $remark9 = 'FAIL';
        }
        
        $myresult .= '
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$remark9.'</td>
       
    </tr>
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">Position</td>';
        $clas = $run['class'];

        $ss = "SELECT * FROM results WHERE class = '$clas' AND year = '$year' AND term = '$term' AND exam_type = '$exam_type' AND exam_date = '$exam_date' ORDER BY average DESC";
         $result = mysqli_query($connect,$ss);
         $count = mysqli_num_rows($result);

         if($result->num_rows> 0){
          $poss = 1;
          while($row=$result->fetch_assoc()){
           
           if($row['student_id'] == $_SESSION['student_id'] && $row['class'] == $clas && $row['year'] == $year && $row['term'] == $term && $row['exam_type'] == $exam_type && $row['exam_date'] == $exam_date){
            $myresult .= '<td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;" colspan="3">'.$poss.'/'.$count.'</td>';
            $_SESSION['nafas'] = $poss;
         }
           
         $poss++;
          }
          
          }
         
         
          
          if($run['average'] >= 75 && $run['average'] <= 100){
            $class_teacher = "Your child has great performance we need your coperation to insure that this performance is maintained.";
            $head_teacher = "Great done we remind you to make much follup to ensure the perfomance is maintained.";
          }
          else if($run['average'] >= 65 && $run['average'] < 75){
            $class_teacher = "Your child has great performance we need your coperation to insure that this performance is maintained.";
            $head_teacher = "Great done we remind you to make much follup to ensure the perfomance is maintained.";
          }
          else if($run['average'] >= 50 && $run['average'] < 65){
            $class_teacher = "";
            $head_teacher = "";
          }
          else if($run['average'] >= 45 && $run['average'] < 50){
            $class_teacher = "";
            $head_teacher = "";
          }
          else if($run['average'] >= 30 && $run['average'] < 45){
            $class_teacher = "";
            $head_teacher = "";
          }
          else if($run['average'] <30){
            $class_teacher = "";
            $head_teacher = "";
          }

          
          
          
          $myresult .= ' 
          </tr>
          
          ';