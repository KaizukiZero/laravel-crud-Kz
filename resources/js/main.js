window.onload = function () {

    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");
    

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    

    const modal = document.getElementById("my-modal");
    const c_sm_show = document.getElementById("C-sm-show");
    const c_xl_show = document.getElementById("C-xl-show");

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    c_sm_show.onclick = function () {
        modal.style.display = "block";
    }
    c_xl_show.onclick = function () {
        modal.style.display = "block";
    }

}
