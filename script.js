document.addEventListener('DOMContentLoaded', () => {
    let i = 1; 
    const image = document.getElementById('image');
    const fullscreenOverlay = document.getElementById('fullscreenOverlay');
    const fullscreenImage = document.getElementById('fullscreenImage');
    function updateImage() {
        // image.classList.remove('show-img');
        // setTimeout(() => {
            image.src = "https://sitename/wp-content/uploads/2024/09/"+ i + ".png";
            // image.onload = () => {
                // image.classList.add('show-img');
            // };
            i++;
            if (i > 29) i = 1;
        // }, 10);
    }
    updateImage();
    setInterval(() => {
        updateImage();
    }, 3000);
    image.addEventListener('click', () => {
        fullscreenImage.src = image.src;
        fullscreenOverlay.classList.add('show');
    });
    fullscreenOverlay.addEventListener('click', () => {
        fullscreenOverlay.classList.remove('show');
        fullscreenImage.src = '';
    });
    window.Strzalka = function (kierunek) {
        // setTimeout(() => {
            if (kierunek === 1) {
                i++;
            } else {
                i--;
            }
            if (i > 29) i = 1;
            if (i <= 0) i = 29;
            image.src = "https://sitename/wp-content/uploads/2024/09/"+ i + ".png";
        // }, 500);
    };
});
document.addEventListener('DOMContentLoaded', () => {
    const gallery = document.getElementById('gallery');
    let galleryItems = document.querySelectorAll('.gallery-item');
    const firstItemWidth = galleryItems[0].clientWidth + 10; 
    let autoScroll;

    const startAutoScroll = () => {
        autoScroll = setInterval(() => {
            gallery.style.transform = `translateX(-${firstItemWidth}px)`;
            gallery.style.transition = 'transform 0.8s ease-in-out';

            setTimeout(() => {
                gallery.appendChild(gallery.querySelector('.gallery-item')); 
                gallery.style.transition = 'none';  
                gallery.style.transform = 'translateX(0)'; 
                galleryItems = document.querySelectorAll('.gallery-item');  
            }, 800); 
        }, 2000); 
    };
    startAutoScroll();
    gallery.addEventListener('mouseover', () => clearInterval(autoScroll));
    gallery.addEventListener('mouseout', startAutoScroll);
    const fullscreenOverlay = document.getElementById('fullscreenOverlay');
    const fullscreenImage = document.getElementById('fullscreenImage');
    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            fullscreenImage.src = item.src;
            fullscreenOverlay.classList.add('show');
        });
    });
    fullscreenOverlay.addEventListener('click', () => {
        fullscreenOverlay.classList.remove('show');
        fullscreenImage.src = '';
    });
});

