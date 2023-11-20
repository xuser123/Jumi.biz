const getElement = id => document.getElementById(id);
const showModal = modal => modal.showModal();
const closeModal = modal => {
    modal.removeAttribute('id');
    modal.classList.add('hide');
    modal.addEventListener('webkitAnimationEnd', function(){
        modal.classList.remove('hide');
        modal.close();
        modal.removeEventListener('webkitAnimationEnd', arguments.callee, false);
    }, false);
};

const trigger01 = getElement('modalTrigger01');
const trigger02 = getElement('modalTrigger02');
const trigger03 = getElement('modalTrigger03');
const modal01 = getElement('openModal01');
const modal02 = getElement('openModal02');
const modal03 = getElement('openModal03');
const closeButton01 = getElement('closeModal01');
const closeButton02 = getElement('closeModal02');
const closeButton03 = getElement('closeModal03');

trigger01.addEventListener('click', () => showModal(modal01));
trigger02.addEventListener('click', () => showModal(modal02));
trigger03.addEventListener('click', () => showModal(modal03));

closeButton01.addEventListener('click', () => closeModal(modal01));
closeButton02.addEventListener('click', () => closeModal(modal02));
closeButton03.addEventListener('click', () => closeModal(modal03));

const addOutsideClickListener = (modal, index) => {
  modal.addEventListener('click', e => {
    const dialogDimensions = modal.getBoundingClientRect();
    if (
      e.clientX < dialogDimensions.left ||
      e.clientX > dialogDimensions.right ||
      e.clientY < dialogDimensions.top ||
      e.clientY > dialogDimensions.bottom
    ) {
      modal.close();
    }
  });
};
// addOutsideClickListener reduces redundancy in listeners for modal clicks
addOutsideClickListener(modal01, 1);
addOutsideClickListener(modal02, 2);
addOutsideClickListener(modal03, 3);

// making images focus-able with tab and open modal by enter
const makeImageFocusable = img => img.setAttribute('tabindex', '0');

const openModalOnEnter = (img, modal) => {
  img.addEventListener('keydown', e => {
    if (e.key === 'Enter') modal.showModal();
  });
};

const img1 = document.getElementById('modalTrigger01');
const img2 = document.getElementById('modalTrigger02');
const img3 = document.getElementById('modalTrigger03');

const modal1 = getElement('openModal01');
const modal2 = getElement('openModal02');
const modal3 = getElement('openModal03');

makeImageFocusable(img1);
makeImageFocusable(img2);
makeImageFocusable(img3);

openModalOnEnter(img1, modal01);
openModalOnEnter(img2, modal02);
openModalOnEnter(img3, modal03);
