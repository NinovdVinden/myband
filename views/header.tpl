<div class="sticky">
<header>

<nav>
      <div class="bannerimg">
      <img src="banner.png" alt="" />
    </div>
  <ul>
    <!--<li id="logoli"><a id="niks" href="?action=home"><img src="xlogo.png" alt="xlogo" /></a></li>
    -->
    <li><a href="?action=home">Home</a></li>
    <li><a href="?action=tourdates">Tour dates</a></li>
    <li><a href="?action=audio">X Album</a></li>
    <li><a href="?action=search">Search</a></li>
  </ul>
  <div class="handle"><img src="edxlogo.png" alt="edxlogo" id="edxlogo" /><img src="hamburger.png" alt="hamburger" id="hamburgericon"/></div>
  </nav>
</header>
</div>
<script>
  $('.handle').on('click', function(){
    $('nav ul').toggleClass('showing');
  });
</script>
