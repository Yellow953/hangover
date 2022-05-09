@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="m-5 text-center"><u>Menu</u></h1>
        <div class="row">
            @forelse($drinks as $drink)
                <div class="col-4">
                    <a href="/menu/{{$drink->id}}"><img src="{{asset($drink->source)}}" alt="" width="100%" style="max-height: 300px; margin-bottom: 3%; border-radius: 50px;"></a>
                </div>
            @empty
                <h1 class="text-center text-danger py-5">Sorry no available drinks yet please check later...</h1>
            @endforelse

        </div>
    </div>
@endsection
