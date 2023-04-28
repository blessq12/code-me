<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sleep">
    <div class="container">
      <a class="navbar-brand" href="{{ route('main.index') }}">[CODE-ME]</a>
      
      <button class="d-flex d-md-none d-lg-none mobile-toggler">
        <div class="btn-overlay"></div>
        <svg id="Layer_8" xmlns="http://www.w3.org/2000/svg" width="30px" viewBox="0 0 513 512"><rect  x=".5" y="82.44" width="512" height="64.81" rx="20" ry="20"/><rect  x=".5" y="223.59" width="512" height="64.81" rx="20" ry="20"/><rect  x=".5" y="364.75" width="512" height="64.81" rx="20" ry="20"/></svg>
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