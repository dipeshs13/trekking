<div class="md:w-2/5 bg-gray-50 p-6 md:p-10 flex flex-col h-full overflow-y-auto">
    <div class="flex justify-between items-start mb-6">
        <h3 class="text-2xl font-bold text-[#074b83]">Your Booking</h3>
        <div class="relative">
            <button type="button" @click="showCurrency = !showCurrency"
                class="flex items-center gap-2 border border-gray-300 rounded px-3 py-1.5 bg-white text-sm font-bold shadow-sm">
                <img :src="`https://flagcdn.com/w20/${currencyRates[selectedCurrency]?.flag || 'us'}.png`"
                    class="w-5 h-auto rounded-sm">
                <span x-text="selectedCurrency"></span>
            </button>
            <div x-show="showCurrency" @click.away="showCurrency = false" x-cloak
                class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-xl z-50 max-h-60 overflow-y-auto">
                <template x-for="(data, curr) in currencyRates" :key="curr">
                    <button type="button" @click="selectedCurrency = curr; showCurrency = false"
                        class="w-full flex items-center gap-3 px-4 py-2.5 hover:bg-blue-50 text-sm font-medium transition"
                        :class="selectedCurrency === curr ? 'text-[#074b83] bg-blue-50' : ''">
                        <img :src="`https://flagcdn.com/w20/${data.flag}.png`" class="w-5 h-auto rounded-sm">
                        <span x-text="curr"></span>
                    </button>
                </template>
            </div>
        </div>
    </div>

    <div class="space-y-4 mb-8">

        <template x-if="selectedStart">
            <div class="text-sm text-gray-600 font-medium pb-2 border-b border-gray-200">
                <span x-text="selectedStart.toLocaleDateString('en-US', {month:'short', day:'numeric'})"></span>
                -
                <span
                    x-text="selectedEnd ? selectedEnd.toLocaleDateString('en-US', {month:'short', day:'numeric', year:'numeric'}) : ''"></span>
            </div>
        </template>

        <div class="flex justify-between text-gray-700">
            <span>Trip Price (<span x-text="participants"></span> pax)</span>
            <span class="font-semibold" x-text="formatPrice(basePrice * participants)"></span>
        </div>

        <div class="flex justify-between text-gray-700" x-show="includeInsurance" x-cloak>
            <span>Travel Insurance</span>
            <span class="font-semibold" x-text="formatPrice(insuranceTotal)"></span>
        </div>

        <div class="flex justify-between font-bold text-xl text-[#074b83] border-t pt-4">
            <span>Total</span>
            <span x-text="formatPrice(totalPrice)"></span>
        </div>

        <div
            class="flex justify-between text-green-700 font-bold bg-green-50 p-3 rounded-lg border border-green-100 items-center">
            <span>Due at Booking</span>
            <div class="text-right">
                <span x-text="paymentOption === 'deposit' ? formatPrice(deposit) : formatPrice(totalPrice)"></span>
                <div class="text-[10px] font-normal text-gray-400">Includes 100% of insurance</div>
            </div>
        </div>
    </div>

    <div class="space-y-4 pt-4 border-t border-gray-200">
        <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider">Payment Options</h4>

        <label class="flex items-start gap-3 cursor-pointer p-3 rounded-lg border transition bg-white"
            :class="paymentOption === 'deposit' ? 'border-[#074b83] ring-1 ring-[#074b83]' : 'border-gray-200'">
            <input type="radio" x-model="paymentOption" value="deposit" class="hidden">
            <div class="mt-1 w-5 h-5 border-2 rounded-full flex items-center justify-center"
                :class="paymentOption === 'deposit' ? 'border-[#074b83]' : 'border-gray-300'">
                <div x-show="paymentOption === 'deposit'" class="w-2.5 h-2.5 bg-[#074b83] rounded-full"></div>
            </div>
            <div>
                <div class="font-bold text-gray-800">Pay Deposit Only</div>
                <div class="text-sm text-gray-600"><span x-text="formatPrice(deposit)"></span> due now</div>
            </div>
        </label>

        <label class="flex items-start gap-3 cursor-pointer p-3 rounded-lg border transition bg-white"
            :class="paymentOption === 'full' ? 'border-[#074b83] ring-1 ring-[#074b83]' : 'border-gray-200'">
            <input type="radio" x-model="paymentOption" value="full" class="hidden">
            <div class="mt-1 w-5 h-5 border-2 rounded-full flex items-center justify-center"
                :class="paymentOption === 'full' ? 'border-[#074b83]' : 'border-gray-300'">
                <div x-show="paymentOption === 'full'" class="w-2.5 h-2.5 bg-[#074b83] rounded-full"></div>
            </div>
            <div>
                <div class="font-bold text-gray-800">Pay Full Amount</div>
                <div class="text-sm text-gray-600"><span x-text="formatPrice(totalPrice)"></span> due now</div>
            </div>
        </label>
    </div>
</div>