<?php $page = 'refer'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Second Bloom</title>
    <?php include 'include/header-script.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
</head>

<body>
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="pages_banner">
            <div class="content">
                <h1 class="heading fontHeading fontWeight600 text_primary">
                    Refer a Client
                </h1>
                <p class=" text_primary title fontWeight500">
                    Home Healthcare Agencies in Pennsylvania
                </p>
            </div>
        </div>
        <div style="background:#f6f6f6">
            <div class="containerFull">
                <div class="py-3">
                    <h5 class="">
                        <a class="text_primary" href="index.php">Home</a> <i class="fa-solid fa-angle-right"></i>
                        Refer a Client
                    </h5>
                </div>
            </div>
        </div>

        <section>
            <div class="containerFull">
                <form class="refer_form" id="" name="contact" method="post" enctype="multipart/form-data" action="">
                    <p class="text-danger">* Required Information</p>

                    <p class="mt-3">REFERRER</p>

                    <!-- Your Information -->
                    <div class="mb-3 mt-4">
                        <label for="name" class="form-label"><strong>Your Name <span
                                    class="text-danger">*</span></strong></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                            required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="organization" class="form-label"><strong>Organization <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="organization" id="organization" class="form-control"
                                placeholder="Enter organization" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label"><strong>Phone Number <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                placeholder="Enter phone number" required>
                        </div>
                    </div>

                    <hr>

                    <!-- Client Information -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="client_last_name" class="form-label"><strong>Client's Last Name <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="client_last_name" id="client_last_name" class="form-control"
                                placeholder="Enter client's last name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="client_first_name" class="form-label"><strong>First Name <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="client_first_name" id="client_first_name" class="form-control"
                                placeholder="Enter client's first name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="client_phone" class="form-label"><strong>Phone Number <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="client_phone" id="client_phone" class="form-control"
                                placeholder="Enter phone number" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="contact_person" class="form-label"><strong>Contact Person <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="contact_person" id="contact_person" class="form-control"
                                placeholder="Enter contact person" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="contact_phone" class="form-label"><strong>Contact's Phone Number <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="contact_phone" id="contact_phone" class="form-control"
                                placeholder="Enter contact's phone" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="client_address" class="form-label"><strong>Client's Address <span
                                        class="text-danger">*</span></strong></label>
                            <input type="text" name="client_address" id="client_address" class="form-control"
                                placeholder="Enter address" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label"><strong>Email <span
                                    class="text-danger">*</span></strong></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email"
                            required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="insurance" class="form-label"><strong>Insurance Type</strong></label>
                            <select name="insurance" id="insurance" class="form-select">
                                <option value="">- Select -</option>
                                <option value="MEDICAID">Medicaid</option>
                                <option value="MEDICARE">Medicare</option>
                                <option value="PUBLIC AIDE">Public Aid</option>
                                <option value="PRIVATE INSURANCE">Private Insurance</option>
                                <option value="SELF PAY">Self Pay</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dob" class="form-label"><strong>Date of Birth</strong></label>
                            <input type="date" name="dob" id="dob" class="form-control">
                        </div>
                    </div>

                    <!-- Additional Questions -->
                    <div class="mb-3 questions">
                        <label class="form-label"><strong>Has the client received home health care
                                services?</strong></label>
                        <div class="row m-0 p-0">
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="home_health_yes" class="form-check-label">
                                    <span>Yes</span>
                                    <input type="radio" name="home_health_past" id="home_health_yes" value="Yes"
                                        class="form-check-input">
                                </label>
                            </div>
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="home_health_no" class="form-check-label">
                                    <span>No</span>
                                    <input type="radio" name="home_health_past" id="home_health_no" value="No"
                                        class="form-check-input">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="client_lives_in" class="form-label"><strong>Client Lives In</strong></label>
                        <select name="client_lives_in" id="client_lives_in" class="form-select">
                            <option value="">- Select -</option>
                            <option value="MEDICAID">Medicaid</option>
                            <option value="MEDICARE">Medicare</option>
                            <option value="PUBLIC AIDE">Public Aid</option>
                            <option value="PRIVATE INSURANCE">Private Insurance</option>
                            <option value="SELF PAY">Self Pay</option>
                        </select>
                    </div>

                    <div class="mb-3 questions">
                        <label class="form-label"><strong>Does the client have a primary care
                                physician?</strong></label>
                        <div class="row m-0 p-0">
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="primary_physician_yes" class="form-check-label">
                                    <span>Yes</span>
                                    <input type="radio" name="has_primary_physician" id="primary_physician_yes"
                                        value="Yes" class="form-check-input">
                                </label>
                            </div>
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="primary_physician_no" class="form-check-label">
                                    <span>No</span>
                                    <input type="radio" name="has_primary_physician" id="primary_physician_no"
                                        value="No" class="form-check-input">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 questions">
                        <label class="form-label"><strong>Can the client drive regularly?</strong></label>
                        <div class="row m-0 p-0">
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="can_drive_yes" class="form-check-label">
                                    <span>Yes</span>
                                    <input type="radio" name="can_drive" id="can_drive_yes" value="Yes"
                                        class="form-check-input">
                                </label>
                            </div>
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="can_drive_no" class="form-check-label">
                                    <span>No</span>
                                    <input type="radio" name="can_drive" id="can_drive_no" value="No"
                                        class="form-check-input">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 questions">
                        <label class="form-label"><strong>Does the client use assistive devices?</strong></label>
                        <div class="row m-0 p-0">
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="uses_assistive_device_yes" class="form-check-label">
                                    <span>Yes</span>
                                    <input type="radio" name="uses_assistive_device" id="uses_assistive_device_yes"
                                        value="Yes" class="form-check-input">
                                </label>
                            </div>
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="uses_assistive_device_no" class="form-check-label">
                                    <span>No</span>
                                    <input type="radio" name="uses_assistive_device" id="uses_assistive_device_no"
                                        value="No" class="form-check-input">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 questions">
                        <label class="form-label"><strong>Is the client willing to receive home health care
                                services?</strong></label>
                        <div class="row m-0 p-0">
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="willing_yes" class="form-check-label">
                                    <span>Yes</span>
                                    <input type="radio" name="willing_to_receive_services" id="willing_yes" value="Yes"
                                        class="form-check-input">
                                </label>
                            </div>
                            <div class="form-check col-md-6 m-0 p-0">
                                <label for="willing_no" class="form-check-label">
                                    <span>No</span>
                                    <input type="radio" name="willing_to_receive_services" id="willing_no" value="No"
                                        class="form-check-input">
                                </label>
                            </div>
                        </div>
                    </div>

                  

                    <button type="submit" class="btn_1 mx-auto mt-5">Submit</button>
                </form>




            </div>
        </section>




        <?php include 'include/footer.php'; ?>
        <?php include 'include/footer-script.php'; ?>

        <script type="text/javascript">
            Fancybox.bind("[data-fancybox]", {});
        </script>


</body>

</html>