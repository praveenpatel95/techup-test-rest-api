<!DOCTYPE html>
<html>
<head>
    <title>New Therapist Registered</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td{
            border: 1px solid #000;
        }
    </style>
</head>
<body>

<center>
    <h2 style="padding: 23px;background: #b3deb8a1;border-bottom: 6px green solid;">
        New Therapist Registered
    </h2>
</center>

<p>Hello Admin</p>
<p>New Therapist has been registered successfully.</p>
<h4>Therapist details:</h4>
<table>
    <tr>
        <td>Name</td>
        <td>{{$user->name}}</td>
    </tr>
    <tr>
        <td>Email ID</td>
        <td>{{$user->email}}</td>
    </tr>
</table>
<br />
<br />
<strong>Regards</strong>

</body>
</html>
