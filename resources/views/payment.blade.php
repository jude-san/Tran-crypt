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
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        @csrf
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-8 col-md-offset-2">
                                
                                <input type="hidden" name="email" value="otemuyiwa@gmail.com"> 
                                <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="3">
                                <input type="hidden" name="currency" value="GHS">
                                
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

                               
                                

                                <p>
                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>

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

                            <button type="submit"> Pay </button>

                        </div>

                    </form>


                </div>

            </div>

        </div>

    </div>
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
        var paymentForm = document.getElementById('paymentForm');

        paymentForm.addEventListener('submit', payWithPaystack, false);

        function payWithPaystack(e) {
            console.log(e)
            e.preventDefault();

            var handler = PaystackPop.setup({

                key: 'pk_test_5d1226229e49786ebb41a2f685dd63b17f7c8fd7',
                email: document.getElementById('email-address').value,
                amount: 3 * 100,
                currency: 'GHS',
                ref: 'TRANS' + Math.floor((Math.random() * 1000000000) + 1),
                callback: function(response) {
                    var reference = response.reference;

                    alert('Payment complete! Reference: ' + reference);

                },

                onClose: function() {

                    alert('Transaction was not completed, window closed.');

                },

            });

            handler.openIframe();

        }
    </script>
</x-app-layout>