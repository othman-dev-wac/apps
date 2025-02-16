{{-- @extends('layouts.app')

@section('content')

<div class="container">
    <form id="add-sale" action="{{ url("sales/update", $sale->id) }}" method="post">
@csrf
@method("PUT")
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <a href="/home" class="btn btn-outline-secondary">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach ($tables as $table)
                    <div class="col-md-3">
                        <div class="card p-2 mb-2 d-flex
                                                    flex-column justify-content-center
                                                    align-items-center
                                                    list-group-item-action">
                            <div class="align-self-end">
                                <input type="checkbox" value="{{$table->id}}" name="table_id[]" id="table" checked>
                            </div>
                            <i class="fa fa-chair fa-5x"></i>
                            <span class="mt-2 text-muted font-weight-bold">
                                {{ $table->name }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>
<div class="row justify-content-center mt-2">
    <div class="col-md-12 card p-3">




        <div class="row">
            @foreach($menus as $menu)
            <div class="col-md-4 mb-2">
                <div class="card h-100">
                    <div class="card-body d-flex
                                                flex-column justify-content-center
                                                align-items-center">
                        <div class="align-self-end">
                            <input type="checkbox" name="menu_id[]" checked id="menu_id" checked
                                value="{{ $menu->id }}">
                        </div>
                        <img src="{{ asset($menu->image) }}" alt="{{ $menu->title }}" class="fluid rounded-circle"
                            style=" width:100px; height:100px; object-fit:cover ">
                        <h5 class="font-weight-bold mt-2">
                            {{ $menu->title }}
                        </h5>
                        <h5 class="text-muted">
                            {{ $menu->price }} DH
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="form-group">
            <select name="servant_id" class="form-control">
                <option value="" selected disabled>
                    Sérveur
                </option>
                @foreach ($servents as $servant)
                <option value="{{ $servant->id }}">
                    {{ $servant->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Qté
                </div>
            </div>
            <input type="number" name="quantity" class="form-control" value="{{$sale->quantity}}" placeholder="Qté">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    $
                </div>
            </div>
            <input type="number" name="total_price" class="form-control" value="{{$sale->total_price}}"
                placeholder="Prix">
            <div class="input-group-append">
                <div class="input-group-text">
                    .00
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    $
                </div>
            </div>
            <input type="number" name="total_received" class="form-control" value="{{$sale->total_received}}"
                placeholder="Total">
            <div class="input-group-append">
                <div class="input-group-text">
                    .00
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    $
                </div>
            </div>
            <input type="number" name="change" class="form-control" value="{{$sale->change}}" placeholder="Reste">
            <div class="input-group-append">
                <div class="input-group-text">
                    .00
                </div>
            </div>
        </div>
        <div class="form-group">
            <select name="payment_type" class="form-control">
                <option value="" selected disabled>
                    Type de paiement
                </option>
                <option value="cash" {{$sale->payment_type === "cash" ? "selected" : ""  }}>
                    Espéce
                </option>
                <option value="card" {{$sale->payment_type === "card" ? "selected" : ""  }}>
                    Carte bancaire
                </option>
            </select>
        </div>
        <div class="form-group">
            <select name="payment_status" class="form-control">
                <option value="" selected disabled>

                    Etat de paiement
                </option>
                <option value="paid" {{$sale->payment_status === "paid" ? "selected" : ""  }}>
                    Payé
                </option>
                <option value="unpaid" {{$sale->payment_status === "unpaid" ? "selected" : ""  }}>
                    Impayé
                </option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Valider
            </button>
        </div>
    </div>
</div>
</div>
</div>
</form>
</div>
@endsection




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script> --}}














@extends('layouts.app')


@section("content")
<div class="content-body">


    <div class="container">
        <form id="add-sale" action="{{ url("sales/update", $sale->id) }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <a href="/payments" class="btn btn-outline-secondary">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($tables as $table)
                                <div class="col-md-3">
                                    <div class="card p-2 mb-2 d-flex
                                                        flex-column justify-content-center
                                                        align-items-center
                                                        list-group-item-action">
                                        <div class="align-self-end">
                                            <input type="checkbox" name="table_id[]" id="table" checked
                                                value="{{ $table->id }}">
                                        </div>
                                        <i class="fa fa-chair fa-5x"></i>
                                        <span class="mt-2 text-muted font-weight-bold">
                                            {{ $table->name }}
                                        </span>
                                        <hr>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-12 card p-3">
                    <div class="row">
                        @foreach($menus as $menu)
                        <div class="col-md-4 mb-2">
                            <div class="card h-100">
                                <div class="card-body d-flex
                                        flex-column justify-content-center
                                        align-items-center">
                                    <div class="align-self-end">
                                        <input type="checkbox" name="menu_id[]" id="menu_id" checked
                                            value="{{ $menu->id }}">
                                    </div>
                                    <img src="{{ asset($menu->image) }}" alt="{{ $menu->title }}"
                                        class="fluid rounded-circle"
                                        style=" width:100px; height:100px; object-fit:cover ">
                                    <h5 class="font-weight-bold mt-2">
                                        {{ $menu->title }}
                                    </h5>
                                    <h5 class="text-muted">
                                        {{ $menu->price }} DH
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <div class="form-group">
                                    <select name="servant_id" class="form-control">
                                        <option value="" selected disabled>
                                            Sérveur
                                        </option>
                                        @foreach ($servents as $servant)
                                        <option {{ $servant->id === $sale->servant_id ? "selected" : ""}}
                                            value="{{ $servant->id }}">
                                            {{ $servant->name }}

                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Qté
                                    </div>
                                </div>
                                <input type="number" name="quantity" class="form-control" placeholder="Qté"
                                    value="{{ $sale->quantity }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        $
                                    </div>
                                </div>
                                <input type="number" name="total_price" class="form-control" placeholder="Prix"
                                    value="{{ $sale->total_price }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        .00
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        $
                                    </div>
                                </div>
                                <input type="number" name="total_received" class="form-control" placeholder="Total"
                                    value="{{ $sale->total_received }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        .00
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        $
                                    </div>
                                </div>
                                <input type="number" name="change" class="form-control" placeholder="Reste"
                                    value="{{ $sale->change }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        .00
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="payment_type" class="form-control">
                                    <option value="" selected disabled>
                                        Type de paiement
                                    </option>
                                    <option value="cash" {{ $sale->payment_type === "cash" ? "selected" : ""}}>
                                        Espéce
                                    </option>
                                    <option value="card" {{ $sale->payment_type === "card" ? "selected" : ""}}>
                                        Carte bancaire
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="payment_status" class="form-control">
                                    <option value="" selected disabled>
                                        Etat de paiement
                                    </option>
                                    <option value="paid" {{ $sale->payment_status === "paid" ? "selected" : ""}}>
                                        Payé
                                    </option>
                                    <option value="unpaid" {{ $sale->payment_status === "unpaid" ? "selected" : ""}}>
                                        Impayé
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">
                                    Valider
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection