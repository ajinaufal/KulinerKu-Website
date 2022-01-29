@extends('layouts.master')

@section('body')



    <!-- card -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-custom bg-light align-self-start" style="margin-bottom:5rem !important;">
                @foreach ($data as $key => $item)
                    @if ($key == 0 || $key % 2 == 0)
                        <div class="d-flex justify-content-start mb-2">
                    @endif
                    <div class="card mx-1" @if ($key == (count($data) - 1))
                        class="card mx-1 mb-4"
                        @endif style="width: 11rem;">
                        <img class="card-img-top image-square"
                            src="https://firebasestorage.googleapis.com/v0/b/carimakan-d4a4e.appspot.com/o/{{ $item['FotoMakanan'] }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-text text-center">{{ $item['NamaMakanan'] }}</h6>
                            <p class="text-12 card-text text-center">Rp. {{ $item['HargaMakanan'] }}</p>
                            <p class="text-10 card-text text-center">@foreach (explode('&&', $item['DeskripsiMakanan']) as $text) {{ $text }} <br> @endforeach</p>
                        </div>
                    </div>
                    @if ($key == 1 || $key % 2 == 1)
            </div>
            @endif
            @endforeach
        </div>
    </div>
    </div>
    <!-- end card -->

@endsection
