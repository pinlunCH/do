var on = document.getElementById("open");
var off = document.getElementById("close");



function Menu()
{
	var menu = this;
	menu.element = document.getElementById("menu");	

	menu.show = function(){
		menu.element.style.display ="flex";
	}
	menu.hide = function(){
		menu.element.style.display = "none";
	}

	on.addEventListener("click", function(){
		menu.show();
	})
	off.addEventListener("click", function(){
		menu.hide();
	})
}

Menu();