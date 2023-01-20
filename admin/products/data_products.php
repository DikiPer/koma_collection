<!DOCTYPE html>
<?php
// CALL OBJECT FROM CLASS


// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] !== "admin") {
    header("location:../login/index.php?pesan=belum-login");
}
//   AFTER HALAMAN TICKET
$userupdate = "";
if (isset($_GET['pesan'])) {
    $userupdate = $_SESSION['update'];
    echo "<div class='alert alert-success h6 alert-dismissible fade show text-center fixed-top' role='alert'>
  Data <strong style='text-transform:uppercase;'>" . $userupdate . " </strong>Berhasil di update
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
};


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
				<!--begin::Group Actions-->
				<div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
					<div class="text-dark-50 font-weight-bold">
						<span id="kt_subheader_group_selected_rows">23</span>Selected:
					</div>
					<div class="d-flex ml-6">
						<div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
							<button type="button" class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle" data-toggle="dropdown">Update Status</button>
							<div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
								<ul class="navi navi-hover pt-3 pb-4">
									<li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
										Change status to:</li>
									<li class="navi-item">
										<a href="#" class="navi-link" data-toggle="status-change" data-status="1">
											<span class="navi-text">
												<span class="label label-light-success label-inline font-weight-bold">Approved</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link" data-toggle="status-change" data-status="2">
											<span class="navi-text">
												<span class="label label-light-danger label-inline font-weight-bold">Rejected</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link" data-toggle="status-change" data-status="3">
											<span class="navi-text">
												<span class="label label-light-warning label-inline font-weight-bold">Pending</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link" data-toggle="status-change" data-status="4">
											<span class="navi-text">
												<span class="label label-light-info label-inline font-weight-bold">On
													Hold</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<button class="btn btn-light-success font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">Fetch Selected</button>
						<button class="btn btn-light-danger font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_delete_all">Delete All</button>
					</div>
				</div>
				<!--end::Group Actions-->
			</div>
			<!--end::Details-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Button-->
				<a href="#" class=""></a>
				<!--end::Button-->
				<!--begin::Button-->
				<a href="custom/apps/user/add-user.html" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add
					Products</a>
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
				<!--begin::Header-->
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label">Data Products
							<span class="d-block text-muted pt-2 font-size-sm">Management Products Data</span>
						</h3>
					</div>
					<div class="card-toolbar">
						<!--begin::Dropdown-->
						<div class="dropdown dropdown-inline mr-2">
							<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="svg-icon svg-icon-md">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
											<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>Export</button>
							<!--begin::Dropdown Menu-->
							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
								<!--begin::Navigation-->
								<ul class="navi flex-column navi-hover py-2">
									<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
										Choose an option:</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-print"></i>
											</span>
											<span class="navi-text">Print</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-copy"></i>
											</span>
											<span class="navi-text">Copy</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-file-excel-o"></i>
											</span>
											<span class="navi-text">Excel</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-file-text-o"></i>
											</span>
											<span class="navi-text">CSV</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-file-pdf-o"></i>
											</span>
											<span class="navi-text">PDF</span>
										</a>
									</li>
								</ul>
								<!--end::Navigation-->
							</div>
							<!--end::Dropdown Menu-->
						</div>
						<!--end::Dropdown-->
						<!--begin::Button-->

					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Datatable-->
					<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable">
						<table class="datatable-table" style="display: block;">
							<thead class="datatable-head">
								<tr class="datatable-row" style="left: 0px;">
									<th class="datatable-cell datatable-toggle-detail">
										<span></span>
									</th>
									<th data-field="RecordID" class="datatable-cell-left datatable-cell datatable-cell-sort datatable-cell-sorted" data-sort="asc">
										<span style="width: 40px;">"#"
											<i class="flaticon2-arrow-up"></i>
										</span>
									</th>
									<th data-field="OrderID" class="datatable-cell datatable-cell-sort">
										<span style="width: 150px;">Nama</span>
									</th>
									<th data-field="Country" class="datatable-cell datatable-cell-sort">
										<span style="width: 130px;">Email</span>
									</th>
									<th data-field="ShipDate" class="datatable-cell datatable-cell-sort">
										<span style="width: 120px;">No.Tlp</span>
									</th>
									<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
										<span style="width: 110px;">Username</span>
									</th>
									<th data-field="Actions" data-autohide-disable="false" class="datatable-cell datatable-cell-sort">
										<span style="width: 130px;">Actions</span>
									</th>
								</tr>
							</thead>
							<tbody class="datatable-body">
								<?php
								$no = 1;
								foreach ($database->selectOrder('users', 'id_user') as $load) {
								?>
									<tr data-row="0" class="datatable-row" style="left: 0px;">
										<td class="datatable-cell datatable-toggle-detail">
											<a href="" class="datatable-toggle-detail"><i class="fa fa-caret-right">
												</i>
											</a>
										</td>
										<td class="datatable-cell-sorted datatable-cell-left datatable-cell" data-field="RecordID" aria-label="1">
											<span style="width: 40px;">
												<span class="font-weight-bolder"><?php echo $no++; ?></span>
											</span>
										</td>
										<td data-field="OrderID" aria-label="24796526" class="datatable-cell">
											<span style="width: 150px;">
												<div class="d-felx align-items-center">
													<?php echo $load['nama_user']; ?>
												</div>
											</span>
										</td>
										<td data-field="Country" aria-label="24796526" class="datatable-cell">
											<span style="width: 130px;">
												<div class="d-felx align-items-center">
													<?php echo $load['email']; ?>
												</div>
											</span>
										</td>
										<td data-field="ShipDate" aria-label="24796526" class="datatable-cell">
											<span style="width: 120px;">
												<div class="d-felx align-items-center">
													<?php echo $load['no_tlp']; ?>
												</div>
											</span>
										</td>
										<td data-field="CompanyName" aria-label="24796526" class="datatable-cell">
											<span style="width: 110px;">
												<div class="d-felx align-items-center">
													<?php echo $load['username']; ?>
												</div>
											</span>
										</td>

										<td data-field="Actions" data-autohide-disable="false" aria-label="24796526" class="datatable-cell">
											<span style="overflow: visible; position: relative; width: 130px;">
												<div class="dropdown dropdown-inline">
													<a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" data-toggle="dropdown"> <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																	<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg> </span> </a>
													<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
														<ul class="navi flex-column navi-hover py-2">
															<li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2"> Detail: </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">Nama : </span> </a> </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">Email : </span> </a> </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">No.Tlp : </span> </a> </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">Tgl.Gabung : </span> </a> </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">Username : </span> </a> </li>
														</ul>
														<ul class="navi flex-column navi-hover py-2">
															<li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2"> Detail : </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">Nama : </span> </a> </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">Email : </span> </a> </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">No.Tlp : </span> </a> </li>
															<li class="navi-item"> <a href="#" class="navi-link"><span class="navi-text">Tgl.Gabung : </span> </a> </li>
															<li class="navi-item"><a href="#" class="navi-link"><span class="navi-text">Username : </span> </a> </li>
														</ul>
													</div>
												</div>
												<a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details"> <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
																<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															</g>
														</svg> </span> </a>
												<a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon" title="Delete"> <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg> </span> </a>
											</span>
										</td>
									<?php
								}
									?>
									</tr>
							</tbody>
						</table>
					</div>
					<!--end: Datatable-->
				</div>
				<!--end::Body-->
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