<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Help request status</title>
</head>
<body>
<p>
    Hello {{ ucfirst($ticketOwner->name) }},
</p>
<p>
    Your help request with ID #{{ $ticket->ticket_id }} has been marked has resolved and closed.
</p>
</body>
</html>
