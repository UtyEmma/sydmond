<html>
	<head>
		<meta charset="utf-8">
		<title>Donation Receipt from {{env('SITE_NAME')}}</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
        <link rel="stylesheet" href="{{asset('css/invoice.css')}}">
	</head>
	<body>
		<header>
            <span style="margin: 0 auto;" >
                <img alt="" style="margin: 0 auto;" src="{{asset('site/img/logo_dark.png')}}">
            </span>
			<h1 style="margin-top: 15px;">Thank you for your kind Donation</h1>
            <table>
                <tr>
                    <td width="60%">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">{{env('SITE_ADDRESS')}}</td>
                            </tr>
                            <tr>
                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">{{env('SITE_PHONE')}}, {{env('SITE_PHONE_TWO')}}</td>
                            </tr>
                            <tr>
                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">{{env('SITE_EMAIL')}}</td>
                            </tr>
                        </table>
                    </td>
                    <td width="40%">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">Receipt Number: {{$donation->reference}}</td>
                            </tr>
                            <tr>
                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">Receipt Date : {{Date::parse($donation->created_at)->format('jS, F Y')}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
		</header>
        <div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;" align="right">Donor Information</td>
                      </tr>
                      <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" align="right">{{$donation->name}}</td>
                      </tr>
                      <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" align="right">{{$donation->phone}}</td>
                      </tr>
                      <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" align="right">{{$donation->email}}</td>
                      </tr>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"> </td>
                </tr>
                <tr>
                  <td colspan="2"><table width="100%" style="border: 1px solid #333 !important; border-collapse: collapse !important;" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" width="34%" height="32" align="center">Description</td>
                      <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="26%" align="center">Amount</td>
                    </tr>
                    <tr>
                      <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" height="32" align="center">Donation to {{env('APP_NAME')}}</td>
                      <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333;" align="center">NGN {{number_format($donation->amount)}}</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px;" colspan="2">Your donation has been received:</td>
                </tr>
                <tr>
                  <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" colspan="2">Thank you very much for your kind donation to our organization. We are grateful for your support and are encouraged by your act of kindness.</td>
                </tr>
                <tr>
                    <td colspan="2"> </td>
                  </tr>
                  <tr>
                    <td colspan="2"> </td>
                  </tr>
                <tr>
                    <td width="70%"></td>
                    <td width="30%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;" align="right">Signed</td>
                      </tr>
                      <tr>
                          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" align="right">{{env('APP_NAME')}}</td>
                        </tr>
                    </table></td>
                </tr>
                <tr>
                  <td colspan="2"> </td>
                </tr>
                <tr>
                  <td colspan="2"> </td>
                </tr>
                <tr>
                  <td colspan="2"> </td>
                </tr>
              </table>

              <script>
                  document.addEventListener('DOMContentLoaded', function(){
                      window.print()
                  })
              </script>
        </div>
	</body>
</html>
