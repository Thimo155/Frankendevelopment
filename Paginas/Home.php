<html>
<head>
	<title>Franken Webdevelopment</title>
    <link rel="stylesheet" href="Design/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="Design/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="Design/style.css" />
	 <script>
    $(document).ready(function(){
			$(".down").attr("disabled", "disabled");
			setTimeout(function() {
			$(".down").removeAttr("disabled");
			}, 3000);

			var div1 = $(".navbar-default");
            var newNav = div1.clone(true);
            newNav.addClass('slide-in-nav');
            //$("body").css("overflow", "initial");
            div1.before(newNav);
            div1.remove();

			var div2 = $(".panel-footer");
            var newFooter = div2.clone(true);
            newFooter.addClass('slide-in-footer');
            div2.before(newFooter);
            div2.remove();

            var div3 = $(".Commend");
            var newCommend = div3.clone(true);
            newCommend.addClass('slide-in');
            div3.before(newCommend);
            div3.remove();

			$(".down").click(function(){

				if($(this).attr('data-click-state') == 1) {
				$(this).attr('data-click-state', 0)
				$(".down").removeClass("rotate");
				$(".MoreInfo").removeClass("slideUp");
				$(".down").attr("disabled", "disabled");
				setTimeout(function() {
				$(".down").removeAttr("disabled");
				}, 2000);

				var div3 = $(".Commend");
				var newCommend = div3.clone(true);
				newCommend.addClass('slide-in2');
				div3.before(newCommend);
				div3.remove();

				var div7 = $(".down");
				var rotationBack = div7.clone(true);
				rotationBack.addClass("rotate2");
				div7.before(rotationBack);
				div7.remove();

				var div8 = $(".MoreInfo");
				var OldInfo = div8.clone(true);
				OldInfo.addClass("slideUp3");
				div8.before(OldInfo);
				div8.remove();

				} else {
				$(this).attr('data-click-state', 1)
				$(".down").removeClass("rotate2");
				$(".Commend").removeClass("slide-in");
				$(".Commend").removeClass("slide-in2");
				$(".MoreInfo").removeClass("slideUp3");

				$(".down").attr("disabled", "disabled");
				setTimeout(function() {
				$(".down").removeAttr("disabled");
				}, 2000);

				var div4 = $(".MoreInfo");
				var NewInfo = div4.clone(true);
				NewInfo.addClass("slideUp");
				div4.before(NewInfo);
				div4.remove();

				var div5 = $(".Commend");
				var oldCommend = div5.clone(true);
				oldCommend.addClass("slideUp2");
				div5.before(oldCommend);
				div5.remove();

				var div6 = $(".down");
				var rotation = div6.clone(true);
				rotation.addClass("rotate");
				div6.before(rotation);
				div6.remove();
				}
			});
    });
    </script>
</head>
<body>

    <!-- Begin Website -->
    <div class="website">
        <?php
            $home = new pagina;
            $home->menu();
            $home->commend();
            $home->info();
      		$home->footer();
      		$home->loginModal();
        ?>
    </div>
</body>
</html>
