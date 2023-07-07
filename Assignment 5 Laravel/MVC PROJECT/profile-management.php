<?php 
if(!isset($_SESSION["usid"]))
{
    echo "<script>
    window.location='login';
    </script>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Profile-Management</h1>
                <nav class="d-flex align-items-center">
                    <a href="./">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.">Profile</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="<?php echo $shwdata[0]["photo"];?>" alt="Profile" class="rounded-circle"
                        style="height: 200px; width: 200px;">
                    <h2><?php echo $shwdata[0]["firstname"];?> &nbsp;<?php echo $shwdata[0]["lastname"];?></h2>
                    <div class="social-links mt-2">
                        <h3><a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card p-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Edit -
                            Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Change
                            Password</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="tab-pane fade show active profile-overview mt-5" id="profile-overview">

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">First Name</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo $shwdata[0]["firstname"];?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Last Name</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo $shwdata[0]["lastname"];?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Email</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo $shwdata[0]["email"];?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Phone</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo $shwdata[0]["phone"];?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Gender</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo $shwdata[0]["gender"];?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo $shwdata[0]["address"];?>
                                </div>
                            </div><br><br>

                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                                quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                        </div>
                    </div>
                    <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Profile Edit Form -->
                        <form method="post" enctype="multipart/form-data" >
                            <div class="row mb-3 mt-5">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="<?php echo $shwdata[0]["photo"];?>" alt="Profile"
                                        style="height: 150px; width: 150px;">
                                    <div class="pt-2">
                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"> <i class="bi bi-upload"></i></a>     
                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                <div class="col-md-8 col-lg-9">
                                <input type="file" class="form-control" id="img" name="img" value="<?php echo $shwdata[0]["photo"];?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="fnm" type="text" class="form-control" id="fullName"
                                        value="<?php echo $shwdata[0]["firstname"];?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="lnm" type="text" class="form-control" id="fullName"
                                        value="<?php echo $shwdata[0]["lastname"];?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="phone" type="text" class="form-control" id="Phone"
                                        value="<?php echo $shwdata[0]["phone"];?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="Email"
                                        value="<?php echo $shwdata[0]["email"];?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Address</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="add" type="text" class="form-control" id="Address"
                                        value="<?php echo $shwdata[0]["address"];?>" required>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="upd" value="Save Changes" onclick="return confirm('Confirm To Changes Details?')" required>Save Changes</button>
                                <!-- onclick="return confirm('Are You Sure To Change Your Details?')" -->
                            </div>
                        </form>
                        <!-- End Profile Edit Form -->
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Change Password Form -->
                        <form method="post">
                            <div class="row mb-3 mt-5">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Old
                                    Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="opass" type="password" class="form-control" id="currentPassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="npass" type="password" class="form-control" id="newPassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Confirm
                                    Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="cpass" type="password" class="form-control" id="renewPassword">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="changepass" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                        <!-- End Change Password Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>