@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" ><h5 style="float: left; margin-top: 10px;">{{ __('Edytuj zdjęcie') }}</h5>
                        <form action="{{ route('home') }}" method="get" style="float: right;" >
                            <button type="submit" class="btn btn-outline-dark">Powrót do galerii</button>
                        </form>
                    </div>
                    <div class="card-body inner">
                        @include('flash-messages')
                        <form method="POST" action="{{ route('editSubmitPhoto') }}" enctype="multipart/form-data">
                            @csrf
                            <div style="text-align: center;">
                                <img src="{{ url('/').'/'.$photo->filename }}" alt="IMG-GALLERY" width="292" height="203">
                            </div>

                            <input type="hidden" value="{{ $photo->id }}" name="id" id="id">
                            <div class="form-group">
                                <label for="tag" class="col-md-12 col-form-label text-md-left">{{ __('Typ zdjęcia:') }}</label>
                                <select class="form-control" id="tag" name="tag">
                                    <option value="wedding" {{ $photo->tag == 'wedding' ? 'selected="selected"' : '' }}>Wesele</option>
                                    <option value="baptism" {{ $photo->tag == 'baptism' ? 'selected="selected"' : '' }}>Chrzest</option>
                                    <option value="birthday" {{ $photo->tag == 'birthday' ? 'selected="selected"' : '' }}>Urodziny</option>
                                    <option value="communion" {{ $photo->tag == 'communion' ? 'selected="selected"' : '' }}>Komunia św.</option>
                                    <option value="anniversary" {{ $photo->tag == 'anniversary' ? 'selected="selected"' : '' }}>Rocznica</option>
                                    <option value="other" {{ $photo->tag == 'other' ? 'selected="selected"' : '' }}>Inne</option>
                                </select>
                            </div>

                            <div class="form-group" style="text-align: center;">
                                <button type="submit" class="btn btn-outline-success" style="margin-top: 20px;">
                                    {{ __('Zapisz zmiany') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
