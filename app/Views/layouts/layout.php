<!-- start-header -->
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
<script
    async="async"
    src="https://www.googletagmanager.com/gtag/js?id=UA-141349535-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-141349535-1');
    
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="Onlinespeedyloan">
<meta name="description" content="Personal Loans made Simple and Fast">
<meta
    name="keywords"
    content="Borrow between $100 and $15,000 as soon as tomorrow.">
<meta property="og:type" content="Website"/>
<meta
    property="og:description"
    content="Best Loan offers- Apply loan online to get lowest interest rates, instant approval &amp; disbursal of funds to your bank a/c in few hours of Loan Approval."/>
<meta
    property="og:image"
    content="https://www.onlinespeedyloan.com/images/speedyonlinelogo.jpg"/>
<meta property="og:image:type" content="assets/image/jpg"/>
<meta property="og:image:width" content="200"/>
<meta property="og:image:height" content="200"/>
<meta property="og:image:alt" content=""/>
<meta property="og:url" content="https://onlinespeedyloan.com"/>
<title><?php echo  (isset($title)) ? ucfirst($title) : 'Onlinespeedyloan.com';?>
</title>
<link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
<script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>
<link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/css/animate.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/css/style-magnific-popup.css')?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/all.min.css')?>">
<link
    href="https://fonts.googleapis.com/css?family=Dosis:500,600"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700"
    rel="stylesheet">
<script>
    (function (w, d, t, r, u) {
        var f,
            n,
            i;
        w[u] = w[u] || [],
        f = function () {
            var o = {
                ti: "56284401"
            };
            o.q = w[u],
            w[u] = new UET(o),
            w[u].push("pageLoad")
        },
        n = d.createElement(t),
        n.src = r,
        n.async = 1,
        n.onload = n.onreadystatechange = function () {
            var s = this.readyState;
            s && s !== "loaded" && s !== "complete" || (
                f(),
                n.onload = n.onreadystatechange = null
            )
        },
        i = d.getElementsByTagName(t)[0],
        i
            .parentNode
            .insertBefore(n, i)
    })(window, document, "script", "../bat.bing.com/bat.js", "uetq");
</script>
<link rel="shortcut icon" href="<?= base_url('assets/images/usafav.ico'); ?>">
<script>
    AOS.init();
</script>
</head>
<body>
<header>
    <nav class="navbar navbar-default navi-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <?= anchor('', '<img src="assets/images/osl.png" alt="">', 'class="navbar-brand logo"') ?>
                <button
                    class="navbar-toggler collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <?= anchor('', 'Home', '') ?>
                        </li>
                        <li>
                           <?= anchor('', 'Why Onlinespeedyloan ?', '') ?>
                        </li>
                        <li>
                            <?= anchor('faq', 'F.A.Q', '') ?>
                        </li>
                        <li>
                            <?= anchor('fees', 'Fee & Charges', '') ?>
                        </li>
                        <li class="discover-link">
                            <?= anchor('creditpass', 'Authorization Code', 'class="external discover-btn"') ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
</header>
<!-- end-header -->

<!-- start-content -->

<?= $this->renderSection('content') ?>

<!-- end-content -->

<!-- start-footer -->

<div class="footer">
    <div class="container90">
        <div class="row">
            <div class="col-12 col-lg-3 ">
                <a class="text-center" style="margin: 0 auto 15px; display: block;"><img style="filter: brightness(0) invert(1); zoom:0.5" src="<?=base_url('assets/images/osl.png')?>"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 ">
                <h5 class="mt-3">ABOUT</h5>
                <?= anchor('', '<p class="footerlinks">Why Onlinespeedyloan</p>', '') ?>
                <?= anchor('terms', '<p class="footerlinks">Financial Rudiments</p>', '') ?>
                <?= anchor('faq', '<p class="footerlinks">FAQ</p>', '') ?>
            </div>
            <div class="col-md-4 col-lg-3 ">
                <h5 class="mt-3">CONDITIONS</h5>
                
                <?= anchor('fees', '<p class="footerlinks">Fees & Charges</p>', '') ?>
                <?= anchor('privacy', '<p class="footerlinks">Privacy Policy</p>', '') ?>
                <?= anchor('terms', '<p class="footerlinks">Terms And Conditions</p>', '') ?>
            </div>
            <div class="col-md-4 col-lg-3 ">
                <h5 class="mt-3">QUICK LINKS</h5>
                <?= anchor('', '<p class="footerlinks">Apply Online</p>', '') ?>
                <?= anchor('creditpass', '<p class="footerlinks">Authorization Code</p>', '') ?>
                <?= anchor('lenders', '<p class="footerlinks">Lenders</p>', '') ?>
            </div>
            <div class="col-md-12 ">
                <hr style="border-color: #24487d;">
                <p style="font-style:italic">
                    <span style="font-weight:800">
                        DISCLAIMER
                    </span>: Onlinespeedyloan is neither banking nor lending institution per se. The
                    information you share on this website and with our consultants is used for the
                    sole purpose of recommending apt financiers from our network based on your
                    personal requirement and credit ratings. Your emails and phone numbers will not
                    be shared to other parties or institutions. We will not send you any promotional
                    or marketing related material. Your document submission does not automatically
                    construe an approval. However, your paperwork will be scrutinized before giving
                    you a decision on our approval. No fee or surcharge is levied for this service.
                    We neither store nor share any personal and sensitive information such as:
                    social security numbers, credit/debit card details, and other banking
                    information. However, you acknowledge that we will share information pertaining
                    to financiers within our business network so that you can interact with the
                    lenders directly as we do not represent you in any financial matters or
                    transactions with the lenders. By using this website and our services, you
                    consent to the terms, conditions, and policies. Also, we would like you to be
                    cognizant of the fact that moneylenders from our network may not offer their
                    service to certain states. Finally, we strongly recommend that you acquaint
                    yourself with our privacy procedures and other disclaimers before using our
                    services.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <hr style="border-color: #24487d;">
                <p class="text-center">
                    Office Hours: 12pm-9pm EST(Mon - Fri) Mockingbird 1341 W Mockingbird Lane, Suite
                    600W, Dallas, Texas, 75247
                </p>
                <p class="text-center">
                    © 2020
                    <span style="font-weight: bold; font-size:15px;">
                        Onlinespeedyloan.com</span>
                    . All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.scrollTo-min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.nav.js')?>"></script>
<script src="<?=base_url('assets/js/wow.js')?>"></script>
<script src="<?=base_url('assets/js/plugins.js')?>"></script>
<script src="<?=base_url('assets/js/custom.js')?>"></script>
</body>
</html>

<!-- end-footer -->
