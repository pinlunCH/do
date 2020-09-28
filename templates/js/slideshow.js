var Slideshow = function(element){
	var slide = this;
	slide.left = 0;
	slide.element = element; 
	slidesWidth = element.clientWidth; 
	numberofSlide = element.childElementCount; 
	slide.timer = 0;
	slide.speed = 3000;
	slide.timer= null;
	btnBack = document.getElementById("back");
	btnNext = document.getElementById("next");
	slidemildwidth = -1*(element.clientWidth); 

	slide.next = function(){
		slide.left = slide.left - (slidesWidth/numberofSlide);

		if(slide.left <= slidemildwidth)
		{
			slide.left = 0;
		}
		slide.element.style.left = slide.left+"px";
	}
	
	slide.back = function(){
		slide.left = slide.left + (slidesWidth/numberofSlide);
		if(slide.left>0)
		{
			slide.left = slidemildwidth +slide.left
		}
		slide.element.style.left = slide.left+"px";
	}

	slide.start = function()
	{	
		slide.timer = setInterval(slide.next, slide.speed);
	}

	slide.stop = function()
	{
		clearInterval(slide.timer);
	}


	slide.element.addEventListener("mouseover", function(){
		slide.stop();
	});
	slide.element.addEventListener("mouseout", function(){
		slide.start();
	});

slide.start();

}

 var arrmyslideshow = document.getElementsByClassName("strip");
for (var i =0; i<arrmyslideshow.length; i++) {
	new Slideshow(arrmyslideshow[i]);
}
console.log(arrmyslideshow);