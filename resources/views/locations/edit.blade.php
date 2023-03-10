@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-3">
                <div class="card">
                    <h5 class="card-header">{{ __('Edit Location') }}</h5>
                    <div class="card-body">

                        <form method="post" action="{{route('locations.update', $house_location->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{__('Name')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="form-control" @error('name') is-invalid @enderror
                                           value="{{ old('name') ? old('name'): $house_location->name }}" required
                                           autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-end">{{__('Description')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="description"
                                           id="description"
                                           class="form-control" @error('description') is-invalid @enderror
                                           value="{{ old('description') ? old('description'): $house_location->description }}" required
                                           autocomplete="description" autofocus>
                                    @error('description')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="landmarks"
                                       class="col-md-4 col-form-label text-md-end">{{__('Landmarks')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="landmarks"
                                           id="landmarks"
                                           class="form-control" @error('landmarks') is-invalid @enderror
                                           value="{{ old('landmarks') ? old('landmarks'): $house_location->landmarks }}" required
                                           autocomplete="landmarks" autofocus>
                                    @error('landmarks')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
