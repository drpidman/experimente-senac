const socket = new WebSocket(host);

socket.onerror = function(err) {
    console.log("Falha ao conectar ao socket", err);
}

window.addEventListener('scroll', () => {

    const nav = document.getElementById("navbar");

    if (window.scrollY >= nav.offsetHeight) {
        nav.classList.add("fixednav");
    } else {
        nav.classList.remove("fixednav");
    }
})


function scroll_to_register() {
    const form = document.getElementById('form-control');

    window.scroll({
        top: form.getBoundingClientRect().top + window.scrollY,
        behavior: 'smooth'
    });
}


// todas as inputs de usuarios
let input_username         = document.querySelector("input[name='nome']"),
    input_user_sur_name    = document.querySelector("input[name='sobrenome']"),
    input_user_ig          = document.querySelector("input[name='ig']"),
    input_user_phone       = document.querySelector("input[name='tel']"),
    input_user_email       = document.querySelector("input[name='email']"),
    input_password         = document.querySelector("input[name='password']"),
    input_password_confirm = document.querySelector("input[name='password-confirm']");

function setInputError(target) {
    const span = target.parentNode.lastElementChild.id;
    const span_text = document.getElementById(span);

    // Verificar individualmente inputs vazias
    if (!target.value)  {
        span_text.style.color = "red";
    }
    else {
        // cor normal
        span_text.style.color = "#8093fd";
    }

    // Verificar as inputs de senha e confirmação e verificar se as mesmas se correspondem
    if(target === input_password || target === input_password_confirm){
        const passwordTarget = input_password.parentNode.lastElementChild.id;
        const passwordSpanText = document.getElementById(passwordTarget);
        const passwordConfirmTarget = input_password_confirm.parentNode.lastElementChild.id;
        const passwordConfirmSpanText = document.getElementById(passwordConfirmTarget);

        let password = input_password.value;
        let confirmPassword = input_password_confirm.value;
        // se as senhas não coincidirem ambas inputs ficam com a tag span em vermelho
        if (password !== confirmPassword) {
            passwordSpanText.style.color = "red";
            passwordConfirmSpanText.style.color = "red";
        } else {
            passwordSpanText.style.color = "#8093fd";
            passwordConfirmSpanText.style.color = "#8093fd";
        }
    }
}

// Evento que retorna os valores enquanto a input é atualizada com novos valores,
// diferente de onChange que apenas retorna os valores quando a input é concluida ou quando sai
// do foco
input_username.oninput = input_user_sur_name.oninput =
    input_user_ig.oninput =
    input_user_phone.oninput = input_user_email.oninput = input_password.oninput = input_password_confirm.oninput = function() {
    setInputError(this);
};


function input_empty() {
    return !input_username.value || !input_user_sur_name.value ||
        !input_user_ig.value || !input_user_phone.value ||
        !input_user_email.value || !input_password.value ||
        !input_password_confirm.value
}

// Botão que confirma os dados do usuario e envia para o backend php
function submit_register(data) {
    if (input_empty()) return;

    if (input_password.value !== input_password_confirm.value) {
        return;
    }

    let form_data = new FormData();
    form_data.append('username', input_username.value);
    form_data.append('sobrenome', input_user_sur_name.value);
    form_data.append('instagram', input_user_ig.value);
    form_data.append('telefone', input_user_phone.value);
    form_data.append('email', input_user_email.value);
    form_data.append('password', input_password.value);

    fetch('api/loginsubmit.php', {
        method: 'POST',
        body: form_data
    })
        .then(res => res.json())
        .then(data => {
            showAlert();
        });

    socket.send(JSON.stringify({
        type: 'new-user',
        user: {
            username:   input_username.value + " " + input_user_sur_name.value,
            instagram:  input_user_ig.value,
            telefone:   input_user_phone.value,
            email:      input_user_email.value,
            password:   input_password.value
        }
    }));

    socket.onmessage = function (e) {
        console.log(e);
    }
}
