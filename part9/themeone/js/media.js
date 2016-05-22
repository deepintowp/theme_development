jQuery(document).ready(function($){
	 var frame;
	  // ADD IMAGE LINK
  $('#add_mem_pic').on( 'click', function( event ){
    
    event.preventDefault();
    
    // If the media frame already exists, reopen it.
    if ( frame ) {
      frame.open();
      return;
    }
    
    // Create a new media frame
    frame = wp.media({
      title: 'Add Tem MEmber Image Image',
      button: {
        text: 'Insert Into Team'
      },
      multiple: false  
    });

    
  
    frame.on( 'select', function() {
      
      
      var attachment = frame.state().get('selection').first().toJSON();

    
      $('.img-con').html( '<img src="'+attachment.url+'" alt="" style="width:200px; height:200px; display:block; margin:0 auto;"/>' );

      
      $('#member_pic').val( attachment.url );

      
    });

    
    frame.open();
  });
	
		// DELETE IMAGE LINK
  $('#remove_mem_pic').on( 'click', function( event ){

    event.preventDefault();
  $('.img-con').html( '' );

    $('#member_pic').val( '' );

  });
});