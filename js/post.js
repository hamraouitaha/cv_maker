  jQuery(document).ready(function(){
         jQuery(".td").click(function(t) {
			 idc=jQuery(this).attr("id");
			 type=jQuery(this).attr("data-type");
			 alert(type);
			 ch='<input type="'+type+'" class="tst" />';
			 if(idc == "T6")
			ch='<textarea cols="110" rows="4" type="text" class="tst"></textarea>';
			 //image ......
			c=jQuery(this).text();
			jQuery(this).replaceWith(ch);
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