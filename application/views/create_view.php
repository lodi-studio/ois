<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="create_post">
			<div class="form-group">
			    <label for="input1" class="col-sm-10 control-label">Bus Number</label>
			    <div class="col-sm-10">
			      <input type="text" name="bus_no"  class="form-control" id="input1" placeholder="Bus Number" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-10" control-label">Route</label>
			    <div class="col-sm-10">
			      <input type="number" name="bus_route"  class="form-control" id="input2" placeholder="0" />
			    </div>
			</div>

 			<div class="form-group">
			    <label for="input1" class="col-sm-10" control-label">Driver</label>
			    <div class="col-sm-10">
			      <input type="text" name="bus_driver"  class="form-control" id="input3" placeholder="Driver" />
			    </div>
			</div>
 			<div class="form-group">
			    <label for="input1" class="col-sm-10" control-label">Conductor</label>
			    <div class="col-sm-10">
			      <input type="text" name="bus_conductor"  class="form-control" id="input4" placeholder="Conductor" />
			    </div>
			</div>
			 <div class="form-group">
			    <label for="input1" class="col-sm-10" control-label">OR Number</label>
			    <div class="col-sm-10">
			      <input type="text" name="or_no"  class="form-control" id="input5" placeholder="0" />
			    </div>
			</div>
			 <div class="form-group">
			    <label for="input1" class="col-sm-10" control-label">Number of Passengers</label>
			    <div class="col-sm-10">
			      <input type="number" name="no_of_pass"  class="form-control" id="input6" placeholder="0" />
			    </div>
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Dispatch" />
			<input type="button" class="btn btn-danger col-md-2 col-md-offset-10" value="Cancel" 
			onClick="window.location='<?php echo site_url('Home'); ?>';" />
		</form>
	</div>
</div>