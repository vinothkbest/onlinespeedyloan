<?= $this->extend('layouts/layout') ?>


<?= $this->section('content') ?>
<section class="faq-pag">
    <div class="container90">
        <div class="row">
            <div class="col-lg-6 ind-faq">
                <img width="90%" src="assets/images/faq.png" class="faq" alt="picture">
            </div>
            <div class="col-lg-6">
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
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content') ?>
