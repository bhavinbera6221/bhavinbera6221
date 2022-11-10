<div id="page-wrapper">
    <div class="main-page">
        <div class="col_3">
            <div class="clearfix"> </div>
        </div>
        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">
                    <div class="col-md-11">
                        <h4 class="title">Edit User's Data</h4>
                    </div>

                    <div class="col">
                        <a class="btn btn-sm btn-success" href="addnewuser">Add New</a>
                    </div>

                    <div class="card">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2"><label for="username">User Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo $UserDataById['Data']['0']->username; ?>" name="username" id="username">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><label for="fullname">Full Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo $UserDataById['Data']['0']->fullname; ?>" name="fullname" id="fullname">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"><label for="email">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo $UserDataById['Data']['0']->email; ?>" name="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><label for="mobile">Mobile</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo $UserDataById['Data']['0']->mobile; ?>" name="mobile" id="mobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><label for="gender">Gender</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="radio" name="gender" <?php if ($UserDataById['Data']['0']->gender == "Male") {
                                                                            echo "checked";
                                                                        } ?> id="Male" value="Male"> <label for="Male">Male</label>
                                    <input type="radio" name="gender" <?php if ($UserDataById['Data']['0']->gender == "Female") {
                                                                            echo "checked";
                                                                        } ?> id="Female" value="Female"> <label for="Female">Female</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><label for="hobby">Hobby</label>
                                </div>
                                <div class="col-md-8">
                                    <?php
                                    $arrayofhobby = explode(",", $UserDataById['Data'][0]->hobby);
                                    //   echo "<pre>";
                                    //   print_r($arrayofhobby);
                                    //   var_dump(in_array("cricket",$arrayofhobby));
                                    //   echo "</pre>";

                                    ?>
                                    <input type="checkbox" name="hobby[]" <?php if (in_array("cricket", $arrayofhobby)) {
                                                                                echo "checked";
                                                                            } ?> id="cricket" value="cricket"> <label for="cricket">Cricket
                                        <input type="checkbox" name="hobby[]" <?php if (in_array("reading", $arrayofhobby)) {
                                                                                    echo "checked";
                                                                                } ?> id="reading" value="reading"> <label for="reading">Reading</label>
                                        <input type="checkbox" name="hobby[]" <?php if (in_array("swiming", $arrayofhobby)) {
                                                                                    echo "checked";
                                                                                } ?> id="swiming" value="swiming"> <label for="swiming">Swiming</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><label for="country">Country</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="country" id="country" onchange="getStateDataByCountryId(this)">
                                        <option value="">Select Country</option>
                                        <?php foreach ($allcountryData['Data'] as $countrykey => $countryvalue) { ?>
                                            <option <?php if ($countryvalue->country_id == $UserDataById['Data'][0]->country_id) {
                                                        echo "selected";
                                                    } ?> value="<?php echo $countryvalue->country_id; ?>"><?php echo $countryvalue->country_name; ?></option>
                                        <?php } ?>

                                    </select>
                                    <script>
                                        function getStateDataByCountryId(e) {
                                            console.log(e);
                                            // console.log(e.value);

                                            $.ajax({
                                                url: "statedatabycountryid",
                                                method : "post",
                                                data: {"countryid":e.value},
                                                success: function(response) {
                                                    data = JSON.parse(response)
                                                    console.log(data.Data);
                                                    htmloption = "<option>Select State</option>"
                                                    data.Data.forEach(element => {
                                                        // console.log(element);
                                                        htmloption += '<option value="'+element.state_id+'">'+element.state_name+'</option>'
                                                    });
                                                    console.log(htmloption);
                                                    $("#state").html(htmloption);
                                                }
                                            })
                                        }

                                    </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><label for="state">State</label>
                                </div>
                                <div class="col-md-8">
                                    <?php
                                    //  echo "<pre>";
                                    //  print_r($UserDataById['Data'][0]);                              
                                    //  echo "</pre>";
                                    ?>
                                    <select name="state" id="state" onchange="getCityDataByStateId(this)">
                                        <option value="">Select State</option>
                                        <?php foreach ($allstateData['Data'] as $statekey => $statevalue) {
                                            // print_r($statevalue);
                                        ?>
                                            <option <?php if ($statevalue->state_id == $UserDataById['Data'][0]->state_id) {
                                                        echo "selected";
                                                    } ?> value="<?php echo $statevalue->state_id; ?>"><?php echo $statevalue->state_name; ?></option>
                                        <?php } ?>
                                    </select>
                                    <script>
                                         function getCityDataByStateId(e) {
                                            console.log(e);
                                            console.log(e.value);

                                            $.ajax({
                                                url: "citydatabystateid",
                                                method:"post",
                                                data:{"stateid":e.value},
                                                success:function(response) {
                                                    data = JSON.parse(response)
                                                    console.log(data.Data);
                                                    htmloption = "<option selected>Select City</option>"
                                                    data.Data.forEach(element => {
                                                        htmloption += '<option value="'+element.city_id+'">'+element.city_name+'</option>'
                                                    });
                                                    console.log(htmloption);
                                                    $("#city").html(htmloption);
                                                }
                                            })
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><label for="city">City</label>
                                </div>
                                <div class="col-md-8"   >
                                    <select name="city" id="city">
                                        <option value="">Select City</option>
                                        <?php foreach ($allCityData['Data'] as $citykey => $cityValue) {
                                            // print_r($allCityData);
                                            // print_r($UserDataById['Data'][0]);
                                        ?>
                                            <option <?php if ($cityValue->city_id == $UserDataById['Data'][0]->city_id) {
                                                        echo "selected";
                                                    } ?> value="<?php echo $cityValue->city_id; ?>"><?php echo $cityValue->city_name; ?></option>
                                        <?php }  ?>
                                    </select>
                                    <script>
                                        // $.ajax({
                                        //     url: "http://localhost/bhavin/API/allcities",
                                        //     success: function(response) {
                                        //         data = JSON.parse(response)
                                        //         console.log(data.Data);
                                        //         htmloption = ""
                                        //         data.Data.forEach(element => {
                                        //             // console.log(element);
                                        //             htmloption +="<option>"+element.city_name+"</option>"
                                        //         });
                                        //         console.log(htmloption); 
                                        //         $("#city").html(htmloption);
                                        //     }
                                        // })
                                    </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="prof_pic">Prof_pic</label>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="file" name="prof_pic" id="prof_pic" value="<?php $UserDataById['Data'][0]->prof_pic; ?>">
                                        <input type="text" name="old_prof_pic" id="old_prof_pic" value="<?php echo $UserDataById['Data'][0]->prof_pic; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-dark" name="update" id="update" value="update">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>