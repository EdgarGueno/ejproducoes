<nav>
  <div class="nav-wrapper red">
      <div class="container">
        <a href="#!" class="brand-logo">Project2</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{ route('site.home') }}">Home</a></li>
          <li><a href="{{ route('site.contato') }}">Contato</a></li>
          <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
          <li><a target="blanck" href= "{{ route('admin.login') }}">Acesso</a></li>
          
        </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('site.home') }}">Home</a></li>
          <li><a href="{{ route('site.contato') }}">Contato</a></li>
          <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
          <li><a target="blanck" href="{{ route('admin.login') }}">Acesso</a></li>
        </ul>
        </div>
  </div>
</nav>
