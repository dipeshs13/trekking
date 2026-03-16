<script>
    function treksData() {
        return {
            treks: [
                {
                    title: "Annapurna Base Camp Trek 7 Days",
                    image: "{{ asset('images/annapurna_base.jpg') }}",
                    price: "$480",
                    reviews: "120+",
                    link: "{{ route('treks.details', 'annapurna-base-camp') }}",
                    details: [
                        { value: "07 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Moderate", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "4130m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Annapurna Base Camp Trek 10 Days",
                    image: "{{ asset('images/ABC-TREK-10DAYS.jpg') }}",
                    price: "$690",
                    reviews: "110+",
                    link: "#",
                    details: [
                        { value: "10 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Moderate/Hiking", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "4130m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Everest Base Camp Trek",
                    image: "{{ asset('images/ebc-trek.jpg') }}",
                    price: "$1330",
                    reviews: "70",
                    link: "#",
                    details: [
                        { value: "12 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Challenging", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "5545m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Langtang Trek 7 Days",
                    image: "{{ asset('images/langtang-trekking.jpg') }}",
                    price: "$480",
                    reviews: "75",
                    link: "#",
                    details: [
                        { value: "07 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Moderate", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "3800m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Mardi Himal Trek 5 Days",
                    image: "{{ asset('images/mardi-himal-trek-5days.jpg') }}",
                    price: "$390",
                    reviews: "30",
                    link: "#",
                    details: [
                        { value: "05 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Moderate/Hiking", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "4000m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Everest Base Camp Trek 10 Days",
                    image: "{{ asset('images/10days-everest-base-camp-trek.jpg') }}",
                    price: "$1230",
                    reviews: "23",
                    link: "#",
                    details: [
                        { value: "10 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Moderate/Challenging", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "5545m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Upper Mustang Trek",
                    image: "{{ asset('images/upper-mustang-trek.jpg') }}",
                    price: "$1840",
                    reviews: "20",
                    link: "#",
                    details: [
                        { value: "15 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Moderate", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "3800m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Annapurna Tilicho Lake Trek",
                    image: "{{ asset('images/tilicho-lake-trek.jpg') }}",
                    price: "$950",
                    reviews: "22",
                    link: "#",
                    details: [
                        { value: "16 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Challenging/High Pass", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "5416m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "12 Days Manaslu Circuit Trek",
                    image: "{{ asset('images/manaslu-trekking.jpg') }}",
                    price: "$890",
                    reviews: "40",
                    link: "#",
                    details: [
                        { value: "12 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Moderate/Challenging", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "5106m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                },
                {
                    title: "Annapurna Circuit Trek 12 Days",
                    image: "{{ asset('images/annapurna-circuit-trek.jpg') }}",
                    price: "$790",
                    reviews: "26",
                    link: "#",
                    details: [
                        { value: "12 Days", icon: "M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" },
                        { value: "Challenging/High Pass", icon: "M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" },
                        { value: "3800m.", icon: "M3 21v-4m18 4v-4M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" }
                    ]
                }
            ]
            
        }
    }
</script>