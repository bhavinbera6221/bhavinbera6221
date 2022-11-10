<style>
    input[type="radio"],
    input[type="checkbox"] {
        -webkit-appearance: auto !important;
        outline: auto !important;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">

            <div class="card">
                <div class="card-header text-center">
                    Registration
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                       
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Enter Full Name" class="form-control" name="fullname" id="fullname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Enter Email Address" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="number" placeholder="Enter Contact Number" class="form-control" name="mobile" id="mobile">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="radio" name="gender" value="Male" id="male"> <label for="male"> Male</label>
                                <input type="radio" name="gender" value="Female" id="female"> <label for="female"> Female</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="checkbox" name="hobby[]" value="cricket" id="cricket"> <label for="cricket"> Cricket</label>
                                <input type="checkbox" name="hobby[]" value="reading" id="reading"> <label for="reading"> Reading</label>
                                <input type="checkbox" name="hobby[]" value="swiming" id="swiming"> <label for="swiming"> Swiming</label>
                            </div>
                        </div>
                        <!-- <div class="row mt-3">
                                 <div class="col-md-2"><label for="country">Country</label>
                                </div> -->
                                <!-- <div class="col-md-8">
                                    <select name="country" id="country">
                                        <?php echo $UserDataById['Data'][0]->country; ?>
                                        <option value="" disable selected>Select Country</option>
                                        <?php foreach ($allcountryData['Data'] as $countrykey => $countryvalue) { ?>
                                            <option value="<?php echo $countryvalue->country_name; ?>"><?php echo $countryvalue->country_name; ?></option>
                                        <?php echo "checked";
                                        } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3"> -->
                                <!-- <div class="col-md-2"><label for="state">State</label>
                                </div> -->
                                <!-- <div class="col-md-8">
                                    <select name="state" id="state">
                                        <option value="">Select State</option>
                                        <?php foreach ($allstateData['Data'] as $statekey => $statevalue) { ?>
                                            <option value="<?php echo $statevalue->state_name; ?>"><?php echo $statevalue->state_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3"> -->
                                <!-- <div class="col-md-2"><label for="city">City</label>
                                </div> -->
                                <!-- <div class="col-md-8">
                                    <select name="city" id="city">
                                        <option value="">Select City</option>
                                        <?php foreach ($allCityData['Data'] as $citykey => $cityValue) { ?>
                                            <option value="<?php echo $cityValue->city_name; ?>"><?php echo $cityValue->city_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>  -->
                        <div class="row mt-3">
                            <div class="col">
                                <select name="city" id="city" class="form-control">
                                    <option value="1" disabled selected>--------- select your City ---------</option>
                                    <option value="ahmedabad">ahmedabad</option>
                                    <option value="jamnagar">jamnagar</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Junagadh">Junagadh</option>
                                    <option value="Rajkot">Rajkot</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <input type="file" name="prof_pic" id="prof_pic">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="password" placeholder="Enter your password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" name="regisration" id="regisration" value="register">

                                <input type="reset" class="btn btn-success">
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>