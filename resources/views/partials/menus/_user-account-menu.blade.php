<?php
// Start a new session (or resume an existing one)
session_start();

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    // User is logged in, get their data
    $userId = $_SESSION['user_id'];

    // Establish connection to the database
    $db = new mysqli("localhost", "root", "admin1234", "1office_0_2");

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    // Query the database for currently logged in user
    $stmt = $db->prepare("SELECT name, email FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId); // "i" means the parameter is an integer

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

	    // Fetch data
		if($result->num_rows > 0) {
			$user = $result->fetch_assoc();
			// Now you can use $user['name'] and $user['email']
		} else {
			echo "No user found with id: $userId";
		}
	
		$stmt->close();
	} else {
		// User is not logged in
		//echo "You must be logged in to view this page.";
	}
?>

<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<div class="menu-content d-flex align-items-center px-3">
			<!--begin::Avatar-->
			<div class="symbol symbol-50px me-5">
				<img alt="Logo" src="assets/media/avatars/300-23.jpg" />
			</div>
			<!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    <?php 
                    if(isset($user)) {
                        echo $user['name']; 
                    } else {
                        echo "Guest";
                    }
                    ?>
                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Role</span>
                </div>
                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                    <?php 
                    if(isset($user)) {
                        echo $user['email'];
                    } else {
                        echo "No email";
                    }
                    ?>
                </a>
            </div>
            <!--end::Username-->
		</div>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="#" class="menu-link px-5">My Profile</a>
	</div>

	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/logout" class="menu-link px-5">Sign Out</a>
	</div>
	<!--end::Menu item-->
</div>
<!--end::User account menu-->
