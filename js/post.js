  jQuery(document).ready(function(){
         jQuery(".td").click(function(t) {
			 idc=jQuery(this).attr("id");
			 if(idc == "T6"){
				 c=jQuery(this).text();
			jQuery(this).replaceWith('<textarea cols="110" rows="4" type="text" class="tst"></textarea>');
			jQuery(".tst").val(c);
		jQuery(".tst").blur(function(t) {
		k=jQuery(this).val();		
		jQuery(this).replaceWith('<p class="td" >'+ k +'</p>');		
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
			 }else{
			 //image ......
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
		 }
		 });	
		});			