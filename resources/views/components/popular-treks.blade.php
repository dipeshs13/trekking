@include('partials.trek-scripts')

{{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style> 
    [x-cloak] { display: none !important; } 
</style>

<section class="pb-20 bg-white" x-data="trekList()" x-cloak>
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">
        
        <template x-for="(item, index) in treks" :key="index">
            <div 
                class="group bg-white rounded-lg overflow-hidden shadow-lg border border-gray-100 transition-all hover:shadow-2xl"
                x-data="treksData(item)"
            >
                @include('partials.trek-card-content')
            </div>
        </template>
        
    </div>
</section>