<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Product PDF</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-dark text-light">
                                    <th>Id</th>
                                    <td>{{ $id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $title }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $description }}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $price }}</td>
                                </tr>
                                <tr>
                                    <th>Quantity</th>
                                    <td>{{ $quantity }}</td>
                                </tr>
                                <!-- <th>Title</th>
            <th>Descrition</th>
            <th>Price</th>
            <th>Quantity</th> -->
                            </thead>
                            <!-- <tbody>
            <tr>
                <td>{{ $title }}</td>
                <td>{{ $description }}</td>
                <td>{{ $price }}</td>
                <td>{{ $quantity }}</td>
            </tr>
        </tbody> -->
                            <!-- <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Descrition</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $id }}</td>
                <td>{{ $title }}</td>
                <td>{{ $description }}</td>
                <td>{{ $price }}</td>
                <td>{{ $quantity }}</td>
            </tr>
        </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>