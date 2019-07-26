/*javascript file*/

function theDate(){
	var here = new Date();
	var date = here.getUTCMonth()
	+":"+ here.getUTCDay() 
	+ ":" + here.getHours() 
	+ ":"+ here.getMinutes();
     return date.toString();
}

$(document).ready(function(){

CKEDITOR.replace('post',
	{
		on:{
			instanceready: function()
			{
				//output paragraphs as <p> Text</p>
				this.dataProcessor.writer.setRules('p',
				{
					indent: false,
					breakBeforeOpen: true,
					breakAfterOpen: false, breakBeforeClose: false,
					breakAfterClose: true
			});
		}
	}

	});
	$('#sendit').click(function(){

		var name=$('#name').val();
		var post=CKEDITOR.instances['post'].getData();
		var replace= post.trim();
		var date= theDate();

		var data='name='+name + '&replaced=' + replaced + '&date=' +date;

  if (name=''){
  	alert("Fill out the form dummy");

  }else{
  	$.ajax({
  		cache:false,
  		type: "POST",
  		url:'../chatboard/process.php',
  		data: data,// this is the variable data that we set up arleier
  		sucess: function(stuff){
  			$('#board').prepend(stuff);
  		}//end sucess function

  	})// end ajax call
  }// end else
  return false;// keep it form from submitting



			});//end click function
})






