<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Application Process  3 of 3') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">
                        {{ __('Payment Process ') }}
                    </h2>
                    {{$setting->price}}

                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal"
                        role="form">
                        @csrf

                        <input type="hidden" name="orderID" value="{{session()->get('apply')['id']}}">
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        <input type="hidden" name="amount" value=" {{$setting->price * 100}}">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="currency" value="GHS">
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">

                        <x-button class="ml-3 bg-green-500">
                            {{ __('Pay Now') }}
                        </x-button>


                    </form>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>