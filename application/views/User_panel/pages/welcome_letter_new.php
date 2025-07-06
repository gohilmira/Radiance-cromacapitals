<?php
$u_code = $this->session->userdata('user_id');
$profile = $this->profile->profile_info($u_code);
$my_package = $this->business->package($u_code);
?>
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Welecome Letter
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
            <div class="col-xl-12 ">
                <div class="card user-card welcome_letter">
                    <div class="card-body pb-0">
                        <h3 class="mb-4">Welcome Letter</h3>
                        <div class="d-flex mb-3 align-items-center">

                            <div class="dz-media me-3">
                                <div class="welcome_letter_image">
                                    <?php if ($profile->img != '') { ?>
                                        <img src="<?= base_url('images/users/') . $profile->img; ?>" alt="images">

                                    <?php } else { ?>
                                        <img src="<?= $this->conn->company_info('logo'); ?>" alt="images">

                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div>
                                <h5 class="title mb-0"><?= $profile->username; ?></h5>
                                <h6 class="mb-0"><?= $profile->name; ?></h6>
                                <span class="text-info"><?= $profile->mobile; ?></span>
                            </div>
                        </div>
                        <?php
                        $welcome_condition = $this->conn->runQuery('*', 'legal_data', 'lega_page_type="welcome_letter"');
                        if ($welcome_condition) {
                            foreach ($welcome_condition as $welcome_condition1) {

                                    ?>
                                        
                       
                        <span class="fs-5"><b>Dear <?php echo $welcome_condition1->legal_title; ?></b></span>
                        <p class=""><?php echo $welcome_condition1->legal_desc; ?></p>
                            <?php
                            }
                        }
                        ?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white d-flex">
                                <span class="mb-0 title">Email</span> :
                                <span class=" ms-2"><?= $profile->email; ?></span>
                            </li>
                            <li class="list-group-item text-white d-flex">
                                <span class="mb-0 title">Purchase Date</span> :
                                <span class=" ms-2"><?= $profile->added_on; ?></span>
                            </li>
                            <li class="list-group-item text-white d-flex">
                                <span class="mb-0 title">Purchase Amount</span> :
                                <span class="desc-text ms-2"><?= $my_package; ?></span>
                            </li>
                        </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs" onclick='printDiv();'><i class="fa fa-print"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- /main charts -->
</div>
<!-- /content area -->


</div>
<script>
    ////////////////div print function /////////////////////////
    //////////btn onclick  call this function ////////

    function printDiv() {

        var divToPrint = document.getElementById('DivIdToPrint'); ////////////  <- div id /////////////

        var newWin = window.open('', 'Print-Window');

        newWin.document.open();

        newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

        newWin.document.close();

        setTimeout(function() {
            newWin.close();
        }, 10);

    }
    ///////////////////////// end function //////////
</script>

<br>