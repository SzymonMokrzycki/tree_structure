@extends('home')
@section('form')
<div class="h2">Edytuj węzeł</div>
<form action="/api/nodes/{{$id}}" method="post">
    
    @csrf

    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Pełna nazwa pliku') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{$name}}" required autocomplete="name" autofocus>

        </div>
    </div>

    <div class="row mb-3">
        <label for="file_type" class="col-md-4 col-form-label text-md-end">{{ __('Typ pliku') }}</label>

        <div class="col-md-6">
            <input id="file_type" type="text" class="form-control" name="file_type" required autocomplete="file_type">
        </div>
    </div>

    <div class="row mb-3">
        <label for="root" class="col-md-4 col-form-label text-md-end">{{ __('Węzeł root:') }}</label>

        <div class="col-md-6">
            <select id="root" class="form-control" name="root">
                <option value="1">Tak</option>
                <option value="0">Nie</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="precedent" class="col-md-4 col-form-label text-md-end">{{ __('Węzeł rodzic:') }}</label>

        <div class="col-md-6">
            <select id="precedent" class="form-control" name="id_precedent"></select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="subordinate" class="col-md-4 col-form-label text-md-end">{{ __('Węzeł potomek:') }}</label>

        <div class="col-md-6">
            <select id="sub" class="form-control" name="subordinate">
                <option value="1">Tak</option>
                <option value="0">Nie</option>
            </select>
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