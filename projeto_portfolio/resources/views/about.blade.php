<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    @include('navbar')
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Sobre</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="/css/images/img-1.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Sou Juliane, Bacharel em Sistemas de Informação pelo Instituto Federal de Educação Ciencias e tecnologia do Ceará<span class="typing-2"></span></div>
                    <a href="{{route('export')}}"> Download CV</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>