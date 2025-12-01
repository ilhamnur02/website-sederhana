function validateLogin() {
    let userInput = document.querySelector("#username");
    let passInput = document.querySelector("#password");

    let user = userInput.value.trim();
    let pass = passInput.value.trim();

    let userError = document.querySelector("#user-error");
    let passError = document.querySelector("#pass-error");

    // Reset error
    userError.innerHTML = "";
    passError.innerHTML = "";
    userInput.style.border = "2px solid #ccc";
    passInput.style.border = "2px solid #ccc";

    // Validasi username kosong
    if (user === "") {
        userError.innerHTML = "Username tidak boleh kosong!";
        userInput.style.border = "2px solid red";
        return false;
    }

    // Validasi password minimal 6 karakter
    if (pass.length < 6) {
        passError.innerHTML = "Password minimal 6 karakter!";
        passInput.style.border = "2px solid red";
        return false;
    }

    return true;
}

// === VALIDASI CRUD (Tambah/Edit)
function validateKaryawan(formId) {
    let form = document.getElementById(formId);
    let nama = form.querySelector("input[name='nama']");
    let jabatan = form.querySelector("input[name='jabatan']");
    let alamat = form.querySelector("textarea[name='alamat']");

    let valid = true;

    // Reset border
    nama.style.border = "2px solid #ccc";
    jabatan.style.border = "2px solid #ccc";
    alamat.style.border = "2px solid #ccc";

    if (nama.value.trim() === "") {
        nama.style.border = "2px solid red";
        valid = false;
        alert("Nama tidak boleh kosong!");
    }

    if (jabatan.value.trim() === "") {
        jabatan.style.border = "2px solid red";
        valid = false;
        alert("Jabatan tidak boleh kosong!");
    }

    if (alamat.value.trim() === "") {
        alamat.style.border = "2px solid red";
        valid = false;
        alert("Alamat tidak boleh kosong!");
    }

    return valid;
}