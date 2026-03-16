<div class="w-full">
    <div class="space-y-4">
        <div class="border rounded-lg overflow-hidden transition-all"
            :class="paymentMethod === 'checking' ? 'border-[#074b83] ring-1 ring-[#074b83]' : 'border-gray-200'">
            
            <button type="button" @click="paymentMethod = 'checking'"
                class="w-full flex items-center gap-3 p-4 bg-white hover:bg-gray-50 transition">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                <span class="font-bold text-gray-700">US Checking Account</span>
            </button>

            <div x-show="paymentMethod === 'checking'" x-cloak x-transition class="p-6 border-t border-gray-100 bg-white">
                <div class="flex items-start gap-3 p-3 bg-blue-50 text-blue-700 rounded-lg mb-6 text-sm">
                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <p>Enter the bank account you want to pay from.</p>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <input type="text" placeholder="Full Name on Account" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#074b83] outline-none">
                    
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1 space-y-4">
                            <input type="text" placeholder="Routing Number" class="w-full p-3 border border-gray-300 rounded-lg">
                            <input type="text" placeholder="Account Number" class="w-full p-3 border border-gray-300 rounded-lg">
                            <input type="text" placeholder="Confirm Account Number" class="w-full p-3 border border-gray-300 rounded-lg">
                        </div>
                        <div class="md:w-1/2">
                            <img src="{{ asset('images/card-helper.png') }}" alt="Check Example" class="w-full h-auto rounded opacity-80">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border rounded-lg overflow-hidden transition-all"
            :class="paymentMethod === 'card' ? 'border-[#074b83] ring-1 ring-[#074b83]' : 'border-gray-200'">
            
            <button type="button" @click="paymentMethod = 'card'"
                class="w-full flex items-center gap-3 p-4 bg-white hover:bg-gray-50 transition border-b border-gray-100">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                    <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM5 12a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                </svg>
                <span class="font-bold text-gray-700">Card</span>
            </button>

            <div x-show="paymentMethod === 'card'" x-cloak x-transition class="p-6 bg-white space-y-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-gray-500 uppercase">Card number</label>
                    <input type="text" placeholder="1234 1234 1234 1234" class="w-full p-3 border border-gray-300 rounded-lg">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-gray-500 uppercase">Expiration date</label>
                        <input type="text" placeholder="MM / YY" class="w-full p-3 border border-gray-300 rounded-lg">
                    </div>
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-gray-500 uppercase">Security code</label>
                        <input type="text" placeholder="CVC" class="w-full p-3 border border-gray-300 rounded-lg">
                    </div>
                </div>

                <div class="space-y-4 pt-4">
                    <h4 class="font-bold text-gray-700 border-b pb-2">Billing Address</h4>
                    
                    <input type="text" placeholder="Name on Card" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#074b83] outline-none">
                    <input type="text" placeholder="Address Line 1" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#074b83] outline-none">
                    
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="City / Town" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#074b83] outline-none">
                        <input type="text" placeholder="Postcode" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#074b83] outline-none">
                    </div>

                    <select class="w-full p-3 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-[#074b83] outline-none appearance-none"
                            style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%236b7280%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 0.75rem center; background-size: 1rem;">
                        <option value="" disabled selected>Select Country</option>
                        <template x-for="country in countries" :key="country.code">
                            <option :value="country.code" x-text="country.name"></option>
                        </template>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 space-y-4">
        <button type="submit" class="w-full bg-[#2ecc71] hover:bg-[#27ae60] text-white font-bold py-4 rounded-lg text-lg shadow-lg transition">
            Confirm Booking
        </button>
        <p class="text-[11px] text-gray-500 text-center leading-relaxed">
            By clicking Confirm you agree to Everest Trekking Routes Pvt. Ltd.'s 
            <a href="#" class="text-[#074b83] underline">Terms and Cancellation Policy</a> 
            and WeTravel's <a href="#" class="text-[#074b83] underline">Terms</a>.
        </p>
    </div>
</div>