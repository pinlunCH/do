var theForm = document.getElementById("form");

function Form()
{
	var form = this;
	needtoCheck = document.querySelectorAll('[data-required]');
	console.log(needtoCheck);
	validateError = false;

	form.validate = function(){
		for(var i=0;i<needtoCheck.length;i++)
		{
			
			eachForms = needtoCheck[i];
			field = eachForms.getElementsByTagName("input")[0];
			fieldType = field.type;
			fieldName = field.name;

			showMsg = document.getElementsByClassName("errMsg")[0];
			console.log(showMsg);
			regexStatus = RegexCheck(field.value ,fieldName);

			if (fieldType == "text" ) {

				if(field.value == ""){
						validateError = true;
						showMsg.classList.add("error");
						console.log(field.value);
						
					
				}else{

					if(regexStatus!= true)
					{
						showMsg.classList.add("error");
						showMsg.innerHTML = "please enter valid format.";
						validateError = true;
					}
				}
			}


		}
	}
	theForm.addEventListener("submit", function(event){
		validateError = false;
		form.validate();

		if(validateError)
		{
			event.preventDefault();
		}
	});
}

function RegexCheck(value, name)
{
	var outcome = true;

	if(fieldName == "email")
	{
		var outcome = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
	}else {
		var outcome = /./.test(value);
	}
	console.log(outcome);
	return outcome;
}



Form();