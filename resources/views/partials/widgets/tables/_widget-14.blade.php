
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
											<a href="{{ route('company2') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">GBA System</a>
											<span class="text-gray-400 fw-semibold d-block fs-7">gba</span>
										</div>
									</div>
								</td>
								<!-- You can add other columns here -->
							</tr>
							<?php
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc()) && ($row['id'] < 7)) {
        $url = $row['id'] == 1 ? '' : '#';
			if ($row['id'] == 1) {
				$url = 'https://bchem.co.za/';
			} elseif ($row['id'] == 4) {
				$url = 'https://bfrn.co.za/';
			} else {
				$url = '#';
			}
        ?>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-3">
                        <img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
                    </div>
                    <div class="d-flex justify-content-start flex-column">
                        <a href="<?php echo $url; ?>" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6"><?php echo $row['business_name']; ?></a>
                        <span class="text-gray-400 fw-semibold d-block fs-7"><?php echo $row['legal_name']; ?></span>
                    </div>
                </div>
            </td>
            <!-- You can add other columns here -->
        </tr>
        <?php
    }
}
?>

				</tbody>
				<!--end::Table body-->
			</table>
		</div>
		<!--end::Table-->
	</div>
	<!--end: Card


