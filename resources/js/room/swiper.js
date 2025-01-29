// เลือก img main
const imgMain = document.getElementById('img-main');
// เลือก img more ทั้งหมด
const imgMores = document.querySelectorAll('.img-more');
// สร้าง Array จาก img more
const imgSources = Array.from(imgMores).map(img => img.src);
// ตัวแปรสำหรับเก็บ index ของรูปปัจจุบัน
let currentIndex = 0;

// เลือกปุ่ม Navigation
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

// ฟังก์ชันแสดงรูปตาม index
const showImage = index => {
    imgMain.src = imgSources[index];
};

// Event สำหรับปุ่ม Previous
prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + imgSources.length) % imgSources.length;
    showImage(currentIndex);
});

// Event สำหรับปุ่ม Next
nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % imgSources.length;
    showImage(currentIndex);
});

// Event สำหรับการคลิกที่ img more
imgMores.forEach((imgMore, index) => {
    imgMore.addEventListener('click', () => {
        currentIndex = index;
        showImage(currentIndex);
    });
});



//OTHER ROOM
var swiper1 = new Swiper(".swiper2", {
    slidesPerView: 1,
    // spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next2",
        prevEl: ".swiper-button-prev2",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    grabCursor: "true",
    breakpoints: {
        340: {
            slidesPerView: 1,
            // spaceBetween: 5,
            centerSlide: true,
        },
        640: {
            slidesPerView: 2,
            // spaceBetween: 5,
            centerSlide: true,
        },
        768: {
            slidesPerView: 2,
            // spaceBetween: 10,
            centerSlide: true,
        },
        1024: {
            slidesPerView: 2,
            // spaceBetween: 10,
            centerSlide: true,
        },
        1280: {
            slidesPerView: 3,
            // spaceBetween: 10,
            centerSlide: true,
        },
        1539: {
            slidesPerView: 3,
            // spaceBetween: 15,
            centerSlide: true,
        },
        1600: {
            slidesPerView: 3,
            centerSlide: true,
        },
    },
});