@extends('layout')

@section('content')


	<div class="content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<h1 class="page-head-line">View profit report</h1>
				</div>
			</div>
			<div class="panel panel-default">
					<div class="panel-heading">
							REPORT
						</div>
						<div class="panel-body">
							
			<div class="row">
				<div class="col-md-6">
					<label>Select departure date</label>
				</div>
				<div class="col-md-6">
					<select class="form-control">
														<option>----Select----</option>
														<option>24/4/17</option>
														<option>28-6-17</option>
													</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label>Select Tour</label>
				</div>
				<div class="col-md-6">
					<select class="form-control">
														<option>----Select----</option>
														<option>Inner Kailash</option>
														<option>Srilanka</option>
													</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label>Purchase price</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" id="txtPurprice" />
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<center><button class="btn btn-danger">Profit</button></center>
				</div>
			</div>
			</div>
			</div>
			<h2>Total report is:::   </h2>
		</div>
	</div>


@stop