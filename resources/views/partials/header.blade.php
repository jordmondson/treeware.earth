<!-- start header -->
<header class="w-full bg-transparent fixed top-0 left-0 z-50 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-6 {{ ($_SERVER['REQUEST_URI'] != '/') ? 'nav-already-active bg-white xl:py-4 shadow-md activate-nav' : '' }}" id="navbar" style="z-index: 1000">
    <nav class="flex items-center justify-between">
        <a href="/" class="relative">
            <span class="header-logo cursor-pointer"></span>
        </a>
        <div class="ff-nav">

            <button class="hamburger hamburger--collapse" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>

            <ul class="menu flex text-xs">
                <li><a id="how-it-work-link" class="mr-2 sm:mr-4 text-blue-800 hover:text-blue-700 font-bold" href="{{ ($_SERVER['REQUEST_URI'] == '/') ? 'javascript:void(0)' : '/#how-it-work-section' }}">How It Works</a></li>
                <li><a id="add-package-link" class="mr-2 sm:mr-4 text-blue-800 hover:text-blue-700 font-bold" href="{{ ($_SERVER['REQUEST_URI'] == '/') ? 'javascript:void(0)' : '/#add-package-section' }}">Add Package</a></li>
                <li><a class="text-blue-800 hover:text-blue-700 font-bold" href="/packages">Search Package</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- end header -->