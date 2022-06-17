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
									<h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Rotinas</h1>
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
										<li class="breadcrumb-item text-muted">Jacob Jones</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Rotina do dia</li>
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
								
								<!--begin::Navbar-->
								<div class="card mb-5 mb-xxl-8">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap">
											<!--begin: Pic-->
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img src="assets/media/avatars/300-1.jpg" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::User-->
													<div class="d-flex flex-column">
														<!--begin::Name-->
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Max Smith</a>
															
														</div>
														<!--end::Name-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																3 anos e 9 meses
															</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->

													
												</div>
												<!--end::Title-->
												<!--begin::Stats-->
												<div class="d-flex flex-wrap flex-stack">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column flex-grow-1 pe-8">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	
																	<div class="fs-2 fw-bolder" >Azul</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Sala</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	
																	<div class="fs-2 fw-bolder" >1º Ciclo</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Nível Educ</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																
																	<div class="fs-2 fw-bolder" >Leslie Alexander</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Resp. Educacional</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Wrapper-->
													
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										
									</div>
								</div>
								<!--end::Navbar-->
								
								<!--begin::Toolbar-->
								<div class="d-flex flex-wrap flex-stack mb-6">
									<!--begin::Heading-->
									<h3 class="fw-bolder my-2">Hoje, Terça 28 Julho
									</h3>
									<!--end::Heading-->
									<!--begin::Actions-->
									<div class="d-flex flex-wrap my-2">
										<div class="me-4">
											<!--begin::Select-->
											<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-125px">
												<option value="Active" selected="selected">Segunda</option>
												<option value="Approved">Terça</option>
												<option value="Declined">Quarta</option>
												<option value="In Progress">Quinta</option>
												<option value="In Progress">Sexta</option>
											</select>
											<!--end::Select-->
										</div>
										<a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Filtrar</a>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar-->

									<!--begin::Row-->
								<div class="row g-6 g-xl-9">
									
								
									<div class="col-md-6 col-xl-4">
										<!--begin::Card-->
										<a href="../../demo8/dist/apps/projects/project.html" class="card border-hover-primary">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<!--begin::Avatar-->
													<div class="py-md-1 px-md-4 bg-light">
														<i class="bi bi-card-checklist"></i>
													</div>
													<!--end::Avatar-->
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<span class="fw-bolder me-auto px-4 py-3">16:00</span>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Atividade</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Designers and statisticians disagree on what makes a good information graphic </p>
												<!--end::Description-->
											
												
												<!--end::Progress-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover">
													
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Por: Nick Macy">
														<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
													</div>
													<!--begin::User-->
													
												</div>
												<!--end::Users-->
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->


									<div class="col-md-6 col-xl-4">
										<!--begin::Card-->
										<a href="../../demo8/dist/apps/projects/project.html" class="card border-hover-primary">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<!--begin::Avatar-->
													<div class="py-md-1 px-md-4 bg-light">
														<i class="bi bi-alarm"></i>
													</div>
													<!--end::Avatar-->
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<span class="fw-bolder me-auto px-4 py-3">16:00</span>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Alimentação</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Designers and statisticians disagree on what makes a good information graphic </p>
												<!--end::Description-->
											
												
												<!--end::Progress-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover">
													
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Por: Nick Macy">
														<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
													</div>
													<!--begin::User-->
													
												</div>
												<!--end::Users-->
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->

									<div class="col-md-6 col-xl-4">
										<!--begin::Card-->
										<a href="../../demo8/dist/apps/projects/project.html" class="card border-hover-primary">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<!--begin::Avatar-->
													<div class="py-md-1 px-md-4 bg-light">
														<i class="bi bi-alarm"></i>
													</div>
													<!--end::Avatar-->
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<span class="fw-bolder me-auto px-4 py-3">16:00</span>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Alimentação</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Designers and statisticians disagree on what makes a good information graphic </p>
												<!--end::Description-->
											
												
												<!--end::Progress-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover">
													
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Por: Nick Macy">
														<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
													</div>
													<!--begin::User-->
													
												</div>
												<!--end::Users-->
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->


									<div class="col-md-6 col-xl-4">
										<!--begin::Card-->
										<a href="../../demo8/dist/apps/projects/project.html" class="card border-hover-primary">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<!--begin::Avatar-->
													<div class="py-md-1 px-md-4 bg-light">
														<i class="bi bi-alarm"></i>
													</div>
													<!--end::Avatar-->
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<span class="fw-bolder me-auto px-4 py-3">16:00</span>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Alimentação</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Designers and statisticians disagree on what makes a good information graphic </p>
												<!--end::Description-->
											
												
												<!--end::Progress-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover">
													
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Por: Nick Macy">
														<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
													</div>
													<!--begin::User-->
													
												</div>
												<!--end::Users-->
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->

									<div class="col-md-6 col-xl-4">
										<!--begin::Card-->
										<a href="../../demo8/dist/apps/projects/project.html" class="card border-hover-primary">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<!--begin::Avatar-->
													<div class="py-md-1 px-md-4 bg-light">
														<i class="bi bi-alarm"></i>
													</div>
													<!--end::Avatar-->
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<span class="fw-bolder me-auto px-4 py-3">16:00</span>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Alimentação</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Designers and statisticians disagree on what makes a good information graphic </p>
												<!--end::Description-->
											
												
												<!--end::Progress-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover">
													
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Por: Nick Macy">
														<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
													</div>
													<!--begin::User-->
													
												</div>
												<!--end::Users-->
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->






								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					

<?php include 'footer.php'; ?>		
