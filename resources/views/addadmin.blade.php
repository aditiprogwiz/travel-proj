@extends('layout')

@section('content')


    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Admin</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin Details
                        </div>
                        <div class="panel-body">

                     <div class="row">
				<div class="col-md-4">
        <label for="txtName">Name</label>
		</div>
		<div class="col-md-4">
        <input type="text" class="form-control" id="txtName"  />
		</div>
		</div>
		<br>
		     <div class="row">
				<div class="col-md-4">
    
        <label for="txtEmail">Email</label>
		</div>
		<div class="col-md-4">
    
    <input type="email" class="form-control" id="txtEmail"/>
      </div></div>
	  <br>
	  <div class="row">
				<div class="col-md-4">
    
      
        <label for="txtPwd">Password</label>
		</div>
				<div class="col-md-4">
    
	  <input type="text" class="form-control" id="txtPwd"  />
      </div></div>
	  <br>
	  <div class="row">
				<div class="col-md-4">
    
        <label for="txtCPwd">Confirm password</label>
</div>    
	<div class="col-md-4">
    
    <input type="text" class="form-control" id="txtCPwd" />
      </div></div><br>
<center>
														<button type="submit" class="btn btn-danger">ADD</button></center>
               </form>

</div>
                    </div>
</div>
</div>




@stop