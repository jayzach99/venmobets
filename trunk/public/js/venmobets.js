 /* Everything here queues up when DOM is prepped */
$(document).ready(function(){
 
	/*This directs the pub submit button*/
	$("#form_bet_button").click(function() {
  		alert("click");
	//$.post('../submit_pub/publisher/', $('#publisher').serialize(), function(r){ 
	//	console.log(r); 
	//});
	//Bootstrap that disables button after clicking it once.
    //$('#button_publisher').button('loading');
	});
  
}