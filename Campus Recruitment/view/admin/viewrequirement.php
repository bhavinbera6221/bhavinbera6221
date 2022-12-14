<div class="page-content">
    <!-- Page Header -->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <h2 class="h5 mb-0">All Requirement</h2>
                </div>
                <div class="col-md-1">
                    <a class="btn btn-sm btn-success" href="addnewrequirement">Add New</a>
                </div>
            </div>
            <table class="table table-strip table-bordered mt-3">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>Sr No.</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Job Roll</th>
                        <th>E-mail</th>
                        <th class="col col-lg-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = "1";
                    foreach ($allrequirement['Data'] as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value->company; ?></td>
                            <td><?php echo $value->address; ?></td>
                            <td><?php echo $value->contact; ?></td>
                            <td><?php echo $value->job_roll; ?></td>
                            <td><?php echo $value->email; ?></td>
                            <td>
                                <a href="companyedit?userid=<?php echo $value->id; ?>"><i class="fa fa-edit btn btn-sm btn-info"></i> </a>
                                <a href="companydelete?userid=<?php echo $value->id; ?>"><i class="fa fa-trash btn btn-sm btn-danger"></i></a>
                                
                            </td>
                        <?php
                        $count++;
                    }
                        ?>
                </tbody>
        </div>
    </div>
</div>
</div>