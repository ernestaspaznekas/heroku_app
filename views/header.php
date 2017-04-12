<header>
<nav class="navbar">
	<div class="container">
		<a class="navbar-brand" href="<?php echo APP_URL; ?>">Online Wall Prints Store</a>
		<div class="navbar-right">
			<div class="container" align="rigth">
				<p><?php if ($_SESSION['username']) echo 'Hi, ' . ucfirst($_SESSION['username']); ?></p>
			</div>
		</div>
	</div>
</nav>

<div class="container-fluid breadcrumbBox text-center">
	<ol class="breadcrumb">
		<li class="active"><a href="<?php echo APP_URL; ?>">Home</a></li>
		<li><a href="?controller=products&action=cart">Orders</a></li>
	</ol>
</div>
</header>

<!--
<header>

<div style="text">
	<button class="toggle-nav">
                <span>></span>
          </button>
          <ul class="nav">
                <li class="active"><a href="<?php echo APP_URL; ?>">Home</a></li>
				<li class="loud"><a href="?controller=products&action=cart">Cart</a></li>
          </ul>
</div>
<style type="text/css" media="screen">
@import url(http://fonts.googleapis.com/css?family=Allan);
@import url(http://fonts.googleapis.com/css?family=Droid+Sans);

/* General styles */

body{
  font: 400 20px 'Droid Sans', sans-serif;
  line-height: 1.5em;
      background-color: #fff;  
      color: #c0c5ce;
}

/* Style for header */

header{
      position: relative;
      background-color: #2c353a;
}
header ul.nav{
    overflow: hidden;
}
header ul.nav li{
    position: relative;
      float: left;
      width: 20%;
}
header ul.nav li a{
    display: block;
      height: 50px;
  opacity: 0;
  font: 400 1.15em 'Allan', serif;
      line-height: 50px;
      color: #848e92;
  text-decoration: none;
      text-align: center;
    cursor: default;
      -webkit-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
  &:hover{
    color: #fff;
        background-color: #222b2f;
  }
}

@media screen and (max-width: 600px){
    header ul.nav li{
            float: none;
            width: 100%;
    }
      header ul.nav li a{
            height: 0;
    }
}

/* Style for header with active class name */

header.active ul.nav li a{
      height: 120px;
    opacity: 1;
      line-height: 120px;
      cursor: pointer;
}

@media screen and (max-width: 600px){
    header.active ul.nav li a{
            height: 60px;
            line-height: 60px;
    border-bottom: 1px solid #222b2f;
      }
}

/* Style for the plus button */

button.toggle-nav{
    position: absolute;
  top: 50px;
    left: calc(50% - 30px);
    width: 60px;
      height: 35px;
    background-color: #38a6a6;
  font: 400 1.2em 'Allan', serif;
    color: #fff;
  border: none;
    line-height: 30px;
    vertical-align: middle;
      outline: none;
  cursor: pointer;
    border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      -webkit-transition: all 0.25s ease;
      -moz-transition: all 0.25s ease;
}
button.toggle-nav:hover{
    height: 50px;
}
button.toggle-nav span{
      display: block;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -webkit-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
}

/* Style for the plus button when header has active classe name */

header.active button.toggle-nav{
    top: 120px;
  background-color: #256f6f;
}
header.active button.toggle-nav span{
      -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
}

@media screen and (max-width: 600px){
      button.toggle-nav{
            top: 0;
            left: 15px;
      }
    header.active button.toggle-nav{
            top: 305px;
      }
}

/* Other styles */

.loud{
      text-transform: uppercase;
}
section{
  padding: 3em;
}
h1{
  margin: 1em 0;
  font-size: 40px;
  line-height: 1.5em;
}
p{
  margin: 1em 0;
}
strong{
  color: #93969c;
}

@media screen and (max-width: 600px){
  section{
    padding: 1.5em;
  }
}
</style>
  <script type="text/javascript" >
  	$(document).ready(function(){

      var header = $('header'),
                  btn    = $('button.toggle-nav');

      btn.on('click', function(){
            header.toggleClass('active');
      });

});
  </script>       
</header>
-->