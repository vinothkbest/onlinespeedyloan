
<?php if(!isset($customers)) : ?>

    <div
        id="apply-now"
        class="register-form-wrapper wow bounceIn"
        data-wow-delay="0.5s"
        style="visibility:visible; animation-delay: 0.5s; animation-name: bounceIn;">
        <h3>Apply Now
        </h3>
        <div>
            <form
                id="register-form"
                class="register-form register"
                action="<?= base_url('home'); ?>"
                method="post">
                <input
                    class="register-input white-input"
                    name="fullname"
                    placeholder="Full Name*"
                    type="text" autocomplete="off"
                    style="outline: none;">
                <input
                    class="register-input white-input"
                    name="mobile"
                    placeholder="Phone Number*"
                    type="tel"
                    maxlength="10"
                    minlength="10" autocomplete="off"
                    style="outline: none;">
                <input
                    class="register-input white-input"
                    name="email"
                    placeholder="Email"
                    type="email" autocomplete="off"
                    style="outline: none;">
                <select class="register-input white-input" name="amount" required>
                    <option disabled="disabled" selected="selected">Loan Amount</option>
                    <option value="$200">$200</option>
                    <option value="$300">$300</option>
                    <option value="$400">$400</option>
                    <option value="$500">$500</option>
                    <option value="$600">$1000</option>
                    <option value="$2000">$2000</option>
                    <option value="$5000">$5000</option>
                    <option value="$8000">$8000</option>
                    <option value="$10000">$10000</option>
                    <option value="$10000">>$10000</option>
                </select>
                <input value="Submit" name = 'submit' class="register-submit" type="submit" style="outline: none;">
            </form>
            <?php if(isset($submit)) : ?>
                <p style="margin-top: 20px; color:red"><?php echo $invalid ?></p>
            <?php endif; ?>
        </div>
    </div>

<?php else : ?>

    <div
        id="authorization"
        style="visibility:visible; animation-delay: 0.5s; animation-name: bounceIn;"
        class="register-form-wrapper wow bounceIn"
        data-wow-delay="0.5s">
            <?php if($customers['type']=='new'): ?>
                    <h3><?= 'Hey ' . $customers['data'][0]->Name . ','; ?></h3>
                    <h3>Congratulations! You are Pre-Approved!</h3>
                
                    <p style="color: green;font-weight:bold">Your case ID</p>  

                    <p style="background: #315ea2;color: white;font-weight:bold;text-align: center"><?= $customers['data'][0]->CaseID; ?></p>
                
                    <a href="tel:1-469 646 4094" class="cal-in" style="margin-top: 5px;">Call Now +1-469 646 4094</a>
                    <h5>To complete your Application Process</h5>
            <?php else : ?>
                    <h3><?= 'Hey ' . $customers['data'][0]->Name . ','; ?></h3>
                    <h3>You are Already registered!</h3>
                
                    <p style="color: red;font-weight:bold">Your case ID</p>  

                    <p style="background: #315ea2;color: white;font-weight:bold;text-align: center"><?= $customers['data'][0]->CaseID; ?></p>
                
                    <a href="tel:1-469 646 4094" class="cal-in" style="margin-top: 5px;">Call Now +1-469 646 4094</a>
                    <h5>To complete your Application Process</h5>
            <?php endif; ?>
            <div>
                <!--begin register form -->
                <form
                    id="register-form"
                    class="register-form register"
                    action="creditpass"
                    method="get">
                    <input value="Authorization Code" class="register-submit" type="submit">
                </form>
                <!--end register form -->
            </div>
        <!--end form-->
    </div>

<?php  endif; ?>