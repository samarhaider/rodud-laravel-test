@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('orders.update', $order->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Item Name') }}</label>

                            <div class="col-md-6">
                                <input id="item" type="text" class="form-control @error('item') is-invalid @enderror" name="item" value="{{ $order->item }}" required readonly>

                                @error('item')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="size" class="col-md-4 col-form-label text-md-end">{{ __('Size') }}</label>

                            <div class="col-md-6">
                                <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ $order->size }}" required autocomplete="current-password">

                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="weight" class="col-md-4 col-form-label text-md-end">{{ __('Weight') }}</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ $order->weight }}" required readonly>

                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ $order->location }}" required autocomplete="current-password">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pickup_at" class="col-md-4 col-form-label text-md-end">{{ __('Pickup At') }}</label>

                            <div class="col-md-6">
                                <input id="pickup_at" type="text" class="form-control @error('pickup_at') is-invalid @enderror" name="pickup_at" value="{{ $order->pickup_at }}" readonly>

                                @error('pickup_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="delivery_at" class="col-md-4 col-form-label text-md-end">{{ __('Delivery At') }}</label>

                            <div class="col-md-6">
                                <input id="delivery_at" type="text" class="form-control @error('delivery_at') is-invalid @enderror" name="delivery_at" value="{{ $order->delivery_at }}" readonly>

                                @error('delivery_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" >
                                    <option value="pending" @selected($order->status == 'pending') >Pending</option>
                                    <option value="in-progress" @selected($order->status == 'in-progress') >In-progress</option>
                                    <option value="delivered" @selected($order->status == 'delivered') >Delivered</option>
                                    <option value="cancelled" @selected($order->status == 'cancelled') >Cancelled</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
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
