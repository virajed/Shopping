<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-4"><!--col 1-->

		a

		</div>

		

		<div class="col-md-4"><!--col 2-->

			<form class="form-vertical" action="?p=additem_a" method="post">

			<div class="form-group">
			<label for="itm" > Item </label>
			<input class="form-control" type="" name="itm" id="itm">
			</div>

			<div class="form-group">
			<label for="prc"> Unit Price </label>
			<input class="form-control" type="" name="prc" id="prc">
			</div>


			<div class="form-group"> 
	    	<div class="col-sm-offset-2 col-md-4">
	      		<button type="submit" class="btn btn-default">Submit</button>
	      		<button type="button" class="btn btn-default" id="s_additem">Submit Btn</button>
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
	
$(document).ready(function(){

	$("#s_additem").click(function(){
		alert("button");
		$.post("additem_a.php",	{"itm":$("#itm").val(),"prc":$("#prc").val()}
			);
	});

});

</script>