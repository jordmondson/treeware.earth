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

            <ul class="menu flex text-xs block">
                <li class="block"><a class="mr-2 sm:mr-4 text-blue-800 hover:text-blue-700 font-bold" href="/about">About</a></li>
                <li class="block"><a id="how-it-work-link" class="mr-2 sm:mr-4 text-blue-800 hover:text-blue-700 font-bold" href="{{ ($_SERVER['REQUEST_URI'] == '/') ? 'javascript:void(0)' : '/#how-it-work-section' }}">How It Works</a></li>
                <li class="block"><a id="add-package-link" class="mr-2 sm:mr-4 text-blue-800 hover:text-blue-700 font-bold" href="{{ ($_SERVER['REQUEST_URI'] == '/') ? 'javascript:void(0)' : '/#add-package-section' }}">Add Package</a></li>
                <li class="block"><a class="mr-2 sm:mr-4 text-blue-800 hover:text-blue-700 font-bold" href="/packages">Search Package</a></li>
                <li class="mt-4 inline-block sm:mt-0 align-middle"><a title="Join us on Telegram" target="_blank" class="text-base mr-2 sm:mr-4 text-blue-800 hover:text-blue-700" href="https://t.me/treeware"><i class="fa fa-telegram fa-sm"></i></a></li>
                <li class="mt-4 inline-block sm:mt-0 align-middle"><a title="Follow us on Twitter" target="_blank" class="text-base mr-2 sm:mr-4 text-blue-800 hover:text-blue-700" href="https://twitter.com/TreewareEarth"><i class="fa fa-twitter fa-sm"></i></a></li>
                <li class="mt-4 inline-block sm:mt-0 align-middle"><a title="Find us on Product Hunt" target="_blank" class="text-base mr-2 sm:mr-4 text-blue-800 hover:text-blue-700" href="https://www.producthunt.com/posts/treeware"><i class="fa fa-product-hunt fa-sm"></i></a></li>
                {{-- <li class="mt-4 inline-block sm:mt-0 align-middle"><a title="We're open to contributions" target="_blank" class="text-base mr-2 sm:mr-4 text-blue-800 hover:text-blue-700" href="https://github.com/TreewareEarth/treeware.earth"><i class="fa fa-github fa-lg"></i></a></li> --}}
            </ul>
            <a href="https://github.com/TreewareEarth/treeware.earth" class="github-corner mobile-git-link" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#000; color:#fff; position: absolute; top: 0; border: 0; left: 0; transform: scale(-1, 1);" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="#fff" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
            <a href="https://github.com/TreewareEarth/treeware.earth" target="_blank" class="hidden sm:block github-corner" aria-label="View source on GitHub"><svg width="60" height="60" viewBox="0 0 250 250" style="fill:#000; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="#fff" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="#fff" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
        </div>
    </nav>
</header>
<!-- end header -->
