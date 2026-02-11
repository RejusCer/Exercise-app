function Modal_func(){
    var modalBtn = document.getElementById("modal-btn-1")
    var Modal = document.getElementById("modal-container-1")
    var exitCover = document.getElementById("modal-exit-1")

    console.log(modalBtn)
    console.log(Modal)

    if (modalBtn){
        modalBtn.addEventListener("click", function(){
            Modal.classList.remove("hide")
        })
    }

    if (exitCover){
        exitCover.addEventListener("click", function(){
            Modal.classList.add("hide")
        })
    }
}

Modal_func()
