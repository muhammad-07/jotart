<?php include_once('head.php') ?>

</head>

<body class="gray">

    <!-- Wrapper -->
    <div id="wrapper">

        <?php include_once('header.php') ?>


        <!-- Dashboard Container -->
        <div class="dashboard-container">

            <?php include_once('sidebar.php') ?>


            <!-- Dashboard Content
	================================================== -->
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner">

                    <!-- Dashboard Headline -->
                    <div class="dashboard-headline">
                        <h3>Settings</h3>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Settings</li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Row -->
                    <div class="row">

                        <!-- Dashboard Box -->
                        <div class="col-xl-12">
                            <div class="dashboard-box margin-top-0">

                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
                                </div>

                                <div class="content with-padding padding-bottom-0">

                                    <div class="row">

                                        <div class="col-auto">
                                            <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                                                <img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
                                                <div class="upload-button"></div>
                                                <input class="file-upload" type="file" accept="image/*" />
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="row">

                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>First Name</h5>
                                                        <input type="text" class="with-border" value="Tom">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Last Name</h5>
                                                        <input type="text" class="with-border" value="Smith">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <!-- Account Type -->
                                                    <div class="submit-field">
                                                        <h5>Account Type</h5>
                                                        <div class="account-type">
                                                            <div>
                                                                <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked />
                                                                <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
                                                            </div>

                                                            <div>
                                                                <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio" />
                                                                <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Email</h5>
                                                        <input type="text" class="with-border" value="tom@example.com">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Box -->
                        <div class="col-xl-12">
                            <div class="dashboard-box">

                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-face"></i> My Profile</h3>
                                </div>

                                <div class="content">
                                    <ul class="fields-ul">
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="submit-field">
                                                        <div class="bidding-widget">
                                                            <!-- Headline -->
                                                            <span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

                                                            <!-- Slider -->
                                                            <div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
                                                            <input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="submit-field">
                                                        <h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>

                                                        <!-- Skills List -->
                                                        <div class="keywords-container">
                                                            <div class="keyword-input-container">
                                                                <input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel" />
                                                                <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                            </div>
                                                            <div class="keywords-list">
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
                                                                <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="submit-field">
                                                        <h5>Attachments</h5>

                                                        <!-- Attachments -->
                                                        <div class="attachments-container margin-top-0 margin-bottom-0">
                                                            <div class="attachment-box ripple-effect">
                                                                <span>Cover Letter</span>
                                                                <i>PDF</i>
                                                                <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                                            </div>
                                                            <div class="attachment-box ripple-effect">
                                                                <span>Contract</span>
                                                                <i>DOCX</i>
                                                                <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>

                                                        <!-- Upload Button -->
                                                        <div class="uploadButton margin-top-0">
                                                            <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple />
                                                            <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                                                            <span class="uploadButton-file-name">Maximum file size: 10 MB</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Tagline</h5>
                                                        <input type="text" class="with-border" value="iOS Expert + Node Dev">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Nationality</h5>
                                                        <select class="selectpicker with-border" data-size="7" title="Select Job Type" data-live-search="true">
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US" selected>United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="submit-field">
                                                        <h5>Introduce Yourself</h5>
                                                        <textarea cols="30" rows="5" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Box -->
                        <div class="col-xl-12">
                            <div id="test1" class="dashboard-box">

                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
                                </div>

                                <div class="content with-padding">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Current Password</h5>
                                                <input type="password" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>New Password</h5>
                                                <input type="password" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Repeat New Password</h5>
                                                <input type="password" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="checkbox">
                                                <input type="checkbox" id="two-step" checked>
                                                <label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-xl-12">
                            <a href="#" class="button ripple-effect big margin-top-30">Save Changes</a>
                        </div>

                    </div>
                    <!-- Row / End -->

                    <?php include_once('footer-logged.php') ?>

                </div>
            </div>
            <!-- Dashboard Content / End -->

        </div>
        <!-- Dashboard Container / End -->

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

    <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
    <script src="js/chart.min.js"></script>
    <script>
        Chart.defaults.global.defaultFontFamily = "Nunito";
        Chart.defaults.global.defaultFontColor = '#888';
        Chart.defaults.global.defaultFontSize = '14';

        var ctx = document.getElementById('chart').getContext('2d');

        var chart = new Chart(ctx, {
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                // Information about the dataset
                datasets: [{
                    label: "Views",
                    backgroundColor: 'rgba(42,65,232,0.08)',
                    borderColor: '#2a41e8',
                    borderWidth: "3",
                    data: [196, 132, 215, 362, 210, 252],
                    pointRadius: 5,
                    pointHoverRadius: 5,
                    pointHitRadius: 10,
                    pointBackgroundColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointBorderWidth: "2",
                }]
            },

            // Configuration options
            options: {

                layout: {
                    padding: 10,
                },

                legend: {
                    display: false
                },
                title: {
                    display: false
                },

                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            borderDash: [6, 10],
                            color: "#d8d8d8",
                            lineWidth: 1,
                        },
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            display: false
                        },
                    }],
                },

                tooltips: {
                    backgroundColor: '#333',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    bodyFontColor: '#fff',
                    bodyFontSize: 13,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    intersect: false
                }
            },


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

            if ($('.submit-field')[0]) {
                setTimeout(function() {
                    $(".pac-container").prependTo("#autocomplete-container");
                }, 300);
            }
        }
    </script>

    <!-- Google API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&amp;libraries=places&amp;callback=initAutocomplete"></script>


</body>

<!-- Mirrored from paybytrust.com/dashboard-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2022 08:35:52 GMT -->

</html>