@extends('master')
@section('tittle', 'PACKAGES')
@section('content')
<x-alert/>
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Choose plan which fit for you</h1>
                                <p data-animation="fadeInLeft" data-delay=".8s"> Begin your USD mining journey with our
                                    affordable Starter Mining Package.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
            </div>
        </div>
        <!-- Slider Area End -->
        <!--? Pricing Card Start -->

        <!-- Package section -->
        <section class="pricing-card-area pricing-card-area2 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="uk-width-1-4">
                                <div class="pricing-package">
                                    <form action="{{ url('PackagesBuy') }}" data-toggle="validator" role="form" id="stForm"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="text" value="starter" name="Silver Package1" hidden="">
                                        <input type="text" value="10" name="price" hidden="">
                                        <input type="text" value="180" name="Days" hidden="">
                                        <input type="text" value="0.4" name="Daily Income" hidden="">
                                        <input type="text" value="5" name="Minimum Withdrawal" hidden="">
                                        <input type="text" value="72" name="Total After 180 Days" hidden="">
                                    </form>
                                </div>
                            </div>
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Silver Package 1</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$10 <span>/ 180 Days</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Daily Income: 0.4 $</li>
                                    <li>Minimum Withdrawal: 5$</li>
                                    <li>Total Earnings After 180 days: 72$</li>
                                </ul>
                                @if (auth()->user())
                                @if (auth()->user())
                                <button class="border-btn" type="submit" @guest disabled @endguest>BUY NOW</button>
                                @else
                                <a href="{{ route('register') }}" class="border-btn">BUY NOW</a>
                                @endif
                                @else
                                <a href="{{ route('register') }}" class="border-btn">BUY NOW</a>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="uk-width-1-4">
                                <div class="pricing-package">
                                    <form action="{{ url('PackagesBuy') }}" data-toggle="validator" role="form"
                                        id="stForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf
                                        <input type="text" value="starter" name="Silver Package2" hidden="">
                                        <input type="text" value="25" name="price" hidden="">
                                        <input type="text" value="180" name="Days" hidden="">
                                        <input type="text" value="1.2" name="Daily Income" hidden="">
                                        <input type="text" value="10" name="Minimum Withdrawal" hidden="">
                                        <input type="text" value="216" name="Total After 180 Days" hidden="">

                                </div>
                            </div>
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Silver Package 2</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$25 <span>/ 180 Days</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Daily Income: 1.2$</li>
                                    <li>Minimum Withdrawal: 10$</li>
                                    <li>Total After 180 days: 216$</li>
                                </ul>
                                @if (auth()->user())
                                <button class="border-btn" type="submit" @guest disabled @endguest>BUY NOW</button>
                                @else
                                <a href="{{ route('register') }}" class="border-btn">BUY NOW</a>
                                @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="uk-width-1-4">
                                <div class="pricing-package">
                                    <form action="{{ url('PackagesBuy') }}" data-toggle="validator" role="form"
                                        id="stForm" enctype="multipart/form-data" method="post"
                                        accept-charset="utf-8">

                                        @CSRF<input type="text" value="Gold_Package1" name="Package_name"
                                            hidden="">
                                        <input type="text" value="50" name="price" hidden="">
                                        <input type="text" value="180" name="Days" hidden="">
                                        <input type="text" value="3" name="Daily Income" hidden="">
                                        <input type="text" value="20" name="Minimum Withdrawal" hidden="">
                                        <input type="text" value="540" name="Total After 180 Days" hidden="">

                                </div>
                            </div>
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Gold Package 1</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$50 <span>/ 180 Days</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Daily Income: 3$</li>
                                    <li>Minimum Withdrawal: 20$</li>
                                    <li>Total After 180 Days: 540$</li>
                                </ul>
                                @if (auth()->user())
                                <button class="border-btn" type="submit" @guest disabled @endguest>BUY NOW</button>
                                @else
                                <a href="{{ route('register') }}" class="border-btn">BUY NOW</a>
                                @endif
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">

                            <div class="uk-width-1-4">
                                <div class="pricing-package">
                                    <form action="{{ url('PackagesBuy') }}" data-toggle="validator" role="form"
                                        id="stForm" enctype="multipart/form-data" method="post"
                                        accept-charset="utf-8">
                                        @csrf
                                        <input type="text" value="Gold_Package2" name="Package_name" hidden="">
                                        <input type="text" value="100" name="price" hidden="">
                                        <input type="text" value="180" name="Days" hidden="">
                                        <input type="text" value="6" name="Daily Income" hidden="">
                                        <input type="text" value="50" name="Minimum Withdrawal" hidden="">
                                        <input type="text" value="1080" name="Total After 180 Days" hidden="">

                                </div>
                            </div>
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Gold Package 2</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$100 <span>/ 180 Days</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Daily Income: 6$</li>
                                    <li>Minimum Withdrawal: 50$</li>
                                    <li>Total After 180 Days: 1080$</li>
                                </ul>
                                @if (auth()->user())
                                <button class="border-btn" type="submit" @guest disabled @endguest>BUY NOW</button>
                                @else
                                <a href="{{ route('register') }}" class="border-btn">BUY NOW</a>
                                @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="uk-width-1-4">
                                <div class="pricing-package">
                                    <form action="{{ url('PackagesBuy') }}" data-toggle="validator" role="form"
                                        id="stForm" enctype="multipart/form-data" method="post"
                                        accept-charset="utf-8">
                                        @csrf
                                        <input type="text" value="Diamond_Package1" name="Package_name"
                                            hidden="">
                                        <input type="text" value="500" name="price" hidden="">
                                        <input type="text" value="180" name="Days" hidden="">
                                        <input type="text" value="30" name="Daily_Income" hidden="">
                                        <input type="text" value="250" name="Minimum_Withdrawal" hidden="">
                                        <input type="text" value="5400" name="Total_After_180_Days" hidden="">

                                </div>
                            </div>
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Diamond Package 1</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$500 <span>/ 180 Days</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Daily Income: 30$</li>
                                    <li>Minimum Withdrawal: $250</li>
                                    <li>Total After 180 Days: $5400</li>
                                </ul>

                                @if (auth()->user())
                                <button class="border-btn" type="submit" @guest disabled @endguest>BUY NOW</button>
                                @else
                                <a href="{{ route('register') }}" class="border-btn">BUY NOW</a>
                                @endif
                                </button> </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="uk-width-1-4">
                                <div class="pricing-package">
                                    <form action="{{ url('PackagesBuy') }}" data-toggle="validator" role="form"
                                        id="stForm" enctype="multipart/form-data" method="post"
                                        accept-charset="utf-8">
                                        @csrf
                                        <input type="text" value="Diamond_Package2" name="Package_name"
                                            hidden="">
                                        <input type="text" value="1000" name="price" hidden="">
                                        <input type="text" value="200" name="Days" hidden="">
                                        <input type="text" value="60" name="Daily Income" hidden="">
                                        <input type="text" value="500" name="Minimum Withdrawal" hidden="">
                                        <input type="text" value="12000" name="Total After 180 Days" hidden="">

                                </div>
                            </div>
                            <div>
                                <div class="card-top">
                                    <img src="assets/img/icon/price2.svg" alt="">
                                    <h4>Diamond Package 2</h4>
                                    <p>Starting at</p>
                                </div>
                                <div class="card-mid">
                                    <h4>$1000 <span>/ 200 Days</span></h4>
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>Daily Income: 60$</li>
                                        <li>Minimum Withdrawal: 500$</li>
                                        <li>Total After 200 days: 12000$</li>
                                    </ul>
                                    @if (auth()->user())
                                <button class="border-btn" type="submit" @guest disabled @endguest>BUY NOW</button>
                                @else
                                <a href="{{ route('register') }}" class="border-btn">BUY NOW</a>
                                @endif
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <script>
        // Function to check if the user is logged in
        function isLoggedIn() {
            // Replace the condition below with the actual authentication check
            // For example, you might have a variable or function that indicates the login status
            return true; // Replace with your actual logic to check login status
        }
        // Function to enable/disable the submit buttons based on login status
        function updateSubmitButtonStatus() {
            const submitButtons = document.querySelectorAll('.submit-button');
            for (const button of submitButtons) {
                if (isLoggedIn()) {
                    button.removeAttribute('disabled');
                } else {
                    button.setAttribute('disabled', true);
                }
            }
        }

        // Check the login status when the page loads
        document.addEventListener('DOMContentLoaded', updateSubmitButtonStatus);
    </script>
@endsection()
