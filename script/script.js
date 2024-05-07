/*-----Verificadores-----*/ 
//limite nome
document.addEventListener('DOMContentLoaded', function() {
    let nomeInput = document.getElementById('userNome');
    if (nomeInput) {
        nomeInput.maxLength = 55;//define o maximo de caracteres
        nomeInput.minLength = 3; // Define o mínimo de caracteres
    } else {
        console.error("Elemento com ID 'userNome' não encontrado.");
    }
});

//limite sobrenome
document.addEventListener('DOMContentLoaded', function() {
    let sobNomeInput = document.getElementById('sobNome');
    if (sobNomeInput) {
        sobNomeInput.maxLength = 55;//define o maximo de caracteres
        sobNomeInput.minLength = 3; // Define o mínimo de caracteres
    } else {
        console.error("Elemento com ID 'sobNome' não encontrado.");
    }
});

//padronizador cpf
document.addEventListener('DOMContentLoaded', function() {
    let cpfInput = document.getElementById('cpf');
    if (cpfInput) {
        cpfInput.addEventListener('input', function(e) {
            var value = e.target.value;
            var cpfPattern = value.replace(/\D/g, '') 
                                  .replace(/(\d{3})(\d)/, '$1.$2') 
                                  .replace(/(\d{3})(\d)/, '$1.$2') 
                                  .replace(/(\d{3})(\d)/, '$1-$2') 
                                  .replace(/(-\d{2})\d+?$/, '$1');
            e.target.value = cpfPattern;
        });
    } else {
        console.error("Elemento com ID 'cpf' não encontrado.");
    }
});

//limite cidade
document.addEventListener('DOMContentLoaded', function() {
    let cidadeInput = document.getElementById('cidade');
    if (cidadeInput) {
        cidadeInput.maxLength = 55;//define o maximo de caracteres
        cidadeInput.minLength = 3; // Define o mínimo de caracteres
    } else {
        console.error("Elemento com ID 'cidade' não encontrado.");
    }
});

//limite endereco 
document.addEventListener('DOMContentLoaded', function() {
    let enderecoInput = document.getElementById('endereco');
    if (enderecoInput) {
        enderecoInput.maxLength = 75;//define o maximo de caracteres
        enderecoInput.minLength = 4; // Define o mínimo de caracteres
    } else {
        console.error("Elemento com ID 'endereco' não encontrado.");
    }
});

//limite email
document.addEventListener('DOMContentLoaded', function() {
    let emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.maxLength = 64;//define o maximo de caracteres
        emailInput.minLength = 3; // Define o mínimo de caracteres
    } else {
        console.error("Elemento com ID 'email' não encontrado.");
    }
});

 //limite DDD
 document.addEventListener('DOMContentLoaded', function() {
    let dddInput = document.getElementById('ddd');
    if (dddInput) {
        dddInput.maxLength = 2;//define o maximo de caracteres
        dddInput.minLength = 2; // Define o mínimo de caracteres
    } else {
        console.error("Elemento com ID 'DDD' não encontrado.");
    }
});

//limite telefone
document.addEventListener('DOMContentLoaded', function() {
    let cellInput = document.getElementById('cellnum');
    if (cellInput) {
        cellInput.addEventListener('input', function(e) {
            var value = e.target.value;
            var cellPattern = value.replace(/\D/g, '') 
                                  .replace(/(\d{5})(\d)/, '$1-$2') 
                                  .replace(/(-\d{4})\d+?$/, '$1');
            e.target.value = cellPattern;
        });
    } else {
        console.error("Elemento com ID 'sobNome' não encontrado.");
    }
});
//verificador senha
document.addEventListener('DOMContentLoaded',function(){
    //impede que seja possivel colar
    document.getElementById('password').addEventListener('paste', function(event) {
        event.preventDefault();
    });
    document.getElementById('cadUser').addEventListener('submit', function(event) {
        const senha = document.getElementById('password').value;
        let senhaError = document.getElementById('senhaError');
         isValid = true;

        // Validação do comprimento mínimo da senha
        if (senha.length < 8) {
            senhaError.textContent = 'A senha deve ter pelo menos 8 caracteres.';
            isValid = false;
        }
        // Validação de pelo menos 1 caractere especial
        else if (!/[!@#$%^&*(),.?":{}|<>]/.test(senha)) {
            senhaError.textContent = 'A senha deve conter pelo menos 1 caractere especial.';
            isValid = false;
        }
        // Validação de pelo menos 1 número
        else if (!/\d/.test(senha)) {
            senhaError.textContent = 'A senha deve conter pelo menos 1 número.';
            isValid = false;
        }
        // Validação de pelo menos 1 letra maiúscula
        else if (!/[A-Z]/.test(senha)) {
            senhaError.textContent = 'A senha deve conter pelo menos 1 letra maiúscula.';
            isValid = false;
        }
        // Validação de pelo menos 1 letra minúscula
        else if (!/[a-z]/.test(senha)) {
            senhaError.textContent = 'A senha deve conter pelo menos 1 letra minúscula.';
            isValid = false;
        }
        else {
            senhaError.textContent = '';
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
})
document.addEventListener('DOMContentLoaded',function(){
    //impede que seja possivel colar texto
    document.getElementById('conPassword').addEventListener('paste', function(event) {
        event.preventDefault();
    });
    document.getElementById('cadUser').addEventListener('submit', function(event) {
        const senha = document.getElementById('password').value;
        console.log(senha)
        const conSenha = document.getElementById('conPassword').value;
        console.log(conSenha)
        let senhaError2 = document.getElementById('senhaError2');
        var isValid = true;

        // Validação de igualdade
        if (conSenha.value !== senha.value) {
            senhaError2.textContent = 'Os campos não combinam';
            isValid = false;
        }
        else {
            senhaError2.textContent = '';
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
})   