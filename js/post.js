    jQuery(document).ready(function(){
         jQuery(".td").click(function(t) {
			 idc=jQuery(this).attr("id");
			 type=jQuery(this).attr("data-type");
			 ch='<input type="'+type+'" class="tst" />';
			 if(idc == "T6")
			ch='<textarea cols="110" rows="4" type="text" class="tst"></textarea>';
			 //image....
			c=jQuery(this).text();
			jQuery(this).replaceWith(ch);
			jQuery(".tst").val(c);
		jQuery(".tst").blur(function(t) {
        jQuery(this).serialize();
		k=jQuery(this).val();
		if(k !=""){
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
		   location.reload();

}
		}) ;
		 });
jQuery("#img11").click(function(t) {
jQuery("#but1").css({'display':'block'});
jQuery("#but2").css({'display':'block'});  });
 jQuery("#but1").click(function(t) {
jQuery("#but1").css({'display':'none'});
jQuery("#but2").css({'display':'none'});
		   location.reload();
												});

		});	
			
		