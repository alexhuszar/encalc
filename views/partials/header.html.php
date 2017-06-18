
<header>
  <div class="navbar-fixed">
    <nav class="top-navbar">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Energie</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
           <li><a href="<?php echo url_for('/') ?>">Acasă</a></li>
           <li><a href="<?php echo url_for('/calc') ?>">Calculator</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="mobile-demo">
      <li><a href="<?php echo url_for('/') ?>">Acasă</a></li>
      <li><a href="<?php echo url_for('/calc') ?>">Calculator</a></li>
  </ul>
</header>

<script>
 $(".button-collapse").sideNav();
</script>