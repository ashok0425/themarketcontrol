const navBtns = document.querySelectorAll('.dropdown-toggle')
navBtns.forEach(navBtn => {
    navBtn.addEventListener('click', (e) => {
        navBtn.closest('li').classList.toggle('show')
        e.preventDefault()
        e.stopPropagation()
    })
})

// Detail Zoom 

if (screen.width > 575) {

    $('.canvas_zoom').zoom({
        magnify: 1.5,
    })
}
else {
    $('.canvas_zoom').zoom({
        magnify: .5,
    })
}
if (document.querySelector('.events')) {
    new Splide('.events', {
        type: 'loop',
        perPage: 3,
        breakpoints: {
            981: {
                perPage: 2,
            },
            767: {
                perPage: 1,
            },
        }
    }).mount();

}
if (document.querySelector('.schemes')) {
    new Splide('.schemes', {
        type: 'loop',
        perPage: 2,
        padding: '10px',
        breakpoints: {
            767: {
                perPage: 1,
            },
        }
    }).mount();
}
