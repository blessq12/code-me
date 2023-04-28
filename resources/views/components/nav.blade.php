<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light position-fixed">
    <div class="container">
      <a class="navbar-brand" href="{{ route('main.index') }}">CODE-ME</a>
      
      <button class="d-flex d-md-none d-lg-none mobile-toggler">
        <div class="btn-overlay"></div>
        <object data="{{ asset('/assets/icons/menu.svg') }}" width="30px" type=""></object>
      </button>
        
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="{{ route('main.index') }}" class="nav-link">Главная</a>
          </li>

          <li class="nav-item">
            <a href="{{ route('main.services') }}" class="nav-link">Услуги</a>
          </li>

          <li class="nav-item">
            <a href="{{ route('main.portfolio') }}" class="nav-link">Портфолио</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('main.contact') }}" class="nav-link">Контакты</a>
          </li>
          <li class="nav-item cta">
            <a href="contact.html" class="nav-link">
              <span>Задать вопрос</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- nav -->