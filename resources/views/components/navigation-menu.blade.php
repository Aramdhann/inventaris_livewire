<div>
    <nav class="navbar navbar-expand-lg py-3 bg-dark border-bottom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold">
                <img src="assets/images/logo.png" alt="logo" class="d-inline-block">
                <div class="fw-bold">
                    <p style="line-height: 0px" class="mt-3">Ware</p>
                    <p style="line-height: 0px" class="text-primary">House</p>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin"> <i class="bi bi-house"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i class="bi bi-box2"></i> Inventaris</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="">Category</a>
                            </li>
                            <li class="dropdown-item"><a href="">Product</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"> <i class="bi bi-card-checklist"></i> Transaction</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <li class="nav-item">
                            <button type="submit" class="btn btn-logout text-danger">Log Out</button>
                        </li>
                    </form>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>
