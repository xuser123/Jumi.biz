
const trigger01 = document.getElementById('modalTrigger01');
const trigger02 = document.getElementById('modalTrigger02');
const trigger03 = document.getElementById('modalTrigger03');
const modal01 = document.getElementById('openModal01');
const modal02 = document.getElementById('openModal02');
const modal03 = document.getElementById('openModal03');
const closeButton01 = document.getElementById('closeModal01');
const closeButton02 = document.getElementById('closeModal02');
const closeButton03 = document.getElementById('closeModal03');

trigger01.addEventListener('click', function() {
  modal01.showModal();
});
trigger02.addEventListener('click', function() {
  modal02.showModal();
});
trigger03.addEventListener('click', function() {
  modal03.showModal();
});

closeModal01.addEventListener('click', function() {
  modal01.close();
});
closeModal02.addEventListener('click', function() {
  modal02.close();
});
closeModal03.addEventListener('click', function() {
  modal03.close();
});

modal01.addEventListener("click", e => { // Close On Outside Click
    const dialogDimensions01 = modal01.getBoundingClientRect()
    if (
        e.clientX < dialogDimensions01.left ||
        e.clientX > dialogDimensions01.right ||
        e.clientY < dialogDimensions01.top ||
        e.clientY > dialogDimensions01.bottom
    ) {
        modal01.close()
    }
})

modal02.addEventListener("click", e => { // Close On Outside Click
    const dialogDimensions02 = modal02.getBoundingClientRect()
    if (
        e.clientX < dialogDimensions02.left ||
        e.clientX > dialogDimensions02.right ||
        e.clientY < dialogDimensions02.top ||
        e.clientY > dialogDimensions02.bottom
    ) {
        modal02.close()
    }
})

modal03.addEventListener("click", e => { // Close On Outside Click
    const dialogDimensions03 = modal03.getBoundingClientRect()
    if (
        e.clientX < dialogDimensions03.left ||
        e.clientX > dialogDimensions03.right ||
        e.clientY < dialogDimensions03.top ||
        e.clientY > dialogDimensions03.bottom
    ) {
        modal03.close()
    }
})
