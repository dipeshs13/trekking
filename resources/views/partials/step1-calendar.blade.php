<div x-show="step === 1">
    <h3 class="text-xl font-semibold mb-4">Select Departure</h3>
    <div class="flex justify-between items-center mb-4">
        <button type="button" @click="prevMonth()" class="p-2 hover:bg-gray-100 rounded text-[#074b83]">‹</button>
        <span class="text-lg font-bold" x-text="currentMonthName"></span>
        <button type="button" @click="nextMonth()" class="p-2 hover:bg-gray-100 rounded text-[#074b83]">›</button>
    </div>
    <div class="grid grid-cols-7 gap-1 text-center text-sm mb-6">
        <template x-for="head in ['Su','Mo','Tu','We','Th','Fr','Sa']">
            <div class="text-gray-500 font-medium py-1" x-text="head"></div>
        </template>
        <template x-for="(day, index) in currentMonthDays" :key="currentMonthName + index">
            <button type="button" @click="selectDate(day)" :disabled="!day.available || !day.date" :class="{
                                                    'text-gray-300 cursor-not-allowed bg-gray-50': !day.available || !day.date,
                                                    'bg-[#074b83] text-white font-bold ring-2 ring-offset-1 ring-[#074b83]': day.isStart || day.isEnd,
                                                    'bg-[#074b83]/20 text-[#074b83]': day.inRange && !day.isStart && !day.isEnd,
                                                    'hover:bg-blue-50 border border-blue-200': day.available && !day.inRange && day.date
                                                }"
                class="aspect-square rounded-full flex items-center justify-center text-sm transition"
                x-text="day.date || ''">
            </button>
        </template>
    </div>
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-3">Number of People</h3>
        <select x-model="participants"
            class="border rounded-lg px-4 py-2.5 w-24 text-lg outline-none focus:ring-2 focus:ring-[#074b83]/20">
            <template x-for="i in 24">
                <option :value="i" x-text="i"></option>
            </template>
        </select>
    </div>

    <button type="button" @click="goToParticipantInfo()" :disabled="!selectedStart"
        :class="{ 'opacity-50 cursor-not-allowed': !selectedStart, 'hover:bg-[#27ae60] shadow-lg': selectedStart }"
        class="mt-4 w-full md:w-auto self-end bg-[#2ecc71] text-white font-bold py-4 px-10 rounded-lg text-lg transition">
        Continue
    </button>
</div>