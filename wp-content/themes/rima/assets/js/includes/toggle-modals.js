const toggleModals = () => {
    document
        .querySelectorAll('.modal-toggle')
        .forEach(item => {
            item.addEventListener('click', () => {
                let modal = "visible-" + item.dataset.modal;
                document.querySelector('body').classList.toggle(modal);
            })
        });
};

export default toggleModals;