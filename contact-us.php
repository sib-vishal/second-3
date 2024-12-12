<?php $page = 'contact'; ?>
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
                    Contact Us
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
                        Contact Us
                    </h5>
                </div>
            </div>
        </div>

        <section>
            <div class="containerFull">
                <p class="">
                    Thank you for your interest in our services. Second Bloom  hopes to serve you in
                    the near future. Please send us a message or an inquiry.
                </p>
                <div class="row justify-content-center mt-5 ">
                    <div class="col-lg-9 ">

                        <div class="form_box shadow">
                            <h4 class="text_primary">* Required Information</h4>
                            <hr />
                            <form name="contact" method="post" enctype="multipart/form-data" action="">


                                <div class="item_form">

                                    <label><strong>Full Name <span>*</span></strong></label>
                                    <input type="text" name="First_Name" placeholder="First Name">
                                </div>
                                <div class="item_form">
                                    <label for="">&nbsp;</label>

                                    <input type="text" name="Last_Name" placeholder="Last Name">
                                </div>


                                <div class="item_form">
                                    <label><strong>Email Address <span>*</span></strong></label>
                                    <input type="text" name="Email_Address" placeholder="Enter email address here">
                                </div>

                                <div class="item_form">
                                    <label><strong>Phone <span>*</span></strong></label>
                                    <input type="text" name="Phone" placeholder="Enter phone here"
                                        onkeypress="return isNumberKey(event)">
                                </div>

                                <div class="item_form">
                                    <label><strong>Question / Comment</strong></label>
                                    <textarea name="Question_or_Comment"
                                        placeholder="Enter your question or comment here"></textarea>
                                </div>

                                <div class="item_form">

                                    <button class="btn_1 mx-auto d-block" type="submit"> Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>



            </div>
        </section>




        <?php include 'include/footer.php'; ?>
        <?php include 'include/footer-script.php'; ?>

        <script type="text/javascript">
            Fancybox.bind("[data-fancybox]", {});
        </script>


</body>

</html>