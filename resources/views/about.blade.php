
    @extends("layouts.main")
    @section ("titlename")
    about
     @endsection


    @section ("contentbox")
    
    <section class="about-preview">
    <h2>About Me</h2>

    <p>
        I'm a passionate developer who enjoys building clean,
        functional and visually appealing web applications.
    </p>
</section>

<section class="skills">
    <h2>My Skills</h2>

    <div class="skill-grid">
        <div class="skill-card">Laravel</div>
        <div class="skill-card">PHP</div>
        <div class="skill-card">HTML</div>
        <div class="skill-card">CSS</div>
        <div class="skill-card">JavaScript</div>
        <div class="skill-card">MySQL</div>
    </div>
</section>
     @endsection