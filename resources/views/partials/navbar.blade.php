<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">Ahmad Farhan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active': ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Profile") ? 'active': ''}}" href="/Profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Job Experience") ? 'active': ''}}" href="/Experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Masukan") ? 'active': ''}}" href="/Masukan">Masukan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>