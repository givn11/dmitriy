<h1>Привет, {!! $name !!}!</h1>

@foreach($animals as $animal)
    <li>{{$animal}}</li>
    @endforeach
<hr>

@forelse($animals as $animal)
    <li>{{$animal}}</li>
    @empty
    <p>No animals</p>
    @endforelse
<hr>
@json($animals);
<hr>

@verbatim
    {{data}}
    {{id}}
    @endverbatim
{{--@if(isset($name))
    <h1>{{$name}}</h1>
    @else
    <h1>Имя не существует</h1>
    @endif--}}



{{--{{dd($animals)}}--}}

