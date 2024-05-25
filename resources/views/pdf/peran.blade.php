<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <style>
        body {
            text-align: center;
        }
        h2 {
            margin-top: 20px;
        }
        table {
            margin: auto;
            width: 80%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Data Role</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peran as $peran)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peran->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
