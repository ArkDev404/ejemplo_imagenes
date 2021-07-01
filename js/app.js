$(() => {
    document.getElementById("formulario").addEventListener("submit", (e) => {
        e.preventDefault();

        let loginForm = document.getElementById("formulario");
        let data = new FormData(loginForm);

        fetch("includes/add.php", {
            method: "POST",
            body: data,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.respuesta == "correcto") {
                    Swal.fire({
                        icon: "success",
                        title: "Correcto!",
                        text: "Se inserto la imagen correctamente",
                    });
                    setTimeout(() => {
                        window.location.href = "index.php";
                    }, 2000);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error!",
                        text: "Error",
                    });
                    setTimeout(() => {
                        window.location.href = "index.php";
                    }, 2000);
                }
            });
    });
});
