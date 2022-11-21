<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css">
    <title>Document</title>



</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                Users
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>hobby</th>
                                    <th>Prof_pic</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'dbcon.php';

                                $select = "SELECT * FROM `data`";
                                $query = mysqli_query($con, $select);
                                $sr = "1";
                                while ($result = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $sr; ?></td>
                                        <td><?php echo $result['name']; ?></td>
                                        <td><?php echo $result['email']; ?></td>
                                        <td><?php echo $result['mobile']; ?></td>
                                        <td><?php echo $result['gender']; ?></td>
                                        <td><?php echo $result['hobby']; ?></td>
                                        <td><?php echo $result['prof_pic']; ?></td>
                                        <td>
                                            <a href="update.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>&nbsp;
                                            <a href="delete.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>

                                <?php
                                    $sr++;
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>


</body>

</html>