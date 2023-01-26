
async function registerHandler() {
    let data = {
        name: document.querySelector("#username").value,
        email: document.querySelector("#email").value,
        password: document.querySelector("#password").value,
    };

    let confirmPassword = document.querySelector("#confirm-password").value;

    if (data.password !== confirmPassword) {
        Swal.fire({
            icon: "error",
            text: "Password not match",
            confirmButtonColor: "#fb923c",
        });
    } else {
        const response = await axios({
            url: "api/user/register",
            method: "POST",
            data: data,
        })
            .then((res) => {
                console.log(res.message);

                Swal.fire({
                    icon: "success",
                    text: "Created Successfully",
                    showConfirmButton: false,
                    timer: "2000",
                }).then(() => {
                    location.href = "/login";
                });
            })
            .catch((err) => {
                console.log(err.response.data.errorMessage);

                Swal.fire({
                    icon: "error",
                    text: "Validated Error",
                    confirmButtonColor: "#fb923c",
                });
            });
    }
}

async function onLogin() {
    let data = {
        email: document.querySelector("#email").value,
        password: document.querySelector("#password").value,
    }

    const response = await axios({
        url: "api/user/login",
        method: "POST",
        data: data,

    }).then((res) => {

        Swal.fire({
            icon: "success",
            text: "login successfully",
            showConfirmButton: false,
            timer: '2000'
        }).then(() => {
            window.location.href = "/home"
        })

    }).catch(() => {
        Swal.fire({
            icon: "error",
            text: "email or password is incorrect !!",
            showConfirmButton: false,
            timer: '2000'
        }).then(() => {
            window.location.href = "/login"
        })

    })

}


function test() {
    /// test ....
}
