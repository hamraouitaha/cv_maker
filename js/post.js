  jQuery(document).ready(function(){
         jQuery(".td").click(function(t) {
			 idc=jQuery(this).attr("id");
			c=jQuery(this).text();
			jQuery(this).replaceWith('<input type="text" class="tst" />');
			jQuery(".tst").val(c);
		jQuery(".tst").blur(function(t) {
		k=jQuery(this).val();		
		jQuery(this).replaceWith('<span class="td" >' + k + '</span>');		
		jQuery.post(
            "index.php", 
            {
                username : jQuery(this).val(),
				id : idc,
            },
           function(data){
                jQuery(".tst").html(data);
           });
		   window.location.reload(".td");
		}) ;
		 });	
		});			