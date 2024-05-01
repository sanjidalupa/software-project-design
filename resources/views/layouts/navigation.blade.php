<nav class="navbar navbar-expand-lg bg-body-tertiary main-nav">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav container">
            <li class="nav-item p-2">
                <a class="nav-link active" href="{{ route('dashboard') }}"> <i class="fa-regular fa-rectangle-list"></i> Dashboard</a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link" href="{{ route('feedbacks.index') }}"><i class="fa-regular fa-comment-dots"></i> Feedbacks</a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link" href="{{ route('auth.logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

@push('customCss')
    <style>
        .nav-link.active {
            color: #7e31cb !important;
            /* background-color: #007bff; */
        }
    </style>
@endpush