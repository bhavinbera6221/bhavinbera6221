<?php
// echo "<pre>";
// print_r($CompanyDataById['Data']['0']);
// echo "</pre>";
?>
<div class="page-content">
    <!-- Page Header -->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <h4 class="title">Edit User's Data</h4>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-sm btn-success" href="addnewuser">Add New</a>
                </div>
            </div>

            <div class="card">
                <form method="post" enctype="multipart/form-data">
                <form method="POST">
                            <div class="mb-3">
                                <label class="form-label" for="company">Company</label>
                                <input class="form-control" name="company" value="<?php echo $CompanyDataById['Data']['0']->company; ?>" id="company" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="address">Address</label>
                                <input class="form-control" name="address" value="<?php echo $CompanyDataById['Data']['0']->address; ?>" id="address" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="state">State</label>
                                <input class="form-control" name="state" id="state" value="<?php echo $CompanyDataById['Data']['0']->state; ?>" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="city">City</label>
                                <input class="form-control" name="city" id="city" value="<?php echo $CompanyDataById['Data']['0']->city; ?>" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="contact">Contact</label>
                                <input class="form-control" name="contact" id="contact" value="<?php echo $CompanyDataById['Data']['0']->contact; ?>" type="number" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="job_roll">Job Role</label>
                                <input class="form-control" name="job_roll" id="job_roll" value="<?php echo $CompanyDataById['Data']['0']->job_roll; ?>" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">E-mail</label>
                                <input class="form-control" name="email" id="email" value="<?php echo $CompanyDataById['Data']['0']->email; ?>" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="work_time">Work Time</label>
                                <select name="work_time" id="work_time"value="<?php echo $CompanyDataById['Data']['0']->work_time; ?>" class="form-control">
                                    <option value="1" disabled selected>----------------------------- Enter Require time -------------------------------</option>
                                    <option value="Half Day">half time</option>
                                        <option value="Full Day">full time</option>
                                        <option value="part time">part time</option>
                                    </select>
                            </div>
                            
                            <!-- <button class="btn btn-primary" type="submit" name="submit" value="Add" id="submit">Submit</button> -->
                            <input type="submit" class="btn btn-info" name="update" id="update" value="update">
                        </form>
                    
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>