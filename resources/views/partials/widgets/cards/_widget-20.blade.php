<?php
$servername = "localhost";
$username = "root";
$password = "admin1234";
$dbname = "1office_0_2";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?>


<!--begin::Card widget 20-->
<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
	<!--begin::Header-->
	<div class="card-header pt-5">
		<!--begin::Title-->
		<div class="card-title d-flex flex-column">
			<!--begin::Amount-->
			<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
			<!--end::Amount-->
			<!--begin::Subtitle-->
			<span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
			<!--end::Subtitle-->
		</div>
		<!--end::Title-->
	</div>
	<!--end::Header-->
	<!--begin::Card body-->
	<div class="card-body d-flex align-items-end pt-0">
		<!--begin::Progress-->
		<div class="d-flex align-items-center flex-column mt-3 w-100">
			<div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
				<span>43 Pending</span>
				<span>72%</span>
			</div>
			<div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
				<div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
		<!--end::Progress-->
	</div>
	<!--end::Card body-->
</div>
<!--end::Card widget 20-->
<!--begin::Card widget 20-->
<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <div class="card-title d-flex flex-column">
            <!--begin::Amount-->
            <?php
            // query database to get active projects count
            $result = $db->query("SELECT COUNT(*) AS count FROM business WHERE country_id = 197");
            $row = $result->fetch_assoc();
            ?>
            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?php echo $row['count']; ?></span>
            <!--end::Amount-->
            <!--begin::Subtitle-->
            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
            <!--end::Subtitle-->
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->
    <!--begin::Card body-->
    <div class="card-body d-flex align-items-end pt-0">
        <!--begin::Progress-->
        <div class="d-flex align-items-center flex-column mt-3 w-100">
            <?php
            // query database to get pending projects count
            $result = $db->query("SELECT COUNT(*) AS count FROM business WHERE country_id = 197");
            $row = $result->fetch_assoc();
            $pending = $row['count'];

            // calculate percentage
            $result = $db->query("SELECT COUNT(*) AS count FROM business");
            $row = $result->fetch_assoc();
            $total = $row['count'];
            $percentage = ($pending / $total) * 100;
            ?>
            <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                <span><?php echo $pending; ?> Pending</span>
                <span><?php echo round($percentage, 2); ?>%</span>
            </div>
            <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                <div class="bg-white rounded h-8px" role="progressbar" style="width: <?php echo $percentage; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--end::Progress-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card widget 20-->
