@extends('layout')

@section('content')


    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Departure Date</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Details
                        </div>
                        <div class="panel-body">

    <div class="row">
				<div class="col-md-6">
    
        <label for="txtDD">Departure Date</label>
		</div>
		<div class="col-md-6">
    <input type="text" class="form-control" id="txtDD"  />
      </div></div><br>
	  <div class="row">
				<div class="col-md-6">
				<label for="txtLoc">Location</label>
</div>
<div class="col-md-6">
				<input type="text" class="form-control" id="txtLoc" />
       </div></div><br>
	 
      <div class="row">
				<div class="col-md-6">
				<label for="txtTourtype">Tour Type</label>&nbsp;&nbsp;&nbsp;
</div>
<div class="col-md-6">
				<select class="form-control">
														<option>----Select----</option>
														<option>24/4/17</option>
														<option>28-6-17</option>
													</select>
   </div></div><br>
	 
<center>
														<button type="submit" class="btn btn-danger">ADD</button></center>
        
               </form>

</div>
                    </div>
</div>
</div>



@stop