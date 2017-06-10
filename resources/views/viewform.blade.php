@extends('layout')

@section('content')


	<div class="content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<h1 class="page-head-line">Generate pdf</h1>
				</div>
			</div>
			
			<br><br><br>
						
							
							<dl class="dropdown"> 
   <div class="row">
   <div class="col-md-6">
   <h4>Select Columns which you want in pdf::</h4>   
   </div>
   <div class="col-md-6">
    <dt>
    <a href="#">
      <span class="hida">Select</span>    
      <p class="multiSel"></p>  
    </a>
    </dt>
	
    <dd>
        <div class="mutliSelect">
            <ul>
                <li>
                    <input type="checkbox" value="Given name" />Given name</li>
                <li>
                    <input type="checkbox" value="surname" />surname</li>
                <li>
                    <input type="checkbox" value="DOB" />DOB</li>
                <li>
                    <input type="checkbox" value="Nationality" />Nationality</li>
                <li>
                    <input type="checkbox" value="occupation" />occupation</li>
                <li>
                    <input type="checkbox" value="Passport no." />Passport no.</li>
            </ul>
        </div>
    </dd>
 </div>
  </div>
</dl>

<table class="table table-layout">
<th >Given name</th>
<th>Surname</th>
<tr>
<td>Ishani</td>
<td>vora</td>
<tr>
<tr>
<td>Aditi</td>
<td>gupta</td>
<tr>
</table>
 <center>
	<button class="btn btn-danger">print</button></center>				
	</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Copyright &copy; 2015 All Right Reserved,<a href="http://www.traveldostindia.com/" target="_blank"> Traveldost.</a></h4>
				</div>

			</div>
		</div>

@stop