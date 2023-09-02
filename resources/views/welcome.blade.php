@extends('layouts.app')
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-bs-ride="carousel">
        {{-- SLIDER HOME --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ Vite::asset('resources\img\krista-mangulsone-9gz3wfHr65U-unsplash.jpg') }}" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources\img\andrew-s-ouo1hbizWwo-unsplash.jpg') }}" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/img/kate-stone-matheson-uy5t-CJuIK4-unsplash.jpg') }}"
                    class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    {{-- FIEN SLIDER HOME --}}
    {{-- INIZIO JUMBOTRON --}}
    <div class="jumbotron p-5 mb-4 bg-dark">
        <div class="container py-2">
            {{-- LOGO AZIENDALE --}}
            <div class="logo_laravel">
                <img src="{{ Vite::asset('resources\img\BoolPetCare@4x.png') }}" class="w-25" alt="Logo_Boolpetcare">
            </div>
            {{-- TITOLO HOME --}}
            <h1 class="display-5 fw-bold text-info m-4">
                Benvenuti su BoolPetCare!
            </h1>
            {{-- SLOGAN --}}
            <h4 class="col-md-8 fs-4 text-white">"La tua felicità cammina su quattro zampe, affidaci le sue cure!"</h4> <br>
            {{-- LINK ALLA PAGINA CONTATTI --}}
            <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-lg" type="button">Contattaci</a>
            <br>
        </div>
    </div>
    {{-- PARAGRAFO DESCRIZIONE AZIENDA --}}
    <div class="content bg-dark">
        <div class="container">
            <h2 class="text-warning"><em>"Dedichiamo la nostra Vita a migliorare la Loro"</em></h2>
            <hr>
            <h4 class="text-white">Offriamo una vasta gamma di servizi dedicati alla cura degli animali domestici, con un
                team appassionato e prodotti di alta qualità. <br>
                <br>
                Garantiamo ai tuoi amici a quattro zampe una vita sana, felice e piena di amore.<br>
                <br>
                Scopri come possiamo migliorare la loro qualità di vita oggi!
            </h4>
        </div>
    </div>
    {{-- FINE PARAGRAFO DESCRIZIONE AZIENDA --}}
    {{-- FINE JUMBOTRON --}}
    <hr class="m-5">
    {{-- INIZIO FOOTER --}}
    <footer class="bg-dark text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    {{-- IMMAGINE FOOTER --}}
                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;">
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/animal-shelter/logo.png" height="70"
                            alt="" loading="lazy" />
                    </div>
                    {{-- SLOGAN SOTTO IMG FOOTER --}}
                    <p class="text-center">Abbiamo il cuore peloso per gli animali</p>
                    {{-- LINK SOCIAL --}}
                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                        <li>
                            <a class="text-white px-2" href="#!"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a class="text-white px-2" href="#!"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="text-white ps-2" href="#!"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Animali</h5>
                    {{-- MENU ANIMALI --}}
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Servizi di Emergenza</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('admin.animals.index') }}" class="text-white"><i
                                    class="fas fa-paw pe-3"></i>SERVIZI SCHEDATURA</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Servizi Vaccinazioni</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Animali in adozione</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Regali per il tuo
                                cucciolo</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Volunteer activities</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">BoolPetCare</h5>
                    {{-- Lista servizi aziendali --}}
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Informazioni generali</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Chi siamo</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Statistiche</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Lavora con noi</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Tendenze</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('contacts.create') }}" class="text-white"><i
                                    class="fas fa-paw pe-3"></i>CONTATTI</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Contatti</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-map-marker-alt pe-2"></i>Milano, Via Boolean, 42, Italia</p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope pe-2 mb-0"></i>info@boolpetcare.it</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 BoolPetCare Copyright:
            <a class="text-white" href="http://127.0.0.1:8000/">BoolPetCare.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    {{-- FINE FOOTER --}}
@endsection
