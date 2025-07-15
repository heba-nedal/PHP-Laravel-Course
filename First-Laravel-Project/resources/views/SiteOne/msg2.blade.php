<h1>MSG : {{ $id }}</h1>
@foreach ([1,2,3,4] as $item)
    @if ($item % 2 == 0)
        <p>{{$item}}</p>
    @endif
@endforeach
