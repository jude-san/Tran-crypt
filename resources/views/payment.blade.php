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

                    <form id="paymentForm">

                        <div class="form-group">

                            <label for="email">Email Address</label>

                            <input type="email" id="email-address" required />

                        </div>

                        <div class="form-group">

                            <label for="amount">Amount</label>

                            <input type="tel" id="amount" required />

                        </div>

                        <div class="form-group">

                            <label for="first-name">First Name</label>

                            <input type="text" id="first-name" />

                        </div>

                        <div class="form-group">

                            <label for="last-name">Last Name</label>

                            <input type="text" id="last-name" />

                        </div>

                        <div class="form-submit">

                            <button type="submit" onclick="payWithPaystack()"> Pay </button>

                        </div>

                    </form>

                    <script src="https://js.paystack.co/v1/inline.js"></script>

                </div>

            </div>

        </div>

    </div>


</x-app-layout>