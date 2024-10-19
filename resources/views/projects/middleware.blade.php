@extends('layout.master')

@section('title', 'Middleware')

@section('content')
<div class="project-detail">
    <h2>Activity 4:</h2>
    <h1>Middleware</h1>
    
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Middleware.png') }}" class="d-block w-100" alt="Middleware Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Middleware1.png') }}" class="d-block w-100" alt="Middleware Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Middleware2.png') }}" class="d-block w-100" alt="Middleware Image 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Middleware3.png') }}" class="d-block w-100" alt="Middleware Image 3">
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

    <p>In Part 1, we created and registered CheckAge and LogRequests middleware. CheckAge checks if a user's age is at least 18, redirecting to an “Access Denied” page if not, while LogRequests logs HTTP request details to log.txt. We registered both middleware globally and for specific routes in app/Http/Kernel.php.</p>
<p>In Part 2, we assigned the CheckAge middleware to a route group for the welcome and dashboard pages, testing it with various age values to ensure it functions correctly.</p>
   <p>In Part 3, we modified the CheckAge middleware to accept a parameter for minimum age and created a new route enforcing a 21-year age restriction.</p>
   <button class="btn download-btn mt-3" onclick="requestAccess()">Download Document</button>
</div>


<script>
function requestAccess() {
    const name = prompt("Please enter your name to download the document:");
    if (name) {
        const link = document.createElement('a');
        link.href = "{{ asset('docs/Dayandante_JulianeRebecca_lab4.docx') }}"; 
        link.download = 'Dayandante_JulianeRebecca_lab4.docx'; 
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
        transition: transform 0.5s ease-in-out;
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
