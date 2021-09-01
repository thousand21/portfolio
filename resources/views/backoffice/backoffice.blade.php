<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="assets/img/eripyio.png" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html">Thousand21</a></h1>
      <div class="social-links mt-3 text-center">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
        <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

      </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  </div>
</header><!-- End Header -->

<section class="back-port">
    <h1 class="titre-back">Back Office Blog</h1>
    <div class="divBtn">
        <button class="btn btn-warning" onclick="window.location.href = '/admin/backoffice/blog/create'">Ajouter un portfolio</button>

    </div>
    <h2 style="align-self:center">Portfolios présents sur le site</h2>
    <div class="portForeach">
        @foreach ($dataBlog as $item)
        <div class="card " style="width: 25rem; margin: 3rem">
            <h3>Article : {{$item->id}}</h3>
            <img src="{{asset('assets/img/'.$item->image)}}" class="card-img-top" style="width: 25rem;" alt="...">
            <div class="card-body">
                <h4 class="card-title"> {{$item->titre}}</h4>
                <p class="card-text">{{$item->description}}</p>

                <a href="{{route('showB', $item->id)}}" class="btn btn-warning">SHOW</a>
                <form action="{{route('deleteBlog', $item->id)}}" method="post">
                    @csrf
                    <button class="btn btn-warning" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>