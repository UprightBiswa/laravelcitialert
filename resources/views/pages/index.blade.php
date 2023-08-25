@extends('layouts.app')

@section('main')
    <!-- Header -->
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32 bg-blue-100">
        <div class="container mx-auto px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mx-auto xl:mr-12">
                <h1 class="h1-large mb-5 text-blue-600 font-bold text-4xl sm:text-5xl lg:text-6xl">Welcome to CitiAlert</h1>
                <p class="p-large mb-8 text-gray-700">Enhancing road safety for a better tomorrow.</p>
                <p class="wc ed sm:he text-sm text-gray-600 mb-4">
                    Your safety is our priority. Learn more about how we protect your privacy in our
                    <a href="#0" class="ad cd hover:wd text-blue-600">Privacy Policy.</a>
                </p>

                <!-- Search Box -->
                <form id="track-form" action="{{ route('CitiAlert.track') }}" method="get"
                    class="flex flex-col sm:flex-row items-center justify-center mb-8">
                    <input type="text" name="token"
                        class="border rounded-l px-4 py-3 focus:outline-none sm:mr-2 mb-2 sm:mb-0 w-full sm:w-80 lg:w-96 xl:w-100"
                        placeholder="Enter your Token ID" required>
                    <button id="track-button" type="submit"
                        class="bg-blue-500 text-white rounded-r px-6 py-3 hover:bg-blue-600 w-full sm:w-auto"
                        title="Click to track">Track</button>
                </form>
                <!-- Loading Spinner -->
                <div id="loading-spinner"
                    class="fixed top-0 left-0 z-50 w-screen h-screen flex items-center justify-center bg-gray-700 bg-opacity-50 hidden">
                    <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
                </div>

                <p class="text-xs text-gray-500 mt-2">Real-time updates for your safety on the road.</p>
            </div>
            <div class="xl:text-right">
                <img class="inline animate-pulse transform hover:scale-105 transition duration-300" src="images/Img-01.png"
                    alt="Smartphone with CitiAlert app" />
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <script>
        document.getElementById('track-form').addEventListener('submit', function() {
            document.getElementById('track-button').classList.add('hidden');
            document.getElementById('loading-spinner').classList.remove('hidden');
        });
    </script>


    <!-- Introduction -->
    <div class="pt-4 pb-14 text-center">
        <div class="container px-4 sm:px-8 xl:px-4">
            <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">
                Discover the Future of Road Safety with CitiAlert!
            </p>
            <p class="mb-6 text-gray-600 text-lg leading-7 lg:max-w-4xl lg:mx-auto">
                CitiAlert is your ultimate companion for enhancing road safety and security. Our innovative mobile app
                brings cutting-edge technology to your fingertips, making your journeys safer and more informed. With
                real-time
                updates, personalized alerts, and a seamless user experience, CitiAlert empowers you to navigate the roads
                with
                confidence and peace of mind.
            </p>
            <p class="mb-2 text-gray-600 text-lg leading-7 lg:max-w-4xl lg:mx-auto">
                Explore a new era of road safety. Try CitiAlert today and take the first step towards safer travels!
            </p>
            <a href="#download" class="btn-solid-reg inline-block px-6 py-3 mt-4 bg-blue-500 text-white hover:bg-blue-600">
                Download Now
            </a>
        </div> <!-- end of container -->
    </div>
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1">
        <div class="container px-4 sm:px-8 xl:px-4">

            <!-- Feature 1: One Time Login -->
            <div class="card inline animate-pulse transform hover:scale-105 transition duration-300">
                <div class="card-image">
                    <img src="images/features-icon-1.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">One Time Login</h5>
                    <p class="mb-4">Experience the simplicity of logging in just once and enjoying seamless access every
                        time you open the app. Say goodbye to repetitive logins and enjoy the convenience of instant access.
                    </p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Feature 2: Multiple Language Support -->
            <div class="card inline animate-pulse transform hover:scale-105 transition duration-300">
                <div class="card-image">
                    <img src="images/features-icon-2.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Multiple Language Support</h5>
                    <p class="mb-4">Speak your language with pride. Our app supports multiple languages including
                        Assamese, Hindi, and English. Choose the language that feels most comfortable and connect
                        effortlessly.</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Feature 3: Simple and User-Friendly -->
            <div class="card inline animate-pulse transform hover:scale-105 transition duration-300">
                <div class="card-image">
                    <img src="images/features-icon-3.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Simple and User-Friendly</h5>
                    <p class="mb-4">Navigating the app is a breeze. With a straightforward design, capturing and
                        submitting photos becomes a matter of a single click. Experience the power of simplicity while
                        staying connected.</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Feature 4: Nearby Hospital Locator -->
            <div class="card inline animate-pulse transform hover:scale-105 transition duration-300">
                <div class="card-image">
                    <img src="images/features-icon-4.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nearby Hospital Locator</h5>
                    <p class="mb-4">Safety at your fingertips. Our app helps you identify nearby hospitals within a 5 km
                        radius. Stay prepared for emergencies and access essential information when you need it the most.
                    </p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Feature 5: Free Access to All -->
            <div class="card inline animate-pulse transform hover:scale-105 transition duration-300">
                <div class="card-image">
                    <img src="images/features-icon-5.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Free Access to All</h5>
                    <p class="mb-4">Embrace limitless possibilities without additional costs. Your initial payment ensures
                        ongoing access to all updates and enhancements. Experience the app's evolution without worrying
                        about fees.</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Feature 6: Community Support -->
            <div class="card inline animate-pulse transform hover:scale-105 transition duration-300">
                <div class="card-image">
                    <img src="images/features-icon-6.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Community Support</h5>
                    <p class="mb-4">Join a vibrant community of users. Register the app to gain access to an online
                        community that shares knowledge, ideas, and insights. Connect, learn, and grow together with fellow
                        users.</p>
                </div>
            </div>
            <!-- end of card -->

        </div> <!-- end of container -->
    </div>
    <!-- end of features -->


    <!-- Details 1 -->
    <div id="details" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Submit Complaint Concern</h2>
                    <p class="mb-4">Report incidents directly from your smartphone. Capture photos or videos of accidents,
                        road damage, or emergencies. Provide descriptions and location information for quick resolution.</p>
                    <p class="mb-4">Our app ensures your complaints are sent to the appropriate authorities, allowing them
                        to take action promptly and efficiently.</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="xl:ml-14">
                    <img class="inline" src="images/details-1.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 1 -->



    <!-- Details 2 -->
    <div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7">
                <div class="mb-12 lg:mb-0 xl:mr-14">
                    <img class="inline" src="images/details-2.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-5">
                <div class="xl:mt-12">
                    <h2 class="mb-6">Track Complaints</h2>
                    <p class="mb-4">Stay informed about the progress of your complaints. Our app provides real-time
                        updates on the status of your reported incidents. Simply enter your tracking number or relevant
                        keywords to access the latest information.</p>
                    <p class="mb-4">We believe in transparency and accountability, ensuring that your concerns are being
                        addressed effectively.</p>

                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 2 -->





    <!-- Details 3 -->
    <div class="pt-16 pb-12">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Emergency Assistance</h2>
                    <p class="mb-4">During critical situations, our app is your lifeline. In emergencies, simply tap the
                        emergency button to alert authorities. Our app also helps you locate nearby hospitals, providing you
                        with essential information in urgent times.</p>
                    <p class="mb-4">Your safety matters to us, and we're here to ensure you have access to the help you
                        need.</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="ml-14">
                    <img class="inline" src="images/details-3.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 3 -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container px-4 sm:px-8">

            <!-- Counter -->
            <div id="counter">
                <div class="cell">
                    <div class="counter-value number-count">{{ $totalComplaints }}</div>
                    <p class="counter-info">Complaints Submitted</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count">{{ $totalSolvedComplaints }}</div>
                    <p class="counter-info">Complaints Solved</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count">{{ $totalUsers }}</div>
                    <p class="counter-info">Total Users</p>
                </div>
            </div>
            <!-- end of counter -->

        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->

    {{-- <!-- Pricing Problem Section -->
    <div id="pricing-problem" class="py-20 bg-gray-100">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-6 text-center text-3xl font-semibold">Report a Problem or Concern</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- QR Code and Instructions -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="mb-4 text-lg font-semibold">Scan the QR Code</h3>
                    <img src="images/OIP.jpg" alt="WhatsApp QR Code" class="mx-auto w-40 h-40 mb-4" />
                    <p class="text-gray-600 text-sm">Scan this QR code using WhatsApp to start a chat for reporting
                        problems or concerns.</p>
                    <p class="text-gray-600 text-sm mt-2">Follow the instructions provided by WhatsApp to set up the chat.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Pricing Problem Section --> --}}

    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="absolute bottom-0 h-40 w-full bg-white"></div>
        <div class="container px-4 pb-px sm:px-8">
            <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Scan the QR code to report from Whatsapp</h2>
            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Scan the QR Code</div>
                    <div class="price">
                        <span class="value">
                            <img src="images/OIP.jpg" alt="WhatsApp QR Code" class="mx-auto w-40 h-40 mb-4" />
                        </span>
                    </div>
                    <div class="frequency">Using with Whatsapp</div>
                    <p>Scan this QR code using WhatsApp to start a chat for reporting
                        problems or concerns.</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Follow the instructions provided by WhatsApp to set up
                                the chat.</div>
                        </li>

                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                    </div>
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->
            <!-- Details Lightbox -->
            <!-- Lightbox -->
            <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
                <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
                    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                    <div class="lg:col-span-8">
                        <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                            <img class="inline rounded-lg" src="images/OIP.jpg" alt="alternative" />
                        </div>
                    </div> <!-- end of col -->
                    <div class="lg:col-span-4">
                        <h3 class="mb-2">Goals Setting</h3>
                        <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                        <p>The app can easily help you track your personal development evolution if you take the time to set
                            it up.
                        </p>
                        <h4 class="mt-7 mb-2.5">User Feedback</h4>
                        <p class="mb-4">This is a great app which can help you save time and make your live easier. And
                            it will
                            help improve your productivity.</p>
                        <ul class="list mb-6 space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Splash screen panel</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Statistics graph report</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Events calendar layout</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Location details screen</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Onboarding steps interface</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                        <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of lightbox-basic -->
            <!-- end of lightbox -->
            <!-- end of details lightbox -->


        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">Hear from our satisfied users</h2>

            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-1.jpg" alt="User 1" />
                                <div class="card-body">
                                    <p class="italic mb-3">CitiAlert has transformed my road safety experience. It's an
                                        essential tool for every driver.</p>
                                    <p class="testimonial-author">Samantha Davis - Driver</p>
                                </div>
                            </div>
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-2.jpg" alt="User 2" />
                                <div class="card-body">
                                    <p class="italic mb-3">I can't imagine hitting the road without CitiAlert. It keeps me
                                        informed and safe at all times.</p>
                                    <p class="testimonial-author">Alex Chen - Commuter</p>
                                </div>
                            </div>
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-3.jpg" alt="User 3" />
                                <div class="card-body">
                                    <p class="italic mb-3">As a parent, CitiAlert gives me peace of mind knowing that my
                                        family is protected on the road.</p>
                                    <p class="testimonial-author">Michael Johnson - Parent</p>
                                </div>
                            </div>
                        </div>
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->
    <!-- Conclusion -->
    <div id="download" class="basic-5">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
            <div class="mb-16 lg:mb-0">
                <img src="images/Img-01.png" alt="App Screenshots" />
            </div>
            <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                <p class="mb-9 text-gray-800 text-3xl leading-10">CitiAlert is the ultimate road safety companion. Elevate
                    your road safety experience today.</p>
                <a class="btn-solid-lg" href="#your-ios-link"><i class="fab fa-apple"></i>Download on the App Store</a>
                <a class="btn-solid-lg secondary" href="#your-android-link"><i class="fab fa-google-play"></i>Get it on
                    Google Play Store</a>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of conclusion -->
@endsection
