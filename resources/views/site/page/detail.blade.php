@extends('site.master')
@section('content')
<link href="{{asset('public/site/css/ubislider.min.css')}}" rel="stylesheet" type="text/css">
<div class="box box-block bg-white mb-0">
	<div class="product-details">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="clearfix">
					<div class="ubislider-image-container" data-ubislider="#slider" id="imageSlider"></div>
					<div class="ubislider" id="slider">
						<a class="arrow prev"></a>
						<a class="arrow next"></a>
						<ul class="ubislider-inner">
							<li> 
								<a> 
									<img class="product-v-img" src="{{asset('upload/images/1.jpg')}}" class="img-responsive"> 
								</a> 
							</li>
							<li> 
								<a> 
									<img class="product-v-img" src="{{asset('upload/images/2.jpg')}}" class="img-responsive"> 
								</a> 
							</li>
							<li> 
								<a> 
									<img class="product-v-img" src="{{asset('upload/images/3.jpg')}}" class="img-responsive"> 
								</a> 
							</li>
							<li> 
								<a> 
									<img class="product-v-img" src="{{asset('upload/images/4.jpg')}}" class="img-responsive"> 
								</a> 
							</li>
							<li> 
								<a> 
									<img class="product-v-img" src="{{asset('upload/images/5.jpg')}}" class="img-responsive"> 
								</a> 
							</li>
							<li> 
								<a> 
									<img class="product-v-img" src="{{asset('upload/images/6.jpg')}}" class="img-responsive"> 
								</a> 
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-8">
				<div class="clearfix">
					<p class="title-products-details">Mã giảm giá Tiki 30.000 áp dụng cho đơn hàng 800K</p>
					<p class="note"><span class="label_note">Lưu ý :</span> Áp dụng cho đơn hàng có giá từ 2 Triệu Đến dưới 6 Triệu, áp dụng tất cả sản phẩm trừ Tã - Sữa và Dịch vụ tiện ích </br>
					</p>
					<p class="short_description_product"><span class="label_note">Mô tả ngắn :</span>dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea voluptate velit esse quam nihil molestiae consequaturlaudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem vel illum qui dolorem dolore magnam aliquam quaerat voluptatem.</p>
					<p class="timer_product"><span class="label_note">Hạn dùng : </span> 06/04/2017</p>
					<p class="price-details">Danh Mục: Accessories, Canon Camera, Cases & Covers, Digital Camera, Electronics </p>
					<div class="get_code">
					<button class="btn btn_code" onclick="var person = prompt('Nhập mã coupon bên dưới để được giảm giá, vui lòng đọc kỹ quy định sử dụng. Sau khi copy, hệ thống sẽ tự chuyển bạn đến trang khuyến mãi.', 'OTHER8'); window.open('#','_self')">Mã giảm giá tiki <i class="fa fa-free-code-camp"></i></button>
					<button class="btn btn_code" onclick="var person = prompt('Nhập mã coupon bên dưới để được giảm giá, vui lòng đọc kỹ quy định sử dụng. Sau khi copy, hệ thống sẽ tự chuyển bạn đến trang khuyến mãi.', 'OTHER8'); window.open('#','_self')">Quay lại <i class="fa fa-free-code-camp"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="box box-block bg-white mb-0">
	<div class="product-details">
		<p class="description-details-content">Mô tả sản phẩm</p>
		<div class="row">
			<div class="col-md-4 tech_product">
				<div><span>Dolorem</span> : ipsum quia dolor ipsum quia dolor</div>	
				<div><span>Dolorem </span>: ipsum quia dolor ipsum quia dolor</div>
				<div><span>Dolorem </span>: ipsum quia dolor ipsum quia dolor</div>
				<div><span>Dolorem </span>: ipsum quia dolor ipsum quia dolor</div>
				<div><span>Dolorem </span>: ipsum quia dolor ipsum quia dolor</div>
				<div><span>Dolorem </span>: ipsum quia dolor ipsum quia dolor</div>
				<div><span>Dolorem </span>: ipsum quia dolor ipsum quia dolor</div>
				<div><span>Dolorem </span>: ipsum quia dolor ipsum quia dolor</div>
				<div><span>Dolorem </span>: ipsum quia dolor</div>
			</div>
			<div class="col-md-8">
				<p class="description-details">Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea voluptate velit esse quam nihil molestiae consequaturlaudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem vel illum qui dolorem dolore magnam aliquam quaerat voluptatem. dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea voluptate velit esse quam nihil molestiae consequaturlaudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem vel illum qui dolorem dolore magnam aliquam quaerat voluptatem.</p>


			</div>
		</div>
	</div>
</div>
<div class="box box-block bg-white mb-0">
	<div class="comments">
		<p class="description-details-content">Bình Luận <i class="fa fa-comment-o"></i></p>
		<textarea class="form-control"></textarea>
	</div>
</div>
<div class="box box-block bg-white mb-0">
	<h5>
		<i class="fa fa-codepen"></i> <span>Furniture </span>
	</h5>
	<div class="owl-carousel">
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/1.jpg')}}" class="img-products"></a>
			<span class="label-voucher">E-Voucher</span>
			<span class="label-position"><i class="fa fa-map-marker"></i> Châu Đốc</span>
			<span id="countdown" class="timer"></span>
			
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/2.jpg')}}"></a>
			<span class="label-voucher">E-Voucher</span>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/3.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/4.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/5.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/6.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/7.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/8.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/9.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/10.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="box box-block bg-white mb-0">
	<h5>
		<i class="fa fa-codepen"></i> <span>Furniture </span>
	</h5>
	<div class="owl-carousel">
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/1.jpg')}}" class="img-products"></a>
			<span class="label-voucher">E-Voucher</span>
			<span class="label-position"><i class="fa fa-map-marker"></i> Châu Đốc</span>
			<span id="countdown" class="timer"></span>
			
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/2.jpg')}}"></a>
			<span class="label-voucher">E-Voucher</span>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/3.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/4.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/5.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/6.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/7.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/8.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/9.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/10.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="box box-block bg-white mb-0">
	<h5>
		<i class="fa fa-codepen"></i> <span>Furniture </span>
	</h5>
	<div class="owl-carousel">
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/1.jpg')}}" class="img-products"></a>
			<span class="label-voucher">E-Voucher</span>
			<span class="label-position"><i class="fa fa-map-marker"></i> Châu Đốc</span>
			<span id="countdown" class="timer"></span>
			
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/2.jpg')}}"></a>
			<span class="label-voucher">E-Voucher</span>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/3.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/4.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/5.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/6.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/7.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/8.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/9.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/10.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="box box-block bg-white mb-0">
	<h5>
		<i class="fa fa-codepen"></i> <span>Furniture </span>
	</h5>
	<div class="owl-carousel">
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/1.jpg')}}" class="img-products"></a>
			<span class="label-voucher">E-Voucher</span>
			<span class="label-position"><i class="fa fa-map-marker"></i> Châu Đốc</span>
			<span id="countdown" class="timer"></span>
			
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/2.jpg')}}"></a>
			<span class="label-voucher">E-Voucher</span>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/3.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/4.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/5.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/6.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/7.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/8.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/9.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<span class="news-icon">New</span>
			<a href=""><img src="{{asset('upload/images/10.jpg')}}"></a>
			<div class="content-products">
				<div class="title-products">
					<a href="">Tour Du Xuân Chùa Hương 01 Ngày, Khởi Hành Hàng Ngày - Cho 01 Người</a>
				</div>
				<div class="price">
					<div class="price-new">420,000 đ</div>
					<div class="price-old">
						<s>750,000 đ</s>
						<span class="pull-right">
							<i class="fa fa-eye"> 152</i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{asset('public/site/cdn.jsdelivr.net/elevatezoom/3.0.8/jqueryElevateZoom.js')}}"></script>
<script src="{{asset('public/site/js/ubislider.min.js')}}"></script>
<script src="{{asset('public/site/js/scripts.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		var width = $(window).width();
		if(width < 968 && width > 320){
			$('.content-center').attr('style','padding-left:0px;');
		}else{
			$('.content-center').attr('style','padding-left:15px;');
		}
		$(window).resize(function() {
			var width = $(window).width();
			if(width < 968 && width > 320){
				$('.content-center').attr('style','padding-left:0px;');
			}else{
				$('.content-center').attr('style','padding-left:15px;');
			}
		});
		$('#slider').ubislider({
			arrowsToggle: true,
			type: 'ecommerce',
			hideArrows: true,
			autoSlideOnLastClick: true,
			modalOnClick: true,
		});  
	});
</script>
@endsection