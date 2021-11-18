window.onload = () => {
    
    var btn = document.querySelector("button.mobile-menu-button");
    var menu = document.querySelector(".mobile-menu");
    var modal = document.getElementById("my-modal");
    var modalopen = document.querySelectorAll(".modal-open");
    var modalbody = document.getElementById("modal-body");

    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });


    //AddEvent Click with all modal-open class
    for (i = 0; i < modalopen.length; i++) {
        modalopen[i].addEventListener('click', () => {
            modal.style.display = "block";
            create()
        });
    }

    function create() {
        axios.get("/create").then(function (res) {
            
            modalbody.innerHTML = res.data

            const modalclose = modalbody.querySelectorAll(".modal-close");
            
            //AddEvent Click with all modal-close class
            for (y = 0; y < modalclose.length; y++) {
                modalclose[y].addEventListener('click', () => {
                    modal.style.display = "none";
                    create()
                });
            }

        })
    }
}
