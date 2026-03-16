<div x-show="step === 3" x-transition>
    <div class="py-4">
        <div x-show="!showInsuranceForm">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Protect your trip</h3>

            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="mt-1">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-700 text-lg">Travel insurance</h4>
                        <p class="text-sm text-gray-600 mt-1">
                            <span class="font-bold text-gray-800">Be protected</span> from the unexpected. Get reimbursed for covered reasons.
                        </p>
                    </div>
                </div>

                <ul class="ml-10 space-y-3">
                    <li class="flex items-center gap-3 text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Need to cancel trip
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Missed Flights
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Medical Emergency while traveling
                    </li>
                </ul>
            </div>

            <div class="mt-10 flex flex-col items-center justify-center space-y-1">
                <span class="text-[10px] uppercase tracking-widest text-gray-400 font-bold">Powered by</span>
                <div class="flex items-center">
                    <span class="font-black text-blue-900 italic text-xl tracking-tighter">TRAWICK</span>
                    <span class="text-[10px] ml-1 text-gray-500 font-medium">International</span>
                </div>
            </div>

            <div class="mt-10 space-y-3">
                <button type="button" @click="showInsuranceForm = true"
                    class="w-full bg-[#2ecc71] hover:bg-[#27ae60] text-white font-bold py-4 rounded-lg text-lg transition shadow-md">
                    Add Insurance
                </button>
                <button type="button" @click="includeInsurance = false; step = 4"
                    class="w-full bg-white border border-blue-400 text-blue-500 hover:bg-blue-50 font-bold py-4 rounded-lg transition text-sm">
                    Continue Without Insurance
                </button>
            </div>
            <button type="button" @click="step = 2" class="mt-6 block mx-auto text-gray-500 font-bold hover:underline">Back</button>
        </div>

        <div x-show="showInsuranceForm" x-transition>
            <button type="button" @click="showInsuranceForm = false" class="flex items-center text-blue-500 font-bold mb-6 hover:underline">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back
            </button>

            <h3 class="text-xl font-bold text-gray-800 mb-2">Review and complete your info</h3>
            
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-xs font-bold text-gray-500 mb-1">Home country</label>
                    <select class="w-full border rounded-md p-2 text-sm bg-gray-50 outline-none focus:ring-1 focus:ring-blue-400">
                        <option>Select a country</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 mb-1">State</label>
                    <select class="w-full border rounded-md p-2 text-sm bg-gray-50 outline-none focus:ring-1 focus:ring-blue-400">
                        <option>Select a state</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-xs font-bold text-gray-500 mb-1">Trip destination</label>
                <select class="w-full border rounded-md p-2 text-sm bg-gray-50 outline-none focus:ring-1 focus:ring-blue-400">
                    <option>Select a trip destination</option>
                </select>
            </div>

            <div class="mb-8 bg-gray-50 p-4 rounded-lg border border-gray-100">
                <div class="flex items-center gap-2 mb-4">
                    <span class="bg-gray-200 text-gray-600 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">1</span>
                    <span class="font-bold text-gray-700" x-text="buyer_fname + ' ' + buyer_lname || 'Participant 1'"></span>
                </div>
                
                <label class="block text-xs font-bold text-gray-500 mb-2">Birth date</label>
                <div class="grid grid-cols-3 gap-2">
                    <select class="border rounded-md p-2 text-sm bg-white"><option>Month</option></select>
                    <select class="border rounded-md p-2 text-sm bg-white"><option>Day</option></select>
                    <select class="border rounded-md p-2 text-sm bg-white"><option>Year</option></select>
                </div>
            </div>

            <button type="button" @click="includeInsurance = true; step = 4" class="w-full bg-[#2ecc71] hover:bg-[#27ae60] text-white font-bold py-4 rounded-lg text-lg transition shadow-md">
                Continue
            </button>
        </div>
    </div>
</div>