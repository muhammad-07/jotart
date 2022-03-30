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
                        <h3>Messages</h3>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Messages</li>
                            </ul>
                        </nav>
                    </div>

                    <div class="messages-container margin-top-0">

                        <div class="messages-container-inner">

                            <!-- Messages -->
                            <div class="messages-inbox">
                                <div class="messages-headline">
                                    <div class="input-with-icon">
                                        <input id="autocomplete-input" type="text" placeholder="Search">
                                        <i class="icon-material-outline-search"></i>
                                    </div>
                                </div>

                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="message-avatar"><i class="status-icon status-online"></i><img src="images/user-avatar-small-03.jpg" alt="" /></div>

                                            <div class="message-by">
                                                <div class="message-by-headline">
                                                    <h5>David Peterson</h5>
                                                    <span>4 hours ago</span>
                                                </div>
                                                <p>Thanks for reaching out. I'm quite busy right now on many</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="active-message">
                                        <a href="#">
                                            <div class="message-avatar"><i class="status-icon status-offline"></i><img src="images/user-avatar-small-02.jpg" alt="" /></div>

                                            <div class="message-by">
                                                <div class="message-by-headline">
                                                    <h5>Sindy Forest</h5>
                                                    <span>Yesterday</span>
                                                </div>
                                                <p>Hi Tom! Hate to break it to you but I'm actually on vacation</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="message-avatar"><i class="status-icon status-offline"></i><img src="images/user-avatar-placeholder.png" alt="" /></div>

                                            <div class="message-by">
                                                <div class="message-by-headline">
                                                    <h5>Sebastiano Piccio</h5>
                                                    <span>2 days ago</span>
                                                </div>
                                                <p>Hello, I want to talk about my project if you don't mind!</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="message-avatar"><i class="status-icon status-online"></i><img src="images/user-avatar-placeholder.png" alt="" /></div>

                                            <div class="message-by">
                                                <div class="message-by-headline">
                                                    <h5>Marcin Kowalski</h5>
                                                    <span>2 days ago</span>
                                                </div>
                                                <p>Yes, I received payment. Thanks for cooperation!</p>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- Messages / End -->

                            <!-- Message Content -->
                            <div class="message-content">

                                <div class="messages-headline">
                                    <h4>Sindy Forest</h4>
                                    <a href="#" class="message-action"><i class="icon-feather-trash-2"></i> Delete Conversation</a>
                                </div>

                                <!-- Message Content Inner -->
                                <div class="message-content-inner">

                                    <!-- Time Sign -->
                                    <div class="message-time-sign">
                                        <span>28 June, 2018</span>
                                    </div>

                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="images/user-avatar-small-01.jpg" alt="" /></div>
                                            <div class="message-text">
                                                <p>Thanks for choosing my offer. I will start working on your project tomorrow.</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="message-bubble">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="images/user-avatar-small-02.jpg" alt="" /></div>
                                            <div class="message-text">
                                                <p>Great. If you need any further clarification let me know. 👍</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="images/user-avatar-small-01.jpg" alt="" /></div>
                                            <div class="message-text">
                                                <p>Ok, I will. 😉</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <!-- Time Sign -->
                                    <div class="message-time-sign">
                                        <span>Yesterday</span>
                                    </div>

                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="images/user-avatar-small-01.jpg" alt="" /></div>
                                            <div class="message-text">
                                                <p>Hi Sindy, I just wanted to let you know that project is finished and I'm waiting for your approval.</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="message-bubble">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="images/user-avatar-small-02.jpg" alt="" /></div>
                                            <div class="message-text">
                                                <p>Hi Tom! Hate to break it to you, but I'm actually on vacation 🌴 until Sunday so I can't check it now. 😎</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="images/user-avatar-small-01.jpg" alt="" /></div>
                                            <div class="message-text">
                                                <p>Ok, no problem. But don't forget about last payment. 🙂</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="message-bubble">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="images/user-avatar-small-02.jpg" alt="" /></div>
                                            <div class="message-text">
                                                <!-- Typing Indicator -->
                                                <div class="typing-indicator">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- Message Content Inner / End -->

                                <!-- Reply Area -->
                                <div class="message-reply">
                                    <textarea cols="1" rows="1" placeholder="Your Message" data-autoresize></textarea>
                                    <button class="button ripple-effect">Send</button>
                                </div>

                            </div>
                            <!-- Message Content -->

                        </div>
                    </div>
                    <!-- Messages Container / End -->




                    <?php include_once('footer-logged.php') ?>

                </div>
            </div>
            <!-- Dashboard Content / End -->

        </div>
        <!-- Dashboard Container / End -->

    </div>
    <!-- Wrapper / End -->


    <!-- Apply for a job popup
================================================== -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

        <!--Tabs -->
        <div class="sign-in-form">

            <ul class="popup-tabs-nav">
                <li><a href="#tab">Add Note</a></li>
            </ul>

            <div class="popup-tabs-container">

                <!-- Tab -->
                <div class="popup-tab-content" id="tab">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Do Not Forget 😎</h3>
                    </div>

                    <!-- Form -->
                    <form method="post" id="add-note">

                        <select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
                            <option>Low Priority</option>
                            <option>Medium Priority</option>
                            <option>High Priority</option>
                        </select>

                        <textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

                </div>

            </div>
        </div>
    </div>
    <!-- Apply for a job popup / End -->


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


</body>

<!-- Mirrored from paybytrust.com/dashboard-messages.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2022 08:35:51 GMT -->

</html>