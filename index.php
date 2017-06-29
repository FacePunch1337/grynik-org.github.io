<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GRYNIK.softwear</title>
	<link rel = "stylesheet" href = "stile.css" type="text/css">
	<style>
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	</style>
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<center>
	<p class="log_log">
	<img src="logo.gif" width="479" height="360" class="logo" z-index: 1;/>
	</p>
   <ul class="menu">
   <li>
        <a href="#"> <img src="menu.png" class="logo2" z-index: 2;/>
        <div class="menu_list">
		
		<ul id="navigation">
		<a>
		<!-- ABOUT -->
				<div id="ABOUT" class="content">
            <ul class="menu_list1">
               <li><a id="link-about" href="about.php"><img src="about.png"/></a></li>
			</ul>
				<p>  </p>
			<!-- ... -->
		<!-- /ABOUT -->
		</a>
		</div>		
		<a>
		<!-- IDEAS -->
		<div id="IDEAS" class="panel">
			<div class="content">
			<ul class="menu_list2">
                <li><a id="link-ideas" href="ideas.php"> <img src="ideas.png"/> </a></li>
			</ul>
			<p>  </p>
		<!-- ... -->
		</div>
		</div>
		<!-- /IDEAS -->
		</a>
			 
			<!-- CAREER -->
		<div id="CAREER" class="panel">
			<div class="content">
			<ul class="menu_list3">
               <li><a id="link-career" href="career.php"> <img src="career.png"/> </a></li>
			</ul>
			<p>  </p>
		<!-- ... -->
		</div>
		</div>
		<!-- /CAREER -->
		
		<!-- CONTACTS -->
		<div id="CONTACTS" class="panel">
			<div class="content">
			<ul class="menu_list4">
               <li><a id="link-contacts" href="contacts.php"> <img src="contacts.png"/> </a></li>
			</ul>
			<p>  </p>
		<!-- ... -->
		</div>
		</div>
		<!-- /CONTACTS -->
        </div>
		</ul>
    </li>
	</p class="log_log">
	</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript"> 
	$(document).ready(function(){ 
		var body = $("body"); 
		body.fadeIn(400); 
		$(document).on("click", "a:not([href^='#']):not([href^='tel']):not([href^='mailto'])", function(e) { 
			e.preventDefault(); 
			$("body").fadeOut(400); 
			var self = this;
			setTimeout(function () { 
				window.location.href = $(self).attr("href"); 
			}, 400); 
		}); 
	}); 
</script>
</body>
</html>