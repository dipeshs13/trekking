<div x-show="step === 2" x-transition>
    <h3 class="text-xl font-bold mb-6">Buyer Information</h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        <div class="flex flex-col">
            <label class="text-xs font-semibold mb-1 text-gray-500">First Name *</label>
            <input type="text" x-model="buyer_fname" required
                   class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
        </div>
        <div class="flex flex-col">
            <label class="text-xs font-semibold mb-1 text-gray-500">Last Name *</label>
            <input type="text" x-model="buyer_lname" required
                   class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
        </div>

        <div class="flex flex-col">
            <label class="text-xs font-semibold mb-1 text-gray-500">Email *</label>
            <input type="email" x-model="buyer_email" required
                   :class="buyer_email && !isValidEmail(buyer_email) ? 'border-red-500' : 'border-gray-200'"
                   class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
            <template x-if="buyer_email && !isValidEmail(buyer_email)">
                <span class="text-red-500 text-[10px] mt-1 font-bold">Invalid email format.</span>
            </template>
        </div>

        <div class="flex flex-col">
            <label class="text-xs font-semibold mb-1 text-gray-500">Confirm Email *</label>
            <input type="email" x-model="confirm_email" required
                   :class="confirm_email && buyer_email !== confirm_email ? 'border-red-500' : 'border-gray-200'"
                   class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
            <template x-if="confirm_email && buyer_email !== confirm_email">
                <span class="text-red-500 text-[10px] mt-1 font-bold">Emails do not match.</span>
            </template>
        </div>
    </div>

    <div class="border-t pt-8">
        <template x-for="(p, index) in participantDetails" :key="index">
            <div class="mb-10 border-b border-gray-100 pb-8 last:border-0">
                <div class="flex items-center gap-3 mb-6">
                    <span class="bg-[#074b83] text-white w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold" x-text="index + 1"></span>
                    <h3 class="font-bold text-lg">Participant <span x-text="index + 1"></span> Information</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <input type="text" x-model="p.fname" placeholder="First Name *" required
                           class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                    <input type="text" x-model="p.lname" placeholder="Last Name *" required
                           class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                    
                    <div class="md:col-span-2">
                        <input type="email" x-model="p.email" placeholder="Email *" required
                               :class="p.email && !isValidEmail(p.email) ? 'border-red-500' : 'border-gray-200'"
                               class="w-full border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                        <template x-if="p.email && !isValidEmail(p.email)">
                            <span class="text-red-500 text-[10px] mt-1 font-bold">Invalid email format.</span>
                        </template>
                    </div>
                </div>

                <div class="mb-2">
                    <label class="text-sm font-semibold block mb-1">WhatsApp Number: *</label>
                    <div class="flex border rounded overflow-hidden focus-within:border-[#074b83]"
                         :class="p.whatsapp && !isNumeric(p.whatsapp) ? 'border-red-500' : 'border-gray-200'">
                        <div class="bg-gray-50 px-3 py-2.5 border-r flex items-center gap-1">
                            <img src="https://flagcdn.com/w20/np.png" class="w-4 h-auto">
                            <span class="text-sm font-bold">+977</span>
                        </div>
                        <input type="text" x-model="p.whatsapp" required
                               class="w-full px-3 py-2.5 outline-none" placeholder="98XXXXXXXX">
                    </div>
                    <template x-if="p.whatsapp && !isNumeric(p.whatsapp)">
                        <span class="text-red-500 text-[10px] mt-1 font-bold">Only numbers are allowed.</span>
                    </template>
                </div>
            </div>
        </template>
    </div>

    <div class="flex gap-4 items-center border-t pt-8 mt-4">
        <button type="button" @click="step = 1" class="text-gray-500 font-bold hover:underline px-4">Back</button>
        <button type="button" @click="step = 3"
                :disabled="!isStep2Valid"
                :class="!isStep2Valid ? 'bg-gray-400 cursor-not-allowed' : 'bg-[#2ecc71] hover:bg-[#27ae60]'"
                class="text-white font-bold py-4 px-8 rounded-lg text-lg transition flex-1 shadow-lg">
            Continue
        </button>
    </div>
</div>