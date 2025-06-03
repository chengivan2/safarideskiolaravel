document.addEventListener('DOMContentLoaded', function() {
    const pricingToggle = document.getElementById('pricing-toggle');
    const monthlyPrices = document.querySelectorAll('.monthly-price');
    const annualPrices = document.querySelectorAll('.annual-price');
    
    if (pricingToggle) {
        // Check for saved preference
        const savedPreference = localStorage.getItem('pricingPreference');
        if (savedPreference === 'annual') {
            pricingToggle.checked = true;
            monthlyPrices.forEach(el => el.classList.add('hidden'));
            annualPrices.forEach(el => el.classList.remove('hidden'));
        }
        
        pricingToggle.addEventListener('change', function() {
            if (this.checked) {
                // Show annual pricing
                monthlyPrices.forEach(el => el.classList.add('hidden'));
                annualPrices.forEach(el => el.classList.remove('hidden'));
                localStorage.setItem('pricingPreference', 'annual');
            } else {
                // Show monthly pricing
                monthlyPrices.forEach(el => el.classList.remove('hidden'));
                annualPrices.forEach(el => el.classList.add('hidden'));
                localStorage.setItem('pricingPreference', 'monthly');
            }
        });
    }
});
