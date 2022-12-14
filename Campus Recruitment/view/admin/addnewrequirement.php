<div class="page-content">
    <!-- Page Header -->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <h3 class="h4 mb-0">Add New Requirement</h3>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body pt-0 mt-4">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label" for="company">Company</label>
                                <input class="form-control" name="company" id="company" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="address">Address</label>
                                <input class="form-control" name="address" id="address" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="state">State</label>
                                <input class="form-control" name="state" id="state" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="city">City</label>
                                <input class="form-control" name="city" id="city" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="contact">Contact</label>
                                <input class="form-control" name="contact" id="contact" type="number" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="job_roll">Job Role</label>
                                <input class="form-control" name="job_roll" id="job_roll" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">E-mail</label>
                                <input class="form-control" name="email" id="email" type="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="work_time">Work Time</label>
                                <select name="work_time" id="work_time" class="form-control">
                                    <option value="1" disabled selected>----------------------------- Enter Require time -------------------------------</option>
                                    <option value="Half Day">half time</option>
                                        <option value="Full Day">full time</option>
                                        <option value="part time">part time</option>
                                    </select>
                            </div>
                            
                            <button class="btn btn-primary" type="submit" name="submit" value="Add" id="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>