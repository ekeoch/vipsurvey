<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ekeocha-mac
 * Date: 5/12/17
 * Time: 7:49 AM
 */
if (empty($_POST)) {
    header("location: vipsurvey.php");
}
$name = isset($_POST['name']) ? $_POST['name'] : null;
$major = isset($_POST['major']) ? $_POST['major'] : null;
$year = isset($_POST['year']) ? $_POST['year'] : null;
$date = isset($_POST['datepicker']) ? $_POST['datepicker'] : null;
$semester = isset($_POST['semester']) ? $_POST['semester'] : null;
$project_reason = isset($_POST['project_reason']) ? $_POST['project_reason'] : null;
$official_title = isset($_POST['official_title']) ? $_POST['official_title'] : null;
$tech_skills = isset($_POST['tech_skills']) ? $_POST['tech_skills'] : null;

#soft skills
$ss_1 = isset($_POST['ss_1']) ? $_POST['ss_1'] : null; #Problem solving skills
$ss_2 = isset($_POST['ss_2']) ? $_POST['ss_2'] : null; #Teamwork
$ss_3 = isset($_POST['ss_3']) ? $_POST['ss_3'] : null; #Interpersonal communication
$ss_4 = isset($_POST['ss_4']) ? $_POST['ss_4'] : null; #Public speaking and related skills
$ss_5 = isset($_POST['ss_5']) ? $_POST['ss_5'] : null; #Personal Responsibility
$ss_6 = isset($_POST['ss_6']) ? $_POST['ss_6'] : null; #Time Management
$ss_7 = isset($_POST['ss_7']) ? $_POST['ss_7'] : null; #Information Search
$ss_8 = isset($_POST['ss_8']) ? $_POST['ss_8'] : null; #Self-learning skills of new subjects
$ss_9 = isset($_POST['ss_9']) ? $_POST['ss_9'] : null; #Awareness of research and research technique
$ss_10 = isset($_POST['ss_10']) ? $_POST['ss_10'] : null; #Understanding contemporary technology
$ss_11 = isset($_POST['ss_11']) ? $_POST['ss_11'] : null; #Working in a multidisciplinary environment
$ss_12 = isset($_POST['ss_12']) ? $_POST['ss_12'] : null; #Understaning what engineering design is about

$ss_array = array();

!empty($ss_1) ? array_push($ss_array,1) : null;
!empty($ss_2) ? array_push($ss_array,2) : null;
!empty($ss_3) ? array_push($ss_array,3) : null;
!empty($ss_4) ? array_push($ss_array,4) : null;
!empty($ss_5) ? array_push($ss_array,5) : null;
!empty($ss_6) ? array_push($ss_array,6) : null;
!empty($ss_7) ? array_push($ss_array,7) : null;
!empty($ss_8) ? array_push($ss_array,8) : null;
!empty($ss_9) ? array_push($ss_array,9) : null;
!empty($ss_10) ? array_push($ss_array,10) : null;
!empty($ss_11) ? array_push($ss_array,11) : null;
!empty($ss_12) ? array_push($ss_array,12) : null;

#mentorship ratings
$faculty_advisor = isset($_POST['f_advisor']) ? $_POST['f_advisor'] : null;
$grad_student = isset($_POST['g_student']) ? $_POST['g_student'] : null;
$peers = isset($_POST['peers']) ? $_POST['peers'] : null;

$contribution = isset($_POST['contribution']) ? $_POST['contribution'] : null;
$continue = isset($_POST['continue']) ? $_POST['continue'] : null;
$earning_credit = isset($_POST['earning_credit']) ? $_POST['earning_credit'] : null;
$course = isset($_POST['course']) ? $_POST['course'] : null;

#Fun factor
$fun_1 = isset($_POST['fun_1']) ? $_POST['fun_1'] : null;
$fun_1 = empty($fun_1) ? "N/A" : $fun_1;

$fun_2 = isset($_POST['fun_2']) ? $_POST['fun_2'] : null;
$fun_2 = empty($fun_2) ? "N/A" : $fun_2;

$fun_3 = isset($_POST['fun_3']) ? $_POST['fun_3'] : null;
$fun_3 = empty($fun_3) ? "N/A" : $fun_3;

$fun_4 = isset($_POST['fun_4']) ? $_POST['fun_4'] : null;
$fun_4 = empty($fun_4) ? "N/A" : $fun_4;

$pain_1 = isset($_POST['pain_1']) ? $_POST['pain_1'] : null;
$pain_1 = empty($pain_1) ? "N/A" : $pain_1;

$pain_2 = isset($_POST['pain_2']) ? $_POST['pain_2'] : null;
$pain_2 = empty($pain_2) ? "N/A" : $pain_2;

$pain_3 = isset($_POST['pain_3']) ? $_POST['pain_3'] : null;
$pain_3 = empty($pain_3) ? "N/A" : $pain_3;

$pain_4 = isset($_POST['pain_4']) ? $_POST['pain_4'] : null;
$pain_4 = empty($pain_4) ? "N/A" : $pain_4;

$summary = isset($_POST['summary']) ? $_POST['summary'] : null;

ob_start();
echo "<page backtop='7mm' backbottom='7mm' backleft='10mm' backright='10mm'>";
echo "<div align='center'><img src='images/howard_pic.jpg' style='width:169px;height:200px;'><br><br></div>";
echo "<div align='center'>SURVEY                                                                 VIP (Vertically Integrated Projects) 	   <br><br></div>";
echo "<div align='center'><u>NOTE</u>: Answer the following questions for <u>your own team project</u>.<br><br></div>";
echo "<div align='center'>";
echo "<strong>Name</strong>: <u> ".$name."   </u>&nbsp;&nbsp;";
echo "<strong>Major</strong>: <u> ".$major."   </u>&nbsp;&nbsp;";
echo "<strong>Level</strong> (Sr, Jr, Sp, or Fr): <u> ".$year." </u>&nbsp;<br><br></div>";
echo "<div>";
echo "1. Today’s Date:&nbsp; <u><strong> ".$date."&nbsp;</strong></u><br><br>";
echo "2. This semester is my ( <u><strong>".$semester."</strong></u> ) [1<sup>st</sup>, 2<sup>nd</sup>, 3<sup>rd</sup>, 4<sup>th</sup>, etc] semester with this team project.";
echo "3. Briefly explain why you chose this team project?<br><strong>".$project_reason."</strong><br><br>";
echo "4. What is the <strong><u>official title</u></strong> of your team project?&nbsp;<u> <strong>".$official_title."</strong> </u><br><br>";
echo "5. What new <strong>technical skills and knowledge</strong> have you learned from your team project?<br><strong>".$tech_skills."</strong><br><br>";
echo "6. Choose from below five (5) valuable <strong>soft skills</strong> you have gainedby being a member of your team: <br>[(<strong> ".$ss_array[0]." </strong>)(<strong> ".$ss_array[1]." </strong>)(<strong> ".$ss_array[2]." </strong>)(<strong> ".$ss_array[3]." </strong>)(<strong> ".$ss_array[4]." </strong>)]<br><br>
<strong>1</strong> Problem solving skills, <strong>2</strong> Teamwork, <strong>3</strong> Interpersonal communication, <strong>4</strong> Public speaking and related skills,<br>
<strong>5</strong> Personal responsibility, <strong>6</strong> Time management, <strong>7</strong> Information search, <strong>8</strong> Self-learning skills of new subjects,<br>
<strong>9</strong> Awareness of research and research technique, <strong>10</strong> Understanding contemporary technology,<br>
<strong>11</strong> Working in a multidisciplinary team environment, <strong>12</strong> Understanding what engineering design is about.<br><br>";
echo "6. In terms of <strong>mentorship </strong>by advisors, graduate students, and peers, please indicate the degree to which you have directly benefited. (Make the total 100%)<br><br>
Faculty advisor (<strong>".$faculty_advisor."</strong>) % Graduate students [or project manager] (<strong>".$grad_student."</strong>) % Peers [i.e., team members] (<strong>".$peers."</strong>) %<br><br>";
echo "7. How would you do differently in your team project to enjoy and experience more of the team work and to make more contribution?<br><strong>".$contribution."</strong><br><br>";
echo "8. Are you going to continue to work for this project next semester? <u><strong> ".$continue." </strong></u><br><br>";
echo "9. By participation of VIP project, are you earning credit(s) for a course? (<strong>".$earning_credit."</strong>) If yes, please name the title of the course and credit hour(s). <u><strong> ".$course." </strong></u><br><br>";
echo "10. As you move from the first day of team participation to the present day of semester end, your may have 
experienced the joy (or confusion/agony) of learning and fun in team environment.  Indicate (a)the intensity in the 
scale of 1(Lowest) – 10 (Highest) of the <u>Fun (joy)</u>, and (b) the intensity of the <u>Pain (confusion and/or agony)</u> for
the first month, second, and the last month.<br>
(Example1:  Fun: 1<sup>st</sup> month (2) – 2<sup>nd</sup> month (3) – 3<sup>rd</sup> month (7); Pain: 1<sup>st</sup> month (7) – 2<sup>nd</sup> month (2) – 3<sup>rd</sup> month (1))<br><br>
Fun: 1<sup>st</sup> month (<strong>".$fun_1."</strong>) – 2<sup>nd</sup> month (<strong>".$fun_2."</strong>) – 3<sup>rd</sup> month (<strong>".$fun_3."</strong>) – 4<sup>th</sup> month (<strong>".$fun_4."</strong>)<br> 
Pain: 1<sup>st</sup> month (<strong>".$pain_1."</strong>) – 2<sup>nd</sup> month (<strong>".$pain_2."</strong>) – 3<sup>rd</sup> month (<strong>".$pain_3."</strong>) – 4<sup>th</sup> month (<strong>".$pain_4."</strong>)<br><br>";
echo "11. If you condense (or boil down) your experience of the team project to just one word, it would be:<br>
\"<u><strong> ".$summary." </strong></u>\"";
echo "</div>";
echo "</page>";

$html = ob_get_clean();
require_once('html2pdf/vendor/autoload.php');

$pdf_path = "surveys/".date("mdY")."/";

try {
    mkdir($pdf_path);
} catch (Exception $exception) {
    $pdf_path = "surveys/";
}


$pdf_name = $pdf_path.$name." ".$official_title." Survey.pdf";

try {
    $pdf = new HTML2PDF('P', 'A4', 'en');
    $pdf->writeHTML($html);
    $attachment = $pdf->Output('', 'S');
    $myfile = fopen($pdf_name, "w") or die("Unable to open file!");
    fwrite($myfile, $attachment);
    fclose($myfile);
    header("Location: thanks.php");
    exit;
} catch (HTML2PDF_exception $exception) {
    header("Location: thanks.php");
    exit;
}






