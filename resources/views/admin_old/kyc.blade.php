@include('admin.header')

<div class="main-panel bg-dark">
	<div class="content bg-dark">
		<div class="page-inner">
			@if(session('message'))
			<div class="alert alert-success mb-2">{{session('message')}}</div>
			@endif
			<div class="mt-2 mb-4">
				<h1 class="title1 text-light">Stock Market-Hq account verification list</h1>
			</div>

			<div class="mb-5 row">
				<div class="col-12">
					<small class="text-light">if you can't see the image, try switching your uploaded location to
						another option from your admin settings page.</small>
				</div>
				<div class="col-12 card p-4 bg-dark shadow">
					<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
						<table id="ShipTable" class="table table-hover  text-light">
							<thead>
								<tr>
									<th>ID</th>
									<th>Full name</th>
									<th>Email</th>
									<th>KYC Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($kyc as $kyc)
								<tr>
									<th scope="row">{{$kyc->id}}</th>
									<td>{{$kyc->name}}</td>
									<td>{{$kyc->email}}</td>
									@if($kyc->status === '1')
									<td>verified</td>
									@elseif($kyc->status === '0')
									<td>Not verified</td>
									@elseif($kyc->status === '2')
									<td>Declined</td>
									@endif
									<td>
										<a href="#" data-toggle="modal" data-target="#viewkycIModal{{$kyc->id}}"
											class="btn btn-light btn-sm"><i class="fa fa-eye"></i> ID</a>
										<a href="#" data-toggle="modal" data-target="#viewkycPModal{{$kyc->id}}"
											class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Passport</a>

										<a href="{{url('accept-kyc/'.$kyc->id)}}"
											class="btn btn-primary btn-sm">Accept</a>

										<a href="{{url('reject-kyc/'.$kyc->id)}}"
											class="btn btn-danger btn-sm">Reject</a>
									</td>
								</tr>

								<!-- View KYC ID Modal -->
								<div id="viewkycIModal{{$kyc->id}}" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header bg-dark">
												<h4 class="modal-title text-light">KYC verification - ID card view</h4>
												<button type="button" class="close text-light"
													data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body bg-dark">
												<img src="{{asset('uploads/documents/id_cards/'.$kyc->id_card_path)}}"
													alt="ID Card" title="" class="img-fluid" />
											</div>
										</div>
									</div>
								</div>
								<!-- /view KYC ID Modal -->

								<!-- View KYC Passport Modal -->
								<div id="viewkycPModal{{$kyc->id}}" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header bg-dark ">
												<h4 class="modal-title text-light">KYC verification - Passport view</h4>
												<button type="button" class="close text-light"
													data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body bg-dark">

												<img src="{{asset('uploads/documents/passport_photos/'.$kyc->passport_photo_path)}}"
													alt="Passport" title="" class="img-fluid" />
											</div>
										</div>
									</div>
								</div>
					</div>
					<!-- /view KYC Passport Modal -->
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@include('admin.footer')