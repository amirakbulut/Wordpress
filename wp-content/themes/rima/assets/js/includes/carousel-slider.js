import Glide from '@glidejs/glide'


if (typeof Glide != "undefined") {
    new Glide('.glide', {
        // type: 'slider',
        perView: 3,
        gap: 20,
        rewind: false,
        bound: true,
        animationDuration: 800,
        swipeThreshold: 1,
        breakpoints: {
            767: {
                perView: 1,
                // peek: { before: 0, after: 75 },
            },
            992: {
                perView: 2,
            },
            1200: {
                perView: 2,
                // peek: { before: 0, after: 75 },
            }
        }
    }).mount()
}
