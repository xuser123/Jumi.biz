
const modalTrigger01 = document.getElementById("modalTrigger01");
const modalTrigger02 = document.getElementById("modalTrigger02");
const modalTrigger03 = document.getElementById("modalTrigger03");

const dialog = document.querySelector("dialog")

modal-trigger.addEventListener("click", e => {
    dialog.show("") // Opens a non-modal dialog
    dialog.showModal() // Opens a modal
}
