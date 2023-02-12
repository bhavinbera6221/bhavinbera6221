<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-left bg-dark text-light">
                    User Detaile
                </div>
                <div class="card-body">
                    <table class="table table-strip table-bordered">
                        <thead class="">
                            <tr>
                                <th class="col col-lg-4">Username</th>
                                <td><?php print_r($_SESSION['UserDetail']['username']);  ?> </td>
                            </tr>
                            <tr>
                                <th class="col col-lg-4">Firstname</th>
                                <td><?php print_r($_SESSION['UserDetail']['firstname']);  ?> </td>
                            </tr>
                            <tr>
                                <th class="col col-lg-4">lastname</th>
                                <td><?php print_r($_SESSION['UserDetail']['lastname']);  ?> </td>
                            </tr>
                            <tr>
                                <th class="col col-lg-4">email</th>
                                <td><?php print_r($_SESSION['UserDetail']['email']);  ?> </td>
                            </tr>
                            <tr>
                                <th class="col col-lg-4">Birth Date</th>
                                <td><?php print_r($_SESSION['UserDetail']['birth_date']);  ?> </td>
                            </tr>
                            <tr>
                                <th class="col col-lg-4">Join Date</th>
                                <td><?php print_r($_SESSION['UserDetail']['created_at']);  ?> </td>
                            </tr>
                            <tr>
                                <th class="col col-lg-4">Last login</th>
                                <td><?php print_r($_SESSION['UserDetail']['lastlogin']);  ?> </td>
                            </tr>
                            <tr>
                                <th class="col col-lg-4">User Profile</th>
                                <td><img src="uploads/<?php print_r($_SESSION['UserDetail']['prof_pic']); ?>" style="width:128px;height:128px" alt="no image"> </td>
                            </tr>
                        </thead>
                    </table>
                    <a href="logout" class="btn btn-primary">logout</a>

                    
            </div>
        </div>
    </div>

</div>