@extends('layout.master')

@section('title', 'Layouts')

@section('content')
<div class="project-detail">
    <h2>Activity 3:</h2>
    <h1>Layouts</h1>
    

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Layouts.png') }}" class="d-block w-100" alt="Layout 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Layouts1.png') }}" class="d-block w-100" alt="Layout 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Layouts2.png') }}" class="d-block w-100" alt="Layout 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Layouts3.png') }}" class="d-block w-100" alt="Layout 3">
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

    <p>We created a layout file in the "Components" folder, defining the HTML structure in Layout.blade.php. Then, we developed three Blade files that extend this layout and updated our routing in routes/web.php to serve these views. We documented our progress with screenshots and provided explanations of the layout's purpose, how views utilize it, and the routing setup while addressing any challenges we encountered.</p>

    <button class="btn download-btn mt-3" onclick="requestAccess()">Download Document</button>
</div>
<script>
function requestAccess() {
    const name = prompt("Please enter your name to download the document:");
    if (name) {
        const link = document.createElement('a');
        link.href = "{{ asset('docs/Dayandante_JulianeRebecca_lab3.docx') }}"; 
        link.download = 'Dayandante_JulianeRebecca_lab3.docx'; 
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
