<!DOCTYPE html>
<html>
<head>
    <title>Data Supir</title>
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
        .btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Data Supir</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SIM</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supir as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->sim }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
