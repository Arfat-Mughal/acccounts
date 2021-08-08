@extends('layouts.app', ['pageSlug' => 'customers_list', 'page' => 'Customers list', 'section' => 'customers'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">Advanced Search Examples</h2>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <div class="d-flex align-items-center font-weight-bold my-2">
                            <!--begin::Item-->
                            <a href="#" class="opacity-75 hover-opacity-100">
                                <i class="flaticon2-shelter text-white icon-1x"></i>
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Crud</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Datatables.net</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Search Options</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Advanced Search</a>
                            <!--end::Item-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Details-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Reports</a>
                    <!--end::Button-->
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Quick actions">
                        <a href="#" class="btn btn-white font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-drop"></i>
														</span>
                                        <span class="navi-text">New Group</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-list-3"></i>
														</span>
                                        <span class="navi-text">Contacts</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
                                        <span class="navi-text">Groups</span>
                                        <span class="navi-link-badge">
															<span class="label label-light-primary label-inline font-weight-bold">new</span>
														</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
                                        <span class="navi-text">Calls</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-gear"></i>
														</span>
                                        <span class="navi-text">Settings</span>
                                    </a>
                                </li>
                                <li class="navi-separator my-3"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-magnifier-tool"></i>
														</span>
                                        <span class="navi-text">Help</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
                                        <span class="navi-text">Privacy</span>
                                        <span class="navi-link-badge">
															<span class="label label-light-danger label-rounded font-weight-bold">5</span>
														</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
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
                <!--begin::Notice-->
                <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                    <div class="alert-icon">
										<span class="svg-icon svg-icon-primary svg-icon-xl">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
													<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                    </div>
                    <div class="alert-text">This example is almost identical to text based individual column example and provides the same functionality. With server-side processing enabled, all paging, searching, ordering actions that DataTables performs are handed off to a server where an SQL engine (or similar) can perform these actions on the large data set. See official documentation
                        <a class="font-weight-bold" href="https://datatables.net/examples/api/multi_filter_select.html" target="_blank">here</a>.</div>
                </div>
                <!--end::Notice-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-delivery-package text-primary"></i>
											</span>
                            <h3 class="card-label">Advanced Search Form</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Dropdown-->
                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>Export</button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
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
                            <a href="#" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="9" cy="15" r="6"></circle>
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>New Record</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Search Form-->
                        <form class="kt-form kt-form--fit mb-15">
                            <div class="row mb-6">
                                <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>RecordID:</label>
                                    <input type="text" class="form-control datatable-input" placeholder="E.g: 4590" data-col-index="0">
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>OrderID:</label>
                                    <input type="text" class="form-control datatable-input" placeholder="E.g: 37000-300" data-col-index="1">
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Country:</label>
                                    <select class="form-control datatable-input" data-col-index="2">
                                        <option value="">Select</option>
                                        <option value="Brazil">Brazil</option><option value="China">China</option><option value="Dominican Republic">Dominican Republic</option><option value="France">France</option><option value="Philippines">Philippines</option><option value="Portugal">Portugal</option><option value="Ukraine">Ukraine</option><option value="United States">United States</option><option value="Vietnam">Vietnam</option></select>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Agent:</label>
                                    <input type="text" class="form-control datatable-input" placeholder="Agent ID or name" data-col-index="4">
                                </div>
                            </div>
                            <div class="row mb-8">
                                <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Ship Date:</label>
                                    <div class="input-daterange input-group" id="kt_datepicker">
                                        <input type="text" class="form-control datatable-input" name="start" placeholder="From" data-col-index="5">
                                        <div class="input-group-append">
															<span class="input-group-text">
																<i class="la la-ellipsis-h"></i>
															</span>
                                        </div>
                                        <input type="text" class="form-control datatable-input" name="end" placeholder="To" data-col-index="5">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Status:</label>
                                    <select class="form-control datatable-input" data-col-index="6">
                                        <option value="">Select</option>
                                        <option value="1">Pending</option><option value="2">Delivered</option><option value="3">Canceled</option><option value="5">Info</option><option value="6">Danger</option></select>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Type:</label>
                                    <select class="form-control datatable-input" data-col-index="7">
                                        <option value="">Select</option>
                                        <option value="1">Online</option><option value="2">Retail</option><option value="3">Direct</option></select>
                                </div>
                            </div>
                            <div class="row mt-8">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-primary--icon" id="kt_search">
													<span>
														<i class="la la-search"></i>
														<span>Search</span>
													</span>
                                    </button>&nbsp;&nbsp;
                                    <button class="btn btn-secondary btn-secondary--icon" id="kt_reset">
													<span>
														<i class="la la-close"></i>
														<span>Reset</span>
													</span>
                                    </button></div>
                            </div>
                        </form>
                        <!--begin: Datatable-->
                        <!--begin: Datatable-->
                        <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-hover table-checkable dataTable dtr-inline" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1229px;">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 71px;" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">Record ID</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 69px;" aria-label="Order ID: activate to sort column ascending">Order ID</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 126px;" aria-label="Country: activate to sort column ascending">Country</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 165px;" aria-label="Ship City: activate to sort column ascending">Ship City</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 121px;" aria-label="Company Agent: activate to sort column ascending">Company Agent</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 71px;" aria-label="Ship Date: activate to sort column ascending">Ship Date</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 66px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 45px;" aria-label="Type: activate to sort column ascending">Type</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 117px;" aria-label="Actions">Actions</th></tr>
                                        </thead>
                                        <tfoot>
                                        <tr><th rowspan="1" colspan="1">Record ID</th><th rowspan="1" colspan="1">Order ID</th><th rowspan="1" colspan="1">Country</th><th rowspan="1" colspan="1">Ship City</th><th rowspan="1" colspan="1">Company Agent</th><th rowspan="1" colspan="1">Ship Date</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Type</th><th rowspan="1" colspan="1">Actions</th></tr>
                                        </tfoot>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 dtr-control">1</td>
                                            <td>64616-103</td><td>Brazil</td>
                                            <td>São Félix do Xingu</td>
                                            <td>Hayes Boule</td>
                                            <td>10/15/2017</td>
                                            <td><span class="label label-lg font-weight-bold label-light-info label-inline">Info</span></td>
                                            <td><span class="label label-danger label-dot mr-2"></span><span class="font-weight-bold text-danger">Online</span></td>
                                            <td>
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">
                                                        <i class="la la-cog"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">
                                                                    <i class="nav-icon la la-edit"></i>
                                                                    <span class="nav-text">Edit Details</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">
                                                                    <i class="nav-icon la la-leaf"></i>
                                                                    <span class="nav-text">Update Status</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">
                                                                    <i class="nav-icon la la-print"></i>
                                                                    <span class="nav-text">Print</span>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">
                                                    <i class="la la-edit"></i>
                                                </a>
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                                    <i class="la la-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
@push('js')
    <script>
        $(document).ready( function () {
            $('.table').DataTable();
        } );
    </script>
@endpush