<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ekeocha-mac
 * Date: 5/12/17
 * Time: 7:49 AM
 */

    if (empty($_POST)){
        header("location: vipsurvey.php");
    }

    $name = $_POST['u_name'];
    $major = $_POST['major'];
    $year = $_POST['year'];
    $date = $_POST['datepicker'];
    $semester = $_POST['semester'];
    $project_reason = $_POST['project_reason'];
    $official_title = $_POST['official_title'];
    $tech_skills = $_POST['tech_skills'];

    #soft skills
    $ss_1 = $_POST['ss_1']; #Problem solving skills
    $ss_2 = $_POST['ss_2']; #Teamwork
    $ss_3 = $_POST['ss_3']; #Interpersonal communication
    $ss_4 = $_POST['ss_4']; #Public speaking and related skills
    $ss_5 = $_POST['ss_5']; #Personal Responsibility
    $ss_6 = $_POST['ss_6']; #Time Management
    $ss_7 = $_POST['ss_7']; #Information Search
    $ss_8 = $_POST['ss_8']; #Self-learning skills of new subjects
    $ss_9 = $_POST['ss_9']; #Awareness of research and research technique
    $ss_10 = $_POST['ss_10']; #Understanding contemporary technology
    $ss_11 = $_POST['ss_11']; #Working in a multidisciplinary environment
    $ss_12 = $_POST['ss_12']; #Understaning what engineering design is about

    #mentorship ratings
    $faculty_advisor = $_POST['f_advisor'];
    $grad_student = $_POST['g_student'];
    $peers = $_POST['peers'];

    $contribution = $_POST['contribution'];
    $continue = $_POST['continue'];
    $earning_credit = $_POST['earning_credit'];
    $course = $_POST['course'];

    #Fun factor
    $fun_1 = $_POST['fun_1'];
    $fun_2 = $_POST['fun_2'];
    $fun_3 = $_POST['fun_3'];
    $pain_1 = $_POST['pain_1'];
    $pain_2 = $_POST['pain_2'];
    $pain_3 = $_POST['pain_3'];

    $summary = $_POST['summary'];

    if(isset($name)){
       echo "User name is".$name;
       exit;
    }



