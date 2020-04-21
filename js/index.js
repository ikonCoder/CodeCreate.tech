  // JQUERY


  //From Valid. 

$(document).scroll(function(){
  $(".serviceImg-container").animate({right: '300px'});
  $(".serviceImg-container").show(2000, "linear");
});

$(document).ready(function () {
  $('.submit').click(function (event){
    console.log("Clicked Button") 

    var name = $('.name').val()
    var email = $('.email').val()
    var subject = $('.subject').val()
    var message = $('.message').val()
    var statusElm = $('.status')
    statusElm.empty()

    if(name.length > 1) {
      statusElm.append('<div>Name is valid</div>')
    } else{
      event.preventDefault()
      statusElm.append('<div>Name is not valid</div>')
    }

    if(email.length > 5 && email.includes('@') && email.indludes('.')) {
      statusElm.append('<div>Email is valid</div>')
    } else{
      event.preventDefault()
      statusElm.append('<div>Email is not valid</div>')
    }

    if(subject.length > 2) {
      statusElm.append('<div>Subject is valid</div>')
    } else{
      event.preventDefault()
      statusElm.append('<div>Subject is not valid</div>')
    }

    if(message.length > 20) {
      statusElm.append('<div>Message is valid</div>')
    } else{
      event.preventDefault()
      statusElm.append('<div>Message is not valid</div>')
    }
  })
})


// Home page modals

// Get the modal
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var service1 = document.getElementById("Btn1");
var service2 = document.getElementById("Btn2")

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];


// When the user clicks on the button, open the modal
service1.onclick = function() {
  modal1.style.display = "block";
}
service2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}





