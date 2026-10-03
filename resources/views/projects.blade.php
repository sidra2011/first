@extends("layouts.main")

@section("titlename", "Projects")

@section("contentbox")

    <div class="page-heading">
        <h1>My Projects</h1>
        <p>Here are some of the projects I have worked on.</p>
    </div>

    <div class="projects-grid">

        @foreach($tabledata as $prj)

            <div class="project-card">

                <h2 class="project-title">
                    {{ $prj->title }}
                </h2>

                <p class="project-description">
                    {{ $prj->description }}
                </p>

                <div class="tech-used">
                    {{ $prj->tech_used }}
                </div>

                <a href="{{ $prj->url }}"
                   target="_blank"
                   class="project-url">
                    View Project →
                </a>

                <div class="project-actions">


                </div>

            </div>

        @endforeach

    </div>

@endsection