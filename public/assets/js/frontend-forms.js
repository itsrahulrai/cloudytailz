
// ── ROUTES (Laravel se generate hote hain) ──
const ROUTES = window.SITE_ROUTES ?? {
    petVisit: '/submit/pet-visit',
    package: '/submit/package',
    contact: '/submit/contact',
    thankYou: '/thank-you',
};

function getCsrf() {
    return document.querySelector('meta[name="csrf-token"]')?.content ?? '';
}

function showMsg(elId, type, text) {
    const el = document.getElementById(elId);
    if (!el) return;
    el.className = `col-12 mb-3 alert alert-${type}`;
    el.textContent = text;
    el.classList.remove('d-none');
}

function setLoading(btnId, loading) {
    const btn = document.getElementById(btnId);
    if (!btn) return;
    btn.disabled = loading;
    btn.querySelector('span').textContent = loading ? 'Sending...' : btn.dataset.label;
}

async function postForm(url, data, msgEl, btnId, form) {
    const btn = document.getElementById(btnId);
    if (btn) btn.dataset.label = btn.querySelector('span')?.textContent ?? btn.textContent;
    setLoading(btnId, true);

    try {
        const res = await fetch(url, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrf() },
            body: JSON.stringify(data),
        });
        const json = await res.json();

        if (json.success) {
            showMsg(msgEl, 'success', json.message);
            form.reset();
            setTimeout(() => { window.location.href = ROUTES.thankYou; }, 1500);
        } else {
            const errors = json.errors ? Object.values(json.errors).flat().join(' ') : (json.message ?? 'Something went wrong.');
            showMsg(msgEl, 'danger', errors);
        }
    } catch {
        showMsg(msgEl, 'danger', 'Network error. Please try again.');
    } finally {
        setLoading(btnId, false);
    }
}

// ── Pet Visit Form ──
document.getElementById('petVisitForm')?.addEventListener('submit', async function (e) {
    e.preventDefault();
    const fd = new FormData(this);
    await postForm(ROUTES.petVisit, Object.fromEntries(fd), 'visitMsg', 'visitSubmitBtn', this);
});

// ── Package Booking Form ──
document.getElementById('packageBookingForm')?.addEventListener('submit', async function (e) {
    e.preventDefault();
    const fd = new FormData(this);
    await postForm(ROUTES.package, Object.fromEntries(fd), 'packageMsg', 'packageSubmitBtn', this);
});

// ── Contact Form ──
document.getElementById('contactForm')?.addEventListener('submit', async function (e) {
    e.preventDefault();
    const fd = new FormData(this);
    await postForm(ROUTES.contact, Object.fromEntries(fd), 'contactMsg', 'contactSubmitBtn', this);
});



