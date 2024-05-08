<link rel="stylesheet" href="{{ URL::asset('css/Header.css') }}">

<div class="header-container">
      <nav class="header">
        <div class="menu">
          <a class="menu-item" href="summary">יציאה</a>
          <a class="menu-item" href="myReports">הדוחות שלי</a>
          <a class="menu-item" href="orderReport">הזמנת דוח</a>
        </div>
        <div class="image-logo">
            <img src="{{ URL::asset('/assets/logo.png') }}" alt="Logo" />
        </div>
        <div class="profile">
        <i class="arrow down"></i>
            <span class="name">
               שלום רועי בסון
            </span>
            <div class="circle">
                ר.ב
            </div>
        </div>
        
      </nav>

      <nav class="second-nav bottom-line">
        <a to="/">
            <img
            src="{{ URL::asset('assets/downloadLogo.png') }}"
            alt="downloadLogo"
            />
        </a>
          <a class="{{ Request::is('socialNetworks') ? 'second-nav-item active' : 'second-nav-item' }}" href="socialNetworks">
            <p>רשתות חברתיות</p>
          </a>
            <a class="{{ Request::is('networkMentions') ? 'second-nav-item active' : 'second-nav-item' }}" href="networkMentions">
            <p>אזכורים ברשת</p>
        </a>
            <a class="{{ Request::is('legalStatus') ? 'second-nav-item active' : 'second-nav-item' }}" href="legalStatus">
            <p>סטטוס משפטי</p>
        </a>
            <a class="{{ Request::is('dataProviders') ? 'second-nav-item active' : 'second-nav-item' }}" href="dataProviders">
            <p>מאגרי מידע</p>
        </a>
            <a class="{{ Request::is('business') ? 'second-nav-item active' : 'second-nav-item' }}" href="business">
            <p>עסקי</p>
        </a>
            <a class="{{ Request::is('/') ? 'second-nav-item active' : 'second-nav-item' }}" href="/">
            <p>סיכום</p>
        </a>
      </nav>
      </div>

