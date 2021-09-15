@extends('layouts.front')

@section('content')

<section class="title">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
				<div class="d-flex w-100 py-2 px-4 title__black">
					<a href="" class="text-decoration-none">
						<span class="text-white text__medium text__iranyekan--bold">انتخاب فیلتر</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

	<section class="discount--coupon my-5">
		<div class="container-fluid">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
				<div class="col px-3 my-3">
					<div class="card h-100 border-0">
						<div class="products__card--img">
							<img src="{{ asset('/assets/front/images/card-1.webp') }}" alt="" class="card-img">
							<div class="px-4 py-2 d-inline-block discount__tag">
								<span class="text__large">%0 -</span>
							</div>
							<div class="card-img-overlay card-img-overlay-discount">
								<div class="px-3 d-inline-block favorites__cart mt-2">
									<div class="d-flex">
										<a href="" class="text-decoration-none add-to-wish">
											<img src="{{ asset('/assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart--img">
										</a>
										<a href="" class="text-decoration-none">
											<img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body px-0">
							<div class="card-title products__card--title">
								<h5 class="font-weight-bold">
									<a href="" class="text-decoration-none text__black">Affiliate Product Title will Be Here. Affiliate Product...</a>
								</h5>
							</div>
							<div class="card-text">
								<div class="row">
									<div class="col-9 pl-0">
										<div class="products__card--text text-justify">
											<span class="d-block font-weight-bold text__medium">کالای دیجیتال</span>
											<span class="d-block mt-1 text__medium">watch , versions , English , Finibus , Malorum , Rackham , reproduced , Lorem Ipsum , since , below</span>
										</div>
									</div>
									<div class="col-3 pt-2">
										<div class="row">
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="card-footer px-0 bg-white border-0">
							<div class="row">
								<div class="col-12 mt-3">
									<div class="d-flex justify-content-between py-3 px-3">
										<span class="text__large">قیمت کالا:</span>
										<div class="">
											<div class="d-flex flex-row-reverse position-relative">
												<span class="text__large mx-2 text__number">3,890,000</span>
												<span class="text__large">RL</span>
											</div>
											<div class="diagonel-line products__card--diagonel"></div>
										</div>
									</div>
								</div>
								<div class="col-12 mt-1">
									<div class="d-flex justify-content-between py-3 px-3 products__card--price">
										<span class="text__medium">قیمت با تخفیف:</span>
										<div class="d-flex flex-row-reverse">
											<span class="text__medium mx-2 text__number">3,890,000</span>
											<span class="text__medium">RL</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>

				<div class="col px-3 my-3">
					<div class="card h-100 border-0">
						<div class="products__card--img">
							<img src="{{ asset('/assets/front/images/card-1.webp') }}" alt="" class="card-img">
							<div class="px-4 py-2 d-inline-block discount__tag">
								<span class="text__large">%0 -</span>
							</div>
							<div class="card-img-overlay card-img-overlay-discount">
								<div class="px-3 d-inline-block favorites__cart mt-2">
									<div class="d-flex">
										<a href="" class="text-decoration-none add-to-wish">
											<img src="{{ asset('/assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart--img">
										</a>
										<a href="" class="text-decoration-none">
											<img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body px-0">
							<div class="card-title products__card--title">
								<h5 class="font-weight-bold">
									<a href="" class="text-decoration-none text__black">Affiliate Product Title will Be Here. Affiliate Product...</a>
								</h5>
							</div>
							<div class="card-text">
								<div class="row">
									<div class="col-9 pl-0">
										<div class="products__card--text text-justify">
											<span class="d-block font-weight-bold text__medium">کالای دیجیتال</span>
											<span class="d-block mt-1 text__medium">watch , versions , English , Finibus , Malorum , Rackham , reproduced , Lorem Ipsum , since , below</span>
										</div>
									</div>
									<div class="col-3 pt-2">
										<div class="row">
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="card-footer px-0 bg-white border-0">
							<div class="row">
								<div class="col-12 mt-3">
									<div class="d-flex justify-content-between py-3 px-3">
										<span class="text__large">قیمت کالا:</span>
										<div class="">
											<div class="d-flex flex-row-reverse position-relative">
												<span class="text__large mx-2 text__number">3,890,000</span>
												<span class="text__large">RL</span>
											</div>
											<div class="diagonel-line products__card--diagonel"></div>
										</div>
									</div>
								</div>
								<div class="col-12 mt-1">
									<div class="d-flex justify-content-between py-3 px-3 products__card--price">
										<span class="text__medium">قیمت با تخفیف:</span>
										<div class="d-flex flex-row-reverse">
											<span class="text__medium mx-2 text__number">3,890,000</span>
											<span class="text__medium">RL</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>


				<div class="col px-3 my-3">
					<div class="card h-100 border-0">
						<div class="products__card--img">
							<img src="{{ asset('/assets/front/images/card-1.webp') }}" alt="" class="card-img">
							<div class="px-4 py-2 d-inline-block discount__tag">
								<span class="text__large">%0 -</span>
							</div>
							<div class="card-img-overlay card-img-overlay-discount">
								<div class="px-3 d-inline-block favorites__cart mt-2">
									<div class="d-flex">
										<a href="" class="text-decoration-none add-to-wish">
											<img src="{{ asset('/assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart--img">
										</a>
										<a href="" class="text-decoration-none">
											<img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body px-0">
							<div class="card-title products__card--title">
								<h5 class="font-weight-bold">
									<a href="" class="text-decoration-none text__black">Affiliate Product Title will Be Here. Affiliate Product...</a>
								</h5>
							</div>
							<div class="card-text">
								<div class="row">
									<div class="col-9 pl-0">
										<div class="products__card--text text-justify">
											<span class="d-block font-weight-bold text__medium">کالای دیجیتال</span>
											<span class="d-block mt-1 text__medium">watch , versions , English , Finibus , Malorum , Rackham , reproduced , Lorem Ipsum , since , below</span>
										</div>
									</div>
									<div class="col-3 pt-2">
										<div class="row">
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="card-footer px-0 bg-white border-0">
							<div class="row">
								<div class="col-12 mt-3">
									<div class="d-flex justify-content-between py-3 px-3">
										<span class="text__large">قیمت کالا:</span>
										<div class="">
											<div class="d-flex flex-row-reverse position-relative">
												<span class="text__large mx-2 text__number">3,890,000</span>
												<span class="text__large">RL</span>
											</div>
											<div class="diagonel-line products__card--diagonel"></div>
										</div>
									</div>
								</div>
								<div class="col-12 mt-1">
									<div class="d-flex justify-content-between py-3 px-3 products__card--price">
										<span class="text__medium">قیمت با تخفیف:</span>
										<div class="d-flex flex-row-reverse">
											<span class="text__medium mx-2 text__number">3,890,000</span>
											<span class="text__medium">RL</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>


				<div class="col px-3 my-3">
					<div class="card h-100 border-0">
						<div class="products__card--img">
							<img src="{{ asset('/assets/front/images/card-1.webp') }}" alt="" class="card-img">
							<div class="px-4 py-2 d-inline-block discount__tag">
								<span class="text__large">%0 -</span>
							</div>
							<div class="card-img-overlay card-img-overlay-discount">
								<div class="px-3 d-inline-block favorites__cart mt-2">
									<div class="d-flex">
										<a href="" class="text-decoration-none add-to-wish">
											<img src="{{ asset('/assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart--img">
										</a>
										<a href="" class="text-decoration-none">
											<img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body px-0">
							<div class="card-title products__card--title">
								<h5 class="font-weight-bold">
									<a href="" class="text-decoration-none text__black">Affiliate Product Title will Be Here. Affiliate Product...</a>
								</h5>
							</div>
							<div class="card-text">
								<div class="row">
									<div class="col-9 pl-0">
										<div class="products__card--text text-justify">
											<span class="d-block font-weight-bold text__medium">کالای دیجیتال</span>
											<span class="d-block mt-1 text__medium">watch , versions , English , Finibus , Malorum , Rackham , reproduced , Lorem Ipsum , since , below</span>
										</div>
									</div>
									<div class="col-3 pt-2">
										<div class="row">
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="card-footer px-0 bg-white border-0">
							<div class="row">
								<div class="col-12 mt-3">
									<div class="d-flex justify-content-between py-3 px-3">
										<span class="text__large">قیمت کالا:</span>
										<div class="">
											<div class="d-flex flex-row-reverse position-relative">
												<span class="text__large mx-2 text__number">3,890,000</span>
												<span class="text__large">RL</span>
											</div>
											<div class="diagonel-line products__card--diagonel"></div>
										</div>
									</div>
								</div>
								<div class="col-12 mt-1">
									<div class="d-flex justify-content-between py-3 px-3 products__card--price">
										<span class="text__medium">قیمت با تخفیف:</span>
										<div class="d-flex flex-row-reverse">
											<span class="text__medium mx-2 text__number">3,890,000</span>
											<span class="text__medium">RL</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>



				<div class="col px-3 my-3">
					<div class="card h-100 border-0">
						<div class="products__card--img">
							<img src="{{ asset('/assets/front/images/card-1.webp') }}" alt="" class="card-img">
							<div class="px-4 py-2 d-inline-block discount__tag">
								<span class="text__large">%0 -</span>
							</div>
							<div class="card-img-overlay card-img-overlay-discount">
								<div class="px-3 d-inline-block favorites__cart mt-2">
									<div class="d-flex">
										<a href="" class="text-decoration-none add-to-wish">
											<img src="{{ asset('/assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart--img">
										</a>
										<a href="" class="text-decoration-none">
											<img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body px-0">
							<div class="card-title products__card--title">
								<h5 class="font-weight-bold">
									<a href="" class="text-decoration-none text__black">Affiliate Product...</a>
								</h5>
							</div>
							<div class="card-text">
								<div class="row">
									<div class="col-9 pl-0">
										<div class="products__card--text text-justify">
											<span class="d-block font-weight-bold text__medium">کالای دیجیتال</span>
											<span class="d-block mt-1 text__medium">watch , versions , English , Finibus , Malorum , Rackham , reproduced , Lorem Ipsum , since , below</span>
										</div>
									</div>
									<div class="col-3 pt-2">
										<div class="row">
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="card-footer px-0 bg-white border-0">
							<div class="row">
								<div class="col-12 mt-3">
									<div class="d-flex justify-content-between py-3 px-3">
										<span class="text__large">قیمت کالا:</span>
										<div class="">
											<div class="d-flex flex-row-reverse position-relative">
												<span class="text__large mx-2 text__number">3,890,000</span>
												<span class="text__large">RL</span>
											</div>
											<div class="diagonel-line products__card--diagonel"></div>
										</div>
									</div>
								</div>
								<div class="col-12 mt-1">
									<div class="d-flex justify-content-between py-3 px-3 products__card--price">
										<span class="text__medium">قیمت با تخفیف:</span>
										<div class="d-flex flex-row-reverse">
											<span class="text__medium mx-2 text__number">3,890,000</span>
											<span class="text__medium">RL</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>



				<div class="col px-3 my-3">
					<div class="card h-100 border-0">
						<div class="products__card--img">
							<img src="{{ asset('/assets/front/images/card-1.webp') }}" alt="" class="card-img">
							<div class="px-4 py-2 d-inline-block discount__tag">
								<span class="text__large">%0 -</span>
							</div>
							<div class="card-img-overlay card-img-overlay-discount">
								<div class="px-3 d-inline-block favorites__cart mt-2">
									<div class="d-flex">
										<a href="" class="text-decoration-none add-to-wish">
											<img src="{{ asset('/assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart--img">
										</a>
										<a href="" class="text-decoration-none">
											<img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body px-0">
							<div class="card-title products__card--title">
								<h5 class="font-weight-bold">
									<a href="" class="text-decoration-none text__black">Affiliate Product Title will Be Here. Affiliate Product...</a>
								</h5>
							</div>
							<div class="card-text">
								<div class="row">
									<div class="col-9 pl-0">
										<div class="products__card--text text-justify">
											<span class="d-block font-weight-bold text__medium">کالای دیجیتال</span>
											<span class="d-block mt-1 text__medium">Rackham , reproduced , Lorem Ipsum , since , below</span>
										</div>
									</div>
									<div class="col-3 pt-2">
										<div class="row">
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="card-footer px-0 bg-white border-0">
							<div class="row">
								<div class="col-12 mt-3">
									<div class="d-flex justify-content-between py-3 px-3">
										<span class="text__large">قیمت کالا:</span>
										<div class="">
											<div class="d-flex flex-row-reverse position-relative">
												<span class="text__large mx-2 text__number">3,890,000</span>
												<span class="text__large">RL</span>
											</div>
											<div class="diagonel-line products__card--diagonel"></div>
										</div>
									</div>
								</div>
								<div class="col-12 mt-1">
									<div class="d-flex justify-content-between py-3 px-3 products__card--price">
										<span class="text__medium">قیمت با تخفیف:</span>
										<div class="d-flex flex-row-reverse">
											<span class="text__medium mx-2 text__number">3,890,000</span>
											<span class="text__medium">RL</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>

			</div>
		</div>
	</section>
@endsection