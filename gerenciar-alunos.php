<?php include 'topo.php'; ?>
				<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<?php include 'menu.php'; ?>
				
						<!--begin::Toolbar-->
						<div class="toolbar d-flex align-items-stretch">
							<!--begin::Toolbar container-->
							<div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
								<!--begin::Page title-->
								<div class="page-title d-flex justify-content-center flex-column me-5">
									<!--begin::Title-->
									<h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Gerenciar Alunos</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="#" class="text-muted text-hover-primary">Meu Dashboard</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Secretaria</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Gerenciar Alunos</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Action group-->
								<div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
								
						
								
								
								</div>
								<!--end::Action group-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								

									<!--begin::Tables Widget 9-->
								<div class="card mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder fs-3 mb-1">Alunos</span>
											<span class="text-muted mt-1 fw-bold fs-7">500 cadastrados</span>
										</h3>
										<div class="card-toolbar">
											<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#novo_aluno">Adicionar Novo</a>
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder text-muted">
														<th class="w-25px">
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
															</div>
														</th>
														<th class="min-w-250px">Nome</th>
														<th class="min-w-50px">Status</th>
														<th class="min-w-50px">Sala</th>
														<th class="min-w-50px">N. Educ.</th>
														<th class="min-w-100px">Idade</th>
														<th class="min-w-100px">Responsáveis</th>
														<th class="min-w-100px text-end">Ações</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-danger">Desativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-success">Ativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-success">Ativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-danger">Desativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-danger">Desativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-danger">Desativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-danger">Desativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-9-check" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			
																		</div>
																	</div>
														</td>
														<td>
															<span class="badge badge-light-danger">Desativado</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Azul</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">1 Ciclo</a>
															
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">3a 6m</a>
															
														</td>
														<td >
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
																	<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
																</div>
															
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																	<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
																</a>
															</div>
															<!--end::Users group-->
														</td>
														<td>
															<div class="d-flex justify-content-end flex-shrink-0">
															
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-pencil-square"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="menu-icon">													
																		<i class="bi bi-trash"></i>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
														</td>
													</tr>
													
													
													
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--begin::Body-->
								</div>
								<!--end::Tables Widget 9-->
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					

<?php include 'footer.php'; ?>		
