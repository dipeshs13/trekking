<div class="group bg-white rounded-lg overflow-hidden shadow-lg border border-gray-100 transition-all hover:shadow-2xl"
    x-data="{
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
                    // Buyer data for auto-filling Participant 1
                    buyer_fname: '',
                    buyer_lname: '',
                    buyer_email: '',
                    
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
                    get totalPrice() { 
            let total = (this.basePrice * this.participants) + this.insuranceTotal;
            if (this.paymentMethod === 'card') {
                total += this.serviceFee;
            }
            return total;
        },
                    goToParticipantInfo() {
                        if (!this.selectedStart) {
                            alert('Please select a departure date first.');
                            return;
                        }
                        this.step = 2;
                    },

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
                        const durationStr = trek.details.find(d => d.value.includes('Days'))?.value || '1';
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
                            dateObj.setHours(0,0,0,0);
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
                        start.setHours(0,0,0,0);
                        this.selectedStart = start;
                        let end = new Date(start);
                        end.setDate(start.getDate() + this.trekDurationDays - 1);
                        end.setHours(0,0,0,0);
                        this.selectedEnd = end;
                    },

                    get basePrice() { return parseFloat(trek.price.replace('$','').replace(',','')); },
                    get insuranceTotal() { return this.includeInsurance ? (this.insurancePricePerPerson * this.participants) : 0; },
                    {{-- get totalPrice() { return (this.basePrice * this.participants) + this.insuranceTotal; }, --}}
                    get deposit() { return (100 * this.participants) + this.insuranceTotal; },

                    get selectedRangeText() {
                        if (!this.selectedStart) return 'None';
                        return this.selectedStart.toLocaleDateString() + ' - ' + this.selectedEnd.toLocaleDateString();
                    }
                }">