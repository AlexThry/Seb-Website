
const navbar = document.querySelector('.nav-bar-header');
let video = document.querySelector('.video-header');
if (!video) {
    video = document.querySelector('.image-header');
}
const color = navbar.getAttribute('data-color');

console.log(video)

if (color == 'white') {
    main_color = 'bg-black';
} else {
    main_color = 'bg-white';
}

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navbar.classList.remove(main_color);
            navbar.classList.remove('opacity-100')
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('shadow-lg')
            console.log('in view');

        } else {
            navbar.classList.add(main_color);
            navbar.classList.add('opacity-100')
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('shadow-lg')
            console.log('out of view');
        }

    });
});

observer.observe(video);