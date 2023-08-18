@extends('master')
@section('tittle', 'Account')


@section('content')
    <style>
        .details #pills-tab {
            background-color: #381446;
            width: 100%;
            display: flex;
            justify-content: center;
            /* font-family: cursive; */
        }

        .details #pills-tab .nav-link,
        .details #pills-tab .nav-link.active {
            position: relative;
            padding: 20px;
        }

        .details #pills-tab .nav-link.active::before {
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            content: '';
            width: 0;
            height: 0;
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            border-top: 25px solid #381446;
        }

        .tab-pane {
            padding: 30px;
            /* font-family: monospace; */
        }


        .tab-pane .carousel-item img {
            width: 100%;
            height: 500px;
        }

        .para {
            text-align: center;
        }


        .pop {
            text-align: center;
            margin-top: 5%;
            color: #a81614;
            /* font-family: fantasy; */
            font-size: 40px;
        }

        .cul {
            text-align: center;
            border-color: black;
            border-radius: 20px;
            margin-top: 3%;
        }

        .hello {
            text-align: center;
            border-radius: 10px;
        }

        .event {
            background-color: #a81614;
        }

        .pictue-4 {
            width: 80%;
            height: 400px;
            object-fit: contain;
        }

        #pills-OVERVIEW #carouselExampleIndicators .carousel-inner {
            overflow: visible;
            overflow-x: hidden;
            height: 700px;
        }

        #pills-OVERVIEW .carousel-caption {
            bottom: -100px;
            color: black;
        }



        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            /* background-color: #f2f2f2; */
            padding: 5px 20px 15px 20px;
            /* border: 1px solid lightgrey; */
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background: -moz-linear-gradient(top, #a077ff 0%, #ef67ff 100%);
            background: -webkit-linear-gradient(top, #a077ff 0%, #ef67ff 100%);
            background: linear-gradient(to bottom, #a077ff 0%, #ef67ff 100%);
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }


        /* span.price {
                                              float: right;
                                              color: grey;
                                            } */

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }

        .btn1 {

            background: -moz-linear-gradient(top, #a077ff 0%, #ef67ff 100%);
            background: -webkit-linear-gradient(top, #a077ff 0%, #ef67ff 100%);
            background: linear-gradient(to bottom, #a077ff 0%, #ef67ff 100%);
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 50%;
            border-radius: 50px;
            font-size: 19px;
            font-weight: bolder;
        }

        .button-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

        }

        /* .container {
                                                        max-width: 600px;
                                                        margin: 0 auto;
                                                        padding: 20px;
                                                    }
                                                     */
        h1 {
            text-align: center;
        }

        .balance {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .pnl {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .pnl.green {
            color: rgb(0, 0, 0);
        }

        .pnl.red {
            color: rgb(0, 0, 0);
        }


        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 8px;
            font-size: 16px;
        }

        .form-group .submit-btn {
            margin-top: 10px;
        }




        #walletContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        #balanceContainer,
        #transactionContainer,
        #withdrawalContainer {
            margin-bottom: 50%;
            margin: 15px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0px 2px 6px #4C1E51;
        }
    </style>
    @if (session()->has('message'))
        <div class="alert alert-sucess">
            <button type="button" class="close" data-bs-dismiss="alert">X</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9  ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s "></h1>
                                <div class="center  "
                                    style="border: 2px solid white; border-radius: 2%;  margin-top:70px; padding-bottom:15px;">
                                    <h1 class="">Your Account</h1>

                                    @if (auth()->user())
                                        <div class="balance text-white">
                                            Your Current balance: (${{ auth()->user()->balance }})
                                        </div>
                                    @else
                                        <div class="balance text-white">
                                            Your Current balance: ($0)
                                        </div>
                                    @endif

                                    <div class="text-white">
                                        Profit : {{ (dailyProfit()$) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="single-slider d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s "></h1>
                                <div class="center  "
                                    style="border: 2px solid white; border-radius: 2%;  margin-top:70px; padding-bottom:15px;">
                                    <h1 class="">Your Referel Link</h1>
                                    <div class="">
                                        <p>Earn upto 25% of total deposit from our referral program.</p>
                                    </div>
                                    <div class="balance text-white">
                                        <div class="form-gorup">
                                            <input type="text" class="form-control" style="font-size: 20px;"
                                                value="{{ route('register', ['referral' => Auth::user()->name]) }}"
                                                id="myInput" readonly>
                                        </div>
                                    </div>

                                    <div class="text-white">
                                        <button onclick="copy()" class="btn">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="walletContainer">


                <div id="transactionContainer">
                    <h2>Transaction History</h2>
                    <div id="transactionSlider">
                        <ul id="transactionList">
                            <!-- Transaction items will be dynamically added here -->
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
            </div>
        </div>



        <div class="details">
            <div>
                <ul class="nav mb-2 mx-auto " id="pills-tab" role="tablist">
                    <li class="nav-item text-white" role="presentation">
                        <a class="nav-link active" id="pills-OVERVIEW-tab" data-toggle="pill" href="#pills-OVERVIEW"
                            role="tab" aria-controls="pills-OVERVIEW" aria-selected="true">DEPOSIT REQUEST</a>
                    </li>
                    <li class="nav-item text-white" role="presentation">
                        <a class="nav-link text-white" id="pills-INDEPTH-tab" data-toggle="pill" href="#pills-INDEPTH"
                            role="tab" aria-controls="pills-INDEPTH" aria-selected="false">WITHDRAW REQUEST</a>
                    </li>
                </ul>
                <div class="container">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-OVERVIEW" role="tabpanel"
                            aria-labelledby="pills-OVERVIEW-tab">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10"> </div>
                                <div class="col-xl-7 col-lg-7 col-md-12"></div>
                                <div class="row align-items-center justify-content-between">
                                </div>
                            </div>
                            <div class="container">
                                <div class="withdrawal-form">
                                    <h1>Note: Send Your Payment To The Giving Trc20 Address And Then Admin Will Check Then
                                        Approved
                                        IT. and your Account will be updated after every 24 Hours. Make your you have to
                                        check TRC20
                                        address properly before sending the amount.</h1>
                                    <form action="{{ url('PaymentRequest') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Add the CSRF token -->
                                        <div class="row">
                                            <div class="col-50">
                                                <h1 class="account"
                                                    style="text-align: center ; margin-top: 3%; margin-bottom: 5%; font-size: 40px; ">
                                                    DEPOSIT REQUEST</h1>
                                                <label for="fname"><i class="fa fa-user"></i> Full Name:</label>
                                                <input type="text" id="fname" name="name"
                                                    placeholder="Put Your Full Name Here">
                                                <label for="email"><i class="fa fa-envelope"></i> Email:</label>
                                                <input type="text" id="email" name="email"
                                                    placeholder="Put Your Email Address Here">
                                                <label for="Phone"><i class="fa fa-envelope"></i> Phone No:</label>
                                                <br>
                                                <input type="number" id="phone" name="phone"
                                                    placeholder="Put Your Phone Number Here">

                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label><i class="fa fa-user"></i> TRC20
                                                        Address:</label>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <input type="text" name="payment_id"
                                                            value="TD4mKyeDasFgJSW2pcShhuxqKNLSLKtpuW" id="wallet"
                                                            readonly>
                                                        <a onclick="copyWallet()" style='margin-top: -26px;'>Copy</a>
                                                    </div>
                                                </div>
                                                <label for="payment_amount"><i class="fa fa-user"></i> Payment
                                                    Amount:</label>
                                                <input type="number" id="payment_amount" name="payment_amount"
                                                    placeholder="Enter Payment Amount">
                                                <br>
                                                <label for="file"> Screen Shot:</label>
                                                <br>
                                                <input type="file" name="file">
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button class="btn" type="submit">Continue To Check Out</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-INDEPTH" role="tabpanel"
                            aria-labelledby="pills-INDEPTH-tab">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10"> </div>
                                <div class="col-xl-7 col-lg-7 col-md-12"></div>
                                <div class="row align-items-center justify-content-between">
                                </div>
                            </div>
                            <div class="container">
                                <div class="withdrawal-form">
                                    <h1>Note: Submit your widthrawal request here. The requested amount will be deposited to
                                        your address in less than 24 hours. Please make sure your minimum payment threshold
                                        is completed before requesting the withdrawal.</h1>
                                    <h1 class="account"
                                        style="text-align: center ; margin-top: 3%; margin-bottom: 5%; font-size: 40px; ">
                                        WIDTHRAWAL REQUEST</h1>

                                    <form action="{{ url('WithdrawalRequest') }}" method="POST">
                                        @csrf
                                        <label for="fname"><i class="fa fa-user"></i> Full Name:</label>
                                        <input type="text" id="fname" name="name"
                                            placeholder="Put Your Full Name Here">
                                        <label for="email"><i class="fa fa-envelope"></i> Email:</label>
                                        <input type="text" id="email" name="email"
                                            placeholder="Put Your Email Address Here">
                                        <label for="email"><i class="fa fa-envelope"></i> TRC20 Address</label>
                                        <input type="text" id="address" name="TRC20"
                                            placeholder="Put Your TRC20 Address Here">
                                        <br>
                                        <div class="form-group">

                                            <div class="form-group">
                                                <label for="withdrawal-option">Withdrawal Option:</label>
                                                <select id="withdrawal-option" name="withdrawal-option">
                                                    <option value="">Select Withdrawal Option:</option>
                                                    <br>
                                                    <option value="Trc20">TRC20</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="withdrawal-amount">Withdrawal Amount:</label>
                                                <input type="text" id="withdrawal-amount" name="Withdrawal"
                                                    placeholder="Enter withdrawal amount">
                                            </div>

                                            <button type="submit" class="btn">WITHDRAW </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

    </main>
    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>

    <script>
        function copyWallet() {
            // Get the text field
            var copyText = document.getElementById("wallet");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Wallet address copied : " + copyText.value);
        }
    </script>
