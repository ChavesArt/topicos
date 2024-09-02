function salvarUsuario(event) {
    // para o formulário de enviar para outra página
    event.preventDefault();

    let inputIdUsuario = document.getElementsByName('id_usuario')[0];
    let idUsuario = inputIdUsuario.value;

    let inputNome = document.getElementsByName('nome')[0];
    let nome = inputNome.value;

    let inputEmail = document.getElementsByName('email')[0];
    let email = inputEmail.value;

    let inputSenha = document.getElementsByName('senha')[0];
    let senha = inputSenha.value;

    fetch('inserir.php',
        {
            method: 'POST',
            body:JSON.stringify({

                id_usuario: idUsuario,
                nome: nome,
                email: email,
                senha: senha

            }),
            headers:{'Content-Type':"application/json; charset=UTF-8" }
        }
    );
}