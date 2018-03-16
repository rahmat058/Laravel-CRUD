@extends('layout')
@section('content')

<div class="box-content">
   <p class='alert-success' style="font-size: 20px; color: white; background: #149278">
      <?php
         $message = Session::get('message');
         if($message){
            echo $message;
            Session::put('message', null);
         }
      ?>
   </p>
						<form class="form-horizontal" method="post" action="{{url('/contact_update', $allContactInfo->contact_id)}}">
              {{csrf_field()}}
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_name" value="{{$allContactInfo->contact_name}}">
								</div>
							  </div>

                <div class="control-group">
								<label class="control-label" for="focusedInput">Contact number</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_number"  value="{{$allContactInfo->contact_number}}">
								</div>
							  </div>


							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Update Contact</button>
							  </div>
							</fieldset>
						  </form>

					</div>


@endsection
