$(function() {
    $('#treeTerm').tree({
      dragAndDrop: false,
      autoEscape: false
  });
});

function PopTermsWrite (term, target)
{
  var data = { term:term, index:target};
  window.opener.postMessage(data, "*");
}

$(document).ready(function(){ 
	// bind and scroll header div
	$(window).bind('resize', function(e){
		$(".affix").css('width',$(".container-fluid" ).width());
	});
	$(window).on("scroll", function() {
		$(".affix").css('width',$(".container-fluid" ).width());
	});
});		
