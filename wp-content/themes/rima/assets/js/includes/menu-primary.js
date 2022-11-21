const initialiseMenu = () =>{
    const menuButton = document.querySelector('#menu-toggle');
    const nav = document.querySelector('#menu-mobile #nav-primary');
    const items = nav.querySelectorAll('li');
    let is_open = false;

    function unsetActiveClass() {
        nav.classList.remove('children-visible');
        items.forEach(item => {
            if (item.classList.contains('active')) item.classList.remove('active');
        })
    }

    // trigger animation
    menuButton.addEventListener('click', () => {
        menuButton.classList.toggle('active');
        items.forEach((el, index) => {
            setTimeout(() => el.classList.toggle('move'), index * (is_open ? 0 : 100));
        })
        is_open = !is_open;
    });
    
    // set/unset active state when clicking menu item's
    items.forEach(el => {
        el.addEventListener('click', () => {
            let is_active = el.classList.contains('active');

            unsetActiveClass();

            if (!is_active) {
                el.classList.add('active');
                nav.classList.add('children-visible');
            }
        })
    })

};

export default initialiseMenu;