/* =========================================================
   Cloudytailz — Dashboard JS
   Path: public/assets/admin/js/dashboard.js
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    // ── COUNTER ANIMATION ──
    const counters = document.querySelectorAll('.counter[data-target]');
    counters.forEach(counter => {
        const target = parseInt(counter.dataset.target, 10);
        if (isNaN(target) || target === 0) {
            counter.textContent = '0';
            return;
        }
        let current = 0;
        const step = Math.max(1, Math.ceil(target / 40));
        const timer = setInterval(() => {
            current = Math.min(current + step, target);
            counter.textContent = current;
            if (current >= target) clearInterval(timer);
        }, 30);
    });

});
