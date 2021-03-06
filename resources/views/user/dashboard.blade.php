@extends('layouts.app')

@section('content')

<section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
            @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse ($checkouts as $checkout )
                            <tr class="align-middle">
                            <td width="18%">
                                <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{ $checkout->Camp->title }}</strong>
                                </p>
                                <p>
                                   {{$checkout->created_at->format('M d, Y')}}
                                </p>
                            </td>
                            <td>
                                <strong>${{ $checkout->Camp->price }}K</strong>
                            </td>
                            <td>
                                @if ($checkout->is_paid)
                                <strong class="text-success">Payment Success</strong>
                                @else
                                <strong>Waiting for Payment</strong>
                                @endif
                            </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone=6287736202865&text=saya%20ingin%20bertanya%20tentang%20kelas%20 {{ $checkout->Camp->title }}" class="btn btn-primary" class="btn btn-primary">
                                    Contact Support
                                </a>
                            </td>
                        </tr>
                        @empty

                            <tr>
                            <td colspan="5">
                            <h3>No Data</h3>
                            </td>
                            </tr>

                        @endforelse

                </table>
            </div>
        </div>
    </section>

@endsection
