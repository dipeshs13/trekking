// public/js/trek-booking.js
document.addEventListener('alpine:init', () => {
    Alpine.data('treksData', () => ({
        step: 1,
        openForm: false,
        showInsuranceForm: false, // For the detailed insurance view
        includeInsurance: false,
        participants: 1,
        paymentOption: 'deposit',
        selectedCurrency: 'USD',
        showCurrency: false,
        insurancePricePerPerson: 50,
        
        // Buyer Information
        buyer_fname: '',
        buyer_lname: '',
        buyer_email: '',

        // Calendar Logic
        currentMonth: new Date().getMonth(),
        currentYear: new Date().getFullYear(),
        selectedStart: null,
        selectedEnd: null,

        // Currency Data
        currencyRates: { 
            'USD': { rate: 1, flag: 'us' }, 
            'EUR': { rate: 0.92, flag: 'eu' }, 
            'GBP': { rate: 0.78, flag: 'gb' },
            'AED': { rate: 3.67, flag: 'ae' },
            'AUD': { rate: 1.52, flag: 'au' },
            'CAD': { rate: 1.35, flag: 'ca' },
            'JPY': { rate: 149.20, flag: 'jp' },
            // ... add others as needed
        },

        init() {
            // Initialization if needed
        },

        get currentRate() { return this.currencyRates[this.selectedCurrency].rate; },

        formatPrice(val) {
            const converted = val * this.currentRate;
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: this.selectedCurrency,
            }).format(converted);
        },

        // Helper to move to Participant step
        goToParticipantInfo() {
            if (!this.selectedStart) {
                alert('Please select a departure date first.');
                return;
            }
            this.step = 2;
        },

        // Pricing Getters
        get basePrice() { return 480; }, // This should be dynamic based on selected trek
        get insuranceTotal() { return this.includeInsurance ? (this.insurancePricePerPerson * this.participants) : 0; },
        get totalPrice() { return (this.basePrice * this.participants) + this.insuranceTotal; },
        get deposit() { return (100 * this.participants) + this.insuranceTotal; },

        // Calendar Methods (prevMonth, nextMonth, selectDate, etc.)
        // ... (Keep your existing calendar logic here)
    }));
});