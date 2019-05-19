@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" ><h5 style="float: left; margin-top: 10px;">{{ __('Dodaj zdjęcie') }}</h5>
                        <form action="{{ route('home') }}" method="get" style="float: right;" >
                            <button type="submit" class="btn btn-outline-dark">Powrót do galerii</button>
                        </form>
                    </div>
                    <div class="card-body inner">
                        @include('flash-messages')
                        <form method="POST" action="{{ route('submitPhoto') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="tag" class="col-md-12 col-form-label text-md-left">{{ __('Typ zdjęcia:') }}</label>
                                <select class="form-control" id="tag" name="tag">
                                    <option value="wedding">Wesele</option>
                                    <option value="baptism">Chrzest</option>
                                    <option value="birthday">Urodziny</option>
                                    <option value="communion">Komunia św.</option>
                                    <option value="anniversary">Rocznica</option>
                                    <option value="other">Inne</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="filename" class="col-md-12 col-form-label text-md-left">{{ __('Wybierz plik ze zdjęciem') }}</label>
                                <input id="filename" name="filename" type="file" class="form-control-file btn btn-outline-info">
                                @if ($errors->has('filename'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('filename') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group" style="text-align: center;">
                                <button type="submit" class="btn btn-outline-success" style="margin-top: 20px;">
                                    {{ __('Dodaj zdjęcie') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
