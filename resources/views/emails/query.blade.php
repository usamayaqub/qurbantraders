<html>

<head>
    <title>{{$data['title']}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        /* FONTS */
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }


        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">



    <table border="0" cellpadding="0" cellspacing="0" width="100%">

        <tbody>
            <tr>
                <td bgcolor="#eefaf2" align="center">

                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tbody>
                            <tr>
                                <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>

            <tr>
                <td bgcolor="#eefaf2" align="center" style="padding: 0px 10px 0px 10px;">

                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tbody>
                            <tr>
                                <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 400; letter-spacing: 4px; line-height: 30px;">
                                    <a href="{{route('get-home')}}" target="_blank">
                                        <img src="{{asset('qurban-logo.jpg')}}" alt="Logo Here" style="width:120px; object-fit:contain;">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            <!-- COPY BLOCK -->
            <tr>
                <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
     
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <!-- COPY -->
                        <tbody>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px; line-height: 25px;">
                                    <h1 style="margin: 0px; text-align: center;">
                                        <font face="Lato, Helvetica, Arial, sans-serif"><span style="font-size: 20px; font-weight: 400;">&nbsp; &nbsp;Importer & Stockist</span></font>
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                    <h2 style="font-size: 20px; font-weight: 400; margin: 0;">Hi Qurban Traders Admin,</h2>
                                </td>
                            </tr>
                            <!-- COPY -->
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 6px 30px 40px; border-radius: 0px 0px 4px 4px; line-height: 25px;">
                                    <p style="margin: 5px 5px 5px 0px;">
                                        <font color="#666666" face="Lato, Helvetica, Arial, sans-serif">@if($data['is_contact'] == 1 )You have received new contact message: @else  You have received new product inquiry message: @endif</font>
                                    </p>
                                </td>
                            </tr>
                               <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 6px 30px 40px; border-radius: 0px 0px 4px 4px; line-height: 25px;">
                                    <p style="margin: 5px 5px 5px 0px;">
                                      <a href="#" class="m_7921063161440989975es-button" style="text-decoration:underline;font-family:arial,'helvetica neue',helvetica,sans-serif;font-size:16px;color:#ffffff;border-style:solid;border-color: #74bb8e;border-width:13px 15px 13px 15px;display:inline-block;background: #74bb8e none repeat scroll 0% 0%;border-radius:25px;text-decoration: none;line-height:19px;width:200px;text-align:center;border-top-width:10px;border-bottom-width:10px;letter-spacing:1px;font-weight:600" target="_blank" data-saferedirecturl="#">Name:{{$data['name']}}</a>
                                    <p>Email:{{$data['email']}}</p>
                                    <p>Mobile:{{$data['mobile_number']}}</p>
                                    @if($data['is_contact'] == 1 )
                                    <p>Title:{{$data['title']}}</p>
                                    @else
                                    <p>Product:{{$data['title']}}</p>
                                    @endif
                                    <p>Message:{{$data['message']}}</p>
                                    </p>
                                </td>
                            </tr>

                
                            <tr>

                            </tr>
                        </tbody>
                    </table>



                </td>
            </tr>
            <tr>
                <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">

                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tbody>
                            <tr>

                            </tr>

                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>



</body>

</html>