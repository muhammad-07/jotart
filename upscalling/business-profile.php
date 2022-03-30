<?php include_once('head.php') ?>
<style>
    .single-page-section {
        margin-bottom: 25px;
    }

    

    .mb-0 {
        margin-bottom: 0 !important;
    }
</style>
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
                        <h3>Business Profile</h3>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Profile</li>
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
                                    <h3><i class="icon-feather-folder-plus"></i> Create Business Profile</h3>
                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Business Plan </h3>
                                        <p>This business plan is for the entrepreneur to fill to inform those who may want to invest in his business proposal. It is for the entrepreneur to fill. There is much explanation to guide the entrepreneur. These explanations will not be shown when the business profile is presented to users. The developer will just pick the headings and put the entrepreneur content below the headings. Since it is a bit long the developer will look at a way of offering only the headings and on a user clicking the heading the content under the heading will show with a link “”””back to contents””” for the user to go back to the list of headings. Make it possible for a user to download the whole document for study offline. With this form and the registration forms it is now easy to set a good user experience for the entrepreneur, the investor the consultant.</p>
                                    </div>
                                    <div class="row">

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Your Business Name</h5>
                                                <input type="text" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Business sector</h5>
                                                <select class="selectpicker with-border" data-size="7" title="Select Type">
                                                   
                                                    <option>Medical</option>
                                                    <option>Accounting and Finance</option>
                                                    
                                                    <option>Counseling</option>
                                                    <option>Court Administration</option>
                                                    <option>Human Resources</option>
                                                    <option>Investigative</option>
                                                    <option>IT and Computers</option>
                                                    <option>Law Enforcement</option>
                                                    <option>Management</option>
                                                    <option>Miscellaneous</option>
                                                    <option>Public Relations</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Key contact person</h5>
                                                <input type="text" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-3">
                                            <div class="submit-field">
                                                <h5>City</h5>
                                                <select class="selectpicker with-border" data-size="7" title="Select Category">
                                                    <option>WD</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="submit-field">
                                                <h5>State</h5>
                                                <select class="selectpicker with-border" data-size="7" title="Select Category">
                                                    <option>WD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="submit-field">
                                                <h5>Zip</h5>
                                                <input type="text" class="with-border">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="submit-field">
                                                <h5>Phone</h5>
                                                <input type="text" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Address Line-1</h5>
                                                <div class="input-with-icon">
                                                    <div id="autocomplete-container">
                                                        <input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address">
                                                    </div>
                                                    <i class="icon-material-outline-location-on"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Address Line-2</h5>
                                                <div class="input-with-icon">
                                                    <div id="autocomplete-container">
                                                        <input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address">
                                                    </div>
                                                    <i class="icon-material-outline-location-on"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>E-mail</h5>
                                                <div class="input-with-icon">
                                                    <div id="autocomplete-container">
                                                        <input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address">
                                                    </div>
                                                    <i class="icon-material-outline-email"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>




                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Executive Summary</h3>
                                        <p>This is a total summary of the business you propose. We suggest that you make it a few paragraphs only. Include everything that you would cover in a five-minute interview. What will your product be? Who are the owners? Who will your customers be? State briefly how much you want, precisely how you are going to use it, and how the money will make your business more profitable.</p>
                                    </div>
                                    <div class="row">

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Put Executive summary here" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Products and Services </h3>
                                        <p>Describe in depth your products or services (technical specifications, drawings, photos,). What factors will give you competitive advantages or disadvantages? Examples include level of quality or unique or proprietary features.</p>
                                    </div>
                                    <div class="row">

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Describe in depth your products or services" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="drawings, photos" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="competitive advantages quality or unique or proprietary features." class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Pricing of your products or services" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Products and Services </h3>
                                        <p>Describe in depth your products or services (technical specifications, drawings, photos,). What factors will give you competitive advantages or disadvantages? Examples include level of quality or unique or proprietary features.</p>
                                    </div>
                                    <div class="row">

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Describe in depth your products or services" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="drawings, photos" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="competitive advantages quality or unique or proprietary features." class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Pricing of your products or services" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> The Product or Service </h3>
                                        <p>For the Products and Services describe the products and services from your customers’ point of view. Describe most important features, and the most important benefits to a customer.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Describe most important features" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="The most important benefits to a customer" class="with-border"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Customers </h3>
                                        <p>
                                            Which companies are offering similar products or services, your major competitors now, write a short paragraph stating your competitive advantages and disadvantages. In one short paragraph, define your niche, your unique corner of the market.

                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Customer characteristics" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Customers geographical location" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Any other customer features" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Marketing </h3>
                                        <p>
                                            How will you market your product
                                            How will you get the word out to customers?
                                            Advertising: What media, why, and how often? Why this mix and not some other? Have you identified low-cost methods to get the most out of your promotional budget? Will you use methods other than paid advertising, such as trade shows, catalogs, dealer incentives, word of mouth (how will you stimulate it?), and network of friends or professionals? What image do you want to project? How do you want customers to see you?
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="State the various methods you will use to market your product and the budget for each method. \r\n First method" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Second method" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Third method" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Fourth method" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Pricing </h3>
                                        <p>
                                            Explain your method or methods of setting prices. For most small businesses, having the lowest price is not a good policy. It robs you of needed profit margin; customers may not care as much about price as you think; and large competitors can under price you. Usually you will do better to have average prices and compete on quality and service instead of price. Does your pricing strategy fit with what was revealed in your competitive analysis? Compare your prices with those of the competition. Are they higher, lower, the same?
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="What will be your method of setting prices" class="with-border"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Proposed Location </h3>
                                        <p>
                                            Probably you do not have a precise location picked out yet. This is the time to think about what you want and need in a location. Many startups run successfully from home for a while.
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="What location do you require for your business and where is that location " class="with-border"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Distribution Channels </h3>
                                        <p>
                                            How do you sell your products or services?
                                            Will it be Retail, Wholesale, Your own sales force, Agents or independent representatives
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="How will you distribute your product or service" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Distribution Channels </h3>
                                        <p>
                                            How do you sell your products or services?
                                            Will it be Retail, Wholesale, Your own sales force, Agents or independent representatives
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">Monthly sales table

                                            <table class="basic-table">

                                                <tbody>
                                                    <tr>
                                                        <th>Month</th>
                                                        <th>State any circumstances that may affect sales in this month</th>
                                                        <th>Sales volume (state unit of sale)</th>
                                                        <th>Sales value=sales volume*unit price</th>
                                                    </tr>
                                                    <?php
                                                    for ($i = 1; $i < 13; $i++) {
                                                    ?>
                                                        <tr>
                                                            <td data-label="Column 1"><?php echo $i ?></td>
                                                            <td data-label="Column 2">
                                                                <input type="text" class="with-border mb-0">
                                                            </td>
                                                            <td data-label="Column 2">
                                                                <input type="text" class="with-border mb-0">
                                                            </td>
                                                            <td data-label="Column 2">
                                                                <input type="text" class="with-border mb-0">
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td colspan="2"><strong>Total Sales for the Year</strong></td>
                                                        <td data-label="Column 2">
                                                            <input type="text" class="with-border mb-0">
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="text" class="with-border mb-0">
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Operational Plan</h3>
                                        <p>
                                            Explain your methods of:
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Production techniques" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Production cost" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Quality control" class="with-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Production development" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Personnel</h3>
                                        <!-- <p>
                                            Explain your methods of:
                                        </p> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Number of employees</h5>
                                                <input type="number" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Type of Labor</h5>
                                                <select class="selectpicker with-border" data-size="7" title="Select Type">
                                                    <option>Skilled</option>
                                                    <option>Unskilled</option>
                                                    <option>Professional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Pay structure</h5>
                                                <input type="number" class="with-border">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Suppliers </h3>
                                        <p>
                                            Identify key suppliers:
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">

                                            <table class="basic-table">

                                                <tbody>
                                                    <tr>
                                                        <th>Supplier name</th>
                                                        <th>Short description and their location</th>

                                                    </tr>
                                                    <?php
                                                    for ($i = 1; $i < 4; $i++) {
                                                    ?>
                                                        <tr>

                                                            <td data-label="Column 2">
                                                                <input type="text" class="with-border mb-0">
                                                            </td>
                                                            <td data-label="Column 2">
                                                                <textarea cols="30" rows="5" placeholder="Production development" class="with-border"></textarea>
                                                            </td>


                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Management and Organization.</h3>
                                        <p>
                                            How will your business be managed. State whether you will need any of these: Board of directors, Management advisory board, Accountant, Consultant or consultants or Mentors and key advisors
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Business management" class="with-border"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Startup Expenses </h3>
                                        <p> You will have many startup expenses before you even begin operating your business. It’s important to estimate these expenses accurately and then to plan where you will get sufficient capital. This is a research project, and the more thorough your research efforts, the less chance that you will leave out important expenses or underestimate them. The best approach to make an estimate is to add a separate line item, called contingencies, to account for the unforeseeable. List the startup expenses and their values</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">

                                            <table class="basic-table">
                                                <tbody>
                                                    <tr>
                                                        <th>Startup expense</th>
                                                        <th>Description and Value</th>
                                                    </tr>
                                                    <?php
                                                    for ($i = 1; $i < 4; $i++) {
                                                    ?>
                                                        <tr>
                                                            <td data-label="Column 2">
                                                                <input type="text" class="with-border mb-0">
                                                            </td>
                                                            <td data-label="Column 2">
                                                                <textarea cols="30" rows="5" placeholder="Production development" class="with-border"></textarea>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td data-label="Column 2">
                                                            TOTAL
                                                        </td>
                                                        <td data-label="Column 2">
                                                            000
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Sources of business financing. Indicate what will be the sources of funds to finance your startup</p>
                                            <table class="basic-table">
                                                <tbody>
                                                    <tr>
                                                        <th>Source of funding</th>
                                                        <th>Amount</th>
                                                    </tr>

                                                    <tr>
                                                        <td data-label="Column 2">
                                                            Self
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="number" class="with-border mb-0">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Column 2">
                                                            Family
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="number" class="with-border mb-0">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Column 2">
                                                            Friends
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="number" class="with-border mb-0">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Column 2">
                                                            Outside Investors
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="number" class="with-border mb-0">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Column 2">
                                                            Total funding. This should be the same as the total of startup expenses
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="number" class="with-border mb-0">
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                            <p>Make a special appeal to outside investors to invest in your business. State what percentage of shareholding you will be willing to give your outside investors</p>
                                            <div class="submit-field">
                                                <!-- <h5>Executive summary</h5> -->
                                                <textarea cols="30" rows="5" placeholder="Special appeal and how much shareholding you are willing to give your outside investors" class="with-border"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25"> Financial Plan</h3>
                                        <p>

                                            The financial plan consists of a 12-month profit and loss projection, a cash-flow projection, a projected balance sheet, and a break-even calculation. Together they constitute a reasonable estimate of your company's financial future. More important, the process of thinking through the financial plan will improve your insight into the inner financial workings of your company.
                                            12-Month Profit and Loss Projection.
                                            Many business owners think of the 12-month profit and loss projection as the centerpiece of their plan. This is where you put it all together in numbers and get an idea of what it will take to make a profit and be successful.

                                        </p>
                                    </div>

                                </div>

                                <div class="content with-padding padding-bottom-10">

                                    <div class="single-page-section">
                                        <h3 class="margin-bottom-25">  Projected Cash Flow </h3>
                                        <p>
                                       
If the profit projection is the heart of your business plan, cash flow is the blood. Businesses fail because they cannot pay their bills. Every part of your business plan is important, but none of it means a thing if you run out of cash.
The point of this worksheet is to plan how much you need before startup, for preliminary expenses, operating expenses, and reserves. You should keep updating it and using it afterward. It will enable you to foresee shortages in time to do something about them—perhaps cut expenses, or perhaps negotiate a loan. But foremost, you should not be taken by surprise. There is no great trick to preparing it:  The cash-flow projection is just a forward look at your checking account.

                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">

                                            <table class="basic-table">

                                                <tbody>
                                                    <tr>
                                                        <th>Revenue and expenses</th>
                                                        <th>Credit</th>
                                                        <th>Debit</th>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Column 2">
                                                            Income from sales
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="text" class="with-border mb-0">
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="text" class="with-border mb-0">
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    for ($i = 1; $i < 11; $i++) {
                                                    ?>
                                                        <tr>
                                                            <td data-label="Column 2">
                                                                <?php echo $i ?> Example raw materals
                                                            </td>
                                                            <td data-label="Column 2">
                                                                <input type="text" class="with-border mb-0">
                                                            </td>
                                                            <td data-label="Column 2">
                                                                <input type="text" class="with-border mb-0">
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td data-label="Column 2">
                                                            Total revenue
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="text" class="with-border mb-0">
                                                        </td>
                                                        <td data-label="Column 2">
                                                            <input type="text" class="with-border mb-0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            Total expenses
                                                        </td>
                                                        <td data-label="Column 2">
                                                            Debit totals
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            Profit or loss
                                                        </td>
                                                        <td data-label="Column 2">
                                                            Revenue minus debit totals
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="col-xl-12">
                            <a href="#" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Submit</a>
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

    <!-- Google API & Maps -->
    <!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&amp;libraries=places"></script>


</body>

<!-- Mirrored from paybytrust.com/dashboard-post-a-job.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2022 08:35:51 GMT -->

</html>