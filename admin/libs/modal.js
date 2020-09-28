var thumbs = document.getElementsByClassName("thumb");

var Modal = function(){
	var modal = this;
	modal.element = document.getElementById("modal");

	modal.show = function(img){
		modal.element.style.display = "flex";
		var imgSrc = img.src;
		document.getElementById("modalimg").src = imgSrc;

	}
	modal.hide = function(){
		modal.element.style.display = "none";
	}

	for(var i=0; i<thumbs.length;i++)
	{
		var currentImage = thumbs[i];
		currentImage.addEventListener("click", function(e){
			var whoWasClicked = e.currentTarget;
			modal.show(whoWasClicked);
		});
	}

	document.getElementById("closeModal").addEventListener("click", function(){
		modal.hide();
	});
	
}
Modal();