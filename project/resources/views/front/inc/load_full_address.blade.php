@if($addresses)
    @foreach($addresses as $address)
        <div class="col-12 col-md-4 user-address">
            <div class="d-flex justify-content-between address__select">
                <div class="d-flex mb-3 address__select--position">
                    <img src="{{ asset('assets/front/icon/star.svg') }}" alt="">
                    <span class="mr-2 text__small text__black text__iranyekan--regular">{{$address->title}}</span>
                </div>

				<div>
					<label class="container container-select-address" for="stock">
						<input type="radio" name="selected_address" value="{{$address->id}}" {{$loop->iteration == 1 ? 'checked' : ''}}>
						<span class="checkmark"></span>
					</label>
				</div>
            </div>
            <div class="py-3 address__select--content">
                <div class="mb-3 font-weight-bold text-justify text__small selected-full-address" >{{$address->address}}</div>

{{--                <span>{{$address->province . " - " . $address->city}}</span>--}}
                کد پستی : <span class="selected-post-code text__iranyekan--bold">{{$address->post_code}}</span>
                <br>
                تلفن : <span class="selected-phone text__iranyekan--bold">{{$address->phone}}</span>
            </div>
        </div>
    @endforeach
@endif