<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIP Survey</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container-fluid">

    <table>
        <tr>
            <td width="10%"></td>
            <td width="80%">
                <div id="header">
                    <h2>SURVEY VIP(Vertically Integrated Projects)</h2>
                </div>
                <br>

                <form method="post" action="vipsurveycompile.php">
                    <table>
                        <tr>
                            <td width="10%"></td>
                            <td width="80%">
                                <div align="center"><u>NOTE</u>: Answer the following questions for <u>your own team project</u>.<br><br></div>
                                <strong>Name</strong>: <input id="name" name="name" type="text" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong>Major</strong>: <input id="major" name="major" type="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong>Level</strong> (Sr, Jr, Sp, or Fr): &nbsp;
                                <select id="year">
                                    <option value="none">none</option>
                                    <option value="Fr">Fr</option>
                                    <option value="Sp">Sp</option>
                                    <option value="Jr">Jr</option>
                                    <option value="Sr">Sr</option>
                                </select><br><br>
                                <ol>
                                    <li>Today’s Date:&nbsp; <input id="datepicker" type="text"
                                                                   style="border: 1px solid #cccccc; border-radius: 4px;"><br></li>

                                    <li>This semester is my (&nbsp;
                                        <select id="semester">
                                            <option id="1st">1<sup>st</sup></option>
                                            <option id="2nd">2<sup>nd</sup></option>
                                            <option id="3rd">3<sup>rd</sup></option>
                                            <option id="4th">4<sup>th</sup></option>
                                            <option id="more">more</option>
                                        </select>
                                        &nbsp;) [1<sup>st</sup>, 2<sup>nd</sup>, 3<sup>rd</sup>, 4<sup>th</sup>, etc] semester with this team
                                        project.
                                    </li>
                                    <li>Briefly explain why you chose this team project?<br><textarea id="project_reason" rows="5"
                                                                                                      cols="60"></textarea></li>

                                    <li>What is the <strong><u>official title</u></strong> of your team project?&nbsp; <input
                                                id="official_title" type="text"></li>

                                    <li>What new <strong>technical skills and knowledge</strong> have you learned from your team
                                        project?<br><textarea id="tech_skills" rows="5" cols="60"></textarea></li>

                                    <li>Choose from below five (5) valuable <strong>soft skills</strong> you have gained by being a member of
                                        your team.<br><br>
                                        <table id="soft_skills">
                                            <tr>
                                                <td><strong>1</strong> <input id="ss_1" type="checkbox">&nbsp;Problem solving skills</td>
                                                <td><strong>7</strong> <input id="ss_7" type="checkbox">&nbsp;Information Search</td>
                                            </tr>
                                            <tr>
                                                <td><strong>2</strong> <input id="ss_2" type="checkbox">&nbsp;Teamwork</td>
                                                <td><strong>8</strong> <input id="ss_8" type="checkbox">&nbsp;Self-learning skills of new
                                                    subjects
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>3</strong> <input id="ss_3" type="checkbox">&nbsp;Interpersonal Communication</td>
                                                <td><strong>9</strong> <input id="ss_9" type="checkbox">&nbsp;Awareness of research and research
                                                    technique
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>4</strong> <input id="ss_4" type="checkbox">&nbsp;Public speaking and related skills&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td><strong>10</strong> <input id="ss_10" type="checkbox">&nbsp;Understanding contemporary
                                                    technology
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>5</strong> <input id="ss_5" type="checkbox">&nbsp;Personal Responsibility</td>
                                                <td><strong>11</strong> <input id="ss_11" type="checkbox">&nbsp;Working in a multidisciplinary
                                                    environment
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>6</strong> <input id="ss_6" type="checkbox">&nbsp;Time Management</td>
                                                <td><strong>12</strong> <input id="ss_12" type="checkbox">&nbsp;Understanding what engineering
                                                    design is about
                                                </td>
                                            </tr>
                                        </table>
                                    </li>

                                    <li>In terms of <strong>mentorship </strong>by advisors, graduate students, and peers, please indicate the
                                        degree to which you have directly benefited. (Make the total 100%)<br>
                                        Faculty advisor (&nbsp;<input id="f_advisor" type="number" min="0" max="100">&nbsp;)
                                        %&nbsp;&nbsp;&nbsp; Graduate students [or project manager] (&nbsp;<input id="g_student" type="number"
                                                                                                                 min="0" max="100">&nbsp;)
                                        %&nbsp;&nbsp;&nbsp; Peers [i.e., team members] (&nbsp;<input id="peers" type="number" min="0" max="100"
                                        >&nbsp;) %
                                    </li>

                                    <li>How would you do differently in your team project to enjoy and experience more of the team work and to
                                        make more contribution?<br><textarea id="contribution" rows="5" cols="60"></textarea></li>

                                    <li>Are you going to continue to work for this project next semester? <select id="continue">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </li>

                                    <li>By participation of VIP project, are you earning credit(s) for a course? (
                                        &nbsp;<select id="earning_credit">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>&nbsp;) If yes, please name the title of the course and credit hour(s): <input id="course"
                                                                                                                                type="text">
                                    </li>

                                    <li>As you move from the first day of team participation to the present day of semester end, your may have
                                        experienced the joy (or confusion/agony) of learning and fun in team environment. Indicate (a)the
                                        intensity in the scale of 1(Lowest) – 10 (Highest) of the <u>Fun (joy)</u>, and (b) the intensity of the
                                        <u>Pain (confusion and/or agony) </u>for the first month, second, and the last month.
                                        <br>(Example1:&nbsp; Fun: 1<sup>st</sup> month (2) – 2<sup>nd</sup> month (3) – 3<sup>rd</sup> month
                                        (7); Pain: 1<sup>st</sup> month (7) – 2<sup>nd</sup> month (2) – 3<sup>rd</sup> month (1))
                                        <br><br>Fun: 1<sup>st</sup> month (&nbsp;<input id="fun_1" type="number" min="1" max="10">&nbsp;) –
                                        2<sup>nd</sup> month (&nbsp;<input id="fun_2" type="number" min="1" max="10">&nbsp;) – 3<sup>rd</sup>
                                        month (&nbsp;<input id="fun_3" type="number" min="1" max="10">&nbsp;)
                                        <br><br>Pain: 1<sup>st</sup> month (&nbsp;<input id="pain_1" type="number" min="1" max="10">&nbsp;) –
                                        2<sup>nd</sup> month (&nbsp;<input id="pain_2" type="number" min="1" max="10">&nbsp;) – 3<sup>rd</sup>
                                        month (&nbsp;<input id="pain_3" type="number" min="1" max="10">&nbsp;)
                                    </li>

                                    <li>If you condense (or boil down) your experience of the team project to just one word, it would be: "
                                        <input id="summary" type="text"> "
                                    </li>
                                </ol>
                            </td>
                            <td width="10%"></td>
                        </tr>
                    </table>

                    <div class="footer" align="center">
                        <input type="submit" name="submit" class="btn btn-default" value="Submit">
                    </div>
                </form>
            </td>
            <td width="10%"></td>
        </tr>
    </table>
</div>
</body>
</html>