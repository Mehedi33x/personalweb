<div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            {{-- <a class="navbar-brand" href="#">
                 Resume
            </a> --}}

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#intro" class="nav-link smoothScroll">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <div class="mt-lg-0 mt-3 mb-4 mb-lg-0">
                    <a href="{{ url('/backend/cv/CV-Mehedi-Hasan.pdf') }}" class="custom-btn btn" download>Download
                        CV</a>
                </div>
            </div>

        </div>
    </nav>
</div>
