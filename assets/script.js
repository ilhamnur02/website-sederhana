document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll(".menu-item");

    items.forEach(item => {
        item.addEventListener("click", () => {

            // Hapus active sebelumnya
            items.forEach(i => i.classList.remove("active"));

            // Tambah active ke menu yang diklik
            item.classList.add("active");
        });

        // Support touchscreen
        item.addEventListener("touchstart", () => {
            items.forEach(i => i.classList.remove("active"));
            item.classList.add("active");
        });
    });

});
