@extends('home')
@section('form')
<div class="h2">Przenieś węzeł</div>
<form action="/api/nodes/{{$id}}" method="post">
    
    @csrf

    <div class="row mb-3">
        <label for="precedent" class="col-md-4 col-form-label text-md-end">{{ __('Wybierz nowego rodzica:') }}</label>

        <div class="col-md-6">
            <select id="precedent" class="form-control" name="id_precedent"></select>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Zatwierdź') }}
            </button>
        </div>
    </div>
                    
</form>
@endsection