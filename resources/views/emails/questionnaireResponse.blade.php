<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }
        @media only screen and (min-width: 601px) {
            .inner-body {
                width: 80% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
        .body {
            background-color: #f7f7f7;
        }
        .header {
               font-family: Avenir, Helvetica, sans-serif;
                box-sizing: border-box;
                padding: 25px 0;
                text-align: center;
                background-color: #F2F4F6;
        }
        .header a {
               font-family: Avenir, Helvetica, sans-serif;
                box-sizing: border-box;
                color: #bbbfc3;
                font-size: 19px;
                font-weight: bold;
                text-decoration: none;
                text-shadow: 0 1px 0 white;
        }
        .footer {
                   font-family: Avenir, Helvetica, sans-serif;
                   box-sizing: border-box;
                   line-height: 1.5em;
                   margin-top: 0;
                   padding: 25px 0;
                   color: #AEAEAE;
                   font-size: 12px;
                   text-align: center;
                   background-color: #F2F4F6;
        }
        .content-cell {
               font-family: Avenir, Helvetica, sans-serif;
                box-sizing: border-box;
                padding: 35px;
        }
        .content-cell p {
               font-family: Avenir, Helvetica, sans-serif;
                box-sizing: border-box;
                color: #74787E;
                font-size: 16px;
                line-height: 1.5em;
                margin-top: 0;
                text-align: left;
        }
        .content-cell h2 a  {
               font-family: Avenir, Helvetica, sans-serif;
                box-sizing: border-box;
                color: #2F3133;
                font-size: 19px;
                font-weight: bold;
                margin-top: 0;
                text-align: left;
        }
        .button.button-green {
               font-family: Avenir, Helvetica, sans-serif;
                box-sizing: border-box;
                border-radius: 3px;
                box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
                color: #FFF;
                display: inline-block;
                text-decoration: none;
                -webkit-text-size-adjust: none;
                background-color: #0F7143;
                border-top: 10px solid #0F7143;
                border-right: 18px solid #0F7143;
                border-bottom: 10px solid #0F7143;
                border-left: 18px solid #0F7143;
        }
        table.answers {
            width: 100%;
            background-color: #fff;
        }
        table.answers tr td {
            padding: 15px 10px;
        }
        table.answers tr.question td {
            border-top: 1px solid rgba(0,0,0,0.12);
            color: #0F7143;
            font-weight: 600;
        }
        table.answers tr.answer td{
            text-align: left!important;
            padding-left: 20px;
            font-weight: 300!important;
        }
        table.answers thead th {
            /* border-bottom: 1px solid grey; */
            min-width: 75px;
        }
        .heading {
            background-color: #0F7143;
            color: #FFF;
            padding: 16px;
            margin-bottom: 0px;
            width: fit-content;
        }
    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0">
                   <tr>
                     <td class="header">
                         <a href="http://www.leaner-living.comt/admin/overview">
                            <img src="http://www.leaner-living.com/images/fresh-start-colour.png" alt="" style="height: 150px; width: auto;">
                         </a>
                     </td>
                   </tr>

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="700" cellpadding="0" cellspacing="0">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        <h2>Hey,</h2>
                                        <p>You have recieved a Fresh Start Member Questionnaire</p>
                                        <hr>
                                        <p><strong>Name:</strong> {{$mailData['full_name']}}</p>
                                        <p><strong>Email:</strong> <a href="mailto:{{$mailData['email']}}">{{$mailData['email']}}</a></p>
                                        
                                        <h4 class="heading">Lifestyle</h4>
                                        <table class="answers">
                                            {{-- <thead>
                                                <th>Question</th>
                                                <th class="last">Yes / No</th>
                                            </thead> --}}
                                            <tr class="question">
                                                <td>What is your current occupation?</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q1']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>What are your average weekly working hours?</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q2']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>Which of the following best describes your occupation?</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q3']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>When not working what would you rate your activity level on a scale of 1-10 (1 very inactive 10 high)</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q4']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>On average how many hours will you sleep a night?</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q5']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>How often do you socialise with family/friends?</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q6']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>How often do you eat away from home for example food that you have not prepared yourself, business lunches or meals out with friends etc.?</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q7']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>Smoking habits</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q8']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>Alcohol Consumption</td>
                                            </tr>
                                            <tr class="answer">
                                                <td>{{$mailData['s1q9']}}</td>
                                            </tr>
                                
                                        </table>

                                        <h4 class="heading">Exercise</h4>
                                        <table class="answers">
                                            
                                            <tr class="question">
                                                <td>Are you currently participating in a regular exercise program at this time?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q1']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>If yes please state how many times a week are you completing this program?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q2']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>What does your current exercise program consist of?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q3']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>{{$mailData['s2q3other']}}</strong></td>
                                            </tr>
                                            <tr class="question">
                                                <td>What would you consider your current level of exercise understanding? (e.g. how to squat, deadlift)</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q4']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>What would you consider your present attitude towards exercise?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q5']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>How do you feel about your present physical condition in terms of the way you look?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q6']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>How do you feel about yourself and your abilities?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q7']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>How do you feel about your current physical condition (current fitness)?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q8']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>When you begin a program or set a goal, how likely are you to follow through to its fruition?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q9']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>When participating in the Fresh Start please state how many times a week you will be available to exercise.</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s2q10']}}</td>
                                            </tr>
                                        </table>

                                        <h4 class="heading">Nutrition</h4>
                                        <table class="answers">
                                            
                                            <tr class="question">
                                                <td>What would you consider your current level of nutritional understanding?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s3q1']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>What do you find if any are your biggest obstacles nutritionally?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s3q2']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>{{$mailData['s3q2other']}}</strong></td>
                                            </tr>
                                            <tr class="question">
                                                <td>Do you have any specific dietary requirements/intolerances?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s3q3']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>{{$mailData['s3q3more']}}</strong></td>
                                            </tr>
                                            <tr class="question">
                                                <td>If you currently track your calories and or macros what are your daily targets?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s3q4a']}}</td>
                                                <td>{{$mailData['s3q4b']}}</td>
                                                <td>{{$mailData['s3q4c']}}</td>
                                                <td>{{$mailData['s3q4d']}}</td>
                                            </tr>
                                        </table>

                                        <h4 class="heading">Goal Setting</h4>
                                        <table class="answers">
                                            
                                            <tr class="question">
                                                <td>Are you currently participating in a regular exercise program at this time?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s4q1']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>{{$mailData['s4q1other']}}</strong></td>
                                            </tr>
                                            <tr class="question">
                                                <td>What are the reasons and timeframes for your goals?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s4q2']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>Have you tried to achieve these goals previously?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s4q3']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>If yes did you succeed?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s4q4']}}</td>   
                                            </tr>
                                            <tr class="question">
                                                <td>What are the reasons you feel you succeeded or failed trying to achieve these goals?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s4q5']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>Is there any additional information that you would like to add?</td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['s4q6']}}</td>
                                            </tr>
                                        </table>

                                        <p>
                                           Regards,<br>
                                           Fresh Start Bot
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                  <tr>
                     <td class="footer">
                          © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                     </td>
                  </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
