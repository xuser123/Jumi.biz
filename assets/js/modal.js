// Modal öffnen
function openModal(imageSrc) {
    var modal = document.createElement("div");
    modal.className = "modal";

    var modalContent = document.createElement("img");
    modalContent.className = "modal-content";
    modalContent.src = imageSrc;
    modalContent.style.animation = "zoom-in 0.5s";


    var closeModalBtn = document.createElement("span");
    closeModalBtn.className = "close";
    closeModalBtn.innerHTML = "&times;";
    closeModalBtn.addEventListener("click", closeModal);

    modalContent.appendChild(closeModalBtn);
    modal.appendChild(modalContent);

    document.body.appendChild(modal);
}

// Modal schließen
function closeModal() {
    var modal = document.querySelector(".modal");
    if (modal) {
        document.body.removeChild(modal);
    }
}

// Event Listener für Bildklick
document.getElementById("modal-01").addEventListener("click", function () {
    openModal(this.src);
});

document.getElementById("modal-02").addEventListener("click", function () {
    openModal(this.src);
});
