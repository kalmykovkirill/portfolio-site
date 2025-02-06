document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if(name && email && message) {
        alert("Ваше сообщение отправлено!");
        this.reset();
    } else {
        alert("Заполните все поля.");
    }
});

document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if(name && email && message) {
        alert("Ваше сообщение отправлено!");
        this.reset();
    } else {
        alert("Заполните все поля.");
    }
});
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if(name && email && message) {
        fetch('contact.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: name=${name}&email=${email}&message=${message}
        })
        .then(response => response.text())
        .then(data => {
            alert("Ваше сообщение отправлено!");
            this.reset();
        })
        .catch(error => {
            alert("Произошла ошибка при отправке сообщения.");
        });
    } else {
        alert("Заполните все поля.");
    }
});