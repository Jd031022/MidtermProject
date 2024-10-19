@extends('layout.master')

@section('title', 'Routes')

@section('content')
<div class="project-detail">
    <h2>Activity 2:</h2>
    <h1>Routes</h1>
    
    <!-- Carousel of Screenshots -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Routes.png') }}" class="d-block w-100" alt="Routes 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Routes1.png') }}" class="d-block w-100" alt="Routes 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Routes2.png') }}" class="d-block w-100" alt="Routes 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <p>We created a simple route for the homepage that returns a view with a welcome message. Additionally, we set up routes for an "About Us" page, a redirect from /home to the homepage, and a "Contact Us" form.

We also defined a route with a required username parameter to display personalized welcome messages and modified it to make the username optional, defaulting to "Welcome, Guest!" if no username is provided. To ensure data integrity, we applied regular expression constraints to restrict the username to only accept alphabetic characters.</p>

    <button class="btn download-btn mt-3" onclick="requestAccess()">Download Document</button>

</div>
<script>
function requestAccess() {
    const name = prompt("Please enter your name to download the document:");
    if (name) {
        const link = document.createElement('a');
        link.href = "{{ asset('docs/Dayandante_JulianeRebecca_lab2.docx') }}"; 
        link.download = 'Dayandante_JulianeRebecca_lab2.docx'; 
        link.click();
    } else {
        alert("You must enter your name to access the document.");
    }
}
</script>
<style>
    .project-detail {
        max-width: 1200px;
        margin: auto;
        padding: 3rem;
        text-align: center;
        color: #fff;
    }

    .project-detail img {
        max-width: 100%;
        border-radius: 10px;
        margin-bottom: 2rem;
        transition: transform 0.3s ease-in-out;
    }
    .carousel-item {
        transition: transform 10s ease-in-out; 
    }

    .project-detail img:hover {
        transform: scale(1.05);
    }

    .project-detail p {
        font-size: 1.2rem;
        color: #fff;
        margin-bottom: 2rem;
    }

    .project-features li {
        transition: color 0.3s;
    }

    .project-features li:hover {
        color: #e94560;
    }

    .tech-stack ul, .project-features ul {
        list-style: none;
        padding: 0;
    }

    .download-btn {
    background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
    color: #fff; /* Text color */
    border: none; /* Remove border */
    padding: 10px 20px; /* Button padding */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer on hover */
    margin-right: 10px; /* Space between button and arrow/text */
}

.download-btn:hover {
background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);

}
</style>
@endsection
