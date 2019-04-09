<script type="text/javascript">
$( document ).ready(function() {
$("#main_panel_alert_id").hide();
});



// showtable
$( "#btn_table_refresh_id" ).click(function() {
$("#div_image_view").html('');

var travel = $("#travel_id").val();
if(travel!= ""){
	$.ajax({
    type:"POST",
    cache:false,
    url:"../Biz/includes/doFunction.php",
    data:{ travel : travel},
    success: function (html) {
    	if(html.includes("Warning")){
    		$("#div_image_view").html("<font color=red> Oops! No data for the chosen country! </font>");
    	}
    	else
    	{
    		$("#div_image_view").html(html);
    	}
    	
    }
  });
  return false;
}
else
{
	$("#div_image_view").html('<blockquote> Input the country of your choice! </blockquote>');
}


});

// for ui
var input = document.querySelector('.search-form');
var search = document.querySelector('input')
var button = document.querySelector('button');
button.addEventListener('click', function(e) {
  e.preventDefault();
  input.classList.toggle('active');
})
search.addEventListener('focus', function() {
  input.classList.add('focus');
})

search.addEventListener('blur', function() {
  search.value.length != 0 ? input.classList.add('focus') : input.classList.remove('focus');
})
	
</script>