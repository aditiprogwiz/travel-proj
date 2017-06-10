@extends('layout')

@section('content')


    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Tour Type</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Tour Details
                        </div>
                        <div class="panel-body">
 <div class="row">
				<div class="col-md-4">

        <label for="txtPassno">Tour Name</label>
</div>
<div class="col-md-4">

        <input type="text" class="form-control" id="txtTName" placeholder="Enter Tour name" />
      </div></div><br>
<center>
														<button type="submit" class="btn btn-danger">ADD</button></center>
</div>
                    </div>
</div>
</div>




@stop