<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Subscribe
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-2">
                <div class="my-2 px-1 w-full overflow-hidden sm:my-2 sm:px-2 xs:w-1 sm:w-1 md:w-1/2 lg:w-1/2 xl:w-1/2">
                    <!-- Column Content -->
                    <div class="p-4 bg-white sm:rounded-lg">
                        <form action="{{ route('subscribe.post') }}" method="post" id="payment-form" data-secret="{{ $intent->client_secret }}">
                            @csrf
                            <div class="w-1/2 form-row">
                                <label for="cardholder-name">Cardholder's Name</label>
                                <div>
                                    <input type="text" id="cardholder-name" class="px-2 py-2 border">
                                </div>
        
                                <input type="hidden" name="plan" id="standard" value="{{ $id ?? 'price_1KavbCLzZgjLiNkC909Wommg' }}">
                                <label for="card-element" class="mt-3">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
        
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>

                            <span>By submitting this form, you certify that you are 18 years of age or older, agree to the <a href="https://hushcupid.com/terms">terms & conditions</a> and have read the <a href="https://hushcupid.com/pages/details/?page=2">privacy poclicy.</a> </span>

                            <x-button class="mt-4">
                                {{ __('Subscribe Now') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            
                <div class="text-white my-2 px-1 w-full overflow-hidden sm:my-2 sm:px-2 xs:w-1 sm:w-1 md:w-1/2 lg:w-1/2 xl:w-1/2">
                    <div class="w-full h-64 rounded-lg shadow-2xl overflow-hidden relative">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/bg-square.jpg')}}" alt="">
                        <div class="absolute inset-0 bg-gray-900 bg-opacity-40"></div>
                        <div class="flex h-full items-center justify-center relative">
                          <div class="p-2">
            				<ul>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2 italic">See Who Viewed Your Profile</span>
            					</li>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2">View All Profiles & Photos</span>
            					</li>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2">Chat With Any Member</span>
            					</li>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2">Send Free Flirts</span>
            					</li>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2">Access Private Content</span>
            					</li>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2">View private videos of the members</span>
            					</li>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2">Get special offers for premium users</span>
            					</li>
            					<li class="flex items-center">
            						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            						</svg>
            						<span class="ml-2">exclusive free previews for top products</span>
            					</li>
            				</ul>
        			    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            // Create a Stripe client.
            var stripe = Stripe('pk_live_51KLgzALzZgjLiNkCZOoictq4KDqSbjHaupSEVkx7SpksBXoObTCp7DzTpLTNItfNEhX9lE9W0IRxRa2gYnpXeKRx004KKetitD');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            var cardHolderName = document.getElementById('cardholder-name');
            var clientSecret = form.dataset.secret;

            form.addEventListener('submit', async function(event) {
                event.preventDefault();

                const { setupIntent, error } = await stripe.confirmCardSetup(
                    clientSecret, {
                        payment_method: {
                            card,
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );

                if (error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(setupIntent);
                }

                // stripe.createToken(card).then(function(result) {
                //     if (result.error) {
                //     // Inform the user if there was an error.
                //     var errorElement = document.getElementById('card-errors');
                //     errorElement.textContent = result.error.message;
                //     } else {
                //     // Send the token to your server.
                //     stripeTokenHandler(result.token);
                //     }
                // });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(setupIntent) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'paymentMethod');
                hiddenInput.setAttribute('value', setupIntent.payment_method);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        </script>
    @endpush
</x-app-layout>