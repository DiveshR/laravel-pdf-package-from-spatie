<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified</th>
            <th>Date</th>
        </tr>
        
            @foreach($users as $user)
            <tr>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->email_verified_at->format('d, M Y h:iA')}}</td>
            <td>{{ $user->updated_at->format('d, M Y h:iA')}}</td>
            </tr>
            @endforeach
       
    </table>
</body>
</html>