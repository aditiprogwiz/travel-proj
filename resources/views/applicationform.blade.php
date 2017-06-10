@extends('layout')

@content('content')
	<div class="content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<h1 class="page-head-line">Application Form</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							PERSONAL DETAILS
						</div>
						<div class="panel-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="txtfnm">Given Name(first and middle name)</label>
											<input type="text" class="form-control" id="txtFnm" placeholder="Enter First Name" required onblur="formvalidation()"/>
										</div></div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="txtlnm">Last Name</label>
												<input type="text" class="form-control" id="txtLnm" placeholder="Enter Last Name" required onblur="formvalidation()"/>
											</div></div></div>
											<div class="form-group">
												<label>Date of Birth</label>&nbsp;&nbsp;&nbsp;
												<input type="text" id="datepicker">

											</div>

											<div class="form-group">
												<label for="optionsRadios">Gender</label><br>
												<label class="form-control">
													<input type="radio"  name="optionsRadios" id="optMale" value="option1" checked />Male&nbsp;&nbsp;
													<input type="radio" name="optionsRadios" id="optFemale" value="option2" /> Female
												</label>
											</div>
											<div class="form-group">
												<label for="optionsRadios">Marital Status</label><br>
												<label class="form-control">
													<input type="radio"  name="optionsRadios1" id="optMarried" value="option1" checked />Married&nbsp;&nbsp;
													<input type="radio" name="optionsRadios1" id="optSingle" value="option2" /> Single
												</label>
											</div>

											<div class="form-group">
												<label for="txtEmail">Email</label>
												<input type="email" class="form-control" id="txtEmail" placeholder="Enter email" />
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="txtHomeno">Landline No.</label>
														<input type="text" class="form-control" id="txtHomeno" />
													</div></div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="txtCon">Mobile No.</label>
															<input type="text" class="form-control" id="txtCon"  />
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="txtWork">Occupation</label>
													<input type="text" class="form-control" id="txtWork" />
												</div>
												<div class="form-group">
													<label>Nationality</label>
													<select class="form-control">
														<option>----Select----</option>
														<option>Two Vale</option>
														<option>Three Vale</option>
														<option>Four Vale</option>
													</select>
												</div>

												<div class="form-group">
													<label for="txtWork">Postal Address</label>
													<textarea class="form-control" rows="3" placeholder="Text Area"></textarea>
												</div>

												<div class="form-group">
													<label for="txtWork">Nominee Name</label>
													<input type="text" class="form-control" id="txtWork" />
												</div>
												<div class="form-group">
													<label for="txtWork">Nominee Contact No.</label>
													<input type="text" class="form-control" id="txtWork" />
												</div>

												<div class="form-group">
													<label for="exampleInputFile">Image Upload</label>
													<input type="file" id="exampleInputFile" />
													<p class="help-block">Upload a file less than 50kb.</p>
												</div>
												
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="panel panel-default">
										<div class="panel-heading">
											PASSPORT DETAILS
										</div>
										<div class="panel-body">
											<form>
												<div class="form-group">
													<label for="txtPassno">Passport No.</label>
													<input type="text" class="form-control" id="txtPassno" placeholder="Enter Passport No." />
												</div>
												<div class="form-group">

													<div class="form-group">
														<label for="txtPassno">Place of issue</label>
														<input type="text" class="form-control" id="txtPlace" placeholder="Enter Place of Issue" />
													</div>
													<div class="form-group">


														<label>Date of Issue</label>&nbsp;&nbsp;&nbsp;
														<input type="text" id="datepicker">

													</div>
													<div class="form-group">
														<label>Date of expiry</label>&nbsp;&nbsp;&nbsp;
														<input type="text" id="datepicker">
														<div class="dropdown">
															<a class="dropdown-toggle" id="dropdown2" role="button" data-toggle="dropdown" data-target="#" href="#">
																<div class="input-group"><input type="text" class="form-control" data-ng-model="data.dateDropDownInput"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
																</div>
															</a>
															<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																<datetimepicker data-ng-model="data.dateDropDownInput" data-datetimepicker-config="{ dropdownSelector: '#dropdown2' }"/>
															</ul>
														</div>
													</div>

												</form>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											TOUR DETAILS
										</div>
										<div class="panel-body">
											<form>
												<div class="form-group">
													<label>Tour type</label>
													<select class="form-control">
														<option>----Select----</option>
														<option>Inner Kailash</option>
														<option>Srilanka</option>
													</select>
												</div>

												<div class="form-group">
													<label>Departure dates</label>
													<select class="form-control">
														<option>----Select----</option>
														<option>24/4/17</option>
														<option>28-6-17</option>
													</select>
												</div>
												<div class="form-group">
													<label for="txtPassno">Amount</label>
													<input type="text" class="form-control" id="txtAmt" placeholder="Enter Passport No." />
												</div>

												<div class="form-group">
													<label>Payment Mode</label>
													<select class="form-control">
														<option>----Select----</option>
														<option>Cheque </option>
														<option>Cash</option>
														<option>both</option>

													</select>
												</div>
												<div class="form-group">
													<label for="optionsRadios">Payment Status</label><br>
													<label class="form-control">
														<input type="radio"  name="optionsRadios2" id="optPaid" value="option1" checked />Paid&nbsp;&nbsp;
														<input type="radio" name="optionsRadios2" id="optNotPaid" value="option2" /> Not Paid
													</label>
												</div>

												<div class="form-group">
													<label for="txtWork">Remarks</label>
													<textarea class="form-control" rows="3" placeholder="Text Area"></textarea>
												</div>

											</form>
										</div>
									</div>

								</div></div>
								<div class="row">

									<div class="col-md-12">

										<div class="panel panel-default">
											<div class="panel-heading">
												FLIGHT DETAILS
											</div>
											<div class="panel-body">
												<form>
													<div class="form-group">
														<label for="optionsRadios">Flight Booking</label><br>
														<label class="form-control">
															<input type="radio"  name="optionsRadios3" id="optCustomer" value="option1" checked />Customer&nbsp;&nbsp;
															<input type="radio" name="optionsRadios3" id="optCompany" value="option2" />Company
														</label>
													</div>
													<div class="form-group">
														<label for="txtPassno">Airline Name</label>
														<input type="text" class="form-control" id="txtAirName" placeholder="Enter Passport No." />
													</div>
													<div class="form-group">
														<label for="txtPassno">Flight No.</label>
														<input type="text" class="form-control" id="txtFlightno" placeholder="Enter Passport No." />
													</div>
													<div class="row">
														<div class="col-md-6">

															<div class="form-group">
																<label for="txtPassno">Source</label>
																<input type="text" class="form-control" id="txtSrc" placeholder="Enter Passport No." />
															</div></div>
															<div class="col-md-6">

																<div class="form-group">
																	<label for="txtPassno">Destination</label>
																	<input type="text" class="form-control" id="txtDest" placeholder="Enter Passport No." />
																</div></div>
															</div>
															<div class="row">
																<div class="col-md-6">

																	<div class="form-group">
																		<label for="txtPassno">Arrival time</label>
																		<input type="text" class="form-control" id="txtSrc" placeholder="Enter Passport No." />
																	</div></div>

																	<div class="col-md-6">

																		<div class="form-group">
																			<label for="txtPassno">Departure time</label>
																			<input type="text" class="form-control" id="txtDest" placeholder="Enter Passport No." />
																		</div></div></div>

																	</form>
																</div>
															</div>


														</div>
													</div><center>
														<button type="submit" class="btn btn-danger">Submit</button></center>
		
												</div>
											</div>


@stop