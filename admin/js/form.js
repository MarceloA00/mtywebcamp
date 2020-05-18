listeners();

function listeners() {
    document.querySelector('#formulario').addEventListener('submit', regis);
}

function regis(e) {
    e.preventDefault();

    var usuario = document.querySelector('#usuario').value,
        password = document.querySelector('#password').value,
        accion = document.querySelector('#accion').value;

    if (usuario === '' || password === '') {
        Swal.fire(
            'Ambos Campos son Obligatorios!',
            '',
            'error'
        )
    } else {
        var datos = new FormData;

        datos.append('usuario', usuario);
        datos.append('password', password);
        datos.append('accion', accion);

        const xhr = new XMLHttpRequest;

        xhr.open('POST', 'funciones/modelo-log.php', true);

        xhr.onload = function () {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);

                if (respuesta.respuesta === 'correcto') {
                    if (respuesta.accion === 'login') {
                        Swal.fire(
                            'Login Correcto!',
                            '',
                            'success'
                        )
                            .then(result => {
                                if (result.value) {
                                    window.location.href = 'admin-area.php';
                                }
                            })
                    } else if (respuesta.accion === 'crear') {
                        Swal.fire(
                            'El Usuario fue Creado!',
                            '',
                            'success'
                        )
                    }
                } else {
                    Swal.fire(
                        'Hubo un Error',
                        '',
                        'error'
                    )
                }

            }
        }

        xhr.send(datos);
    }
}
