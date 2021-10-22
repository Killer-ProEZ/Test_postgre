<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>App</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">UserName</th>
                <th scope="col">CustomerName</th>
                <th scope="col">Tel</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once('connection.php');
            $result = pg_query($connect, "select * from public.customer");
            while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['customername']; ?></td>
                    <td><?php echo $row['tel']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>