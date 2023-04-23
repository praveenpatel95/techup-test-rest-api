<!DOCTYPE html>
<html>
<head>
    <title>Registration Application Status</title>
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
        Registration Application Status
    </h2>
</center>

<p>Hello {{$therapist->user->name}}</p>
<p>Your registration application has been {{$therapist->status}}.</p>
<h4>Registered details:</h4>
<table>
    <tr>
        <td>Name</td>
        <td>{{$therapist->user->name}}</td>
    </tr>
    <tr>
        <td>Email ID</td>
        <td>{{$therapist->user->email}}</td>
    </tr>
</table>
<br />
<br />
<strong>Regards</strong>

</body>
</html>
