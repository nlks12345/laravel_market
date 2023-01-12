
// load navbar
$(".nav-placeholder").load("load-navbar.html", function () {
    // change logo img on index.html & explore.html
    currentLocation = $(location).attr('pathname');
    // console.log(currentLocation);

    // replace sidenav button when opened
    $(".side-nav .fa-bars").removeClass("fa-bars").addClass("fa-times");
    $(".side-nav .button-collapse").removeClass("m-0").addClass("btn-close ml-auto mr-3 mt-3")

    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    // var ps = new PerfectScrollbar(sideNavScrollbar);

});

// disable mousewheel on a input number field when in focus
// (to prevent Cromium browsers change the value when scrolling)
$('form').on('focus', 'input[type=number]', function (e) {
    $(this).on('wheel.disableScroll', function (e) {
        e.preventDefault()
    })
})
$('form').on('blur', 'input[type=number]', function (e) {
    $(this).off('wheel.disableScroll')
})

$(".form-control.prefix-icon").on("focusin", function () {
    $(this).prev(".input-group-text").css({
        'box-shadow': '0 0 0 0.25rem rgba(255, 157, 0, 0.25)',
        'border-color': '#ffce80',
    });
});

$(".form-control.prefix-icon").on("focusout", function () {
    $(this).prev(".input-group-text").css({
        'box-shadow': 'none',
        'border-color': '#ced4da',
    });
});


// var loadFileAsset = function(event) {
// 	var image = document.getElementById('output_asset');
// 	image.src = URL.createObjectURL(event.target.files[0]);
// };

// var loadFileCollection = function(event) {
// 	var image = document.getElementById('output_collection');
// 	image.src = URL.createObjectURL(event.target.files[0]);
//     image.style
// };

let imgInput = document.getElementById('upload_asset');
  imgInput.addEventListener('change', function(e) {
    if(e.target.files) {
      let imageFile = e.target.files[0]; //here we get the image file
      var reader = new FileReader();
      reader.readAsDataURL(imageFile);
      reader.onloadend = function (e) {
        var myImage = new Image(); // Creates image object
        myImage.src = e.target.result; // Assigns converted image to image object
        myImage.onload = function(ev) {
          var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
          var myContext = myCanvas.getContext("2d"); // Creates a contect object
          myCanvas.width = myImage.width; // Assigns image's width to canvas
          myCanvas.height = myImage.height; // Assigns image's height to canvas
          myContext.drawImage(myImage,0,0); // Draws the image on canvas
          let imgData = myCanvas.toDataURL("image/jpeg",0.75); // Assigns image base64 string in jpeg format to a variable
        }
      }
    }
  });

  let imgInputCollection = document.getElementById('upload_collection');
  imgInputCollection.addEventListener('change', function(e) {
    if(e.target.files) {
      let imageFile = e.target.files[0]; //here we get the image file
      var reader = new FileReader();
      reader.readAsDataURL(imageFile);
      reader.onloadend = function (e) {
        var myImage = new Image(); // Creates image object
        myImage.src = e.target.result; // Assigns converted image to image object
        myImage.onload = function(ev) {
          var myCanvas = document.getElementById("myCanvasCollection"); // Creates a canvas object
          var myContext = myCanvas.getContext("2d"); // Creates a contect object
          myCanvas.width = myImage.width; // Assigns image's width to canvas
          myCanvas.height = myImage.height; // Assigns image's height to canvas
          myContext.drawImage(myImage,0,0); // Draws the image on canvas
          let imgDataCollection = myCanvas.toDataURL("image/jpeg",0.75); // Assigns image base64 string in jpeg format to a variable
        }
      }
    }
  });
