<?php include_once('head.php') ?>
<style>
    .radio label {
        display: inline;
    }
</style>
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <?php include_once('header.php') ?>

        <!-- Page Content
================================================== -->
        <div class="container">
            <div class="row" style="margin: 50px auto">
                <div class="col-xl-9 offset-xl-1">

                    <div class="login-register-page">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h3 style="font-size: 26px;">Let's create your account!</h3>
                            <span>Already have an account? <a href="login.php">Log In!</a></span>
                        </div>

                        <!-- Account Type -->
                        <div class="account-type">
                            <div>
                                <input type="radio" name="account-type-radio" id="enterpreneur" class="account-type-radio" checked />
                                <label for="enterpreneur" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> ENTREPRENEUR </label>
                            </div>

                            <div>
                                <input type="radio" name="account-type-radio" id="investor" class="account-type-radio" />
                                <label for="investor" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> INVESTOR </label>
                            </div>

                            <div>
                                <input type="radio" name="account-type-radio" id="rs" class="account-type-radio" />
                                <label for="rs" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> RESOURCE SUPPLIER </label>
                            </div>
                        </div>
                        <div class="account-type">
                            <div>
                                <input type="radio" name="account-type-radio" id="merchandiser" class="account-type-radio" />
                                <label for="merchandiser" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> MERCHANDISER </label>
                            </div>

                            <div>
                                <input type="radio" name="account-type-radio" id="partner" class="account-type-radio" />
                                <label for="partner" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> PARTNER </label>
                            </div>

                            <div>
                                <input type="radio" name="account-type-radio" id="js" class="account-type-radio" />
                                <label for="js" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> JOB SEEKER </label>
                            </div>
                        </div>

                        <?php include_once('signup/enterpreneur.php') ?>
                        <?php include_once('signup/investor.php') ?>
                        <?php include_once('signup/partner.php') ?>
                        <?php include_once('signup/merchandiser.php') ?>
                        <?php include_once('signup/job-seeker.php') ?>
                        <?php include_once('signup/resource-supplier.php') ?>


                    </div>

                </div>
            </div>
        </div>

        <?php include_once('footer.php') ?>


    </div>
    <!-- Wrapper / End -->


    <!-- Scripts
================================================== -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/tippy.all.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/snackbar.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
    </script>


    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
            var options = {
                types: ['(cities)'],
                // componentRestrictions: {country: "us"}
            };

            var input = document.getElementById('autocomplete-input');
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }

        // Autocomplete adjustment for homepage
        if ($('.intro-banner-search-form')[0]) {
            setTimeout(function() {
                $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
            }, 300);
        }

        $('.signup-forms').hide();
        $('#enterpreneur-form').show();
        $('.account-type-radio').on('change', function() {
            frm = $(this).prop('id');
            $('.signup-forms').hide();
            $('#' + frm + '-form').fadeIn();

        });
    </script>

    <!-- Google API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>

</body>

<!-- Mirrored from paybytrust.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2022 08:34:06 GMT -->

</html>