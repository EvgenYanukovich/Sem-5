document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggle-button');
    const formContent = document.getElementById('contact-form-content');
    const form = formContent.querySelector('form');
    const messageDiv = document.createElement('div');
    formContent.appendChild(messageDiv);
    messageDiv.className = 'form-message';

    let a = 1;
    toggleButton.addEventListener('click', function () {
        formContent.classList.toggle('hidden');
        a++;
    });

    const num1 = Math.floor(Math.random() * 10);
    const num2 = Math.floor(Math.random() * 10);
    document.getElementById('captcha-question').textContent = `${num1} + ${num2}`;
    document.querySelector('[name="expected_captcha"]').value = num1 + num2;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            messageDiv.innerHTML = data;
            if (data.includes("Сообщение отправлено")) {
                form.reset();
            }
        })
        .catch(error => {
            messageDiv.innerText = 'Произошла ошибка при отправке формы';
            console.error('Error:', error);
        });
    });
});
