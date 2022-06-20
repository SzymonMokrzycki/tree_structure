@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="jstree" class="col-md-4 text-danger font-size-15">
        <!--<ul>
            <li>Root
                <ul>
                    <li>Podkatalog
                        <ul>
                            <li>
                                Podkatalog
                            </li>
                        </ul>
                    </li>
                    <li>Podkatalog
                        <ul>
                            <li>
                                Podkatalog
                            </li>
                        </ul>
                    </li>
                    <li>Podkatalog
                        <ul>
                            <li>
                                Podkatalog
                            </li>
                        </ul>
                    </li>
                    <li>Podkatalog
                        <ul>
                            <li>
                                Podkatalog
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>-->
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel administratora') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('addNode')}}" class="btn btn-dark"><i class='bx bx-plus bx-md'></i></a>
                    <a href="{{route('sort.up')}}" class="btn btn-dark"><i class='bx bx-sort-up bx-md'></i></a>
                    <a href="{{route('sort.down')}}" class="btn btn-dark"><i class='bx bx-sort-down bx-md'></i></a>
                    <a id="ae"><button id="be" type="button" class="btn btn-dark" disabled><i class='bx bxs-pencil bx-md'></i></button></a>
                    <button id="bd" type="button" class="btn btn-dark" disabled><i class='bx bxs-trash-alt bx-md'></i></button>
                    <a id="am"><button id="bm" type="button" class="btn btn-dark" disabled><i class='bx bx-move bx-md'></i></button></a>
                    <br/><br/><br/>
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
