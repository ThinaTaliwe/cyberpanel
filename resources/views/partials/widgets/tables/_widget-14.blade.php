<!--begin::Table widget 14-->
<div class="card card-flush h-md-100">
	<!--begin::Header-->
	<div class="card-header pt-7">
		<!--begin::Title-->
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Companies</span>
		<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
		</h3>
		<!--end::Title-->
	</div>
	<!--end::Header-->
	
	<!--begin::Body-->
	<div class="card-body pt-6">
		<!--begin::Table container-->
		<div class="table-responsive">
			<!--begin::Table-->
			<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
				<!--begin::Table head-->
				<thead>
					<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
						<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
						<th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
						<th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
						<th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
						
						<th class="p-0 pb-3 w-50px text-end">VIEW</th>
					</tr>
				</thead>
				<!--end::Table head-->
				<!--begin::Table body-->
				<tbody>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div class="symbol symbol-50px me-3">
									<img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="{{ route('company1') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Company 1</a>
									<span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span>
								</div>
							</div>
						</td>
						<td class="text-end pe-0">
							<span class="text-gray-600 fw-bold fs-6">$32,400</span>
						</td>
						<td class="text-end pe-0">
							<!--begin::Label-->
							<span class="badge badge-light-success fs-base">{!! getIcon('arrow-up', 'fs-5 text-success ms-n1') !!} 9.2%</span>
							<!--end::Label-->
						</td>
						<td class="text-end pe-12">
							<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
						</td>

						<td class="text-end">
							<a href="{{ route('company1') }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div class="symbol symbol-50px me-3">
									<img src="assets/media/stock/600x600/img-40.jpg" class="" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="{{ route('company2') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Company 2</a>
									<span class="text-gray-400 fw-semibold d-block fs-7">Esther Howard</span>
								</div>
							</div>
						</td>
						<td class="text-end pe-0">
							<span class="text-gray-600 fw-bold fs-6">$256,910</span>
						</td>
						<td class="text-end pe-0">
							<!--begin::Label-->
							<span class="badge badge-light-danger fs-base">{!! getIcon('arrow-down', 'fs-5 text-danger ms-n1') !!} 0.4%</span>
							<!--end::Label-->
						</td>
						<td class="text-end pe-12">
							<span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
						</td>

						<td class="text-end">
							<a href="{{ route('company2') }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div class="symbol symbol-50px me-3">
									<img src="assets/media/stock/600x600/img-39.jpg" class="" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Company 3</a>
									<span class="text-gray-400 fw-semibold d-block fs-7">Jenny Wilson</span>
								</div>
							</div>
						</td>
						<td class="text-end pe-0">
							<span class="text-gray-600 fw-bold fs-6">$8,220</span>
						</td>
						<td class="text-end pe-0">
							<!--begin::Label-->
							<span class="badge badge-light-success fs-base">{!! getIcon('arrow-up', 'fs-5 text-success ms-n1') !!} 9.2%</span>
							<!--end::Label-->
						</td>
						<td class="text-end pe-12">
							<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
						</td>
						
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div class="symbol symbol-50px me-3">
									<img src="assets/media/stock/600x600/img-47.jpg" class="" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Company 4</a>
									<span class="text-gray-400 fw-semibold d-block fs-7">Cody Fisher</span>
								</div>
							</div>
						</td>
						<td class="text-end pe-0">
							<span class="text-gray-600 fw-bold fs-6">$74,000</span>
						</td>
						<td class="text-end pe-0">
							<!--begin::Label-->
							<span class="badge badge-light-success fs-base">{!! getIcon('arrow-up', 'fs-5 text-success ms-n1') !!} 9.2%</span>
							<!--end::Label-->
						</td>
						<td class="text-end pe-12">
							<span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
						</td>

						<td class="text-end">
							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div class="symbol symbol-50px me-3">
									<img src="assets/media/stock/600x600/img-48.jpg" class="" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Company 5</a>
									<span class="text-gray-400 fw-semibold d-block fs-7">Savannah Nguyen</span>
								</div>
							</div>
						</td>
						<td class="text-end pe-0">
							<span class="text-gray-600 fw-bold fs-6">$183,300</span>
						</td>
						<td class="text-end pe-0">
							<!--begin::Label-->
							<span class="badge badge-light-danger fs-base">{!! getIcon('arrow-down', 'fs-5 text-danger ms-n1') !!} 0.4%</span>
							<!--end::Label-->
						</td>
						<td class="text-end pe-12">
							<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
						</td>

						<td class="text-end">
							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
						</td>
					</tr>
				</tbody>
				<!--end::Table body-->
			</table>
		</div>
		<!--end::Table-->
	</div>
	<!--end: Card Body-->
</div>
<!--end::Table widget 14-->
