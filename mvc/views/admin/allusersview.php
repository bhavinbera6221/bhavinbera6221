<?php
// echo "<pre>";
// print_r($FetchAllUserData['Data']);
?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="col_3">
            <div class="clearfix"> </div>
        </div>

        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">
                    <div class="col-md-11">
                        <h4 class="title">All User List</h4>
                    </div>
                    <div class="col">
                        <a class="btn btn-sm btn-success" href="addnewuser">Add New</a>
                    </div>


                    <table class="table table-strip table-bordered">
                        <thead class="bg-dark">
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php $count = 1;
                            foreach ($FetchAllUserData['Data'] as $key => $value) {
                            ?>

                                <tr>

                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $value->fullname; ?></td>
                                    <td><?php echo $value->username; ?></td>
                                    <td><?php echo $value->email; ?></td>
                                    <td><?php echo $value->gender; ?></td>
                                    <td><?php echo $value->mobile; ?></td>

                                    <td>
                                        <a href="edituser?userid=<?php echo $value->id; ?>"><i class="fa fa-pencil btn btn-sm btn-primary"></i> </a>
                                        <a href="deleteuser?userid=<?php echo $value->id; ?>"><i class="fa fa-trash btn btn-sm btn-danger"></i></a>

                                    </td>
                                </tr>
                            <?php $count++;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>