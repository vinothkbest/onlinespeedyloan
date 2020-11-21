<?= $this->extend('layouts/layout') ?>


<?= $this->section('content') ?>

<section class="rate-fee">
    <div class="container90">
        <div class="row">
            <div class="col-md-6 padding-top-20">
                <h3 class="h3-fee">Rates & Fees</h3>
                <p class="">We do not charge any fees for using our services. We are not direct lenders
                    but simply match you with appropriate lenders within our lenders network based
                    on your application and credit score. We do not have any impact or control over
                    loan fees, the costs of your loan or annual percentage rate of your loan. The
                    fees and rates associated with your loan will vary, based on numerous factors
                    and are usually higher (on a percentage basis) than traditional bank loans such
                    as a mortgage or home equity loan. These details will be explained thoroughly by
                    your lender upon approval of your loan.</p>
                <p>
                    Please thoroughly review all the information provided by the lender in the
                    agreement including the loan amount, fees, rates and all other details. There is
                    no obligation to accept these terms until you approve the agreement. If you have
                    a question or concern regarding the loan amount, fees or rate, please contact
                    the lender directly. We expressly disclaim any and all liability related to your
                    application or representations made by any lenders to whom you may contact.</p>

                    <?= anchor('', 'APPLY NOW', 'class="aply-nw"'); ?>
            </div>
            <div class="col-md-6 feei-rit-img">
                <img class="fee" src="assets/images/img-process.png" alt="pic">
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container90">
        <div class="row">
            <div class="col-md-12 padding-top-20">
                <h3 class="h3-fee">Financial Rudiments</h3>
                <ul class="benefits">
                    <li>
                        <i class="fa fa-check"></i>
                        Be careful With Your Debt</li>
                    <p>The accumulation of debt is an increasing problem not just in America, but
                        across the globe. But, that’s not an excuse. It is imperative that you
                        understand how much your bills are, so you can begin to take control of them.
                        Write down all your debt – rent/mortgage, auto loan, credit cards, college
                        loans, insurance, medical bills, etc. It’s important to see it written down.</p>
                    <p>
                        Call the companies you owe and tell them that you want to pay them back and are
                        going to do so. The vast majority of companies are willing to work with you to
                        develop a plan to pay them back. The first step to getting out of debt is to
                        take control of the problem.</p>
                    <p style="font-weight:800;">Other Steps You Can Take to Ensure Your Online Protection</p>
                    <li>
                        <i class="fa fa-check"></i>
                        Do not send sensitive information to us via e-mail. Instead, use our contact
                        form which is a secure form. You can find this on the Main Page under the tab
                        “Contact Us”</li>
                    <li>
                        <i class="fa fa-check"></i>Keep your browser up to date. Most web browsers send
                        security updates on a regular basis. You should always install these updates as
                        soon as they become available.</li>
                    <li>
                        <i class="fa fa-check"></i>Keep your anti-virus software up to date and make
                        sure your computer firewall protection is always operating.</li>
                    <li>
                        <i class="fa fa-check"></i>When choosing a password, make it difficult to
                        remember. Yes, for best security this is true. Make it a combination of number
                        and letters, upper and lower case letters. This will increase your account
                        security greatly. Of course, do not share your password with others.</li>
                    <li>
                        <i class="fa fa-check"></i>
                        Do not use the same password for every site either. So, if your password is
                        discovered, this will lessen the impact.</li>
                    <li>
                        <i class="fa fa-check"></i>We recommend that you check your credit score once a
                        year to make sure the information is accurate and to make sure you have not been
                        a victim of identity theft. It is also recommended to check your credit report
                        yearly to make sure everything is accurate, and also to ensure you have not been
                        the victim of identity theft.</li>
                </ul>
                 <?= anchor('', 'APPLY NOW', 'class="aply-nw"'); ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content') ?>