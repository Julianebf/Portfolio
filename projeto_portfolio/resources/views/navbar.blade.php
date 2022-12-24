<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <div class="scroll-up-btn">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </div>
    <div class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfólio</span></a></div>
            <ul class="menu">
                <li><a href= {{route('site.home')}}> Inicio</a></li>
                <li><a href={{route('site.about')}}>Sobre</a></li>
                <li><a href={{route('site.certificate')}}>Certificados</a></li>
                <li><a href={{route('site.specialty')}}>Especialidade</a></li>
                <li><a href={{route('site.projects')}}>Projetos</a></li>
                <li><a href={{route('site.contact')}}>Contato</a></li>
            </ul>
            <div class="menu-btn">
            </div>
        </div>
    </div>
</body>
</html>