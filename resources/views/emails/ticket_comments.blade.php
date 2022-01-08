<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Help Ticket</title>
</head>
<body>
<p>
    {{ $comment->comment }}
</p>
---
<p>Replied by: {{ $user->name }}</p>
<p>Title: {{ $ticket->title }}</p>
<p>Help request ID: {{ $ticket->ticket_id }}</p>
<p>Status: {{ $ticket->status }}</p>
<p>
    You can view the help request at any time at {{ url('tickets/'. $ticket->ticket_id) }}
</p>
</body>
</html>
