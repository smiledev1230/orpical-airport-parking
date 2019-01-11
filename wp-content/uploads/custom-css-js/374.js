<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    
  $('.dp').datepicker({
      format: "mm/dd/yyyy"
    }).on('change', function(ev){
        var date = Date.parse($(this).val());
        if (date < (Date.now() - 86400000)) {
            alert("Selected date must be greater than today's date");
            $(this).val('');
        } else {
        	$('.dp').datepicker("hide");
        }
    });
  
	$('#parkFormSubmit').click(function(){
    	$('#parkForm').submit();
    });
  
  
});
</script>
<!-- end Simple Custom CSS and JS -->
