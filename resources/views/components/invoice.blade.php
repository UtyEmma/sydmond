
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
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
		</header>
        <div>
            <table class="balance">
                <tr>
                    <th><span ><strong>Amount</strong></span></th>
                    <td><span data-prefix>N</span><span> {{number_format(50000.00)}}</span></td>
                </tr>
                <tr>
                    <th><span ><strong>Donation for</strong></span></th>
                    <td><span data-prefix>N</span><span> {{number_format(50000.00)}}</span></td>
                </tr>
            </table>
        </div>
	</body>
</html>
