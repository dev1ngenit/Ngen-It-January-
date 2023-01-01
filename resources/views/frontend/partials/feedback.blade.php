<section>
    <div id="feedback_Sidebar" class="feedbacksidebar">
        <div class="feedback_header_logo">
            <button class="close_feedback" onclick="feedbackButtonClicked()"><i class="close-btn fas fa-times"></i></button>
            <div class="modal_logo_feedback">
                <img src="{{ asset('frontend') }}/images/ngenit.png" alt="">
            </div>
        </div>
        <div style="height: 5px; width:100%; background: linear-gradient(90deg, #ae0a46, #a80b6e 25%, #582873 75%);margin: 5px 0px;"></div>
        <div id="feedback" class="feedback_details">
            <p>Thank you for assisting us with your feedback in this quick survey. Please take a minute to answer the questions below regarding your experience.<br><br>
                If you are experiencing an issue with your account, orders, or billing and want immediate assistance, please use our chat feature. </p>
            <div class="d-flex justify-content-end">
                <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click">continue</button>
            </div>
        </div>
        <div id="feedback_details" class="feedback_details" style="display: none;">
            <p>What topic(s) would you like to provide feedback on?</p>

            <!--Check Box item-->
            <div class="checkbox_wrapper">
                <label class="feedback_details_checkbox">Product Details and availability
                    <input type="checkbox" checked="checked">
                    <span class="checkmark_feedback"></span>
                  </label>
            </div>

            <!--Check Box item-->
            <div class="checkbox_wrapper">
                <label class="feedback_details_checkbox">Articles, reports, & blog content
                    <input type="checkbox" checked="checked">
                    <span class="checkmark_feedback"></span>
                  </label>
            </div>
            <!--Check Box item-->
            <div class="checkbox_wrapper">
                <label class="feedback_details_checkbox">Purchasing, checkout & cart
                    <input type="checkbox" checked="checked">
                    <span class="checkmark_feedback"></span>
                  </label>
            </div>
            <!--Check Box item-->
            <div class="checkbox_wrapper">
                <label class="feedback_details_checkbox">Pricing
                    <input type="checkbox" checked="checked">
                    <span class="checkmark_feedback"></span>
                  </label>
            </div>
            <!--Check Box item-->
            <div class="checkbox_wrapper">
                <label class="feedback_details_checkbox">Solutions & services content
                    <input type="checkbox" checked="checked">
                    <span class="checkmark_feedback"></span>
                  </label>
            </div>
            <!--Check Box item-->
            <div class="checkbox_wrapper">
                <label class="feedback_details_checkbox">Product search
                    <input type="checkbox" checked="checked">
                    <span class="checkmark_feedback"></span>
                  </label>
            </div>

            <p>Based on your selected topic(s) above, how would you rate your overall web experience?</p>

            <!--Check Rounded item-->
            <div class="checkrounded_wrapper">
                <label class="feedback_details_checkrounded">
                    <input type="checkbox">
                    <p>5 (Best)</p>
                    <span class="checkmark_rounded"></span>
                  </label>
            </div>

            <!--Check Rounded item-->
            <div class="checkrounded_wrapper">
                <label class="feedback_details_checkrounded">
                    <input type="checkbox">
                    <p>4</p>
                    <span class="checkmark_rounded"></span>
                  </label>
            </div>

            <!--Check Rounded item-->
            <div class="checkrounded_wrapper">
                <label class="feedback_details_checkrounded">
                    <input type="checkbox">
                    <p>3</p>
                    <span class="checkmark_rounded"></span>
                  </label>
            </div>

            <!--Check Rounded item-->
            <div class="checkrounded_wrapper">
                <label class="feedback_details_checkrounded">
                    <input type="checkbox">
                    <p>2</p>
                    <span class="checkmark_rounded"></span>
                  </label>
            </div>

            <!--Check Rounded item-->
            <div class="checkrounded_wrapper">
                <label class="feedback_details_checkrounded">
                    <input type="checkbox">
                    <p>1 (Worst)</p>
                    <span class="checkmark_rounded"></span>
                  </label>
            </div>

            <div class="d-flex justify-content-between m-2">
                <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click"><i class="fa-solid fa-chevron-left"></i> previous</button>
                <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click">continue <i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>

    <div id="feedback_btn">
        <button id="sidebarButton_fb" class="openbtnfeedback" onclick="feedbackButtonClicked()"><i class="fa-solid fa-bullhorn"></i> Feedback</button>
    </div>
</section>
