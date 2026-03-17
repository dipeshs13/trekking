<div class="relative h-64 overflow-hidden">
    <img :src="trek.image" :alt="trek.title"
        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

    <div class="absolute top-4 right-4 flex flex-col gap-2 items-end">
        <span class="bg-[#2ecc71] text-white text-[10px] font-bold px-3 py-1 rounded-sm uppercase">Guaranteed Departure</span>
    </div>

    <div class="absolute bottom-10 left-0 bg-[#074b83]/90 text-white py-1 px-4 font-bold">
        From <span class="text-xl" x-text="trek.price"></span>
    </div>

    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center gap-3">
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
                    <path :d="info.icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                <span x-text="info.value"></span>
            </div>
        </template>
    </div>
</div>

<template x-teleport="body">
    <div x-show="openForm" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[999] flex items-center justify-center bg-black/60 px-4"
         style="display: none;">
        
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-6xl overflow-hidden relative flex flex-col md:flex-row h-[90vh]" @click.away="openForm = false">
            
            <button type="button" @click="openForm = false"
                class="absolute top-5 right-4 z-[60] text-4xl text-gray-700 hover:text-gray-900 transition">&times;</button>

            <form @submit.prevent="submitBooking" class="w-full flex flex-col md:flex-row h-full">
                <div class="md:w-3/5 p-6 md:p-10 border-r border-gray-100 h-full overflow-y-auto bg-white">
                    <h2 class="text-2xl md:text-3xl font-bold text-[#074b83] mb-1" x-text="trek.title"></h2>
                    
                    <div class="flex gap-3 mb-8 text-sm font-medium">
    <span @click="step = 1" class="cursor-pointer" 
          :class="step === 1 ? 'text-[#074b83] font-bold underline' : 'text-gray-400'">Package</span>
    <span>&rarr;</span>
    
    <span @click="goToStep(2)" class="cursor-pointer" 
          :class="step === 2 ? 'text-[#074b83] font-bold underline' : 'text-gray-400'">Info</span>
    <span>&rarr;</span>
    
    <span @click="goToStep(3)" class="cursor-pointer" 
          :class="step === 3 ? 'text-[#074b83] font-bold underline' : 'text-gray-400'">Insurance</span>
    <span>&rarr;</span>

    <span @click="goToStep(4)" class="cursor-pointer" 
          :class="step === 4 ? 'text-[#074b83] font-bold underline' : 'text-gray-400'">Payment</span>
</div>

                    <div class="pb-10">
                        <div x-show="step === 1">@include('partials.step1-calendar')</div>
                        <div x-show="step === 2">@include('partials.step2-participants')</div>
                        <div x-show="step === 3">@include('partials.step3-insurance')</div>
                        <div x-show="step === 4">@include('partials.step4-payment')</div>
                    </div>
                </div>

                @include('partials.booking-summary')
            </form>
        </div>
    </div>
</template>