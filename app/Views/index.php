<?= $this->extend('layouts/layout') ?>


<?= $this->section('content') ?>

<section class="home-section">
    <div class="container" style="margin-bottom:0%">
        <div class="row">
            <div class="col-12 d-md-none">
                
               <?= $this->include('pages/applynow-sidebar') ?>

            </div>
            <div class="col-lg-7" style="display: grid;">
                <div class="hideonmobile">
                    <h1 >Personal loans made simple and fast.
                    </h1>
                    <p>
                        Your search for a quick loan provider stops here.</p>
                    <ul class="home-benefits">
                        <li>
                            <i class="fas fa-check-circle"></i>Borrow between $100 and $15,000 as soon as tomorrow.</li>
                        <li>
                            <i class="fas fa-check-circle"></i>Quick loans available despite bad credit scores.</li>
                        <li>
                            <i class="fas fa-check-circle"></i>No Paperwork.</li>
                    </ul>
                    <a href="tel:1-469 646 4094" class="btn-white scrool">Call: +91 95878 69557</a>
                    <p>12pm-9pm EST(Mon - Fri)
                    </p>
                    <ul class="partners-mentions row">
                        <li class="icons-01 col-sm-6"><img src="<?=base_url('assets/img2/icons-01.png')?>" alt="CSS Awards">Quick Approval</li>
                        <li class="col-sm-6"><img src="<?=base_url('assets/img2/icons-02.png')?>" alt="Awwwards">Instant Cash</li>
                        <li class="col-sm-6"><img src="<?=base_url('assets/img2/icons-03.png')?>" alt="CSS Winner">Completely Online</li>
                        <li class="col-sm-6"><img src="<?=base_url('assets/img2/icons-04.png')?>" alt="CSS Design Awards">ContryWide Leaders</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 d-none d-md-block">
                <?= $this->include('pages/applynow-sidebar') ?>
            </div>
        </div>
    </div>
</section>
<section class="section-white section-top-border">
    <h2 class="section-title text-center">How It works</h2>
    <div class="container80">
        <div class="row">
            <div class="col-lg-6">
                <div class="features-second">
                    <h4>Enter your details</h4>
                    <p>The information you provide us online will be kept confidential.
                        Enter basic details in the form and then wait for us to give you an in-principle
                        approval.</p>
                </div>
                <div class="features-second">
                    <h4>Get an approval</h4>
                    <p >After we review your information, we’ll give you our decision.
                        Then we’ll give you an in-principle approval and proceed to verification.</p>
                </div>
                <div class="features-second">
                    <h4>Withdraw cash</h4>
                    <p>After we review your information, we’ll give you our decision.
                        Then we’ll give you an in-principle approval and proceed to verification.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?=base_url('assets/images/abt.jpg')?>" class="def" alt="pic">
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="section-title" id="why">Application Process</h2>
        </div>
    </div>
</div>
<section>
    <div class="container90">
        <div class="row">
            <div class="col-md-6 col-xl-3 mb-3">
                <div data-aos="fade-right" class="ay-box">
                        <img src="<?=base_url('assets/images/quickform.png')?>" />
                        <h4>Quick & Easy Form</h4>
                        <p>Loan processing has never been
                        stress-free, but now thanks to Onlinespeedyloan the processing is simpler and
                        swifter. Submit the form your see on this page and our panel of short-term
                        financiers will review your case.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-3">
                <div data-aos="fade-right" class="ay-box">
                        <img src="<?=base_url('assets/images/callrep.png')?>" />
                        <h4>Call a Representative</h4>
                        <p>After you submit the form you can call a representative with your Case ID to discuss options. The consultant will help you pick the best options for your needs.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-3">
                <div data-aos="fade-right" class="ay-box">
                        <img src="<?=base_url('assets/images/verification.png')?>" />
                        <h4>Verification</h4>
                        <p>Without further ado, our
                            authentication team will then review your case and do a diligent vetting of all
                            the documentation you provide us. Onlinespeedyloan team will do this quick, so
                            you don’t waste any time.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-3">
                <div data-aos="fade-right" class="ay-box">
                        <img src="<?=base_url('assets/images/authorization.png')?>" />
                        <h4>Authorization</h4>
                        <p>Your consultant will send you an
                            in-principle approval stating that your loan has been sanctioned. The team will
                            share the schedule of your loan repayment structure and inform you about other
                            nitty-gritties. Once all your documents have been scrutinized the money will be
                            deposited in your bank account.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ind-ans">
    <div class="container90">
        <div class="row">
            <div class="col-lg-6 ind-faq">
                <img width="90%" src="<?= base_url('assets/images/faq.png')?>" class="faq" alt="picture">
            </div>
            <div class="col-12 col-lg-6">
                <h3>Answers to most popular questions:</h3>
                <div class="accordion" id="accordionFAQ">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button
                                    class="btn btn-link"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Representative Example:
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseOne"
                            class="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordionFAQ">
                            <div class="card-body">
                                For a $5,000 36-month loan at an interest rate of 5.99% with a 1% origination
                                fee of $50.00, you will receive a loan amount of $4,950.00 and will make 36
                                monthly payments of about $153.61 at a 5.99% APR. Total loan cost would be
                                $5,595.00.
                            </div>
                        </div>
                    </div>
                    <!--end card -->
                    <!--begin card -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button
                                    class="btn btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Fees, Interest and other Implications:
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseTwo"
                            class="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordionFAQ">
                            <div class="card-body">
                                Late or missed payments may result in increased loan fees and higher interest
                                rates. Each lender operates by its own terms of service regarding late fees,
                                rates and other charges. Please review the financial implications of late and
                                non-payment carefully before taking out your loan.
                            </div>
                        </div>
                    </div>
                    <!--end card -->
                    <!--begin card -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button
                                    class="btn btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Credit Score Impact
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseThree"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordionFAQ">
                            <div class="card-body">
                                Late or missed payments may be reported to credit agencies and bureaus. Your
                                payment history and information may negatively affect your credit and lower your
                                credit score. Review your lender's credit reporting policies before signing for
                                your loan.
                            </div>
                        </div>
                    </div>
                    <!--end card -->
                    <!--begin card -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button
                                    class="btn btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseFour"
                                    aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Loan Renewal Policies:
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseFour"
                            class="collapse"
                            aria-labelledby="headingFour"
                            data-parent="#accordionFAQ">
                            <div class="card-body">
                                Loan renewals and extensions may be offered by your lender for missing, partial
                                or late payments. The loan renewals may be automatic, and typically include
                                additional renewal charges. Renewal restrictions are subject to state laws and
                                your lender's repayment policies. Because we aren't a lender, only your loan
                                provider can offer specific repayment options and details if you can't repay
                                your loan on time. You can ask your lender for implications of non-payment at
                                any point during the loan process.
                            </div>
                        </div>
                    </div>
                    <!--end card -->
                    <!--begin card -->
                    
                    <!--end card -->
                    <!--begin card -->
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button
                                    class="btn btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseSix"
                                    aria-expanded="false"
                                    aria-controls="collapseSix">
                                    If You Can Not Repay Your Loan
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseSix"
                            class="collapse"
                            aria-labelledby="headingSix"
                            data-parent="#accordionFAQ">
                            <div class="card-body">
                                If you find that you can not repay your loan under its current terms, your
                                lender may charge you late fees, report your payment history to a
                                credit-reporting agency, or provide an extension or loan renewal option to
                                refinance your loan. This may impact your credit score or allow your loan
                                account to fall into collection. Loan renewals or refinancing options may
                                include additional fees.
                            </div>
                        </div>
                    </div>
                    <!--end card -->
                </div>
                <!--end accordion -->
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>