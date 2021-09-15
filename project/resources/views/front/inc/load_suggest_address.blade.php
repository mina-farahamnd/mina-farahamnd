@if($address && $address->items)
    @foreach(array_slice($address->items, 0, 5) as $data)
        <li class="list-group-item suggest-address" data-coordinate-x="{{$data->location->x}}" data-coordinate-y="{{$data->location->y}}">
            <span class="font-weight-bold d-block text__small">{{$data->title}}</span>

            <span class="d-block">{{isset($data->address) ? $data->address : ''}}</span>
            <span class="d-block">{{$data->region}}</span>
        </li>
    @endforeach
@endif