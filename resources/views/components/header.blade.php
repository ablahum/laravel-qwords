<nav class="navbar navbar-expand-lg" style="
background: rgb(255,109,11);
background: linear-gradient(180deg, rgba(255,109,11,1) 0%, rgba(255,178,126,1) 10%, rgba(255,255,255,1) 100%);
">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/logo.webp') }}" alt="logo" width="120">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="w-100 d-flex flex-column flex-lg-row justify-content-evenly align-items-lg-center">
          <ul class="navbar-nav fw-bold">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cloud Hosting
              </a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Server
              </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Domain
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Email Suite
            </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Service
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Internet Access
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">🎁 Promo</a>
          </li>
        </ul>

        <a href="#" class="btn text-light rounded-pill px-4 py-1 ms-lg-3 mt-2 mt-lg-0" style="background-color: #ff6d0b;">Login</a>
      </div>
    </div>
  </div>
</nav>