<footer class="footer_contain">

    <div style="padding-top: 10px;">
        Logo
    </div>
    <div class="enquiry_container">
        <h3>FOR ENQUIRIES CALL</h3>
        <h5>+2348144179815</h5>
    </div>

    <div class="flexible_contain_">
        <div style="padding: 0px 20px;">
            <img src="../images/twit.png" width="30" height="30">
            <img src="../images/instagram.png" width="30" height="30">
        </div>
        <div style="text-align: center; padding: 10px;">
            © 2024 EruditeGift
        </div>

        <div>
            <img src="../images/payment-1.png" alt="" width="100">
        </div>
    </div>
    <div>
        <a href="https://wa.me/2348163445421" style="color: white; padding: 20px; font-weight: bold;"> Developed by <span
                style="color: yellow;">MicroX</span></a>
    </div>
</footer>
<!-- footer_section  ends here-->


<script>
    function toggleMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        const hamburgerMenu = document.getElementById('hamburgerMenu');
        mobileMenu.classList.toggle('active');
        hamburgerMenu.classList.toggle('active');
    }

    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    function moveToNextSlide() {
        currentIndex++;
        if (currentIndex >= slides.length) {
            currentIndex = 0;
        }
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Automatically slide every 3 seconds
    setInterval(moveToNextSlide, 3000);


    document.querySelector('.whatsapp-support').addEventListener('mouseenter', () => {
        const tooltip = document.createElement('div');
        tooltip.innerText = 'Chat with us on WhatsApp!';
        tooltip.className = 'whatsapp-tooltip';
        document.body.appendChild(tooltip);

        const button = document.querySelector('.whatsapp-support');
        const rect = button.getBoundingClientRect();

        tooltip.style.position = 'absolute';
        tooltip.style.top = `${rect.top - 30}px`; /* Position above the button */
        tooltip.style.left = `${rect.left + rect.width / 2 - tooltip.offsetWidth / 2}px`;
    });

    document.querySelector('.whatsapp-support').addEventListener('mouseleave', () => {
        const tooltip = document.querySelector('.whatsapp-tooltip');
        if (tooltip) {
            tooltip.remove();
        }
    });
</script>

</body>

</html>
