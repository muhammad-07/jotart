<!-- Form -->
<form method="post" class="signup-forms" id="merchandiser-form">

    <div class="content with-padding padding-bottom-10">

        <div class="single-page-section">
            <h3 class="margin-bottom-25"> Primary Details </h3>
            <!-- <p>This business plan is for the entrepreneur to fill to inform those who may want to invest in his business proposal. It is for the entrepreneur to fill. There is much explanation to guide the entrepreneur. These explanations will not be shown when the business profile is presented to users. The developer will just pick the headings and put the entrepreneur content below the headings. Since it is a bit long the developer will look at a way of offering only the headings and on a user clicking the heading the content under the heading will show with a link “”””back to contents””” for the user to go back to the list of headings. Make it possible for a user to download the whole document for study offline. With this form and the registration forms it is now easy to set a good user experience for the entrepreneur, the investor the consultant.</p> -->
        </div>
        <div class="row">

            <div class="col-xl-4">
                <div class="submit-field">
                    <h5>First Name</h5>
                    <input type="text" class="with-border">
                </div>
            </div>

            <div class="col-xl-4">
                <div class="submit-field">
                    <h5>Last Name</h5>
                    <input type="text" class="with-border">
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


            <div class="col-xl-4">
                <div class="submit-field">
                    <h5>Password</h5>
                    <input type="password" class="with-border">
                </div>
            </div>
            <div class="col-xl-4">
                <div class="submit-field">
                    <h5>Retype Password</h5>
                    <input type="password" class="with-border">
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="section-headline margin-top-25 margin-bottom-12">
                    <h5>Radio Button</h5>
                </div>
                <div class="radio">
                    <input id="radio-1" name="radio" type="radio" checked="">
                    <label for="radio-1"><span class="radio-label"></span> Male</label>
                    <input id="radio-2" name="radio" type="radio" checked="">
                    <label for="radio-2"><span class="radio-label"></span> Female</label>
                </div>

            </div>

            <div class="content with-padding padding-bottom-10">
                <div class="single-page-section">
                    <p>
                        Emphasize your expertise in merchandising arising from education, employment or in practice.
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Executive summary</h5> -->
                            <textarea cols="30" rows="5" placeholder="" class="with-border"></textarea>
                        </div>
                    </div>
                </div>
            </div>



            <div class="content with-padding padding-bottom-10">

                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Merchandiser profile </h3>
                    <p>Experience in merchandising</p>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="Experience in merchandising" class="with-border"></textarea>
                        </div>
                    </div>
                </div>
                <div class="single-page-section">
                    <p>
                        II. List items you sell.
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-12">

                        <table class="basic-table">

                            <tbody>
                                <tr>
                                    <th>Resource</th>
                                    <th>Description</th>

                                </tr>
                                <?php
                                for ($i = 1; $i < 5; $i++) {
                                ?>
                                    <tr>

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

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <p>III. Where are you located in terms of selling and up to what distance can you sell.</p>
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="Experience in merchandising" class="with-border"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p>IV. Describe your distribution methods</p>
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="Wholesale" class="with-border"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="Retail" class="with-border"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="Distributors" class="with-border"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <p>V. State your payment arrangements with your customers </p>
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="Cash payments" class="with-border"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="Credit terms" class="with-border"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <p>VI. Indicate whether you would be willing to sell and paid in part or whole by being issued with shares in the company </p>
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <!-- <h5>Experience in merchandising</h5> -->
                            <textarea cols="30" rows="5" placeholder="" class="with-border"></textarea>
                        </div>
                    </div>

                </div>










            </div>






            <!-- Button -->
            <button style="width:127px" class="button full-width button-sliding-icon ripple-effectXXX margin-top-10" type="submit" form="login-formXX">Register <i class="icon-material-outline-arrow-right-alt"></i></button>

            <!-- Social Login -->
            <div class="social-login-separator"><span>or</span></div>
            <div class="social-login-buttons">
                <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
                <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
            </div>


        </div>
    </div>
</form>