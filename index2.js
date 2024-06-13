document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (!name || !email || !message) {
        alert('يرجى ملء جميع الحقول.');
        return;
    }

    if (!validateEmail(email)) {
        alert('يرجى إدخال بريد إلكتروني صالح.');
        return;
    }

    alert('تم إرسال رسالتك بنجاح.');
    document.getElementById('contact-form').reset();
});

function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(email);
}
