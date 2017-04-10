<style type="text/css">
	.newsletter-popup {
		width: 350px;
	}
	.navbar-center .dropdown-menu {
		left: -50%;
		margin-left: -50%;
		margin-top: 10px;
	}
	.open> .dropdown-menu {
		display: block;
	}
	.newsletter-link ul {
		padding: 0;
		list-style: none;
	}
	.newsletter-popup {
		width: 350px;
	}
	.dropdown-menu {
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 1000;
		display: none;
		float: left;
		min-width: 160px;
		padding: 5px 0;
		margin: 2px 0 0;
		list-style: none;
		font-size: 14px;
		text-align: left;
		background-color: #ffffff;
		border: 1px solid #cccccc;
		border: 1px solid rgba(0, 0, 0, 0.15);
		border-radius: 0px;
		-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
		box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
		background-clip: padding-box;
	}
	
	.newsletter-popup .modal-header {
		height: auto;
		border-bottom: 1px solid #dfdfdf;
		padding-bottom: 10px;
		padding-top: 5px;
	}
	.modal-header {
		padding: 20px;
		position: relative;
		height: 50px;
		border-bottom: 0;
	}
	.modal-header {
		padding: 15px;
		border-bottom: 1px solid #e5e5e5;
		min-height: 16.428571429px;
	}
	.newsletter-popup .modal-title {
		font-size: 18px;
	}
	.modal-title {
		margin: 0;
		line-height: 1.428571429;
	}
	.text-center {
		text-align: center;
	}
	label {
		display: inline-block;
		max-width: 100%;
		margin-bottom: 5px;
		font-weight: bold;
	}
	.newsletter-popup .modal-body {
		padding: 10px 15px 0 15px;
	}
	.modal-body {
		padding: 20px;
	}
	.modal-body {
		position: relative;
		padding: 15px;
	}
	.dropdown-menu{
		color:#444444;
	}
	input[type="radio"], input[type="checkbox"] {
		margin: 2px 0 0;
		margin-top: 1px \9;
		line-height: normal;
	}
	.newsletter-popup .form-group {
		margin-bottom: 10px;
	}
	.btn-block {
		color: #ffffff;
		background-color: #71be0f;
		border-color: #63a60d;
	}
	.input-group-addon {
		padding: 6px 12px;
		font-size: 14px;
		font-weight: normal;
		line-height: 1;
		color: #555555;
		text-align: center;
		background-color: transparent;
		border: 1px solid #cccccc;
		border-radius: 4px;
	}
	.register,.register:hover,.register:active,.register:focus{
		color:#fff;
		text-decoration: none;
	}
	.newsletter-popup:before{
		border-color: rgba(238, 238, 238, 0);
		border-bottom-color: #eee;
		border-width: 10px;
		margin-left: -10px;
	}
</style>
<header id="masthead">
	<div class="header-top">
		<div class="container">
			<div class="col-md-12 ">
				<div class="col-md-8 col-sm-8 hidden-xs">
					<div class="report-service">Wants to explore Upcoming Deals on Weekends ?</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="pull-right">
						<ul class="header-relative navbar-center">
							<li class="dropdown dropdown-arrow">
								<a href="#" data-toggle="dropdown" class="register">Đăng ký bản tin</a>
								<ul class="dropdown-menu newsletter-popup">
									<li>
										<div class="modal-header">
											<h4 class="modal-title text-center">ĐĂNG KÝ BẢN TIN</h4>
										</div>
										<div class="modal-body clearfix">
											<form id="login-form-popup" class="form--general fv-form fv-form-bootstrap" method="post" action="" data-toggle="validator" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
												<div class="form-group has-feedback">
													<div class="input-group">
														<div class="input-group-addon"><i class="zmdi zmdi-email"></i></div>
														<input type="text" class="form-control" id="email_newsletter" name="email_newsletter" placeholder="Nhập email" autocomplete="off" data-fv-notempty="true" data-fv-notempty-message="Vui lòng nhập Email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" data-fv-regexp-message="Email không hợp lệ" data-fv-field="email_newsletter">
													</div><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="email_newsletter" style="display: none;"></i>
													<small class="help-block" data-fv-validator="notEmpty" data-fv-for="email_newsletter" data-fv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập Email</small><small class="help-block" data-fv-validator="regexp" data-fv-for="email_newsletter" data-fv-result="NOT_VALIDATED" style="display: none;">Email không hợp lệ</small></div>
													<div class="form-group has-feedback">
														<select class="form-control" name="stateId" id="stateId" data-fv-notempty="true" data-fv-notempty-message="Vui lòng chọn tỉnh thành" data-fv-field="stateId">
															<option value="">Chọn Tỉnh Thành</option>
															<option value="437">Hồ Chí Minh</option>
															<option value="440">Hà Nội</option>
															<option value="999999">Tỉnh Thành Khác</option>
														</select><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="stateId" style="display: none;"></i>
														<small class="help-block" data-fv-validator="notEmpty" data-fv-for="stateId" data-fv-result="NOT_VALIDATED" style="display: none;">Vui lòng chọn tỉnh thành</small></div>
														<div class="form-group register-new-letter-comfirm has-feedback">
															<div class="input-group">
																<label class="checkbox-inline" style="font-weight: normal;">
																	<input type="checkbox" name="agree" id="agree" value="1" data-fv-notempty="true" data-fv-notempty-message="Bạn cần phải đồng ý với chính sách bảo mật thông tin" data-fv-field="agree">
																	Đồng ý với <a target="_blank" href="">chính sách bảo mật thông tin</a>.
																</label>
															</div>
															<i class="form-control-feedback fv-bootstrap-icon-input-group" data-fv-icon-for="agree" style="display: none;"></i>
															<small class="help-block" data-fv-validator="notEmpty" data-fv-for="agree" data-fv-result="NOT_VALIDATED" style="display: none;">Bạn cần phải đồng ý với chính sách bảo mật thông tin</small>
														</div>
														<div class="form-group">
															<button type="submit" class="btn  btn-block" disabled="">ÐĂNG KÝ</button>
														</div>
													</form>
												</div>
											</li>
										</ul>
									</li>
									<li class="header_register"><a href=""> Đăng Ký </a></li>
									<li class="header_login"><a href=""> Đăng Nhập </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle full-header active">
				<div class="container">
					<div class="row">
						<div class="header_logo headermiddle col-md-3 col-xs-12 col-lg-3">
							<div class="logo text-center">
								<a class="header-logo" href="{{url('/')}}" >
									<img src="{{asset('upload/images/logo.png')}}" alt="Header Logo">
								</a>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 col-xs-12">
							<div class="input-group my-group col-xs-12 col-md-12">
								<form>
									<input type="text" style="width: 75%" class="form-control input_Search" placeholder="Nhập từ khóa cần tìm ... " name="">
									<select class="form-control sl_filter" style="width: 25%">
										<option>Âm Nhạc</option>
										<option>Music</option>
										<option>Music</option>
										<option>Music</option>
										<option>Music</option>
										<option>Music</option>
									</select>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-xs-12 col-sm-12">
							<div class="col-md-6 hidden-xs hidden-sm col-lg-6 ttcmsheaderservices header_right">
								<div class="ttsupport">
									<div class="ttcontent_inner">
										<div class="service">
											<div class="ttsupport_img service-icon"></div>
											<div class="service-content">
												<div class="service-title">Hotline</div>
												<div class="service-desc">088-888-8888</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 hidden-sm  hidden-xs col-lg-6 ttcmsheaderservices header_right">
								<div class="ttsupport">
									<div class="ttcontent_inner">
										<div class="service">
											<div class="ttsupport_img service-icon"></div>
											<div class="service-content">
												<div class="service-title">Hổ Trợ Trực Tuyến</div>
												<div class="service-desc">088-888-8888</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>