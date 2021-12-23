@extends('dashboard/layout.main')

@section('mainContent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Product</h1>
    </div>
    <form class="p-3" action="/dashboard" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputNama" class="form-label">Name</label>
            <input type="text" @class([ 'form-control', 'is-invalid' => $errors->has('inputNama') ]) id="inputNama" name="inputNama" value="{{ old('inputNama') }}">
            @error('inputNama')
            <div class="invalid-feedback">
                {{ $errors->first('inputNama') }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="number" @class([ 'form-control', 'is-invalid' => $errors->has('inputPrice') ]) id="inputPrice" name="inputPrice" value="{{ old('inputPrice') }}">
            @error('inputPrice')
            <div class="invalid-feedback">
                {{ $errors->first('inputPrice') }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</main>
@endsection