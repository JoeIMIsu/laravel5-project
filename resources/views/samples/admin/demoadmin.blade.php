<h1>ADMIN </h1>
@if($data->count() >0)
    <ul>
    @foreach ($data as $item)
        <li>{{ $item->title.' => '.$item->status }}</li>
    @endforeach
    </ul>
@endif


{{ dd($data) }}

