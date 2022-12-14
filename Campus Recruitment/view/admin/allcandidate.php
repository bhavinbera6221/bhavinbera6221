<?php
// echo "<pre>";
// print_r($FetchAllUserData['Data']);
?>
<div class="page-content">
    <!-- Page Header -->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <h4 class="title">All Candidate List</h4>
                </div>
                
            </div>
            <table class="table table-strip table-bordered mt-3">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Graduation</th>
                        <th>Address</th>
                        <th>City</th>
                        <th class="col col-lg-1">Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php $count = 1;
                    foreach ($FetchAllCandidateData['Data'] as $key => $value) {

                    ?>

                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value->fullname; ?></td>
                            <td><?php echo $value->email; ?></td>
                            <td><?php echo $value->contact; ?></td>
                            <td><?php echo $value->gyear; ?></td>
                            <td><?php echo $value->address; ?></td>
                            <td><?php echo $value->city; ?></td>
                            <td>
                                <!-- <a href="edituser?userid=<?php echo $value->id; ?>"><i class="fa fa-edit btn btn-sm btn-info"></i> </a> -->
                                <a href="deletecan?userid=<?php echo $value->id; ?>"><i class="fa fa-trash btn btn-sm btn-danger"></i></a>
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