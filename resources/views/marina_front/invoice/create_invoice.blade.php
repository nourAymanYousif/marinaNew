@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Package') }}</div>




                    <form method="POST" action="{{ route('create_invoice') }}">
                        @csrf



                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Boat') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control " name="boat_id" id="boat_id" required>
                                        <option value="">Please Select User</option>
                                        @foreach($boats as $boat)
                                            <option value="{{$boat->id}}">{{$boat->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('boat_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('tax') }}</label>

                                <div class="col-md-6">
                                    <input id="tax" type="text"  class="form-control @error('tax') is-invalid @enderror" name="tax" value="{{ old('tax') }}" required >

                                    @error('tax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                    {{--<div class="form-group row">--}}
                        {{--<label for="payment_method" class="col-md-4 col-form-label text-md-right">{{ __('Payment Method') }}</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<select class="form-control " name="user_id" id="user_id" required>--}}
                                {{--<option value="">Please Select Payment</option>--}}
                                {{--<option value="Visa">Visa</option>--}}
                                {{--<option value="Cash">Cash</option>--}}
                                {{--<option value="Bank Transfer">Bank Transfer</option>--}}
                                {{--<option value="Vodafone Cash">Vodafone Cash</option>--}}
                                {{--<option value="Other">Other</option>--}}
                            {{--</select>--}}
                            {{--@error('nationality')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}








                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('create invoice') }}
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
