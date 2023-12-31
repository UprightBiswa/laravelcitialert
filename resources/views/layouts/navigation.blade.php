 <!-- Navigation -->
 <nav class="navbar fixed-top">
    <div class="container flex flex-wrap items-center justify-between sm:px-4 lg:flex-nowrap lg:px-8">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!--<a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a>-->

        <!-- Image Logo -->
        <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="{{ route('CitiAlert.index') }}">
            <img src="images/logo.svg" alt="CitiAlert" class="h-8"/>
        </a>
        {{-- <form class="navbar-collapse offcanvas-collapse ml-3.5 rounded-lg bg-gray-100 p-1 flex items-center">
            <input type="text" class="py-1 px-2 rounded-l-lg w-40 sm:w-52 focus:outline-none" placeholder="Enter Token">
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-3 rounded-r-lg">
                <i class="fas fa-search"></i>
            </button>
        </form> --}}
        <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
            <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                <li>
                    <a class="nav-link page-scroll" href="{{ route('CitiAlert.index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{ route('CitiAlert.index') }}#features">Features</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{ route('CitiAlert.index') }}#details">Details</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{ route('CitiAlert.index') }}#QR">QR Code</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{ route('CitiAlert.userGuide') }}">User guide</a>

                </li>
                {{-- <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item page-scroll" href="{{ route('CitiAlert.article') }}">Article Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="{{ route('CitiAlert.terms') }}">Terms Conditions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="{{ route('CitiAlert.privacy') }}">Privacy Policy</a>
                    </div>
                </li> --}}
                <li>
                    <a class="nav-link page-scroll" href="{{ route('CitiAlert.index') }}#download">Download</a>
                </li>
            </ul>

            <span class="block lg:ml-3.5">
                <a class="no-underline" href="#your-link">
                    <i class="fab fa-apple text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200 mr-1.5"></i>
                </a>
                <a class="no-underline" href="#your-link">
                    <i class="fab fa-android text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200"></i>
                </a>
            </span>
        </div> <!-- end of navbar-collapse -->

    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
