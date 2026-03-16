<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<section class="pb-20 bg-white" x-data="treksData()">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">

        <template x-for="trek in treks" :key="trek.title">

            @include('partials.trek-card-content')

            <div class="relative h-64 overflow-hidden">
                <img :src="trek.image" :alt="trek.title"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                <div class="absolute top-4 right-4 flex flex-col gap-2 items-end">
                    <span
                        class="bg-[#2ecc71] text-white text-[10px] font-bold px-3 py-1 rounded-sm uppercase">Guaranteed
                        Departure</span>
                    <div class="flex gap-2">
                        <span class="bg-[#ff6600] text-white text-[10px] font-bold px-3 py-1 rounded-sm">Private</span>
                        <span
                            class="bg-[#074b83] text-white text-[10px] font-bold px-3 py-1 rounded-sm flex items-center gap-1">Group</span>
                    </div>
                </div>

                <div class="absolute bottom-10 left-0 bg-[#074b83]/90 text-white py-1 px-4 font-bold">
                    From <span class="text-xl" x-text="trek.price"></span>
                </div>

                <div class="absolute bottom-0 left-4 flex items-center gap-1 drop-shadow-lg">
                    <div class="flex text-yellow-400 text-2xl">★★★★★</div>
                    <span class="text-white text-[20px] font-bold" x-text="`of ${trek.reviews} Reviews`"></span>
                </div>

                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center gap-3">
                    <button @click="openForm = true; step = 1"
                        class="bg-[#ff6600] text-white px-8 py-2 rounded-full font-bold hover:bg-[#e65c00] transition">
                        BOOK NOW
                    </button>
                    <a :href="trek.link"
                        class="bg-[#074b83] text-white px-8 py-2 rounded-full font-bold hover:bg-[#063a66] transition">
                        LEARN MORE
                    </a>
                </div>
            </div>

            <div class="p-5">
                <h3 class="text-xl font-bold text-[#074b83] mb-4" x-text="trek.title"></h3>
                <div class="flex items-center justify-between border-t pt-4 text-gray-600 text-sm font-medium">
                    <template x-for="info in trek.details" :key="info.value">
                        <div class="flex items-center gap-1.5 text-[20px]">
                            <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path :d="info.icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                </path>
                            </svg>
                            <span x-text="info.value"></span>
                        </div>
                    </template>
                </div>
            </div>

            <div x-show="openForm" x-transition 
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 px-4" 
    @click.away="openForm = false">
    
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-6xl overflow-hidden relative flex flex-col md:flex-row h-[90vh]">

        <button type="button" @click="openForm = false" 
            class="absolute top-5 right-4 z-[60] text-4xl text-gray-700 hover:text-gray-900 transition">×</button>

        <form method="POST" :action="" class="w-full flex flex-col md:flex-row h-full">
            
            <div class="md:w-3/5 p-6 md:p-10 border-r border-gray-100 h-full overflow-y-auto bg-white">
                <h2 class="text-2xl md:text-3xl font-bold text-[#074b83] mb-1" x-text="trek.title"></h2>
                <p class="text-gray-600 mb-6">Duration: <span x-text="trek.details.find(d => d.value.includes('Days'))?.value || 'N/A'"></span></p>

                <div class="flex gap-3 mb-8 text-sm font-medium">
                    <span :class="step === 1 ? 'text-[#074b83] font-bold' : 'text-green-600'">Package</span>
                    <span class="text-gray-400">→</span>
                    <span :class="step === 2 ? 'text-[#074b83] font-bold' : (step > 2 ? 'text-green-600' : 'text-gray-400')">Info</span>
                    <span class="text-gray-400">→</span>
                    <span :class="step === 3 ? 'text-[#074b83] font-bold' : (step > 3 ? 'text-green-600' : 'text-gray-400')">Insurance</span>
                    <span class="text-gray-400">→</span>
                    <span :class="step === 4 ? 'text-[#074b83] font-bold' : 'text-gray-400'">Payment</span>
                </div>

                <div class="pb-10">
                    <div x-show="step === 1">
                        @include('partials.step1-calendar') 
                    </div>

                    <div x-show="step === 2" x-transition>
                        @include('partials.step2-participants')
                    </div>

                    <div x-show="step === 3" x-transition>
                        @include('partials.step3-insurance')
                    </div>
                    <div x-show="step === 4" x-transition>
                        @include('partials.step4-payment')
                    </div>
                </div>
            </div>
                @include('partials.booking-summary')
            
        </form>
    </div>
</div>
    </template>
    </div>
</section>

@include('partials.trek-scripts')