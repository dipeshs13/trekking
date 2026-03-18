<script>
    function treksData(trekItem) {
        return {
            trek: trekItem,
            step: 1,
            openForm: false,
            participants: 1,
            paymentOption: 'deposit',
            paymentMethod: 'checking',
            currentMonth: new Date().getMonth(),
            currentYear: new Date().getFullYear(),
            selectedStart: null,
            selectedEnd: null,
            selectedCurrency: 'USD',
            showCurrency: false,
            showInsuranceForm: false,
            includeInsurance: false,
            insurancePricePerPerson: 50,
            serviceFee: 2.99,
            buyer_fname: '',
            buyer_lname: '',
            buyer_email: '',
            confirm_email: '', // Add this
            participantDetails: [],
            selectedDate: null, // Add this to track participant inputs
            countries: [
                { name: 'Afghanistan', code: 'AF' },
                { name: 'Albania', code: 'AL' },
                { name: 'Algeria', code: 'DZ' },
                { name: 'Andorra', code: 'AD' },
                { name: 'Angola', code: 'AO' },
                { name: 'Argentina', code: 'AR' },
                { name: 'Australia', code: 'AU' },
                { name: 'Austria', code: 'AT' },
                { name: 'Bangladesh', code: 'BD' },
                { name: 'Belgium', code: 'BE' },
                { name: 'Bhutan', code: 'BT' },
                { name: 'Brazil', code: 'BR' },
                { name: 'Canada', code: 'CA' },
                { name: 'China', code: 'CN' },
                { name: 'Denmark', code: 'DK' },
                { name: 'Finland', code: 'FI' },
                { name: 'France', code: 'FR' },
                { name: 'Germany', code: 'DE' },
                { name: 'India', code: 'IN' },
                { name: 'Italy', code: 'IT' },
                { name: 'Japan', code: 'JP' },
                { name: 'Malaysia', code: 'MY' },
                { name: 'Nepal', code: 'NP' },
                { name: 'Netherlands', code: 'NL' },
                { name: 'New Zealand', code: 'NZ' },
                { name: 'Norway', code: 'NO' },
                { name: 'Singapore', code: 'SG' },
                { name: 'Spain', code: 'ES' },
                { name: 'Switzerland', code: 'CH' },
                { name: 'Thailand', code: 'TH' },
                { name: 'United Arab Emirates', code: 'AE' },
                { name: 'United Kingdom', code: 'GB' },
                { name: 'United States', code: 'US' }
            ],

            goToStep(targetStep) {
                if (targetStep < this.step) {
                    this.step = targetStep;
                    return;
                }
                if (targetStep > this.step + 1) return;
                if (targetStep === 2 && !this.selectedStart) {
                    alert('Please select a departure date first.');
                    return;
                }
                this.step = targetStep;
            },

            get totalPrice() {
                let total = (this.basePrice * this.participants) + this.insuranceTotal;
                if (this.paymentMethod === 'card') {
                    total += this.serviceFee;
                }
                return total;
            },

            // goToParticipantInfo() {
            //     if (!this.selectedStart) {
            //         alert('Please select a departure date first.');
            //         return;
            //     }
            //     this.step = 2;
            // },

            currencyRates: {
                'USD': { rate: 1, flag: 'us' },
                'EUR': { rate: 0.92, flag: 'eu' },
                'GBP': { rate: 0.78, flag: 'gb' },
                'AED': { rate: 3.67, flag: 'ae' },
                'AUD': { rate: 1.52, flag: 'au' },
                'BRL': { rate: 4.97, flag: 'br' },
                'CAD': { rate: 1.35, flag: 'ca' },
                'CHF': { rate: 0.88, flag: 'ch' },
                'CZK': { rate: 23.35, flag: 'cz' },
                'DKK': { rate: 6.85, flag: 'dk' },
                'HKD': { rate: 7.82, flag: 'hk' },
                'HUF': { rate: 362.50, flag: 'hu' },
                'JPY': { rate: 149.20, flag: 'jp' },
                'MXN': { rate: 16.70, flag: 'mx' },
                'NOK': { rate: 10.60, flag: 'no' },
                'NZD': { rate: 1.64, flag: 'nz' },
                'PLN': { rate: 3.95, flag: 'pl' },
                'SEK': { rate: 10.35, flag: 'se' },
                'SGD': { rate: 1.34, flag: 'sg' },
                'TRY': { rate: 32.10, flag: 'tr' }
            },

            get currentRate() { return this.currencyRates[this.selectedCurrency].rate; },

            formatPrice(val) {
                const converted = val * this.currentRate;
                return new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: this.selectedCurrency,
                }).format(converted);
            },

            get trekDurationDays() {
                const durationStr = this.trek.details.find(d => d.value.includes('Days'))?.value || '1';
                return parseInt(durationStr.match(/\d+/)[0]);
            },

            get currentMonthName() {
                return new Date(this.currentYear, this.currentMonth).toLocaleString('default', { month: 'long', year: 'numeric' });
            },

            prevMonth() {
                if (this.currentMonth === 0) { this.currentMonth = 11; this.currentYear--; }
                else { this.currentMonth--; }
            },

            nextMonth() {
                if (this.currentMonth === 11) { this.currentMonth = 0; this.currentYear++; }
                else { this.currentMonth++; }
            },

            get currentMonthDays() {
                let days = [];
                let firstDay = new Date(this.currentYear, this.currentMonth, 1).getDay();
                let daysInMonth = new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
                let today = new Date();
                today.setHours(0, 0, 0, 0);

                for (let i = 0; i < firstDay; i++) { days.push({ date: null, available: false, inRange: false }); }

                for (let d = 1; d <= daysInMonth; d++) {
                    let dateObj = new Date(this.currentYear, this.currentMonth, d);
                    dateObj.setHours(0, 0, 0, 0);
                    let isAvailable = dateObj > today;
                    let inRange = false, isStart = false, isEnd = false;

                    if (this.selectedStart && this.selectedEnd) {
                        let time = dateObj.getTime();
                        inRange = time >= this.selectedStart.getTime() && time <= this.selectedEnd.getTime();
                        isStart = time === this.selectedStart.getTime();
                        isEnd = time === this.selectedEnd.getTime();
                    }
                    days.push({ date: d, available: isAvailable, inRange: inRange, isStart: isStart, isEnd: isEnd });
                }
                return days;
            },

            selectDate(day) {
                if (!day.available || !day.date) return;
                let start = new Date(this.currentYear, this.currentMonth, day.date);
                start.setHours(0, 0, 0, 0);
                this.selectedStart = start;
                let end = new Date(start);
                end.setDate(start.getDate() + this.trekDurationDays - 1);
                end.setHours(0, 0, 0, 0);
                this.selectedEnd = end;
            },

            get basePrice() { return parseFloat(this.trek.price.replace('$', '').replace(',', '')); },
            get insuranceTotal() { return this.includeInsurance ? (this.insurancePricePerPerson * this.participants) : 0; },
            get deposit() { return (100 * this.participants) + this.insuranceTotal; },

            get selectedRangeText() {
                if (!this.selectedStart) return 'None';
                return this.selectedStart.toLocaleDateString() + ' - ' + this.selectedEnd.toLocaleDateString();
            },

            async submitBooking() {
                if (this.step !== 4) {
                    Swal.fire({
                        title: 'Incomplete Steps',
                        text: 'Please complete all steps before confirming your booking.',
                        icon: 'info',
                        confirmButtonColor: '#0d537c'
                    });
                    return;
                }

                // Build participants array dynamically from form
                let participantsData = [];
                for (let i = 1; i <= this.participants; i++) {
                    let fname = document.querySelector(`input[name="p${i}_fname"]`)?.value || '';
                    let lname = document.querySelector(`input[name="p${i}_lname"]`)?.value || '';
                    let email = document.querySelector(`input[name="p${i}_email"]`)?.value || '';
                    let whatsapp = document.querySelector(`input[name="p${i}_whatsapp"]`)?.value || '';
                    let notes = document.querySelector(`textarea[name="p${i}_notes"]`)?.value || '';

                    if (fname && lname && email) {
                        participantsData.push({
                            fname: fname.trim(),
                            lname: lname.trim(),
                            email: email.trim(),
                            whatsapp: whatsapp.trim(),
                            notes: notes.trim()
                        });
                    }
                }

                if (participantsData.length === 0) {
                    Swal.fire({
                        title: 'Missing Information',
                        text: 'Please fill in the required participant details.',
                        icon: 'warning',
                        confirmButtonColor: '#ff6600'
                    });
                    return;
                }

                // Show Loading Spinner immediately
                Swal.fire({
                    title: 'Processing Your Booking...',
                    text: 'Please wait while we secure your trek.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                const payload = {
                    trek_title: this.trek.title,
                    start_date: this.selectedStart ? this.selectedStart.toISOString().split('T')[0] : null,
                    end_date: this.selectedEnd ? this.selectedEnd.toISOString().split('T')[0] : null,
                    total_participants: this.participants,
                    base_price: this.basePrice,
                    total_price: this.totalPrice,
                    total_amount: this.paymentOption === 'deposit' ? this.deposit : this.totalPrice,
                    payment_method: this.paymentOption,
                    include_insurance: this.includeInsurance,
                    participants_data: participantsData,
                    buyer_fname: this.buyer_fname,
                    buyer_lname: this.buyer_lname,
                    buyer_email: this.buyer_email
                };

                try {
                    const response = await axios.post('{{ route("bookings.store") }}', payload, {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
                        }
                    });

                    if (response.data.success) {
                        // SUCCESS ALERT
                        Swal.fire({
                            title: 'Trek Booked Successfully!',
                            text: 'Your adventure is confirmed.',
                            icon: 'success',
                            confirmButtonColor: '#0d537c',
                            confirmButtonText: 'View My Bookings',
                            background: '#f7f7f7',
                            borderRadius: '15px'
                        }).then((result) => {
                            this.openForm = false;
                            // Optional: Redirect to a dashboard or success page
                            // window.location.href = '/dashboard';
                        });
                    } else {
                        Swal.fire({
                            title: 'Server Error',
                            text: response.data.message || 'We could not save your booking. Please try again.',
                            icon: 'error',
                            confirmButtonColor: '#ff6600'
                        });
                    }
                } catch (error) {
                    console.error('Axios Full Error:', error);
                    let errorMsg = 'Network error: Could not reach the server.';

                    if (error.response && error.response.data.errors) {
                        errorMsg = Object.values(error.response.data.errors).flat().join('\n');
                    } else if (error.response && error.response.data.message) {
                        errorMsg = error.response.data.message;
                    }

                    Swal.fire({
                        title: 'Booking Failed',
                        text: errorMsg,
                        icon: 'error',
                        confirmButtonColor: '#ff6600'
                    });
                }
            },
            showLoginAlert() {
                Swal.fire({
                    title: 'Explore the Peaks',
                    text: "Please login first to book your trekking experience.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0d537c', // Your brand deep blue
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Login Now',
                    cancelButtonText: 'Maybe Later',
                    background: '#f7f7f7', // Your brand light gray
                    borderRadius: '15px'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('login.form') }}";
                    }
                });
            },
            goToParticipantInfo() {
                if (!this.selectedStart) {
                    Swal.fire({
                        title: 'No Date Selected',
                        text: 'Please select a departure date from the calendar to continue your booking.',
                        icon: 'info',
                        confirmButtonColor: '#0d537c', // Your brand deep blue
                        background: '#f7f7f7'
                    });
                    return;
                }
                this.step = 2;
            },
            // Add an init or watcher to keep the array size synced with 'participants'
            // ... inside your treksData function ...
            init() {
                // 1. Initialize the array immediately
                this.syncParticipantArray(this.participants);

                // 2. Watch for changes (if the user goes back to step 1 and changes pax count)
                this.$watch('participants', (val) => this.syncParticipantArray(val));

                // 3. Auto-fill the first participant with buyer info
                this.$watch('buyer_fname', (val) => { if (this.participantDetails[0]) this.participantDetails[0].fname = val; });
                this.$watch('buyer_lname', (val) => { if (this.participantDetails[0]) this.participantDetails[0].lname = val; });
                this.$watch('buyer_email', (val) => { if (this.participantDetails[0]) this.participantDetails[0].email = val; });
            },

            syncParticipantArray(count) {
                const num = parseInt(count);
                // Add missing objects
                while (this.participantDetails.length < num) {
                    this.participantDetails.push({
                        fname: '',
                        lname: '',
                        email: '',
                        whatsapp: '',
                        notes: ''
                    });
                }
                // Remove extra objects if count decreased
                this.participantDetails = this.participantDetails.slice(0, num);

                // Ensure first participant matches buyer on sync
                if (this.participantDetails.length > 0) {
                    this.participantDetails[0].fname = this.buyer_fname;
                    this.participantDetails[0].lname = this.buyer_lname;
                    this.participantDetails[0].email = this.buyer_email;
                }
            },

            // Inside your treksData() function
            isValidEmail(email) {
                return String(email)
                    .toLowerCase()
                    .match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/);
            },

            isNumeric(val) {
                return /^\d+$/.test(val);
            },
            // Inside your treksData() function...
            goToStep(targetStep) {
                // 1. ALWAYS allow going backward (e.g., from 3 to 2)
                if (targetStep < this.step) {
                    this.step = targetStep;
                    return;
                }

                // 2. Forward to Step 2: Must have a date selected
                // Note: Changed from 'selectedDate' to 'selectedStart' to match your calendar
                if (targetStep === 2 && !this.selectedStart) {
                    Swal.fire({
                        title: 'Date Required',
                        text: 'Please select a departure date from the calendar first.',
                        icon: 'warning',
                        confirmButtonColor: '#074b83'
                    });
                    return;
                }

                // 3. Forward to Step 3 or 4: Must have valid participant info
                if (targetStep > 2 && !this.isStep2Valid) {
                    return;
                }

                this.step = targetStep;
            },
            // showError(msg) {
            //     // You can use a simple alert or SweetAlert
            //     Swal.fire({
            //         title: 'Action Required',
            //         text: msg,
            //         icon: 'info',
            //         confirmButtonColor: '#074b83'
            //     });
            // },
            get isStep2Valid() {
                // 1. Validate Buyer
                const buyerOk = this.buyer_fname &&
                    this.buyer_lname &&
                    this.isValidEmail(this.buyer_email) &&
                    (this.buyer_email === this.confirm_email);

                // 2. Validate all Participants
                const participantsOk = this.participantDetails.every(p =>
                    p.fname.trim() !== '' &&
                    p.lname.trim() !== '' &&
                    this.isValidEmail(p.email) &&
                    this.isNumeric(p.whatsapp)
                );

                return buyerOk && participantsOk;
            }
        }
    };



    function trekList() {
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