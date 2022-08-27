        <?php session_start(); ?>

        <!-- User Content Container  -->
        <div id="user-content-container" class="container-fluid p-sm-4 pt-4 p-0">
            <div class="row">
                <div class="col-lg-8">
                    <div
                        class="card bg-transparent d-flex flex-column justify-content-center align-items-center border-0">
                        <div class="card-header shadow">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-category">Complete your profile</p>
                        </div>
                        <div class="card-body p-sm-5 pt-5 rounded shadow bg-white">
                            <form onsubmit="profile_update(event)" id="profileForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Username</label>
                                            <input type="text" name="adminUsername" id="adminUsername"
                                                class="form-control mt-2"
                                                value="<?php echo $_SESSION['verify_username']  ?>" required>
                                            <p class="validationError my-0 px-1" id="userValidation"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" name="adminPassword" id="adminPassword"
                                                class="form-control mt-2"
                                                value="<?php echo $_SESSION['verify_password']  ?>" required>
                                            <p class="validationError my-0 px-1" id="passValidation"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" name="adminName" id="adminName" class="form-control mt-2"
                                                value="<?php echo $_SESSION['verify_name']  ?>" required>
                                            <p class="validationError my-0 px-1"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Display Name</label>
                                            <input type="text" name="adminDispName" id="adminDispName"
                                                class="form-control mt-2"
                                                value="<?php echo $_SESSION['verify_dispName']  ?>" required>
                                            <p class="validationError my-0 px-1"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Account Email</label>
                                            <input type="text" name="adminAccEmail" id="adminAccEmail"
                                                class="form-control mt-2 "
                                                value="<?php echo $_SESSION['verify_accEmail']  ?>" required>
                                            <p class="validationError my-0 px-1"></p>
                                        </div>
                                    </div>


                                </div>


                                <button type="submit" class="update-btn mt-4 rounded" disabled>
                                    <h6>Update Profile</h6>
                                    <div class="loader-circle"></div>
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow card-profile">
                        <form action="" onsubmit="profileImg_update(event)" id="profileImgForm">
                            <div class="card-avatar">
                                <label for="adminImage" class="w-100 h-100">
                                    <img src="../assects/img/<?php echo $_SESSION['verify_thumbnail'] ?>" alt="">
                                </label>
                                <div class="loader-circle d-none"></div>
                                <input type="file" name="adminImage" id="adminImage" class="d-none"
                                    data-container="card-avatar" onchange="readAdminIMG(this)">
                            </div>
                            <div class="card-body">
                                <h6 class="card-category">CEO / Co-Founder</h6>
                                <h4 class="card-title"><?php echo $_SESSION['verify_name'] ?></h4>

                                <div class="remove-btn rounded" onclick="removeIMG()">Remove</div>
                                <button type="submit" class="upload-btn rounded" disabled>
                                    Upload
                                </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>