<?php
include "../includes/header.php";
?>

<div class="banner">
    <h2>İletİşİm</h2>
    <img src="../assets/images/banner.jpg" alt="">
</div>

<div>
    <div class="container">
        <div class="contact-parent">
            <div class="contact-child child1">

                <img src="../assets/images/mestekder-logo.png" class="logo">

                <img src="../assets/images/arkaplan.jpg" class="bg-img">

                <p>
                    <i class="fas fa-map-marker-alt"></i> Adres <br />
                    <span>
                        Yeşilova Mah. 110. Sokak <br />
                        Etimesgut, Ankara
                    </span>
                </p>

                <p>
                    <i class="fas fa-phone-alt"></i> Telefon <br />
                    <span><a href="tel:+905555555555">+90 555 555 55 55</a></span>
                </p>

                <p>
                    <i class="far fa-envelope"></i> E-posta <br />
                    <span><a href="mailto:info@renewerinsaat.com.tr">info@renewerinsaat.com.tr</a></span>
                </p>
            </div>


            <div class="contact-child child2">
                <div class="inside-contact">
                    <h2>Bize Ulaşın</h2>
                    <h3><span id="confirm"></span></h3>

                    <p>Adınız </p>
                    <input id="txt_name" type="text" required>

                    <p>E-posta </p>
                    <input id="txt_email" type="email" required>

                    <p>Telefon </p>
                    <input id="txt_phone" type="tel" required>

                    <p>Konu </p>
                    <input id="txt_subject" type="text" required>

                    <p>Mesaj </p>
                    <textarea id="txt_message" rows="4" cols="20" required></textarea>

                    <input type="submit" id="btn_send" value="Gönder">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="iletisim_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12232.003013041984!2d32.59570263661134!3d39.96373586562917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d330a60d6fec5d%3A0x1796c7f8665fd4b6!2sYe%C5%9Filova%2C%2006796%20Etimesgut%2FAnkara!5e0!3m2!1str!2str!4v1755693631933!5m2!1str!2str" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
include "../includes/footer.php";
?>