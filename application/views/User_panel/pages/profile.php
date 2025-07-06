<?php
$user_id = $this->session->userdata("user_id");
$profile = $this->profile->profile_info($user_id);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175669691-1"></script>




<div id="content" class="app-content">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-4">
                    My Profile
                </h4>

            </div>

            <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">

                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content pt-0">

        <!-- Main charts -->

        <div class="row">
            <div class="col-lg-5 mb-5">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <!-- <div class="photo-content">
                            <div class="cover-photo rounded" style="background-image: url(<?= $panel_url; ?>assets/images/backgrounds/background.jpg); background-repeat: no-repeat;
                                        background-size: cover;"></div>
                        </div> -->
                        <div class="profile-info">
                            <div class="profile-photo">
                                <?php if ($profile->img != '') { ?>
                                    <img src="<?= base_url('images/users/') . $profile->img; ?>" class="img-fluid rounded-circle" alt="" style="width:25%;">


                                <?php } else { ?>
                                    <img src="<?= $this->conn->company_info('logo'); ?>" class="img-fluid rounded-circle" alt="" style="width:25%;">

                                <?php } ?>
                            </div>
                            <div class="profile-details pro_details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0"><?= $profile->username; ?></h4>
                                    <p><?= $profile->active_status == 1 ? '<span style="color:green";>Active</span>' : '<span style="color:red";>Inactive</span>'; ?></p>
                                </div>

                                <div class="user_image_desc my-3">
                                    <a class="btn btn-success" href="<?= $panel_path . 'profile/edit-profile'; ?>">Edit Profile</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card card_ac">

                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Sponsor</label>
                                    <div class="col-sm-9">
                                        <?php
                                        $check_existsspo = $this->conn->runQuery('id', 'users', "id='$profile->u_sponsor'");
                                        if ($check_existsspo) {
                                            echo $this->profile->profile_info($profile->u_sponsor)->username;
                                        } else {
                                            echo "null";
                                        }

                                        ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Sponsor Name</label>
                                    <div class="col-sm-9">
                                        <?php if ($this->profile && $profile && $profile->u_sponsor) {
                                            $sponsor_name = $this->profile->profile_info($profile->u_sponsor)->name;
                                            echo $sponsor_name;
                                        } else {
                                            echo "null";
                                        } ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <?= $profile->name; ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <?= $profile->mobile; ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <?= $profile->email; ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Date of Joinig</label>
                                    <div class="col-sm-9">
                                        <?= $profile->added_on; ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Activation Date</label>
                                    <div class="col-sm-9">
                                        <?= $profile->active_status == 1 ? $profile->active_date : ''; ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <?= $profile->active_status == 1 ? '<span style="color:green";>Active</span>' : '<span style="color:red";>Inactive</span>'; ?>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /main charts -->
    </div>
</div>

<!-- /content area -->