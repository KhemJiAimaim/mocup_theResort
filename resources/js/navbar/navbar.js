const navbar = document.getElementById("navbar");
const lang_EN = document.getElementById("lang-EN");

// ตรวจจับการเลื่อนหน้า
window.addEventListener("scroll", () => {
    if (window.scrollY > 30) {
        // เมื่อเลื่อนลง
        navbar.classList.add("bg-[#14292e]", "shadow-md", "top-0" );
        navbar.classList.remove("bg-transparent");

        lang_EN.classList.add("bg-[rgba(196,194,194,0.1)]");
        lang_EN.classList.remove("bg-[rgba(0,0,0,0.1)]");
    } else {
        // เมื่อเลื่อนขึ้น
        navbar.classList.remove("bg-[#14292e]", "shadow-md", "top-0" );
        navbar.classList.add("bg-transparent");

        lang_EN.classList.remove("bg-[rgba(196,194,194,0.1)]");
        lang_EN.classList.add("bg-[rgba(0,0,0,0.1)]");
    }
});



// ปุ่มเพื่อเปิด/ปิดเมนูภาษา
document.addEventListener("DOMContentLoaded", function () {
    const langButton = document.getElementById("open_leng_ENTH"); // ปุ่มเปิด/ปิดเมนู
    const langMenu = document.getElementById("leng_ENTH"); // เมนูภาษาที่จะเปิด/ปิด
    const arrowIcon = document.getElementById("arrow-up"); // ไอคอนลูกศร

    langButton.addEventListener("click", function (event) {
        event.stopPropagation();
        langMenu.classList.toggle("hidden"); // ซ่อน/แสดงเมนู
        langMenu.classList.toggle("scale-100"); // ขยายเมนู
        arrowIcon.classList.toggle("rotate-180"); // หมุนลูกศร
    });

    document.addEventListener("click", function (event) {
        if (!langButton.contains(event.target) && !langMenu.contains(event.target)) {
            langMenu.classList.add("hidden");
            langMenu.classList.remove("scale-100");
            arrowIcon.classList.remove("rotate-180");
        }
    });
});
