<!DOCTYPE html>
<html>
<head>
    <title>Contact Confirmation</title>
</head>
<body>
    <h2>Hi {{ $data['name'] }},</h2>
    <p>Thank you for contacting us! We’ve received your message and will get back to you shortly.</p>

    <h4>Here’s what you submitted:</h4>
    <ul>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Subject:</strong> {{ $data['subject'] }}</li>
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
    </ul>

    <p>Regards,<br>Your Company</p>
</body>
</html>
