  // JQUERY



  $(document).scroll(function(){
    $(".serviceImg-container").animate({right: '300px'});
    $(".serviceImg-container").show(2000, "linear");
});


//JavaScript



//Form Validation 

function Validation()
{
  let firstName = document.getElementById("firstName");
  let lastName = document.getElementById("lastName");
  let msg = document.getElementById("message");


  if(firstName.value == "" || lastName.value == "" || msg.value == "")
  {
  alert("humm.. looks like you are missing some information!");
  }

  else{
    alert("Awesome, your message has been sent!");
  }

}

//Shows prices for services packages
 
const bluredImage = document.getElementsByClassName("service-image");
const routeBtn = document.getElementsByClassName("serviceDetailText");
routeBtn.addEventListener("click", blurImage2);
 


function blurImage2(){
  if(true){
    bluredImage.className = "blured-image";
  } 
  else{
    return("null");
  }
}


