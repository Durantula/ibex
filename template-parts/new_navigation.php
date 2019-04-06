<header class="main-nav sticky-navigation">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand initial-brand" href="/"><img src="/assets/img/white-uptick-logo.png" alt="Uptick" /></a>
      <a class="navbar-brand hidden-brand" href="/"><img src="/assets/img/simple_logo.png" alt="Uptick" /></a>

      <button id="nav-icon1" class="navbar-toggler" type="button" aria-controls="navbardropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item {% if page.section == 'home' %}active{% endif %}"> <a class="nav-link" href='/'>Solutions</a></li>
          <li class="nav-item {% if page.section == 'home' %}active{% endif %}"> <a class="nav-link" href='/'>Features</a></li>
          <li class="nav-item {% if page.section == 'home' %}active{% endif %}"> <a class="nav-link" href='/'>Contact Us</a></li>
          <li class="nav-item {% if page.section == 'home' %}active{% endif %}"> <a class="nav-link" href='/'>Help</a></li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item {% if page.section == 'contact' %}active{% endif %}"> 
            <a class="nav-link nav-link-call" href='/contact/'><img src="/assets/img/ph" alt="">1300 657 436</a>
          </li>
          <li class="nav-item navigation-action {% if page.section == 'contact' %}active{% endif %}"> <a class="nav-link" href='/contact/'>Book a demo</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
