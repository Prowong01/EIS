@extends('product')

@section('title', 'Product')

@section('PageTitle')
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Product</h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
        <li class="breadcrumb-item text-muted">
            <a href="#" class="text-muted">Home</a>
        </li>
        <li class="breadcrumb-item text-muted">Product</li>
        <li class="breadcrumb-item text-dark">Index</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection

@section('content')
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Form-->
							<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo3/dist/apps/ecommerce/catalog/products.html">
								<!--begin::Aside column-->
								<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
									<!--begin::Thumbnail settings-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<!--begin::Card title-->
											<div class="card-title">
												<h2>Image</h2>
											</div>
											<!--end::Card title-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body text-center pt-0">
											<!--begin::Image input-->
											<!--begin::Image input placeholder-->
											<style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
											<!--end::Image input placeholder-->
											<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
												<!--begin::Preview existing avatar-->
												<div class="image-input-wrapper w-150px h-150px"></div>
												<!--end::Preview existing avatar-->
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="bi bi-pencil-fill fs-7"></i>
													<!--begin::Inputs-->
													<input type="file" name="p_image" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="imagename" />
													<!--end::Inputs-->
												</label>
												<!--end::Label-->
												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Description-->
											<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Thumbnail settings-->
									<!--begin::Status-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<!--begin::Card title-->
											<div class="card-title">
												<h2>Status</h2>
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
											</div>
											<!--begin::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Select2-->
											<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
												<option></option>
												<option value="published" selected="selected">Published</option>
												<option value="draft">Draft</option>
												<option value="scheduled">Scheduled</option>
												<option value="inactive">Inactive</option>
											</select>
											<!--end::Select2-->
											<!--begin::Description-->
											<div class="text-muted fs-7">Set the product status.</div>
											<!--end::Description-->
											<!--begin::Datepicker-->
											<div class="d-none mt-10">
												<label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
												<input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
											</div>
											<!--end::Datepicker-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Status-->
									<!--begin::Category & tags-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<!--begin::Card title-->
											<div class="card-title">
												<h2>Product Details</h2>
											</div>
											<!--end::Card title-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<!--begin::Label-->
											<label class="form-label">Categories</label>
											<!--end::Label-->
											<!--begin::Select2-->
											<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
												<option></option>
												<option value="1">Computers</option>
												<option value="2">Watches</option>
												<option value="3">Headphones</option>
												<option value="4">Footwear</option>
												<option value="5">Cameras</option>
												<option value="6">Shirts</option>
												<option value="7">Household</option>
												<option value="8">Handbags</option>
												<option value="9">Wines</option>
												<option value="9">Sandals</option>
											</select>
											<!--end::Select2-->
											<!--begin::Description-->
											<div class="text-muted fs-7 mb-7">Add product to a category.</div>
											<!--end::Description-->
											<!--end::Input group-->
											<!--begin::Button-->
											<a href="../../demo3/dist/apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Create new category</a>
											<!--end::Button-->
											<!--begin::Input group-->
											<!--begin::Label-->
											<label class="form-label d-block">Tags</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input id="kt_ecommerce_add_product_tags" name="p_ctg" class="form-control mb-2" value="" />
											<!--end::Input-->
											<!--begin::Description-->
											<div class="text-muted fs-7">Add tags to a product.</div>
											<!--end::Description-->
											<!--end::Input group-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Category & tags-->
									
                                    <!--begin::Category & tags-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<!--begin::Card title-->
											<div class="card-title">
												<h2>Product Supplier</h2>
											</div>
											<!--end::Card title-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<!--begin::Label-->
											<label class="form-label">Supplier</label>
											<!--end::Label-->
											<!--begin::Select2-->
											<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
												<option></option>
												<option value="IT.CEO">IT.CEO</option>
												<option value="KB TOY SHOP">KB TOY SHOP</option>
												<option value="Eddie Supplier">Eddie Supplier</option>
											</select>
											<!--end::Select2-->
											<!--begin::Description-->
											<div class="text-muted fs-7 mb-7">Add New Supplier.</div>
											<!--end::Description-->
											<!--end::Input group-->
											<!--begin::Button-->
											<a href="{{ route('supplier.create') }}" class="btn btn-light-primary btn-sm mb-10">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Create new supplier</a>
											<!--end::Button-->
											<!--begin::Input group-->
											<!--begin::Label-->
											<label class="form-label d-block">Tags</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="" />
											<!--end::Input-->
											<!--begin::Description-->
											<div class="text-muted fs-7">Add tags to a product.</div>
											<!--end::Description-->
											<!--end::Input group-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Category & tags-->
								</div>
								<!--end::Aside column-->
								<!--begin::Main column-->
								<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
									<!--begin:::Tabs-->
									<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Advanced</a>
										</li>
										<!--end:::Tab item-->
									</ul>
									<!--end:::Tabs-->
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab pane-->
										<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
											<div class="d-flex flex-column gap-7 gap-lg-10">
												<!--begin::General options-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>General</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
                                                        <!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="required form-label">Product Code</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" name="p_code" class="form-control mb-2" placeholder="Product Code" value="" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">A product code is required and recommended to be unique.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="required form-label">Product Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" name="p_name" class="form-control mb-2" placeholder="Product name" value="" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div>
															<!--begin::Label-->
															<label class="form-label">Description</label>
															<!--end::Label-->
                                                            <!--begin::Input-->
															<input type="text" name="p_desc" class="form-control mb-2" placeholder="Product description" value="" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
															<!--end::Description-->
														</div>
													</div>
													<!--end::Card header-->
												</div>
												<!--end::General options-->
												<!--begin::Media-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Media</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="fv-row mb-2">
															<!--begin::Dropzone-->
															<div class="dropzone" id="kt_ecommerce_add_product_media">
																<!--begin::Message-->
																<div class="dz-message needsclick">
																	<!--begin::Icon-->
																	<i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-4">
																		<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
																		<span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
																	</div>
																	<!--end::Info-->
																</div>
															</div>
															<!--end::Dropzone-->
														</div>
														<!--end::Input group-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Set the product media gallery.</div>
														<!--end::Description-->
													</div>
													<!--end::Card header-->
												</div>
												<!--end::Media-->
												<!--begin::Pricing-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Pricing</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="required form-label">Base Price</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" name="p_price" class="form-control mb-2" placeholder="Product price" value="" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Set the product price.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														
														
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="required form-label">Selling Price</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" name="p_sellPrice" class="form-control mb-2" placeholder="Product selling price" value="" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Set the product selling price.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														
													</div>
													<!--end::Card header-->
												</div>
												<!--end::Pricing-->
											</div>
										</div>
										<!--end::Tab pane-->
										<!--begin::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
											<div class="d-flex flex-column gap-7 gap-lg-10">
												<!--begin::Inventory-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Inventory</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="required form-label">SKU</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Enter the product SKU.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="required form-label">Barcode</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" name="sku" class="form-control mb-2" placeholder="Barcode Number" value="" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Enter the product barcode number.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="required form-label">Quantity</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div class="d-flex gap-3">
																<input type="number" name="shelf" class="form-control mb-2" placeholder="On shelf" value="" />
																<input type="number" name="warehouse" class="form-control mb-2" placeholder="In warehouse" />
															</div>
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Enter the product quantity.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Label-->
															<label class="form-label">Allow Backorders</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div class="form-check form-check-custom form-check-solid mb-2">
																<input class="form-check-input" type="checkbox" value="" />
																<label class="form-check-label">Yes</label>
															</div>
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Allow customers to purchase products that are out of stock.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Card header-->
												</div>
												<!--end::Inventory-->
												<!--begin::Variations-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Variations</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="" data-kt-ecommerce-catalog-add-product="auto-options">
															<!--begin::Label-->
															<label class="form-label">Add Product Variations</label>
															<!--end::Label-->
															<!--begin::Repeater-->
															<div id="kt_ecommerce_add_product_options">
																<!--begin::Form group-->
																<div class="form-group">
																	<div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
																		<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																			<!--begin::Select2-->
																			<div class="w-100 w-md-200px">
																				<select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
																					<option></option>
																					<option value="color">Color</option>
																					<option value="size">Size</option>
																					<option value="material">Material</option>
																					<option value="style">Style</option>
																				</select>
																			</div>
																			<!--end::Select2-->
																			<!--begin::Input-->
																			<input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Variation" />
																			<!--end::Input-->
																			<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																				<span class="svg-icon svg-icon-1">
																					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																						<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</div>
																	</div>
																</div>
																<!--end::Form group-->
																<!--begin::Form group-->
																<div class="form-group mt-5">
																	<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Add another variation</button>
																</div>
																<!--end::Form group-->
															</div>
															<!--end::Repeater-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Card header-->
												</div>
												<!--end::Variations-->
												<!--begin::Shipping-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Shipping</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Input-->
															<div class="form-check form-check-custom form-check-solid mb-2">
																<input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
																<label class="form-check-label">This is a physical product</label>
															</div>
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Shipping form-->
														<div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
															<!--begin::Input group-->
															<div class="mb-10 fv-row">
																<!--begin::Label-->
																<label class="form-label">Weight</label>
																<!--end::Label-->
																<!--begin::Editor-->
																<input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="" />
																<!--end::Editor-->
																<!--begin::Description-->
																<div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row">
																<!--begin::Label-->
																<label class="form-label">Dimension</label>
																<!--end::Label-->
																<!--begin::Input-->
																<div class="d-flex flex-wrap flex-sm-nowrap gap-3">
																	<input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="" />
																	<input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="" />
																	<input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="" />
																</div>
																<!--end::Input-->
																<!--begin::Description-->
																<div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Shipping form-->
													</div>
													<!--end::Card header-->
												</div>
												<!--end::Shipping-->
												<!--begin::Meta options-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Meta Options</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label">Meta Tag Title</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label">Meta Tag Description</label>
															<!--end::Label-->
															<!--begin::Editor-->
															<div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
															<!--end::Editor-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div>
															<!--begin::Label-->
															<label class="form-label">Meta Tag Keywords</label>
															<!--end::Label-->
															<!--begin::Editor-->
															<input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
															<!--end::Editor-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma
															<code>,</code>between each keyword.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Card header-->
												</div>
												<!--end::Meta options-->
											</div>
										</div>
										<!--end::Tab pane-->
									</div>
									<!--end::Tab content-->
									<div class="d-flex justify-content-end">
										<!--begin::Button-->
										<a href="../../demo3/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
										<!--end::Button-->
										<!--begin::Button-->
										<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
											<span class="indicator-label">Add Product</span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<!--end::Button-->
									</div>
								</div>
								<!--end::Main column-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

 @stop