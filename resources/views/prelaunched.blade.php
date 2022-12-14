<x-eduka::site>
    <x-eduka::head>
    <title>Mastering Nova</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
    @vite('resources/vendor/mastering-nova/css/perfect-scrollbar.css')
    @vite('resources/vendor/mastering-nova/css/owl.carousel.min.css')
    @vite('resources/vendor/mastering-nova/css/owl.theme.default.min.css')
    @vite('resources/vendor/mastering-nova/css/app.tailwind.css')
    </x-eduka::head>
    <x-eduka::body class="antialiased bg-body text-body font-body">
        <div>
            <!-- hero section -->
            <section class="skewed-bottom-right">
                <!-- Navigation bar -->
                <nav class="fixed w-full px-6 py-6 flex justify-between items-center bg-blue-800 shadow-inner z-50">
                    <a class="text-white text-3xl font-bold leading-none" href="#">
                    <img class="h-12" src="{{ Vite::asset('resources/vendor/mastering-nova/images/logo.png') }}" alt="" width="auto">
                    </a>
                    <div class="lg:hidden">
                        <button class="navbar-burger flex items-center text-white p-3">
                            <svg class="block h-4 w-4 fill-current" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Mobile menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                        <li><a class="js-trigger text-sm text-white font-bold hover:text-blue-200" href="#home" data-mt-duration="1500">Home</a></li>
                        <li class="text-gray-500">
                            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </li>
                        <li><a class="js-trigger text-sm text-white font-bold hover:text-blue-200" href="#testimonials" data-mt-duration="1500">Testimonials</a></li>
                        <li class="text-gray-500">
                            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </li>
                        <li><a class="js-trigger text-sm text-white font-bold hover:text-blue-200" href="#features" data-mt-duration="1500">Features</a></li>
                        <li class="text-gray-500">
                            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </li>
                        <li><a class="js-trigger text-sm text-white font-bold hover:text-blue-200" href="#tutorials-list" data-mt-duration="1500">Tutorials List</a></li>
                        <li class="text-gray-500">
                            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </li>
                        <li><a class="js-trigger text-sm text-white font-bold hover:text-blue-200" href="#faq" data-mt-duration="1500">FAQ</a></li>
                        <li class="text-gray-500">
                            <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </li>
                    </ul>
                    <a class="hidden lg:inline-block py-2 px-6 bg-white hover:bg-gray-50 text-sm text-blue-600 font-bold rounded-l-xl rounded-t-xl transition duration-200" target="_blank" href="mailto:bruno@masteringnova.com">Doubts?</a>
                </nav>
                <!-- / Navigation bar -->
                <!-- Hero -->
                <div class="bg-blue-800 pt-32 lg:pt-40 pb-20 radius-for-skewed" id="home">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">
                                <div class="w-full text-center lg:text-left">
                                    <div class="flex items-start justify-center lg:justify-start">
                                        <div class="rounded-full font-semibold bg-blue-200 text-blue-900 px-4 py-2 text-sm mb-2 flex items-center gap-2">
                                        <svg class="h-6 s-6" viewBox="0 0 256 264" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                            <g>
                                                <path d="M255.855641,59.619717 C255.950565,59.9710596 256,60.3333149 256,60.6972536 L256,117.265345 C256,118.743206 255.209409,120.108149 253.927418,120.843385 L206.448786,148.178786 L206.448786,202.359798 C206.448786,203.834322 205.665123,205.195421 204.386515,205.937838 L105.27893,262.990563 C105.05208,263.119455 104.804608,263.201946 104.557135,263.289593 C104.464333,263.320527 104.376687,263.377239 104.278729,263.403017 C103.585929,263.58546 102.857701,263.58546 102.164901,263.403017 C102.051476,263.372083 101.948363,263.310215 101.840093,263.26897 C101.613244,263.186479 101.376082,263.1143 101.159544,262.990563 L2.07258227,205.937838 C0.7913718,205.201819 0,203.837372 0,202.359798 L0,32.6555248 C0,32.2843161 0.0515567729,31.9234187 0.144358964,31.5728326 C0.175293028,31.454252 0.24747251,31.3459828 0.288717928,31.2274022 C0.366053087,31.0108638 0.438232569,30.7891697 0.55165747,30.5880982 C0.628992629,30.4540506 0.742417529,30.3457814 0.83521972,30.2220451 C0.953800298,30.0570635 1.06206952,29.8869261 1.20127281,29.7425672 C1.31985339,29.6239866 1.4745237,29.5363401 1.60857131,29.4332265 C1.75808595,29.3094903 1.89213356,29.1754427 2.06227091,29.0774848 L2.06742659,29.0774848 L51.6134853,0.551122364 C52.8901903,-0.183535768 54.4613221,-0.183535768 55.7380271,0.551122364 L105.284086,29.0774848 L105.294397,29.0774848 C105.459379,29.1805983 105.598582,29.3094903 105.748097,29.4280708 C105.882144,29.5311844 106.031659,29.6239866 106.15024,29.7374115 C106.294599,29.8869261 106.397712,30.0570635 106.521448,30.2220451 C106.609095,30.3457814 106.727676,30.4540506 106.799855,30.5880982 C106.918436,30.7943253 106.985459,31.0108638 107.06795,31.2274022 C107.109196,31.3459828 107.181375,31.454252 107.212309,31.5779883 C107.307234,31.9293308 107.355765,32.2915861 107.356668,32.6555248 L107.356668,138.651094 L148.643332,114.878266 L148.643332,60.6920979 C148.643332,60.3312005 148.694889,59.9651474 148.787691,59.619717 C148.823781,59.4959808 148.890804,59.3877116 148.93205,59.269131 C149.014541,59.0525925 149.08672,58.8308984 149.200145,58.629827 C149.27748,58.4957794 149.390905,58.3875102 149.478552,58.2637739 C149.602288,58.0987922 149.705401,57.9286549 149.84976,57.7842959 C149.968341,57.6657153 150.117856,57.5780688 150.251903,57.4749553 C150.406573,57.351219 150.540621,57.2171714 150.705603,57.1192136 L150.710758,57.1192136 L200.261973,28.5928511 C201.538395,27.8571345 203.110093,27.8571345 204.386515,28.5928511 L253.932573,57.1192136 C254.107866,57.2223271 254.241914,57.351219 254.396584,57.4697996 C254.525476,57.5729132 254.674991,57.6657153 254.793572,57.7791402 C254.93793,57.9286549 255.041044,58.0987922 255.16478,58.2637739 C255.257582,58.3875102 255.371007,58.4957794 255.443187,58.629827 C255.561767,58.8308984 255.628791,59.0525925 255.711282,59.269131 C255.757683,59.3877116 255.824707,59.4959808 255.855641,59.619717 Z M247.740605,114.878266 L247.740605,67.8378666 L230.402062,77.8192579 L206.448786,91.6106946 L206.448786,138.651094 L247.745761,114.878266 L247.740605,114.878266 Z M198.194546,199.97272 L198.194546,152.901386 L174.633101,166.357704 L107.351512,204.757188 L107.351512,252.27191 L198.194546,199.97272 Z M8.25939501,39.7961379 L8.25939501,199.97272 L99.0921175,252.266755 L99.0921175,204.762344 L51.6392637,177.906421 L51.6237967,177.89611 L51.603174,177.885798 C51.443348,177.792996 51.3093004,177.658949 51.1597857,177.545524 C51.0308938,177.44241 50.8813791,177.359919 50.7679542,177.246494 L50.7576429,177.231027 C50.6235953,177.102135 50.5307931,176.942309 50.4173682,176.79795 C50.3142546,176.658747 50.1905184,176.540167 50.1080276,176.395808 L50.1028719,176.380341 C50.0100697,176.22567 49.9533572,176.040066 49.8863334,175.864773 C49.8193096,175.710103 49.7316631,175.565744 49.6904177,175.400762 L49.6904177,175.395606 C49.6388609,175.19969 49.6285496,174.993463 49.6079269,174.792392 C49.5873041,174.637722 49.5460587,174.483051 49.5460587,174.328381 L49.5460587,174.31807 L49.5460587,63.5689658 L25.5979377,49.7723734 L8.25939501,39.8012935 L8.25939501,39.7961379 Z M53.6809119,8.89300821 L12.3994039,32.6555248 L53.6706006,56.4180414 L94.9469529,32.6503692 L53.6706006,8.89300821 L53.6809119,8.89300821 Z M75.1491521,157.19091 L99.0972731,143.404629 L99.0972731,39.7961379 L81.7587304,49.7775291 L57.8054537,63.5689658 L57.8054537,167.177457 L75.1491521,157.19091 Z M202.324244,36.934737 L161.047891,60.6972536 L202.324244,84.4597702 L243.59544,60.6920979 L202.324244,36.934737 Z M198.194546,91.6106946 L174.24127,77.8192579 L156.902727,67.8378666 L156.902727,114.878266 L180.850848,128.664547 L198.194546,138.651094 L198.194546,91.6106946 Z M103.216659,197.616575 L163.759778,163.052915 L194.023603,145.781396 L152.778185,122.034346 L105.289242,149.374903 L62.0073307,174.292291 L103.216659,197.616575 Z" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                        Laravel official course
                                        </div>
                                        <div class="flex-shrink-0">&nbsp;</div>
                                    </div>
                                    <div class="max-w-md mx-auto lg:mx-0">
                                        <h2 class="mb-3 text-4xl lg:text-5xl text-white font-bold">
                                            <span>No more headaches to build that perfect Nova admin panel</span>
                                        </h2>
                                    </div>
                                    <div class="max-w-sm mx-auto lg:mx-0">
                                        <p class="mb-6 text-blue-200 leading-loose">The official Laravel Nova course, that will make you a master on all the hidden gems that Nova offers you, for both ORION and SILVER SURFER versions!</p>
                                        <div>
                                            <a class="inline-block mb-3 lg:mb-0 lg:mr-1 w-full lg:w-auto button button-primary-blue text-base" href="#">Subscribe for a discount</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 px-4 flex items-center justify-center">
                                <div class="relative" style="z-index: 0;">
                                    <img class="h-128 w-full max-w-lg object-cover rounded-3xl md:rounded-br-none" src="{{ Vite::asset('resources/vendor/mastering-nova/images/hero.jpg') }}" alt="">
                                    <img class="hidden md:block absolute" style="top:-2rem; right: 3rem; z-index: -1;" src="{{ Vite::asset('resources/vendor/mastering-nova/images/blue-dark-up.svg') }}" alt="">
                                    <img class="hidden md:block absolute" style="bottom:-2rem; right: -2rem; z-index: -1;" src="{{ Vite::asset('resources/vendor/mastering-nova/images/wing-blue-down.svg') }}" alt="">
                                    <img class="hidden md:block absolute" style="top:3rem; right: -3rem; z-index: -1;" src="{{ Vite::asset('resources/vendor/mastering-nova/images/bullets-blue-right.svg') }}" alt="">
                                    <img class="hidden md:block absolute" style="bottom:2.5rem; left: -4.5rem; z-index: -1;" src="{{ Vite::asset('resources/vendor/mastering-nova/images/bullets-blue-left.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Hero -->
                <div class="mr-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-blue-800" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
                    </svg>
                </div>
                <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
                    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                    <nav class="relative flex flex-col py-6 px-6 h-full w-full bg-white border-r overflow-y-auto">
                        <div class="flex items-center mb-8">
                            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                            <img class="h-10" src="{{ Vite::asset('resources/vendor/mastering-nova/images/logo-navbar-dark.png') }}" alt="" width="auto">
                            </a>
                            <button class="navbar-close">
                                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <ul>
                                <li class="mb-1"><a class="js-trigger block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#home">Home</a></li>
                                <li class="mb-1"><a class="js-trigger block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#testimonials">Testimonials</a></li>
                                <li class="mb-1"><a class="js-trigger block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#features">Features</a></li>
                                <li class="mb-1"><a class="js-trigger block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#tutorials-list">Tutorials List</a></li>
                                <li class="mb-1"><a class="js-trigger block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#faq">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <div class="pt-6"><a class="block mb-2 button button-secondary-blue" href="#">Buy now - USD 80</a><a class="block mb-2 button button-primary-blue" href="#">Login</a></div>
                            <p class="my-4 text-xs text-center text-gray-400">
                                {{ \Illuminate\Foundation\Inspiring::quote() }}
                            </p>
                            <div class="text-center">
                                <a class="inline-block px-1" target="_blank" href="https://twitter.com/brunocfalcao">
                                    <x-feathericon-twitter class="text-blue-500"/>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </section>
            <!-- /hero section -->

            <!-- testimonials -->
            <section id="testimonials">
                <div class="skew skew-top mr-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>
                    </svg>
                </div>
                <div class="skew skew-top ml-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>
                    </svg>
                </div>
                <div class="py-20 bg-gray-50 radius-for-skewed">
                    <div class="container mx-auto px-4">
                        <!-- Owl Carousel -->
                        <div class="owl-carousel owl-theme">
@php
// Create a structure of testimonials. Later on this should be made dynamically via de database.
$tweets = [

    [
        'image' => 'resources/vendor/mastering-nova/images/david-hemphill.jpg',
        'account' => 'davidhemphill',
        'baseline' => 'Laravel Nova co-creator',
        'tweet' => "I'd probably pick up this in-depth course on Laravel Nova if I was you. Looks like there's stuff in there I didn't even know was possible!"
    ],
    [
        'image' => 'resources/vendor/mastering-nova/images/christoph-rumpel.jpg',
        'account' => 'christophrumpel',
        'baseline' => 'Laravel Core Adventures Creator',
        'tweet' => "Been following Bruno Falcao's course process and I'm happy for him for the launch! It's also great to finally have a more in-depth Laravel Nova course. Congrats!"
    ],
    [
        'image' => 'resources/vendor/mastering-nova/images/caneco.jpg',
        'account' => 'caneco',
        'baseline' => 'Laracon Speaker',
        'tweet' => "If you are trying to code #LaravelNova, it's far more easy to learn from someone that it's rock-coding with Nova since the beginning. Explore the universe of Laravel Nova with @brunocfalcao. Don't be afraid to hit that [Buy] button!"
    ],
    [
        'image' => 'resources/vendor/mastering-nova/images/patrick-brouwers.jpg',
        'account' => 'patrickbrouwers',
        'baseline' => 'Laravel Excel creator',
        'tweet' => "If you wanna get the most out of Laravel Nova, have a look at Bruno Falcao's new course!"
    ],
];
@endphp
                        @foreach($tweets as $tweet)
                        <!-- tweet item -->
                        <div class="max-w-6xl p-4 flex flex-wrap justify-center items-center">
                            <div class="mb-6 w-full lg:w-1/3 text-center">
                                <div class="w-32 h-32 mx-auto rounded-full">
                                    <img class="w-32 h-32 rounded-full object-cover" src="{{ Vite::asset($tweet['image']) }}" alt="">
                                </div>
                                <h4><a class="link-blue" target="_blank" href="https://twitter.com/{{ $tweet['account'] }}">{{ "@" . $tweet['account'] }}</a></h4>
                                <p class="text-blue-800 font-bold">{{ $tweet['baseline'] }}</p>
                            </div>
                            <div class="w-full lg:w-2/3">
                                <svg class="mb-4 text-green-600 h-7" viewbox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.2418 12.749C9.45369 12.522 8.66554 12.4069 7.89887 12.4069C6.71496 12.4069 5.72709 12.6775 4.96109 13.0088C5.69957 10.3053 7.47358 5.6405 11.0075 5.11517C11.3348 5.0665 11.603 4.82986 11.6923 4.51131L12.4646 1.74875C12.5298 1.51512 12.4912 1.26505 12.3579 1.06231C12.2246 0.859563 12.0105 0.724288 11.7705 0.691393C11.5097 0.655812 11.2438 0.637686 10.9803 0.637686C6.73846 0.637686 2.53756 5.06516 0.764895 11.4046C-0.275679 15.1238 -0.580802 20.7154 1.98237 24.2349C3.41668 26.2043 5.50924 27.2559 8.20198 27.361C8.21305 27.3613 8.2238 27.3616 8.23487 27.3616C11.5573 27.3616 14.5035 25.1241 15.3997 21.9208C15.9351 20.0058 15.6931 17.9975 14.7176 16.2644C13.7526 14.5508 12.1632 13.3018 10.2418 12.749Z" fill="currentColor"></path>
                                    <path d="M31.0396 16.2648C30.0746 14.5508 28.4852 13.3018 26.5638 12.749C25.7757 12.522 24.9875 12.4069 24.2212 12.4069C23.0373 12.4069 22.0491 12.6775 21.2831 13.0088C22.0215 10.3053 23.7955 5.6405 27.3298 5.11517C27.6571 5.0665 27.9249 4.82986 28.0146 4.51131L28.7869 1.74875C28.8521 1.51512 28.8135 1.26505 28.6802 1.06231C28.5473 0.859563 28.3331 0.724288 28.0928 0.691393C27.8323 0.655812 27.5664 0.637686 27.3026 0.637686C23.0608 0.637686 18.8599 5.06516 17.0869 11.4046C16.0466 15.1238 15.7415 20.7154 18.305 24.2356C19.739 26.2046 21.8319 27.2566 24.5243 27.3613C24.5354 27.3616 24.5461 27.362 24.5575 27.362C27.8796 27.362 30.8261 25.1244 31.7224 21.9211C32.2571 20.0061 32.0147 17.9975 31.0396 16.2648Z" fill="currentColor"></path>
                                </svg>
                                <h3 class="mb-6 text-2xl lg:text-3xl font-bold font-heading">{{ $tweet['tweet'] }}</h3>
                            </div>
                        </div>
                        <!-- /tweet item -->
                        @endforeach
                        </div>
                        <!-- /Owl Carousel -->
                    </div>
                </div>
                <div class="skew skew-bottom mr-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
                    </svg>
                </div>
                <div class="skew skew-bottom ml-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>
                    </svg>
                </div>
            </section>
            <!-- /testimonials -->

            <!-- features -->
            <section id="features">
                <div class="skew skew-top mr-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-blue-800" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>
                    </svg>
                </div>
                <div class="skew skew-top ml-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-blue-800" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>
                    </svg>
                </div>
                <div class="py-20 bg-blue-800 radius-for-skewed" id="features">
                    <div class="container mx-auto px-4">
                        <div class="mb-16 mx-auto text-center">
                            <span class="text-blue-600 font-bold">Learn everything about Laravel Nova</span>
                            <h2 class="text-4xl md:text-5xl font-bold text-white">Nova explained fully end-to-end using real coding examples</h2>
                        </div>
                        <div class="flex flex-wrap -mx-4">
                            <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4">
                                <span class="mb-4 md:mb-6 inline-block p-3 bg-blue-600 text-blue-200 rounded">
                                    <x-eos-surfing class="h-12 w-12" />
                                </span>
                                <h4 class="mb-4 text-2xl font-bold font-heading text-white">Orion (3.x) and Silver Surfer (4.x) versions</h4>
                                <p class="text-gray-500 leading-loose">Fusce quam tellus, placerat eu metus ut, viverra aliquet purus. Suspendisse potenti. Nulla non nibh feugiat.</p>
                            </div>
                            <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4">
                                <span class="mb-4 md:mb-6 inline-block p-3 bg-blue-600 text-blue-200 rounded">
                                    <x-eos-neural-network class="h-12 w-12" />
                                </span>
                                <h4 class="mb-4 text-2xl font-bold font-heading text-white">All knowledge areas fully covered</h4>
                                <p class="text-gray-500 leading-loose">Ut tempus tellus ac nisi vestibulum tempus. Nunc tincidunt lectus libero, ac ultricies augue elementum at.</p>
                            </div>
                            <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4">
                                <span class="mb-4 md:mb-6 inline-block p-3 bg-blue-600 text-blue-200 rounded">
                                    <x-eos-movie-filter class="h-12 w-12" />
                                </span>
                                <h4 class="mb-4 text-2xl font-bold font-heading text-white">Pristine video and sound quality</h4>
                                <p class="text-gray-500 leading-loose">Donec ut ligula nunc. Mauris blandit vel est et facilisis. Integer sapien felis, aliquet at posuere et, porttitor quis ligula.</p>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <span class="mb-4 md:mb-6 inline-block p-3 bg-blue-600 text-blue-200 rounded">
                                    <x-eos-thumb-up class="h-12 w-12" />
                                </span>
                                <h4 class="mb-4 text-2xl font-bold font-heading text-white">Pay once, get updated forever</h4>
                                <p class="text-gray-500 leading-loose">Duis ut facilisis orci. Morbi lacinia nunc a augue eleifend, sed placerat ex faucibus. Duis ante arcu, pretium ac luctus vulputate.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skew skew-bottom mr-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-blue-800" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
                    </svg>
                </div>
                <div class="skew skew-bottom ml-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-blue-800" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>
                    </svg>
                </div>
            </section>
            <!-- /features -->

            <!-- Features slideshow -->
            <section>
                <div class="skew skew-top mr-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>
                    </svg>
                </div>
                <div class="skew skew-top ml-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>
                    </svg>
                </div>
                <div class="py-20 bg-gray-50 radius-for-skewed">
                    <div class="container mx-auto px-4">
                        <div class="owl-carousel owl-theme">
                            <!-- Slideshow piece 1 -->
                            <div class="relative flex">
                                <div class="w-full xl:w-4/5 xl:ml-auto">
                                    <img class="md:max-w-xl xl:max-w-4xl mx-auto relative object-cover rounded" src="https://images.unsplash.com/photo-1489493512598-d08130f49bea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1048&amp;q=80" alt="">
                                    <div class="xl:absolute top-0 left-0 mt-12 xl:mt-20 max-w-xl mx-auto xl:mx-0 p-6 xl:py-24 rounded bg-white border-gray-50 shadow text-center">
                                        <span class="font-bold text-blue-600">The power of the course</span>
                                        <h2 class="text-5xl font-bold font-heading">Build &amp; Launch without problems</h2>
                                        <p class="max-w-xs mx-auto text-gray-500 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nisl sodales egestas lobortis.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slideshow piece -->

                            <!-- Slideshow piece 2 -->
                            <div class="relative flex">
                                <div class="w-full xl:w-4/5 xl:ml-auto">
                                    <img class="md:max-w-xl xl:max-w-4xl mx-auto relative object-cover rounded" src="https://images.unsplash.com/photo-1489493512598-d08130f49bea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1048&amp;q=80" alt="">
                                    <div class="xl:absolute top-0 left-0 mt-12 xl:mt-20 max-w-xl mx-auto xl:mx-0 p-6 xl:py-24 rounded bg-white border-gray-50 shadow text-center">
                                        <span class="font-bold text-blue-600">Dolor sit amet consectutar</span>
                                        <h2 class="text-5xl font-bold font-heading">Build &amp; Launch without problems</h2>
                                        <p class="max-w-xs mx-auto text-gray-500 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nisl sodales egestas lobortis.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slideshow piece 2 -->
                        </div>
                    </div>
                </div>
                <div class="skew skew-bottom mr-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
                    </svg>
                </div>
                <div class="skew skew-bottom ml-for-radius">
                    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                        <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>
                    </svg>
                </div>
            </section>
            <!-- /Features slideshow -->

            <!-- cta -->
            <section class="py-20 bg-blue-800">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap items-center justify-center">
                        <div class="w-auto mb-10 lg:mb-0 lg:mr-8 py-8 px-10 rounded">
                            <img class="h-16" src="/vendor/mastering-nova/images/logo-navbar-white.png" alt="">
                        </div>
                        <div class="w-full lg:w-auto mb-10 lg:mb-0 text-center lg:text-left">
                            <h2 class="max-w-xl mx-auto lg:mx-0 mb-2 text-4xl lg:text-5xl text-white font-bold font-heading">Ready to discover Nova?</h2>
                            <p class="max-w-xl mx-auto lg:mx-0 text-blue-200 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nisl sodales egestas lobortis.</p>
                        </div>
                        <div class="w-full lg:w-auto lg:ml-auto text-center"><a class="inline-block leading-loose button button-primary-blue text-xl" href="#">Buy now - USD 80</a></div>
                    </div>
                </div>
            </section>
            <!-- /cta -->





        </div>

        <script
            src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin="anonymous">
        </script>

        @vite('resources/vendor/mastering-nova/js/app.js')
        @vite('resources/vendor/mastering-nova/js/retina.min.js')
        @vite('resources/vendor/mastering-nova/js/owl.carousel.min.js')
        @vite('resources/vendor/mastering-nova/js/template.js')
        @vite('resources/vendor/mastering-nova/js/move-to-min.js')
        <script type="text/javascript">
            $( document ).ready(function() {

                $('.owl-carousel').owlCarousel({
                    loop:true,
                    items:1,
                    nav:false,
                    autoplay: true
                });

                const easeFunctions = {

                    easeInQuad: function (t, b, c, d) {
                        t /= d;
                        return c * t * t + b;
                    },

                    easeOutQuad: function (t, b, c, d) {
                        t /= d;
                        return -c * t * (t - 2) + b;
                    },

                    linear: function (t, b, c, d) {
                        return c*t/d + b;
                    },

                    easeInOutQuad: function (t, b, c, d) {
                        t /= d/2;
                        if (t < 1) return c/2*t*t + b;
                        t--;
                        return -c/2 * (t*(t-2) - 1) + b;
                    }
                };

                const moveTo = new MoveTo(
                    {
                        ease: "easeInOutQuad",
                    },
                    easeFunctions
                );

                const triggers = document.getElementsByClassName("js-trigger");
                for (var i = 0; i < triggers.length; i++) {
                    moveTo.registerTrigger(triggers[i]);
                }
            });
        </script>
    </x-eduka::body>
</x-eduka::site>