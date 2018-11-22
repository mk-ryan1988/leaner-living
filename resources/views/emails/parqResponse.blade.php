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
        }
        table.answers tr td {
            padding: 15px 10px;
        }
        table.answers tr.question td {
            border-top: 1px solid rgba(0,0,0,0.12);
        }
        table.answers tr td:first-child {
            text-align: left!important;
            font-weight: 600;
        }
        table.answers tr td:last-of-type {
            text-align: center;
        }
        table.answers tr td:only-child {
            padding-left: 20px;
            font-weight: 300!important;
        }
        table.answers thead th {
            /* border-bottom: 1px solid grey; */
            min-width: 75px;
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
                                        <p>Someone has completed a PAR-Questionnaire</p>
                                        <hr>
                                        {{-- <p><strong>Name:</strong> {{$mailData['name']}}</p>
                                        <p><strong>Email:</strong> <a href="mailto:{{$mailData['email']}}">{{$mailData['email']}}</a></p>
                                        <p><strong>D.O.B:</strong> {{$mailData['dob']}} &nbsp; <strong>Gender:</strong> {{$mailData['gender']}}</p> --}}
                                        
                                        {{-- <table class="answers">
                                            <thead>
                                                <th>Question</th>
                                                <th class="last">Yes / No</th>
                                            </thead>
                                            <tr class="question">
                                                <td>1. Has your doctor ever said you have heart trouble?</td>
                                                <td>
                                                    @if ($mailData['q1'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">{{$mailData['q1More']}}</td>
                                            </tr>
                                            <br>
                                            <tr class="question">
                                                <td>2. Do you frequently have pains in your heart and chest?</td>
                                                <td>
                                                    @if ($mailData['q2'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q2More']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>3. Do you often feel fain or have spells of severe dizziness?</td>
                                                <td>
                                                    @if ($mailData['q3'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q3More']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>4. Has a doctor ever said your blood pressure was too high?</td>
                                                <td>
                                                    @if ($mailData['q4'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q4More']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>5. Has your doctor ever told you that you have a bone or joint problem(s), such as arthritis that has been aggravated by exercise, or might be made worse with exercise?</td>
                                                <td>
                                                    @if ($mailData['q5'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q5More']}}</td>
                                            </tr class="question">
                                            <tr>
                                                <td>6. Is there a good physical reason, not mentioned here, why you should not follow an activity program even if you wanted to?</td>
                                                <td>
                                                    @if ($mailData['q6'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q6More']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>7. Do you suffer from any problems of the lower back, i.e., chronic pain, or numbness?</td>
                                                <td>
                                                    @if ($mailData['q7'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q7More']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>8. Are you currently taking any medications?</td>
                                                <td>
                                                    @if ($mailData['q8'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q8More']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>9. Do you currently have a disability or a communicable disease?</td>
                                                <td>
                                                    @if ($mailData['q9'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q9More']}}</td>
                                            </tr>
                                            <tr class="question">
                                                <td>10. Are you or have you been pregnant in the last 6 months?</td>
                                                <td>
                                                    @if ($mailData['q10'] === true)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$mailData['q10More']}}</td>
                                            </tr>

                                        </table> --}}

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
