
// ISOTOPE for FAQ page

var gridiso = $('#tabisoTope').isotope({
  itemSelector: '.js-faq',
  layoutMode: 'fitRows'
});


$('a.fap-tab').on('click', function(e){
  e.preventDefault();
  var value = $(this).attr('data-name');
  $('a.fap-tab').removeClass('active');
  $(this).addClass('active');
  gridiso.isotope({
    filter:value 
  });
  
});


var newsiso = $('.allnews').isotope({
  itemSelector: '.card-nieuws',
  layoutMode: 'fitRows',
});

$('a.newsselector').on('click', function(e){
  e.preventDefault();
  var value = $(this).attr('data-name');
  $('a.newsselector').removeClass('active');
  $(this).addClass('active');
  console.log(value);
  newsiso.isotope({
    filter:value 
  });
  
});

// ISO Search --------------------------------------------


$('#search').keyup(function () {
  $search_input = $('#search').val();

  newsiso.isotope({
    filter: function() {
      var name = $(this).find('.post-title').text();
      var regex = new RegExp($search_input, 'gi');
      return name.match(regex);
    }
  });
});

$('.mobileLogin button').on('click', function(){
  $('.mobileLogin').toggleClass('alive');
});


// You can modify the upload files to pdf's, docs etc
//Currently it will upload only images

$(document).ready(function($) {

  // Upload btn on change call function
  $(".uploadlogo").change(function() {
    var filename = readURL(this);
    $(this).parent().children('span').html(filename);
  });

  // Read File and return value  
  function readURL(input) {
    var url = input.value;
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0] && (
      ext == "pdf" || ext == "doc" || ext == "docx"
      )) {
      var path = $(input).val();
      var filename = path.replace(/^.*\\/, "");
      // $('.fileUpload span').html('Uploaded Proof : ' + filename);
      return "Uploaded file : "+filename;
    } else {
      $(input).val("");
      return "Only document/pdf formats are allowed!";
    }
  }
  // Upload btn end

});



var $fileInput = $('.file-input');
var $droparea = $('.file-drop-area');

// highlight drag area
$fileInput.on('dragenter focus click', function() {
  $droparea.addClass('is-active');
});

// back to normal state
$fileInput.on('dragleave blur drop', function() {
  $droparea.removeClass('is-active');
});

// change inner text
$fileInput.on('change', function() {
  var filesCount = $(this)[0].files.length;
  var $textContainer = $(this).prev();

  if (filesCount === 1) {
    // if single file is selected, show file name
    var fileName = $(this).val().split('\\').pop();
    $textContainer.text(fileName);
  } else {
    // otherwise show number of files
    $textContainer.text(filesCount + ' files selected');
  }
});









