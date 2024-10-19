@extends('layout.master')

@section('title', 'My Portfolio')

@section('content')
<div class="portfolio-page">

   
    <section class="intro">
        <h1>Welcome to Juliane's Activities</h1>
    </section>


    <section class="summary" id="summary">
        <h2>Summary</h2>
        <div class="summary-grid">
            <div class="summary-item">
                <a="/labs/1">
                    <h3>Views</h3>
                    <p>a template file that defines the HTML structure and layout of the user interface. It allows developers to separate the presentation layer from the application logic, typically written in Blade, Laravel's templating engine. Views are used to render data passed from the controller and can include dynamic content using Blade syntax..</p>
                </a>
            </div>
            <div class="summary-item">
                <a="/labs/2">
                    <h3>Routes</h3>
                    <p>are defined in the routes/web.php file and specify URL patterns mapped to actions in controllers. They enable the application to respond to HTTP requests, facilitate organized application structure, and support parameters and middleware for added functionality. Routes help in managing the flow of the application by linking user requests to appropriate logic.</p>
                </a>
            </div>
            <div class="summary-item">
                <a="/labs/3">
                    <h3>Layouts</h3>
                    <p>are reusable template files that provide a common structure for multiple views, allowing develepors to maintain
                    a consistent design accross the application. They typically include sections for headers, footers, and content areas, and can be extended. </p>
                </a>
            </div>
            <div class="summary-item">
                <a="/labs/4">
                    <h3>Middleware</h3>
                    <p>are filters that process HTTP requests entering the application. They can perform actions before or after the request is handled, such as authentication, logging, or modifying request/response data. Middleware can be applied globally or to specific routes, allowing for flexible and reusable functionality throughout the application.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <h2>Projects</h2>
        <div class="project-grid">
<div class="project-item">
    <a href="{{ url('/project/view') }}">
        <img src="{{ asset('images/view1.png') }}" alt="Project 1 Image">
        <h3>ACTIVITY 1</h3>
    </a>
</div>
<div class="project-item">
    <a href="{{ url('/project/route') }}">
        <img src="{{ asset('images/Routes1.png') }}" alt="Project 2 Image">
        <h3>ACTIVITY 2</h3>
    </a>
</div>
<div class="project-item">
    <a href="{{ url('/project/layout') }}">
        <img src="{{ asset('images/Layouts1.png') }}" alt="Project 3 Image">
        <h3>ACTIVITY 3</h3>
    </a>
</div>
<div class="project-item">
    <a href="{{ url('/project/middleware') }}">
        <img src="{{ asset('images/Middleware.png') }}" alt="Project 4 Image">
        <h3>ACTIVITY 4</h3>
    </a>
</div>

        </div>
    </section>

    <section class="profile" id="profile">
    <h2>Profile</h2>
    <h1 class="name">Juliane Rebecca S. Dayandante</h1>
    <p class="title">BSIT-3C</p>
    <button class="download-cv" onclick="requestAccess()">Download CV</button>
</section>


</div>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    function requestAccess() {
    const name = prompt("Please enter your name to download the CV:");
    if (name) {
        const link = document.createElement('a');
        link.href = 'docs/juliane.pdf';
        link.download = 'juliane.pdf'; 
        link.click();
    } else {
        alert("You must enter your name to access the CV.");
    }
}

</script>

@endsection
