

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Mis pintores favoritos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      
      <li class="nav-item dropdown">
     
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pintores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('pagina vincent')}}">Vincent van Gogh</a>
          <a class="dropdown-item" href="{{route('pagina leo davinci')}}">Leonardo da Vinci</a>
          <a class="dropdown-item" href="{{route('pagina salvador dali')}}">Salvador Dalí</a>
           <a class="dropdown-item" href="{{route('pagina picasso')}}">Pablo Picasso</a>
        </div>
      </li>
      <a style="color:black" href="{{action('controlador@login')}}" >Cerrar sesion</a>
    </ul>
  </div>
</nav>
<main id="mainpi">