<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <h2>Site recovery code: {{ $otp_code }}?</h2>

    <p>Copy this code and paste it in the site recovery form to reset your password.</p>

    <p>Thank you</p>

    <p>Best regards</p>

    <p>{{ env('APP_NAME') }}</p>
</div>

</body>
</html>

