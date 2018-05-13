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
    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0">
                   <tr>
                       <td class="header">
                           <a href="https://fresh-start.test/admin/overview">
                              <img src="https://fresh-start.test/images/fresh-start-colour.png" alt="" style="height: 150px; width: auto;">
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
                                        <h2>Hey, Steve</h2>
                                        <p>A new user has submitted but failed a PAR-Questionnaire</p>
                                        <p>
                                           <a target="_blank" class="button button-green" href="https://fresh-start.test/admin/overview/{{$mailData['id']}}">View {{$mailData['name']}}'s PAR-Q</a>
                                        </p>
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
