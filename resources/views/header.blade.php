
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="assets/images/logo.png" alt="Softy Pinko"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Home</a></li>
                            <li><a href="#features">About</a></li>
                            <li><a href="#work-process">Services</a></li>
                            <li><a href="#pricing-plans">Pricing</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                                @if (Route::has('login'))
                                    @auth
                                     <li>
                                        <x-app-layout>

                                        </x-app-layout>
                                    </li>
                                    @else
                                      <li> <a href="{{ route('login') }}" class="">Log in</a></li>

                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="">Register</a></li>
                                        @endif
                                    @endauth
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
