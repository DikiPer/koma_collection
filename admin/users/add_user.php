<!DOCTYPE html>
<?php
// CALL OBJECT FROM CLASS


$time_stamp = date("l, d M Y");
if (isset($_POST['submit'])) {
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email'];
    $no_tlp = $_POST['no_tlp'];
    $username = $_POST['username'];
    $tgl_regist = $_POST['tgl_regist'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $result = mysqli_query($input->conn, "INSERT INTO users VALUES ('', '$nama_user','$email', '$no_tlp', '$username', '$tgl_regist', '$password', '$role' )");
    if ($result) {
        $_SESSION['username'] = $username;
        echo "
        <script>
            alert('Berhasil registrasi, silahkan login');
            document.location.href = '../tambah_users.php';
        </script>
        ";
    } else {
        echo "
	<script>
		alert('Gagal registrasi, coba lagi');
		document.location.href = 'add_user.php';
	</script>
	";
    }
}

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] !== "admin") {
    header("location:../login/index.php?pesan=belum-login");
}


foreach ($database->selectWhere('users', 'username', $_SESSION['username']) as $data);
?>
<head>
	<base href="../../../">
	<meta charset="utf-8" />
	<title>List Datatable | Keenthemes</title>
	<meta name="description" content="User datatable listing" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="../assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->
   <!-- Begin::Content -->
   <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Details-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Users</h5>
				<!--end::Title-->
				<!--begin::Separator-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
				</div>
				<!--end::Separator-->
				<!--begin::Search Form-->
				<div class="d-flex align-items-center" id="kt_subheader_search">
					<span class="text-dark-50 font-weight-bold" id="kt_subheader_total"><?php echo $database->selected('users'); ?> Total</span>
					<form class="ml-5">
						<div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
							<input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..." />
							<div class="input-group-append">
								<span class="input-group-text">
									<span class="svg-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<!--<i class="flaticon2-search-1 icon-sm"></i>-->
								</span>
							</div>
						</div>
					</form>
				</div>
				<!--end::Search Form--> 
			</div>
			<!--end::Details-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Button-->
				<a href="#" class=""></a>
				<!--end::Button-->
				<!--begin::Button-->
				<a href="#" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add
					User</a>
				<!--end::Button-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Card-->
			<div class="card card-custom">
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
						<div
							class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
							<!--begin::Details-->
							<div class="d-flex align-items-center flex-wrap mr-2">
								<!--begin::Title-->
								<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">New User</h5>
								<!--end::Title-->
								<!--begin::Separator-->
								<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
								</div>
								<!--end::Separator-->
								<!--begin::Search Form-->
								<div class="d-flex align-items-center" id="kt_subheader_search">
									<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter user
										details and submit</span>
								</div>
								<!--end::Search Form-->
							</div>
							<!--end::Details-->
							<!--begin::Toolbar-->
							<div class="d-flex align-items-center">
								<!--begin::Button-->
								<a href="#" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
								<!--end::Button-->
								<!--begin::Dropdown-->
								<div class="btn-group ml-2">
									<button type="button"
										class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Submit</button>
									<button type="button"
										class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base dropdown-toggle dropdown-toggle-split"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
									<div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right">
										<ul class="navi py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-writing"></i>
													</span>
													<span class="navi-text">Save &amp; continue</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-medical-records"></i>
													</span>
													<span class="navi-text">Save &amp; add new</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-hourglass-1"></i>
													</span>
													<span class="navi-text">Save &amp; exit</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Toolbar-->
						</div>
					</div>
					<!--end::Subheader-->
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Card-->
							<div class="card card-custom card-transparent">
								<div class="card-body p-0">
									<!--begin::Wizard-->
									<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first"
										data-wizard-clickable="true">
										
										<!--begin::Card-->
										<div class="card card-custom card-shadowless rounded-top-0">
											<!--begin::Body-->
											<div class="card-body p-0">
												<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
													<div class="col-xl-12 col-xxl-10">
														<!--begin::Wizard Form-->
														<form class="form" id="kt_form" method="POST" action="">
															<div class="row justify-content-center">
																<div class="col-xl-9">
																	<!--begin::Wizard Step 1-->
																	<div class="my-5 step"
																		data-wizard-type="step-content"
																		data-wizard-state="current">
																		<h5 class="text-dark font-weight-bold mb-10">
																			User's Profile Details:</h5>
																		<!--begin::Group-->
																		<!-- <div class="form-group row">
																			<label
																				class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
																			<div class="col-lg-9 col-xl-9">
																				<div class="image-input image-input-outline"
																					id="kt_user_add_avatar">
																					<div class="image-input-wrapper"
																						style="background-image: url(assets/media/users/100_6.jpg)">
																					</div>
																					<label
																						class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
																						data-action="change"
																						data-toggle="tooltip" title=""
																						data-original-title="Change avatar">
																						<i
																							class="fa fa-pen icon-sm text-muted"></i>
																						<input type="file"
																							name="profile_avatar"
																							accept=".png, .jpg, .jpeg" />
																						<input type="hidden"
																							name="profile_avatar_remove" />
																					</label>
																					<span
																						class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
																						data-action="cancel"
																						data-toggle="tooltip"
																						title="Cancel avatar">
																						<i
																							class="ki ki-bold-close icon-xs text-muted"></i>
																					</span>
																				</div>
																			</div>
																		</div> -->
																		<!--end::Group-->
																		<!--begin::Group-->
																		<div class="form-group row">
																			<label
																				class="col-xl-3 col-lg-3 col-form-label">Nama</label>
																			<div class="col-lg-9 col-xl-9">
																				<input
																					class="form-control form-control-solid form-control-lg"
																					name="nama_user" type="text"
																					value="" placeholder="Nama Lengkap" />
																			</div>
																		</div>
																		<!--end::Group-->
                                                                        <!--begin::Group-->
																		<div class="form-group row">
																			<label
																				class="col-xl-3 col-lg-3 col-form-label">Alamat Email</label>
																			<div class="col-lg-9 col-xl-9">
																				<div
																					class="input-group input-group-solid input-group-lg">
																					<div class="input-group-prepend">
																						<span class="input-group-text">
																							<i class="la la-at"></i>
																						</span>
																					</div>
																					<input type="text"
																						class="form-control form-control-solid form-control-lg"
																						name="email" value="" />
																				</div>
																			</div>
																		</div>
																		<!--end::Group-->
																		<!--begin::Group-->
																		<div class="form-group row">
																			<label
																				class="col-xl-3 col-lg-3 col-form-label">Nomor Telepon</label>
																			<div class="col-lg-9 col-xl-9">
																				<div
																					class="input-group input-group-solid input-group-lg">
																					<div class="input-group-prepend">
																						<span class="input-group-text">
																							<i class="la la-phone"></i>
																						</span>
																					</div>
																					<input type="text"
																						class="form-control form-control-solid form-control-lg"
																						name="no_tlp" value=""
																						placeholder="Phone" />
																				</div>	
																			</div>
																		</div>
																		<!--end::Group-->
                                                                        <!--begin::Group-->
																		<div class="form-group row">
																			<label
																				class="col-xl-3 col-lg-3 col-form-label">Username</label>
																			<div class="col-lg-9 col-xl-9">
																				<input
																					class="form-control form-control-solid form-control-lg"
																					name="username" type="text"
																					value="" placeholder="Username" />
																			</div>
																		</div>
																		<!--end::Group-->
                                                                        <!--begin::Group-->
																		<div class="form-group row">
																				<input
																					class="form-control"
																					name="tgl_regist" type="hidden"
																					value="<?php echo $time_stamp; ?>" />
																		</div>
																		<!--end::Group-->
                                                                        <!--begin::Group-->
																		<div class="form-group row">
																			<label
																				class="col-xl-3 col-lg-3 col-form-label">Password</label>
																			<div class="col-lg-9 col-xl-9">
																				<input
																					class="form-control form-control-solid form-control-lg"
																					name="password" type="password"
																					value="" placeholder="Password"/>
																			</div>
																		</div>
																		<!--end::Group-->
																		
																		<!--begin::Group-->
																		<div class="form-group row">
																			<label
																				class="col-xl-3 col-lg-3 col-form-label">Role</label>
																			<div class="col-lg-9 col-xl-9">
																				<div
																					class="input-group input-group-solid input-group-lg">
																					<select class="form-control form-control-solid form-control-lg" name="role"> 
                                                                                        <option value="Admin">Admin</option>
                                                                                        <option value="User">User</option>
                                                                                        </select>
																					
																				</div>
																			</div>
																		</div>
																		<!--end::Group-->
																	</div>
																	<!--end::Wizard Step 1-->
																
																	<!--begin::Wizard Actions-->
																	<div
																		class="d-flex justify-content-end border-top pt-10 mt-15">
																		<div>
																			<button type="submit" id="next-step"
																				class="btn btn-primary font-weight-bolder px-9 py-4"
																				data-wizard-type="action-next" name="submit">Submit</button>
																		</div>
																	</div>
																	<!--end::Wizard Actions-->
																</div>
															</div>
														</form>
														<!--end::Wizard Form-->
													</div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Wizard-->
								</div>
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
				</div>
			</div>
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!-- End::Content -->

	<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="../assets/plugins/global/plugins.bundle.js"></script>
	<script src="../assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="../assets/js/scripts.bundle.js"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="../assets/js/pages/custom/user/list-datatable.js"></script>
	<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
										