    <div x-show="step === 2" x-transition>
                                    <h3 class="text-xl font-bold mb-6">Buyer Information</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                        <div class="flex flex-col">
                                            <label class="text-xs font-semibold mb-1 text-gray-500">First Name *</label>
                                            <input type="text" name="buyer_fname" x-model="buyer_fname" required class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="text-xs font-semibold mb-1 text-gray-500">Last Name *</label>
                                            <input type="text" name="buyer_lname" x-model="buyer_lname" required class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="text-xs font-semibold mb-1 text-gray-500">Email *</label>
                                            <input type="email" name="buyer_email" x-model="buyer_email" required class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="text-xs font-semibold mb-1 text-gray-500">Confirm Email *</label>
                                            <input type="email" required class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                                        </div>
                                    </div>

                                    <div class="border-t pt-8">
                                        <template x-for="i in parseInt(participants)" :key="i">
                                            <div class="mb-10 border-b border-gray-100 pb-8 last:border-0">
                                                <div class="flex items-center gap-3 mb-6">
                                                    <span class="bg-[#074b83] text-white w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold" x-text="i"></span>
                                                    <h3 class="font-bold text-lg">Participant <span x-text="i"></span> Information</h3>
                                                </div>
                                                
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                    <input type="text" :name="`p${i}_fname`" placeholder="First Name *" required 
                                                        :value="i === 1 ? buyer_fname : ''"
                                                        class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                                                    <input type="text" :name="`p${i}_lname`" placeholder="Last Name *" required 
                                                        :value="i === 1 ? buyer_lname : ''"
                                                        class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition">
                                                    <input type="email" :name="`p${i}_email`" placeholder="Email *" required 
                                                        :value="i === 1 ? buyer_email : ''"
                                                        class="border rounded px-3 py-2.5 focus:border-[#074b83] outline-none transition md:col-span-2">
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-sm font-semibold block mb-1">Notes to Organizer (Medical, Diet, etc.)</label>
                                                    <textarea :name="`p${i}_notes`" class="w-full border rounded p-3 h-24 focus:border-[#074b83] outline-none transition" placeholder="Your Answer"></textarea>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="text-sm font-semibold block mb-1">WhatsApp Number: *</label>
                                                    <div class="flex border rounded overflow-hidden focus-within:border-[#074b83]">
                                                        <div class="bg-gray-50 px-3 py-2.5 border-r flex items-center gap-1">
                                                            <img src="https://flagcdn.com/w20/np.png" class="w-4 h-auto">
                                                            <span class="text-sm font-bold">+977</span>
                                                        </div>
                                                        <input type="text" :name="`p${i}_whatsapp`" required class="w-full px-3 py-2.5 outline-none" placeholder="000-0000000">
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="flex gap-4 items-center border-t pt-8 mt-4">
                                        <button type="button" @click="step = 1" class="text-gray-500 font-bold hover:underline px-4">Back</button>
                                        <button type="button" @click="step = 3" class="bg-[#2ecc71] hover:bg-[#27ae60] text-white font-bold py-4 px-8 rounded-lg text-lg transition flex-1 shadow-lg">
                                            Continue
                                        </button>
                                    </div>
                                </div>