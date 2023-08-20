<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light pb-2" id="ftco-navbar">
    <div class="container">
        <div class="navbar-brand"><span><img src="images/logoo.png" width="200" height="200" alt=""></span></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        @php
        // Impor facade Request
        use Illuminate\Support\Facades\Request;
        @endphp
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link custom-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('academy')}}" class="nav-link custom-link">Academy</a></li>
                <li class="nav-item"><a href="#services" class="nav-link custom-link">Services</a></li>
                <li class="nav-item"><a href="#about" class="nav-link custom-link">about</a></li>
                <li class="nav-item"><a href="#artist" class="nav-link custom-link">Stylist</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link custom-link">Gallery</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link custom-link">Contact</a></li>
                <li class="nav-item my-auto">
                    @if(Auth::check())
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class=" d-none d-lg-inline text-white small">{{Auth::user()->nama}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <form action="{{url('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn dropdown-item">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </button>
                        </form>
                        <form action="{{url('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn dropdown-item">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </button>
                        </form>
                    </div>
                </li>
                @else
                <a href="{{url('login')}}" class="btn btn-primary rounded-0 px-4 py-2">Sign in</a>
                <a href="{{url('register')}}" class="btn btn-dark rounded-0 px-4 py-2">Sign up</a>
                @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- JavaScript scripts and custom scripts go here -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // JavaScript code for handling active tab switching
        var navLinks = $(".custom-link");

        function setActiveLink(link) {
            navLinks.removeClass("active");
            link.addClass("active");
        }

        // Click event handler
        navLinks.on("click", function() {
            setActiveLink($(this));
        });

        // Intersection Observer for scroll-based active tab switching
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var targetLink = navLinks.filter(`[href="${'#' + entry.target.id}"]`);
                    setActiveLink(targetLink);
                }
            });
        });

        // Observe each section
        $("section").each(function() {
            observer.observe(this);
        });

        // Manually check if the top section is in view on page load
        var homeLink = navLinks.eq(0); // Select the first link (Home)
        if ($(window).scrollTop() === 0) {
            setActiveLink(homeLink);
        }

        // Scroll event handler to set Home tab active when scrolling back to top
        $(window).scroll(function() {
            if ($(window).scrollTop() === 0) {
                setActiveLink(homeLink);
            }
        });
    });
</script>
