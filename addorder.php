<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-4"><!--col 1-->

		a

		</div>

		

		<div class="col-md-4"><!--col 2-->

		<div class="alert alert-primary" id="response"> </div>
			<form class="form-vertical" action="?p=addorder_a" method="post">

			<div class="form-group">
			<label for="itm" > Item </label>
			<input class="form-control" type="" name="itm" id="itm">
			</div>

			<div class="form-group">
			<label for="qty"> Quantity </label>
			<input class="form-control" type="" name="qty" id="qty">
			</div>


			<div class="form-group"> 
	    	<div class="col-sm-offset-2 col-md-4">
	      		<button type="button" class="btn btn-default" id="s_addorder">Submit Btn</button>
	    	</div>
	  		</div>


			</form>

		</div>


		<div class="col-md-4"><!--col 3-->

		a

		</div>

	</div>


</div>

<script type="text/javascript">
	
$("#s_addorder").click(function(){  
   $.ajax({   
           url: 'addorder_a.php',  
           method: 'POST',  
           async: true,   
           data: {token:'b',itm: $("#itm").val(), qty:$("#qty").val()},  
           success: function(msg){  
          	$("#response").html(msg);  
        	}  
      });  
 });  

</script>