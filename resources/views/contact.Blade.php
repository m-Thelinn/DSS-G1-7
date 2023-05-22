@extends('layouts.app')

@section('content')
<section class="contact-bg mb-50" id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text">
            <h1 class="home-title mb-2">CONTACTO</h1>
            <p class="contact-subtitle mb-5">Sobre nosotros</p>
                <p class="home-p">
                    Somos un equipo de cobertura de Esports de Valorant apasionado por proporcionar información precisa 
                    y actualizada sobre calendarios, resultados de partidos, clasificaciones de equipos y estadísticas detalladas. 
                    Nos enorgullece ser el mejor recurso para la comunidad de Valorant y mantener a los fanáticos actualizados sobre 
                    los últimos acontecimientos en el mundo de los Esports de Valorant.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="d-flex">
            <div>
                <img class="contact-img" src="/img/miguel.png" alt="">
                <br><p class="section-title-contact">JEFE DE PROYECTO</p>
                <p class= "text">MIGUEL RODRÍGUEZ SÁNCHEZ</p>
                <p class="contact-email-text"><a href="mailto:jcbs6@gcloud.ua.es">mrs121@gcloud.ua.es</a></p>
                <p>
                    <a href="https://www.instagram.com/miguelrs_02/">
                        <img class="contact-img-rrss" img src="/img/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://twitter.com/th3linn/">
                        <img class="contact-img-rrss" img src="/img/twitter.png" alt="Twitter">
                    </a>
                </p>
            </div>
            <div>
                <img class="contact-img" src="/img/paco.JPG" alt="">
                <br><p class="section-title-contact">DESARROLLADOR BACKEND</p>
                <p class= "text">FRANCISCO FERNÁNDEZ RUIZ</p>
                <p class="contact-email-text"><a href="mailto:jcbs6@gcloud.ua.es">ffr9@gcloud.ua.es</a></p>
                <p>
                    <a href="https://www.instagram.com//">
                        <img class="contact-img-rrss" img src="/img/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://twitter.com//">
                        <img class="contact-img-rrss" img src="/img/twitter.png" alt="Twitter">
                    </a>
                </p>
            </div>
            <div>
                <img class="contact-img" src="/img/demian.png" alt="">
                <br><p class="section-title-contact">MARKETING</p>
                <p class= "text">DEMIAN CALVO RODRÍGUEZ</p>
                <p class="contact-email-text"><a href="mailto:jcbs6@gcloud.ua.es">dcr28@gcloud.ua.es</a></p>
                <p>
                    <a href="https://www.instagram.com/demiancr12/">
                        <img class="contact-img-rrss" img src="/img/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://twitter.com/demiancr_12/">
                        <img class="contact-img-rrss" img src="/img/twitter.png" alt="Twitter">
                    </a>
                </p>
            </div>
            <div>
                <img class="contact-img" src="/img/julio.jpeg" alt="">
                <br><p class="section-title-contact">DESARROLLADOR FRONTEND</p>
                <p class= "text">JULIO CÉSAR BASTIDAS SÁNCHEZ</p>
                <p class="contact-email-text"><a href="mailto:jcbs6@gcloud.ua.es">jcbs6@gcloud.ua.es</a></p>
                <p>
                    <a href="https://www.instagram.com/juliobastidas11/">
                        <img class="contact-img-rrss" img src="/img/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://twitter.com/juliobastidass/">
                        <img class="contact-img-rrss" img src="/img/twitter.png" alt="Twitter">
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section><br><br><br>
    <div class="container home-text">
        <div class="row justify-content-center">
            <div class="col-md-8 text">
                <div>
                    <div class="card-header row justify-content-center mb-4 section-title">CONTÁCTANOS</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="d-flex flex-column align-items-center mb-3">
                                <label for="name" class="col-md-4 col-form-label">Nombre</label>

                                <div class="col-md-6">
                                    <input name="nombre" id="name" type="text" class="login-register-form form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-center mb-3">
                                <label for="email" class="col-md-4 col-form-label">Correo electrónico</label>

                                <div class="col-md-6">
                                    <input name="email" id="email" type="email" class="login-register-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-center mb-3">
                                <label for="asunto" class="col-md-4 col-form-label">Asunto</label>

                                <div class="col-md-6">
                                    <input id="asunto" type="asunto" class="login-register-form form-control @error('asunto') is-invalid @enderror" name="asunto" value="{{ old('asunto') }}" required autocomplete="asunto">

                                    @error('asunto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-center mb-3">
                            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>
                            <div class="col-md-6">
                                    <textarea id="mensaje" type="textarea" class="textarea-form form-control @error('mensaje') is-invalid @enderror" name="mensaje" value="{{ old('mensaje') }}" required autocomplete="mensaje"></textarea>

                                    @error('asunto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-column align-items-center mb-3">
                                    <a class="btn-default" href="mailto:mrs121@gcloud.ua.es">Enviar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
