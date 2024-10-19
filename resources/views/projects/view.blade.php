@extends('layout.master')

@section('title', 'Views')

@section('content')
<div class="project-detail">
    <h2>Activty 1:</h2>
    <h1>Views</h1>
    
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/view1.png') }}" class="d-block w-100" alt="View 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/view2.png') }}" class="d-block w-100" alt="View 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/view3.png') }}" class="d-block w-100" alt="View 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/view5.png') }}" class="d-block w-100" alt="View 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/view6.png') }}" class="d-block w-100" alt="View 3">
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

    <p>In the first activity, I created a Laravel project and initialized it in a Git repository to facilitate version control. This allowed me to track changes effectively and collaborate seamlessly if needed.

Next, I set up the .env file with the necessary database connection details, ensuring that my application could communicate with the database correctly. This step was crucial for storing and retrieving data efficiently.

I then focused on creating at least three views: a homepage, an about page, and a content page. Each view was designed to provide users with relevant information and enhance the overall user experience.

Finally, I created and ran routes to connect these views with the appropriate URLs, allowing users to navigate the application easily. This structured approach helped solidify my understanding of routing in Laravel and improved my ability to manage web application flows effectively.

</p>

    <button class="btn download-btn mt-3" onclick="requestAccess()">Download Document</button>

</div>

<script>
function requestAccess() {
    const name = prompt("Please enter your name to download the document:");
    if (name) {
        const link = document.createElement('a');
        link.href = "{{ asset('docs/Dayandante_JulianeRebecca_lab1.docx') }}"; 
        link.download = 'Dayandante_JulianeRebecca_lab1.docx'; 
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
