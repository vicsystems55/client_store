<!doctype html>
<html lang="en">


<!-- Mirrored from risingtheme.com/html/rokon-demo/rokon/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 02:11:35 GMT -->
<head>
  <meta charset="utf-8">
  <title>Rokon - My Account</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

   <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start header area -->
@include('inc.header')
    <!-- End header area -->

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title mb-10">My Account</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__secondary">My Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">
                <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p>
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h2 class="account__content--title h3 mb-20">My Profile</h2>
                        <ul class="account__menu">
                            <li class="account__menu--list active"><a href="#">Dashboard</a></li>
                            <li class="account__menu--list"><a href="#">Products</a></li>

                            <li class="account__menu--list"  >Log Out</li>
                        </ul>
                    </div>
                    <div class="account__wrapper">
                        <div class="account__content">
                            <div class="account__table--area">


                                <div class="py-3">
                                    <div class="row">
                                        <div class="col-md-4 p-2">

                                            <div class="my__account--section__inner border-radius-10 d-flex mb-10 ">

                                                    <h3 >Total Customers</h3>




                                            </div>

                                        </div>

                                        <div class="col-md-4 p-2">

                                            <div class="my__account--section__inner border-radius-10 d-flex mb-10 ">

                                                    <h6>Total Orders</h6>



                                            </div>

                                        </div>

                                        <div class="col-md-4 p-2">

                                            <div class="my__account--section__inner border-radius-10 d-flex mb-10 ">

                                                    <h6>Total Sales</h6>



                                            </div>

                                        </div>
                                    </div>
                                </div>

                            <h2 class="account__content--title h3 mb-20">Orders History</h2>

                                <table class="account__table">
                                    <thead class="account__table--header">
                                        <tr class="account__table--header__child">
                                            <th class="account__table--header__child--items">Order</th>
                                            <th class="account__table--header__child--items">Date</th>
                                            <th class="account__table--header__child--items">Payment Status</th>
                                            <th class="account__table--header__child--items">Fulfillment Status</th>
                                            <th class="account__table--header__child--items">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="account__table--body mobile__none">
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2014</td>
                                            <td class="account__table--body__child--items">March 10, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$40.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2024</td>
                                            <td class="account__table--body__child--items">March 12, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Fulfilled</td>
                                            <td class="account__table--body__child--items">$44.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2164</td>
                                            <td class="account__table--body__child--items">March 08, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$36.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2345</td>
                                            <td class="account__table--body__child--items">March 14, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$87.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#1244</td>
                                            <td class="account__table--body__child--items">March 15, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Fulfilled</td>
                                            <td class="account__table--body__child--items">$66.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#3455</td>
                                            <td class="account__table--body__child--items">March 17, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Fulfilled</td>
                                            <td class="account__table--body__child--items">$55.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#4566</td>
                                            <td class="account__table--body__child--items">March 07, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$87.00 USD</td>
                                        </tr>
                                    </tbody>
                                    <tbody class="account__table--body mobile__block">
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>March 10, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2016</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>March 12, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2018</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>March 08, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2020</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>March 06, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>March 14, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#20124</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>March 10, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2026</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>March 17, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- my account section end -->

        <!-- Start newsletter section -->

        <!-- End newsletter section -->


    </main>

    <!-- Start footer section -->
    @include('inc.footer')
    <!-- End footer section -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>


  <!-- All Script JS Plugins here  -->
  <!-- <script src="assets/js/vendor/popper.js" defer="defer"></script> -->
  <!-- <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script> -->

  <script src="assets/js/plugins/swiper-bundle.min.js" defer="defer"></script>
  <script src="assets/js/plugins/glightbox.min.js" defer="defer"></script>

  <!-- Customscript js -->
  <script src="assets/js/script.js" defer="defer"></script>

</body>

<!-- Mirrored from risingtheme.com/html/rokon-demo/rokon/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 02:11:35 GMT -->
</html>
