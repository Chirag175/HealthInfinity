$('.form').find('input').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.switch').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

$('.directSign a').on('click', function (e) {

    e.preventDefault();

    $("li.one").addClass('active');
    $("li.two").removeClass('active');

    target = $("li.one").children().attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});

$('.directLog a').on('click', function (e) {

    e.preventDefault();

    $("li.two").addClass('active');
    $("li.one").removeClass('active');

    target = $("li.two").children().attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});