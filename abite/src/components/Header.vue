<template>
  <div class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
      <div class="container">
        <h1 href="/index.html" class="navbar-brand text-uppercase font-weight-bold">
          {{ Companyname }}
          <img class="headerlogo" src="/src/assets/img/Self-logo Blackpng.png" alt="">
          <!-- href="/index.html" -->
        </h1>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
          class="navbar-toggler navbar-toggler-right">
          <i class="fa fa-bars"></i>
        </button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="/index.html" class="nav-link text-uppercase font-weight-bold">主页<span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-uppercase font-weight-bold">关于我们</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-uppercase font-weight-bold">案例</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-uppercase font-weight-bold">服务</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-uppercase font-weight-bold">市场</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-uppercase font-weight-bold">团购</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>

  export default {
    name: "Header",
    props: {
      Companyname: String,
    }
  }

</script>

<style>
  .headerlogo {
    width: 100%;
    height: 100%;

  }

  /*nav bar*/
  .navbar {
    transition: all 0.4s;
  }

  .navbar .nav-link {
    color: grey;
  }

  .navbar .nav-link:hover,
  .navbar .nav-link:focus {
    color: grey;
    text-decoration: none;
  }

  .navbar .navbar-brand {
    color: grey;
  }

  /* Change navbar styling on scroll */
  .navbar.active {
    background: grey;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
  }

  .navbar.active .nav-link {
    color: #555;
  }

  .navbar.active .nav-link:hover,
  .navbar.active .nav-link:focus {
    color: #555;
    text-decoration: none;
  }

  .navbar.active .navbar-brand {
    color: #555;
  }
</style>