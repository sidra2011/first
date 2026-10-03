
    @extends("layouts.main")
    @section ("titlename")
    home
     @endsection





    @section ("contentbox")
<section class="hero">
    <div class="hero-content">
        <p class="subtitle">Hello, I'm</p>

        <h1>sidra</h1>

        <h2>Web Developer & Designer</h2>

        <p class="description">
            I create modern, responsive and user-friendly websites
            using Laravel, PHP, HTML, CSS and JavaScript.
        </p>

        <div class="hero-buttons">
            <a href="{{ url('/projects') }}" class="btn primary">
                View My Work
            </a>

            <a href="{{ url('/contact') }}" class="btn secondary">
                Contact Me
            </a>
        </div>
    </div>

    <div class="hero-image">
        <div class="profile-circle">
            
        </div>
    </div>
</section>


     @endsection