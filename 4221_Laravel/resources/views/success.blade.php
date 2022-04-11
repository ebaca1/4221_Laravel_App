<!DOCTYPE html>
<html>
<head>
    <title>Successful Login</title>
    <style>
        div {
            font-size: 22px;
            display: flex;
            justify-content: center;
        }
        table{
            display: flex;
            justify-content: bottom;
            margin-top: 30px;
        }
        tr {
            text-align:left;
        }
        th {
            padding-right: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1 style="color: green;">Logged in successfully!</h1>
        
    </div>

    <div>
        <table>
            @foreach($results as $result)
            <tr>
                <th>ID:</th>
                <td>{{$result->ID}}</td>
            </tr>

            <tr>
                <th>Username:</th>
                <td>{{$result->username}}</td>
            </tr>

            <tr>
                <th>Password:</th>
                <td>{{$result->passw}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>