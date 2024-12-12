<?php $page = 'services'; ?>
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
                    Our Services
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
                        <a class="text_primary" href="index.php">Home</a> <i class="fa-solid fa-angle-right"></i> Our
                        Services
                    </h5>
                </div>
            </div>
        </div>

        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-7">
                        <p>
                            In pursuit of excellence as one of Home Healthcare Agencies in Philadelphia, Pennsylvania.
                        </p>
                        <h4 class="text_primary fontWeight600 mt-4">
                            Services Provided:
                        </h4>
                        <ul class="mt-4 list_services">
                            <li><a href="#">In-home and Community Habilitation</a></li>
                            <li><a href="#">Companion Services</a></li>
                            <li><a href="#">Waiver-Funded Respite Services</a></li>
                            <li><a href="#">24-hour Residential Services</a></li>
                        </ul>

                        <h4 class="mt-4 text_primary">
                            Accepted Waivers:
                        </h4>

                        <ul class="mt-3  list_services2">
                            <li>PFDS</li>
                            <li>Consolidated</li>
                            <li>Autism Waiver</li>
                            <li>Private pay accepted</li>
                            <li>Community Living Waiver</li>
                        </ul>



                    </div>
                    <div class="col-lg-5">
                        <img src="https://www.diversifiedsupportiveservices.org/wp-content/themes/diversifiedss/images/thumbnails/thumb-img3.jpg"
                            class="img-fluid rounded-top" alt="" />


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