$(window).on("load", function(){

	$(".preloader").fadeOut("slow");
});

$(document).ready(function(){
	// navbar shrink
	$(window).on("scroll", function(){
		if($(this).scrollTop() > 90){
	  		$('.navbar').addClass("navbar-shrink");
		}else {
			$('.navbar').removeClass("navbar-shrink");
		}
	});

	//theme
	function toggleTheme(){
		if (localStorage.getItem("covid-theme") !== null){
			if(localStorage.getItem("covid-theme") === "dark"){
				$("body").addClass("dark");
				$("table").addClass("table-dark");
			}
			else{
				$("body").removeClass("dark");
				$("table").removeClass("table-dark");
			}
		}
		updateIcon();
	}
	toggleTheme();

	$(".toggle-theme").on("click", function(){
		$("body").toggleClass("dark");
		if($("body").hasClass("dark")){
			localStorage.setItem("covid-theme","dark");
		}else{
			localStorage.setItem("covid-theme","light");
		}
		updateIcon();
	});  
	function updateIcon(){
		if($("body").hasClass("dark")){
			$(".toggle-theme i").removeClass("fa-moon");
			$(".toggle-theme i").addClass("fa-sun");
		}
		else{
			$(".toggle-theme i").removeClass("fa-sun");
			$(".toggle-theme i").addClass("fa-moon");	
		}
	}

	$.scrollIt({
		topOffset: -50,
		 activeClass: 'active'
	});
	// Navbar Colapse
	$(".nav-link").on("click", function(){
		$(".navbar-collapse").collapse("hide");
	});
	
});