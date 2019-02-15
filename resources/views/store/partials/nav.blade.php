<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand main-tittle" href="{{ route('home') }}">storeME</a>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        
        <ul class="nav navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart-show') }}"><i class="fas fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Conocenos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-alt"></i></a>
            </li>
        </ul>

    </div>
</nav>