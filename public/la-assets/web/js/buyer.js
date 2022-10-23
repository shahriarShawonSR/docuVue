$(document).ready(function(){
  showDescription();
  
  $('.buyGd').click(function(){
    $('.buyCall').slideUp();
    $('.buyGuide').slideDown();
  });
  
  $(".closedescription").click(function () {
    $('section.bgwhite.secguide .description').slideUp();
    $(".threeRws .item > div").removeClass("active");
  })
    
});

function showDescription() {
  $(".threeRws .item a").click(function () {
    var id = $(this).attr('href');
    $(".threeRws .item > div").removeClass("active");
    $(this).parent("div").addClass("active");
    $('section.bgwhite.secguide .description').hide();
    $(id).slideDown();
    $("html, body").animate({ scrollTop: $(id).offset().top - 100 }, 1000);
  });
}
