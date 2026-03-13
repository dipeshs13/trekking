@extends('layouts.app')

@section('content')

    <section class="w-full bg-slate-950 py-10">
        <div class="max-w-[1600px] mx-auto px-4">

            <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <span class="text-orange-500 font-bold tracking-widest uppercase text-sm">Experience Nepal</span>
                    <h2 class="text-white text-4xl md:text-5xl font-black mt-2">Annapurna Base Camp</h2>
                </div>
                <p class="text-slate-400 max-w-md pb-1">
                    A 7-day journey through the heart of the Himalayas. Capture every moment from the lush valleys to the
                    4,130m base camp.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-4 h-auto md:h-[700px]">

                <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-3xl shadow-2xl">
                    <img src="{{ asset('images/abc-trek-1.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 ease-in-out"
                        alt="Annapurna Base Camp Large">

                    <div
                        class="absolute bottom-6 left-6 right-6 p-6 backdrop-blur-md bg-white/10 border border-white/20 rounded-2xl transform translate-y-2 group-hover:translate-y-0 transition-transform">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-white/80 text-xs uppercase tracking-widest">Featured Route</p>
                                <h3 class="text-white text-2xl font-bold italic">The 7-Day Sanctuary</h3>
                            </div>
                            <div
                                class="h-12 w-12 rounded-full bg-orange-500 flex items-center justify-center text-white font-bold">
                                4.1k
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 relative group overflow-hidden rounded-3xl shadow-lg">
                    <img src="{{ asset('images/abc-trek-2.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000"
                        alt="Trek 2">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                        <p class="text-white font-medium">Mountain Sunsets</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-3xl shadow-lg">
                    <img src="{{ asset('images/abc-trek-3.jpg') }}"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700"
                        alt="Trek 3">
                    <div
                        class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-orange-500/20">
                        <span class="text-white font-bold">Local Culture</span>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-3xl shadow-lg">
                    <img src="{{ asset('images/abc-trek-4.jpg') }}"
                        class="w-full h-full object-cover group-hover:rotate-2 transition-transform duration-500"
                        alt="Trek 4">
                    <div
                        class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black/40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto p-4 md:p-8 bg-white">
        <div class="flex flex-col lg:flex-row gap-10">

            <div class="flex-1">
                <nav class="text-sm text-blue-600 mb-2">
                    Home <span class="text-gray-400 mx-2">/</span> Annapurna Base Camp Trek 7 Days
                </nav>

                <div class="flex items-center gap-4 mb-6">
                    <div class="flex text-yellow-400 text-sm">
                        ★★★★★ <span class="text-blue-600 ml-2">300+ reviews</span>
                    </div>
                    <div class="text-gray-500 text-sm">[150+ booked]</div>
                    <div class="flex gap-2 ml-auto">
                        <div class="w-6 h-6 rounded-full  flex items-center justify-center text-white text-xs"><img
                                src="{{ asset('icon/facebook.svg') }}" alt=""></div>
                        <div class="w-6 h-6 rounded-full  flex items-center justify-center text-white text-xs"><img
                                src="{{ asset('icon/insta.svg') }}" alt=""></div>
                        <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs"><img
                                src="{{ asset('icon/twit.svg') }}" alt=""></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 gap-x-12 border-t border-gray-100 pt-8">

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A2 2 0 013 15.382V6m18 14l-5.447-2.724a2 2 0 01-1.106-1.788V3m-9 18v-9m9 9v-9m-9 0l9-4.5M9 12L3 9m15 3l6-3m-6-3l-9-4.5m9 4.5V3">
                                </path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Trek Region</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">Annapurna</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Accommodation</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">Tea House Basis</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Trip Grade</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">Moderate/Hiking</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Trek Duration</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">6 Nights 7 Days</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Highest Elevation</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">4130m.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Best Time</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">Sep-Dec & Feb-June</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                                </path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Meal</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">Breakfast, Lunch & Dinner</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-blue-900"><svg class="w-8 h-8" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                            </svg></div>
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase">Start/End Point</p>
                            <p class="text-blue-900 font-bold text-lg leading-tight">Pokhara to Pokhara</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-80">
                <div class="border border-blue-900 rounded-lg overflow-hidden relative">
                    <div
                        class="absolute -top-1 left-0 bg-emerald-400 text-white px-4 py-1 rounded-br-lg text-sm font-bold z-10 shadow-md">
                        Price From
                    </div>

                    <div class="bg-blue-900 p-8 text-center text-white">
                        <p class="text-xs uppercase tracking-widest opacity-80 mb-2">All Inclusive Price:</p>
                        <div class="text-5xl font-bold">
                            <span class="text-2xl">$</span> 480 <span class="text-sm font-normal opacity-80">PP</span>
                        </div>
                    </div>

                    <div class="p-6 bg-white space-y-3">
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <span class="text-emerald-500">➜</span> Local Guides & Porters
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <span class="text-emerald-500">➜</span> 98% Success Trip Rate
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <span class="text-emerald-500">➜</span> Comfort Priority and Safety Trip
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <span class="text-emerald-500">➜</span> Satisfied Client
                        </div>
                    </div>
                </div>

                <div class="mt-4 flex flex-col gap-2">
                    <button
                        class="w-full bg-orange-600 text-white py-3 rounded font-bold uppercase tracking-wide hover:bg-orange-700 transition">
                        Check Availability
                    </button>
                    <button
                        class="w-full bg-blue-900 text-white py-3 rounded font-bold uppercase tracking-wide hover:bg-blue-950 transition">
                        Book Now
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-12">

            <div class="lg:w-2/3 space-y-10">

                <article>
                    <h1 class="text-3xl font-bold text-teal-700 mb-4 leading-tight">
                        Annapurna Base Camp 7 Days in the Heart of the Himalayas
                    </h1>
                    <div class="text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Annapurna Base Camp Trek 7 Days is the short trekking package to explore the majestic
                            surrounding of the world's 10th tallest mountain Mt. Annapurna. Moreover, the package is one of
                            the best short Annapurna Base Camp Trek that has itinerary worth millions! The journey of ABC
                            Trek is unforgettable as the trip encompasses diverse attractions ranging from natural to
                            cultural aspects.
                            <a href="#" class="text-teal-600 font-semibold hover:underline">Everest Trekking Routes Pvt.
                                Ltd.</a> is one of the leading trekking agencies...
                        </p>
                    </div>
                </article>

                <article>
                    <h2 class="text-2xl font-bold text-teal-800 mb-4">
                        Which is the most popular Trekking Destination of Nepal?
                    </h2>
                    <div class="text-gray-700 leading-relaxed space-y-4 text-sm md:text-base">
                        <p>Do you know that Nepal is the best destination for trekking activities? Yes, the presence of
                            countless Himalayas and diverse landscape make this Himalayan nation a heaven...</p>
                        <p>Among these trekking regions, the Annapurna region of Nepal is the most popular! Inside the
                            Annapurna region you can find plethora of trekking trails...</p>
                    </div>
                </article>

                <article>
                    <h3 class="text-2xl font-bold text-teal-800 mb-4">
                        When is the best time to do trek to Annapurna Base Camp?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        The most appropriate time to do the Annapurna Base Camp Trek in Nepal is during the months of spring
                        and autumn season. However, the trekking activity inside the trekking route of the
                        <span class="text-blue-500">Annapurna Base Camp Trek</span> is possible throughout the year...
                        <span class="text-green-600 font-bold">(March, April, May, September, October, and November).</span>
                    </p>
                </article>

                <article>
                    <h3 class="text-2xl font-bold text-teal-800 mb-4">
                        Is it possible to do Annapurna Trekking in a week?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes, it is possible to do the Annapurna Trekking in a week. Inside the Annapurna region of Nepal,
                        you can find plethora of trekking routes to trek! The most famous trekking trips inside the region
                        are the Annapurna Circuit Trek, Annapurna Base Camp Trek, Mardi Himal Trek, and Ghorepani Poon Hill
                        Trek. Besides these trekking routes, trekkers can customize their trekking trips to various
                        destinations. These trekking routes include likes of Mohare Danda Trek, Khumai Danda Trek, Tilicho
                        Lake Trek, Meso Kanta La Pass Trek, Annapurna Royal Trek, Dhampus Sarangkot Trek, etc. Almost every
                        trekking destination requires more than a week’s itinerary. However, the Everest Trekking Routes
                        Pvt. Ltd. has knitted a scientific and technical itinerary that takes trekkers to the Annapurna Base
                        Camp in less than a week’s time.
                    </p>
                </article>
                <article>
                    <h3 class="text-2xl font-bold text-teal-800 mb-4">
                        Do I need a travel insurance to trek in Annapurna of Nepal?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        In fact, travel insurance is mandatory for any trekking routes of Nepal. Make sure that you have
                        purchased the trekking insurance plan in your home country or from the global market! Leave the copy
                        of the trekking or travel insurance to our city office. In case of emergency the copy of insurance
                        is useful in organizing prompt rescue activities or does the actions which are needed! The plan of
                        insurance must include provisions of emergency helicopter rescue, medical expenses, accidents, and
                        unforeseen incidents! In overall, if you are doing the Annapurna Base Camp Trekking or any kinds of
                        trekking activities in Nepal then you must buy a travel insurance plan!
                    </p>
                </article>
                <article>
                    <h3 class="text-2xl font-bold text-teal-800 mb-4">

                        Experience Natural Hot Springs
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Inside the Annapurna Base Camp Trek route you can find a natural hot springs location. The place is
                        called Jhinu where you can dip into the natural hot springs and get relieved from any kinds of
                        exhaustion! The journey of Annapurna Base Camp Trek 7 Days requires immense physical fitness. In
                        addition, if you are completing the trekking route trek in less than a week means that you need to
                        walk more than usual per day. Normally, during this “Short Annapurna Base Camp Trek” trip you will
                        have to walk for more than 6 to 7 hours per day with two breaks. Therefore, trekking in this
                        trekking route is different than other popular trekking routes of Nepal like the Everest Baase Camp
                        Trek!

                        In this short Annapurna Base Camp Trek itinerary trekkers can get chance to get repose from daily
                        chores of life. Your mental drabness will disappear if you choose to continue on this path. If not
                        then you will be able to understand and know the point of view of people from across the globe!
                    </p>
                </article>
                <article>
                    <h3 class="text-2xl font-bold text-teal-800 mb-4">

                        Is it hard to do the ABC trek in 7 Days?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        The normal trekking itinerary to successfully complete the Annapurna Base Camp Trek route includes
                        at least 12 to 14 days! However, the Everest Trekking Routes Pvt. Ltd. has offered the condensed
                        trekking itinerary of 7 days. It is possible to do the trek but please remember that this trekking
                        package is for the adventure lovers. Moreover, the itinerary is best suited for the trekkers who
                        have limited time or on a tight schedule. In addition, this itinerary is suitable to those trekkers
                        who have great physical fitness level and can walk at least 6 to 7 hours a day with few breaks!

                        Brace yourself to walk at least 6 to 7 hours in the high altitude and strengthen your mental
                        fortitude for any kinds of force majeure! If you are capable to cope with these scenarios then you
                        can easily complete the Annapurna Base Camp Trek 7 Days journey.

                        Book the Annapurna Base Camp Trek 7 day’s package with us and explore the splendid diverse region of
                        Annapurna. Look no further and enquire today about dates or your travel plans.
                    </p>
                </article>
                <article>
                    <h3 class="text-2xl font-bold text-teal-800 mb-4">

                        Why do you select Everest Trekking Routes?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        In the context of Nepal, there are almost thousands of thousand trekking companies that organize
                        trekking, peak climbing, expeditions, tour hiking, and many adventure activities in the high
                        Himalayan land. Among thousands of trekking companies, Everest Trekking Routes is one of them that
                        organizes trekking. We have at least 26 Years of experience as mountain guides and trip organizers
                        in the high Himalayas of Nepal. Most of the guides of this company are well-trained, professional,
                        and licensed proven by the Nepal Government Tourism Board.
                    </p>
                </article>
            </div>

            <div class="lg:w-[320px]">
                <div class="lg:sticky lg:top-8 space-y-3">

                    <div class="border border-blue-900 rounded shadow-sm overflow-hidden">
                        <div
                            class="bg-blue-900 text-white p-2 flex items-center gap-2 uppercase font-bold text-[11px] tracking-wider">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            Make an Inquiry
                        </div>

                        <form action="#" class="p-4 space-y-3 bg-white">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-0.5">Trip Name</label>
                                <input type="text" value="Annapurna Base Camp Trek 7 Days"
                                    class="w-full border border-gray-200 p-1.5 rounded text-gray-500 text-xs bg-gray-50 outline-none"
                                    readonly>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-0.5">Your Name</label>
                                <input type="text"
                                    class="w-full border border-gray-300 p-1.5 rounded text-sm focus:border-blue-900 outline-none transition-colors">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-0.5">Your Email</label>
                                <input type="email"
                                    class="w-full border border-gray-300 p-1.5 rounded text-sm focus:border-blue-900 outline-none transition-colors">
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-0.5">Phone
                                        No</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 p-1.5 rounded text-sm focus:border-blue-900 outline-none">
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-bold text-gray-400 uppercase mb-0.5">Country</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 p-1.5 rounded text-sm focus:border-blue-900 outline-none">
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-0.5">Message</label>
                                <textarea rows="3"
                                    class="w-full border border-gray-300 p-1.5 rounded text-sm focus:border-blue-900 outline-none"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-blue-900 text-white py-2 rounded text-xs font-bold uppercase hover:bg-blue-800 transition">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <div class="rounded overflow-hidden border border-gray-100">
                        <div class="bg-blue-900 text-white py-2 px-3 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase opacity-80">WhatsApp</span>
                            <span class="text-sm font-bold">+977-9843467921</span>
                        </div>
                        <div class="bg-emerald-500 text-white py-2 px-3 flex items-center justify-center gap-2">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span class="text-[10px] font-semibold truncate">info@everesttrekkingroutes.com</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="max-w-7xl mx-auto px-4 py-12 bg-white">
        <div class="mb-8">
            <h2 class="text-4xl font-bold text-blue-900 mb-2">Trip Itinerary</h2>
            <h3 class="text-2xl font-bold text-blue-900 flex items-center gap-2">
                <span class="border-b-4 border-blue-900 w-8"></span> Outline Itinerary
            </h3>
        </div>

        <div class="relative border-l-4 border-blue-900 ml-1 space-y-6 mb-10">

            <div class="relative pl-8">
                <div class="absolute w-6 h-1 bg-blue-900 left-0 top-3"></div>
                <p class="text-gray-800 text-lg">
                    <span class="font-bold text-blue-900">Day 01:</span>
                    Drive to Nayapul and Trek to Ghandruk (1950m.) 1 hour drive and 4-5 hour trek.
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute w-6 h-1 bg-blue-900 left-0 top-3"></div>
                <p class="text-gray-800 text-lg">
                    <span class="font-bold text-blue-900">Day 02:</span>
                    Trek to Sinuwa (2340m.) 5-6 hour
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute w-6 h-1 bg-blue-900 left-0 top-3"></div>
                <p class="text-gray-800 text-lg">
                    <span class="font-bold text-blue-900">Day 03:</span>
                    Trek to Deurali (3230m.) 6-7 hour
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute w-6 h-1 bg-blue-900 left-0 top-3"></div>
                <p class="text-gray-800 text-lg">
                    <span class="font-bold text-blue-900">Day 04:</span>
                    Trek to Annapurna Base Camp (4130m.) 5-6 hour
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute w-6 h-1 bg-blue-900 left-0 top-3"></div>
                <p class="text-gray-800 text-lg">
                    <span class="font-bold text-blue-900">Day 05:</span>
                    Trek to Bamboo (2310m.) 6 hour
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute w-6 h-1 bg-blue-900 left-0 top-3"></div>
                <p class="text-gray-800 text-lg">
                    <span class="font-bold text-blue-900">Day 06:</span>
                    Trek to Jhunu Danda Hot Spring (1780M) 5 hour
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute w-6 h-1 bg-blue-900 left-0 top-3"></div>
                <p class="text-gray-800 text-lg">
                    <span class="font-bold text-blue-900">Day 07:</span>
                    Trek to Nayapul and Drive to Pokhara 5 hours
                </p>
            </div>
        </div>

        <div class="flex flex-wrap gap-4 pt-6 border-t border-gray-100">
            <button
                class="flex items-center gap-2 border-2 border-blue-900 rounded-xl px-6 py-2.5 text-blue-900 font-bold hover:bg-blue-900 hover:text-white transition group">
                <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Customize Trip
            </button>

            <button
                class="flex items-center gap-2 border-2 border-blue-900 rounded-xl px-6 py-2.5 text-blue-900 font-bold hover:bg-blue-900 hover:text-white transition">
                <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                Download PDF
            </button>

            <button
                class="flex items-center gap-2 border-2 border-blue-900 rounded-xl px-6 py-2.5 text-blue-900 font-bold hover:bg-blue-900 hover:text-white transition">
                <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
                Equipment List
            </button>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 py-12 bg-white">
        <div class="mb-10">
            <h2 class="text-4xl font-bold text-blue-900 mb-6">Trip Itinerary</h2>
            <h3 class="text-2xl font-bold text-blue-900">Details Itinerary</h3>
        </div>

        <div class="mb-12">
            <h4 class="text-xl md:text-2xl font-bold text-blue-900 mb-4">
                Day 01: Drive to Nayapul and Trek to Ghandruk (1950m.) 1 hour drive and 4-5 hour trek.
            </h4>
            <div class="text-gray-700 leading-relaxed mb-6 space-y-4">
                <p>
                    After breakfast, we drive to Nayapul by car or van and it takes one and half hours to get to Nayapul.
                    This is 1050m far from Pokhara. During the time of trekking, we will pass through the beautiful
                    Rhododendron forest and we will have our lunch on the way and take some rest then after we will move
                    towards Ghandruk. From Birethanti we have followed the beautiful water forest and rice flew Gurung
                    village between Nayapul to Ghandruk, Then trek to Ghandruk which takes almost 4 hours to reach Ghandruk
                    from Pokhara where we will stay overnight at lodge.
                </p>
            </div>

            <div class="space-y-2">
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Accommodation: <span class="text-blue-600 font-normal">Tea House Basis</span></span>
                </div>
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                    <span>Meals: <span class="text-blue-600 font-normal">Breakfast, Lunch & Dinner</span></span>
                </div>
            </div>
        </div>

        <div class="mb-12">
            <h4 class="text-xl md:text-2xl font-bold text-blue-900 mb-4">
                Day 02: Trek to Sinuwa (2340m.) 5-6 hour
            </h4>
            <div class="text-gray-700 leading-relaxed mb-6">
                <p>
                    After breakfast, we trek to the Chhomrong crossing through the Gurung village. While climbing up, we can
                    take the view of the mighty peak of Annapurna South, Hiunchuli, and the Himchuli Peak above the village
                    and the view of Machhapuchhre facing across the valley which is really impressive, and the Chhomorong
                    highly populated by the Gurung people which are one of the major ethnic groups of Nepal. It's your great
                    chance to experience the perfect hospitality of Gurung people it takes about 6-7 hours of walking to
                    reach the Edge of Kumrong Khola and Stay Overnight at Lodge.
                </p>
            </div>

            <div class="space-y-2">
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Accommodation: <span class="text-blue-600 font-normal">Tea House Basis</span></span>
                </div>
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                    <span>Meals: <span class="text-blue-600 font-normal">Breakfast, Lunch & Dinner</span></span>
                </div>
            </div>
        </div>
        <div class="mb-12">
            <h4 class="text-xl md:text-2xl font-bold text-blue-900 mb-4">
                Day 03: Trek to Deurali (3230m.) 6-7 hour
            </h4>
            <div class="text-gray-700 leading-relaxed mb-6">
                <p>
                    We climb on Deurali through the thick Rhododendron and Bamboo forest to reach Deurali, this takes nearly
                    5-6 hours. After reaching Deurali, the views of Mt.Hiunchuli, Annapurna South, Annapurna I, Annapurna
                    III, Gangapurna, and the Fishtail are really touchable. Annapurna I is the tenth-highest peak in the
                    world. We will pass through the lush forest of Rhododendrons, pine, and oak. During the time trekking,
                    we will cross many beautiful tea Houses, and landscapes of this region. We will have our lunch on the
                    way and take some rest then after we will move towards Deurali. It takes almost 6 hours to reach Deurali
                    and spend one night in this village.
                </p>
            </div>

            <div class="space-y-2">
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Accommodation: <span class="text-blue-600 font-normal">Tea House</span></span>
                </div>
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                    <span>Meals: <span class="text-blue-600 font-normal">Breakfast, Lunch & Lunch</span></span>
                </div>
            </div>
        </div>
        <div class="mb-12">
            <h4 class="text-xl md:text-2xl font-bold text-blue-900 mb-4">
                Day 04: Trek to Annapurna Base Camp (4130m.)5-6 hour
            </h4>
            <div class="text-gray-700 leading-relaxed mb-6">
                <p>
                    After breakfast and climb to Machhapurchre Base Camp takes under 3 hours. take a lunch break and another
                    2 hour Climb up to Annapurna Base Camp. You descend a small ridge branching out from the mountain pass
                    to the mountainside with widespread terraced fields showcasing tranquil meadows and lush fertile farming
                    land. The sanctuary boasts of a dynamic view without anything impeding the 360-degree panorama. We will
                    have our lunch on the way and take some rest and move towards our destination. After reaching Annapurna
                    base camp we will explore all around the ABC and we will spend one night at Annapurna Base Camp.
                </p>
            </div>

            <div class="space-y-2">
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Accommodation: <span class="text-blue-600 font-normal">Tea House</span></span>
                </div>
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                    <span>Meals: <span class="text-blue-600 font-normal">Breakfast, Lunch & Lunch</span></span>
                </div>
            </div>
        </div>
        <div class="mb-12">
            <h4 class="text-xl md:text-2xl font-bold text-blue-900 mb-4">
                Day 05: Trek to Bamboo (2310m.) 6 hour


            </h4>
            <div class="text-gray-700 leading-relaxed mb-6">
                <p>
                    From the Annapurna base camp, we return our steps to Bamboo, and today’s trek is downhill, so it
                    shouldn’t be very difficult. During the time trekking, we will pass through the beautiful Gurung
                    village, the lush forest of rhododendron, pine, and oak, and get the chance to see the wonderful views
                    of the mountain. And by the way, we will have our lunch then after we will take some rest and we move
                    towards Bamboo. After reach in Bamboo, first of all, we check out the hotel then after we will explore
                    all around the Bamboo and return back to the hotel and we will stay overnight at Bamboo.
                </p>
            </div>

            <div class="space-y-2">
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Accommodation: <span class="text-blue-600 font-normal">Tea House</span></span>
                </div>
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                    <span>Meals: <span class="text-blue-600 font-normal">Breakfast, Lunch & Lunch</span></span>
                </div>
            </div>
        </div>
        <div class="mb-12">
            <h4 class="text-xl md:text-2xl font-bold text-blue-900 mb-4">
                Day 06: Trek to Jhunu Danda Hot Spring (1780M) 5 hour
            </h4>
            <div class="text-gray-700 leading-relaxed mb-6">
                <p>
                    The trail then descends to JhinuDanda, where we will rest for the night. Today we will have an
                    opportunity to enjoy the hot springs which are just a 15-20 minute downhill walk from JhinuDanda to
                    soothe our aching bodies. The trail continues through rhododendron and bamboo field. The major
                    attractions are the hot spring the tourist can take a dip in the hot water spring. You can also enjoy
                    the views of the soaring mountain from Jhinu Danda. It takes almost 5 hours to reach Jhinu Danda and we
                    will explore all around Jhinu Danda and come back to the hotel where we will spend one night.
                </p>
            </div>

            <div class="space-y-2">
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Accommodation: <span class="text-blue-600 font-normal">Tea House</span></span>
                </div>
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                    <span>Meals: <span class="text-blue-600 font-normal">Breakfast, Lunch & Lunch</span></span>
                </div>
            </div>
        </div>
        <div class="mb-12">
            <h4 class="text-xl md:text-2xl font-bold text-blue-900 mb-4">
                Day 07: Trek to Nayapul and Drive to Pokhara 5 hours
            </h4>
            <div class="text-gray-700 leading-relaxed mb-6">
                <p>
                    After breakfast, we trek to Nayapul via Birethanti takes about 4-5 hours. then we drive to Pokhara by
                    private car or van, after reaching Pokhara city we will go to explore all around Pokhara city which is
                    also known as the city of the lake and we will stay one night in Pokhara.
                </p>
            </div>

            <div class="space-y-2">
                {{-- <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Accommodation: <span class="text-blue-600 font-normal">Tea House Basis</span></span>
                </div> --}}
                <div class="flex items-center gap-3 text-teal-600 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                    <span>Meals: <span class="text-blue-600 font-normal">Breakfast & Lunch</span></span>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 py-12 bg-white border-t border-gray-100">
        <h2 class="text-4xl font-bold text-blue-900 mb-8">Cost Details</h2>

        <div class="space-y-12">
            <div>
                <h3 class="text-2xl font-bold text-blue-900 mb-6 flex items-center gap-2">
                    Cost Includes
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Pokhara to Nayapul and Back to Pokhara by Private Car or Van</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Your Meal During the Trekking as Your standard meals (3 times a day
                            Breakfast, Lunch, and Dinner with a cup of tea or Coffee)</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <p class="text-gray-700">All Trekking Permit and Paperwork as Annapurna conservation entry permits
                            (ACAP) and Trekkers' Information Management System (TIMS) Permit</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <p class="text-gray-700">6-night Lodge Accommodation/tea houses during the treks</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Trekking Guide: Government License holder Trekking An experienced, helpful,
                            friendly, and English-speaking</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Trekking porter (one porter for two members) <span
                                class="text-red-600 font-bold">No Porter for Solo Trekkers</span></p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Arrangement of Emergency Helicopter service which will be paid for by your
                            Travel insurance company</p>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-red-600 mb-6">
                    Cost Excludes
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                        <p class="text-gray-700">All Meals & Hotel in Kathmandu and Pokhara</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Internal & Domestic Flight fare</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Personal Expenses (Hot Shower, bar bills, laundry, phone call, etc.)</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                        <p class="text-gray-700">Tips for guide, porters, and driver</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-12 bg-white">
        <h2 class="text-4xl font-bold text-blue-900 mb-10">Trip Map</h2>

        <div class="overflow-hidden mb-12">
            <img src="{{ asset('images/abc-map-7days.jpg') }}" alt="Annapurna Base Camp Trip Map" class="w-200 h-300 block">


        </div>

    </section>

    <section class="max-w-7xl mx-auto px-4 py-12 bg-white">
        <h2 class="text-4xl font-bold text-blue-900 mb-8">FAQ</h2>

        <div class="space-y-4">
            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left group">
                    <span class="text-lg font-bold text-blue-900">What is the altitude of Annapurna Base Camp?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>
                        The altitude of Annapurna Base Camp is 4130 m from sea level. This is comparatively low altitude
                        base camp in comparison to other iconic mountain peaks of Nepal. For example, Everest Base Camp is
                        situated at an altitude of 5364 m and base camp of Mt. Manaslu is at 4800 m. Therefore, lots of
                        trekkers prefer to do trek up to the base camp of the world’s 10th tallest mountain Mt. Annapurna in
                        order to minimize the risk of altitude sickness.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left">
                    <span class="text-lg font-bold text-blue-900">Why lots of Nepalese trekkers are increasing in the ABC
                        route?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>The low altitude base camp, possibility to complete the trekking in less than 4 days from Pokhara,
                        and availabilities of good lodging as well as food in the trekking route make it popular among
                        Nepalese trekkers too. Moreover, the trekking trail is diverse as the journey of Annapurna Base Camp
                        Trek in Nepal offers both cultural experiences and natural experiences. Trekkers can relish
                        magnificent scenery of lofty mountains of Annapurna Himalayan range as well as traverse through
                        green lush forests enjoying flora and fauna!</p>
                </div>
            </div>

            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left">
                    <span class="text-lg font-bold text-blue-900">Is Ghandruk Village Nepal’s 1st Model Home Stay
                        Village?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>The first night on this Annapurna Base Camp Trek 7 Days, trekkers have to spend overnight in Ghandruk
                        Village. This village is mainly habituated by Gurung and Magar people including minority of Dalits.
                        Therefore, in order to preserve the unique culture and traditions of these indigenous people Nepal
                        Government along with Tourism authorities decided to create a home stay concept village.

                        Thus, the Ghandruk village officially became the first model home stay village of Nepal. Nowadays,
                        there are countless home stay village in different trekking regions of Nepal.</p>
                </div>
            </div>
            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left">
                    <span class="text-lg font-bold text-blue-900">Can I do solo Annapurna Base Camp Trek 7 Days?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>It is possible to do solo Annapurna Base Camp Trek in Nepal. However, it is highly recommended to all
                        trekkers that you should not trek solo if you are doing the Annapurna Base Camp Trek 7 Days. This is
                        the shortest way to reach the base camp of the Mt. Annapurna. During this trip, trekkers must
                        increase the pace of walking which may lead to exhaustion. Trekking with a guidance of an
                        experienced trekking guide is highly recommended.

                        In fact, if you want to experience hassle free trekking up in the mountains and want to immerse
                        deeply into local culture and nature then don’t trek solo! Travel with a guide or trek in a group!
                    </p>
                </div>
            </div>
            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left">
                    <span class="text-lg font-bold text-blue-900">How Difficult is Annapurna Base Camp Short Trek?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>The journey of Annapurna Base Camp Short Trek is fairly difficult. You will have to walk for more
                        than 6 hours a day in an average in the uphill and downhill terrain. Therefore, don’t underestimate
                        the difficulty level of terrain. If you are in a group led by an experienced trekking guide then it
                        would not be arduous. The guide will plan the pace and keep you on track to successfully complete
                        the trekking in the quoted itinerary days.

                        The trail is well maintained but in some sections navigation may become challenging especially in
                        the landslide prone areas.</p>
                </div>
            </div>
            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left">
                    <span class="text-lg font-bold text-blue-900">When is the best time to do ABC Trek?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>March, April, and May months of spring season and September, October, and November months of autumn
                        season are considered as the best time to do ABC Trek in Nepal. During this time of the year, the
                        weather is clear and warm. Trekkers can enjoy the majestic scenery of mountains and hills. Moreover,
                        in this time of the year, Nepal celebrates many festivals. For an amazing blooming forest and green
                        lush environment choose spring season.

                        However, if you love to immerse into local culture then do the trek in autumn season. Nepal’s two of
                        the biggest festivals Dashain and Tihar fall in this season!</p>
                </div>
            </div>
            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left">
                    <span class="text-lg font-bold text-blue-900">What is an average cost of Annapurna Trek?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>In an average, the cost of Annapurna Trek varies. The rate of Annapurna Base Camp Trek 7 Days starts
                        from 480 $ per person to $ 690 dollar per person. The variation in the prices of Annapurna Trek
                        depends upon number of trekking days as well as the size of the group. Normally, large groups get
                        discounts and the price decreases as the size of a group increases.

                        Contact our travel planners and negotiate the trekking cost along with all other necessary amenities
                        required for your trekking trip. Upon finalizing the number of trekkers in a group, the average cost
                        of Annapurna Trek drastically changes.</p>
                </div>
            </div>
            <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                <button onclick="toggleFAQ(this)"
                    class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-left">
                    <span class="text-lg font-bold text-blue-900">How much weight does my porter carry?</span>
                    <span class="icon text-blue-500 text-2xl">+</span>
                </button>
                <div class="content hidden p-5 pt-0 text-gray-700 leading-relaxed border-t border-gray-50">
                    <p>A porter is assigned to two trekkers in a group. Even if you are a solo trekker the weight of total
                        baggage that a porter carries doesn’t differ. In an average a trekking porter carry 18 to 20
                        kilograms maximum. If you hand him or her your day pack to carry while trekking then you will have
                        to pay your porter extra.

                        According to labour law of Nepal, beyond 20 kilograms is not allowed! However, porters who work to
                        transport goods from low altitude places to high altitude places carry heavy loads. Always make your
                        baggage lighter and pack only the essential things.

                        Please ask our travel planners beforehand about the packing list. Pack only those things which are
                        essential. Your porter may not walk beside you! Therefore, every morning fill up your day pack with
                        things which you need on the way before meeting a porter in a tea house in the evening.</p>
                </div>
            </div>

        </div>
    </section>

    <script>
        function toggleFAQ(element) {
            // Find the content div related to the clicked button
            const content = element.nextElementSibling;
            const icon = element.querySelector('.icon');

            // Toggle the 'hidden' class
            content.classList.toggle('hidden');

            // Change the icon from + to −
            if (content.classList.contains('hidden')) {
                icon.textContent = '+';
            } else {
                icon.textContent = '−';
            }
        }
    </script>
@endsection