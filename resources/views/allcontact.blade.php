@extends('layout')
@section('content')

<h1>All Contact</h1>
<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Striped Table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
          <p class='alert-success' style="font-size: 20px; color: white; background: #149278">
             <?php
                $message = Session::get('message');
                if($message){
                   echo $message;
                   Session::put('message', null);
                }
             ?>
          </p>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Contact ID</th>
									  <th>Contact Name</th>
									  <th>Contact Number</th>
									  <th>Action</th>
								  </tr>
							  </thead>
							  <tbody>
            @foreach($allContactInfo as $allContact)
								<tr>
									<td>{{$allContact -> contact_id}}</td>
									<td class="center">{{$allContact -> contact_name}}</td>
									<td class="center">{{$allContact -> contact_number}}</td>
									<td class="center">
										<a href="{{URL::to('/edit_contact/'.$allContact -> contact_id)}}" class="btn btn-info">Edit</a>
                    <a href="{{URL::to('/delete_contact/'.$allContact -> contact_id)}}" id="delete" class="btn btn-danger">Delete</a>
									</td>
								</tr>
            @endforeach
							  </tbody>
						 </table>
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>
					</div>
				</div>


@endsection
