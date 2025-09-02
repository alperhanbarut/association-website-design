<?php
include "../includes/header.php";
?>


<div class="banner">
    <h2>Bağış</h2>
    <img src="../assets/images/banner.jpg" alt="Faaliyetlerimiz">
</div>


<main>
    <div class="main-content">
        <div class="form-container">
            <div class="form-header">
                <h1 class="form-title">Bağış Yapın, Fark Yaratın</h1>
                <p class="form-description">
                    Topluluğumuzun projelerine destek olarak geleceğe umut olun. Bağışlarınız eğitim, çevre ve sosyal yardım alanlarında fark yaratacak.
                </p>
            </div>
            <div class="form-section">
                <h3 class="section-title">Bağış Miktarı Seçin</h3>
                <div class="grid grid-cols-2 md-grid-cols-3 lg-grid-cols-6">
                    <div class="radio-label-wrapper">
                        <input class="radio-input" id="amount-25" name="donation_amount" type="radio" value="25" />
                        <label class="radio-label" for="amount-25"><span>25 TL</span></label>
                    </div>
                    <div class="radio-label-wrapper">
                        <input checked class="radio-input" id="amount-50" name="donation_amount" type="radio" value="50" />
                        <label class="radio-label" for="amount-50"><span>50 TL</span></label>
                    </div>
                    <div class="radio-label-wrapper">
                        <input class="radio-input" id="amount-100" name="donation_amount" type="radio" value="100" />
                        <label class="radio-label" for="amount-100"><span>100 TL</span></label>
                    </div>
                    <div class="radio-label-wrapper">
                        <input class="radio-input" id="amount-250" name="donation_amount" type="radio" value="250" />
                        <label class="radio-label" for="amount-250"><span>250 TL</span></label>
                    </div>
                    <div class="radio-label-wrapper">
                        <input class="radio-input" id="amount-500" name="donation_amount" type="radio" value="500" />
                        <label class="radio-label" for="amount-500"><span>500 TL</span></label>
                    </div>
                    <div class="radio-label-wrapper">
                        <input class="radio-input" id="amount-custom" name="donation_amount" type="radio" value="custom" />
                        <label class="radio-label" for="amount-custom"><span>Diğer</span></label>
                    </div>
                </div>
                <div class="input-wrapper">
                    <span class="input-icon">TL</span>
                    <input class="form-input pl-10" placeholder="Özel Miktar Girin" type="number" />
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Ödeme Yöntemi</h3>
                <div class="grid grid-cols-1 md-grid-cols-3">
                    <div class="radio-label-wrapper">
                        <input checked class="radio-input" id="payment-card" name="payment_method" type="radio" value="credit_card" />
                        <label class="radio-label" for="payment-card">
                            <i class="fa-solid fa-credit-card"></i>
                            <span>Kredi Kartı</span>
                        </label>
                    </div>
                    <div class="radio-label-wrapper">
                        <input class="radio-input" id="payment-transfer" name="payment_method" type="radio" value="bank_transfer" />
                        <label class="radio-label" for="payment-transfer">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>Banka Havalesi</span>
                        </label>
                    </div>
                    <div class="radio-label-wrapper">
                        <input class="radio-input" id="payment-mobile" name="payment_method" type="radio" value="mobile" />
                        <label class="radio-label" for="payment-mobile">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <span>Mobil Ödeme</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-section space-y-4">
                <div>
                    <label class="form-label" for="card_number">Kart Numarası</label>
                    <input class="form-input" id="card_number" placeholder="**** **** **** ****" type="text" />
                </div>
                <div class="grid grid-cols-1 md-grid-cols-2">
                    <div>
                        <label class="form-label" for="expiry_date">Son Kullanma Tarihi</label>
                        <input class="form-input" id="expiry_date" placeholder="AA/YY" type="text" />
                    </div>
                    <div>
                        <label class="form-label" for="cvv">CVV</label>
                        <input class="form-input" id="cvv" placeholder="***" type="text" />
                    </div>
                </div>
                <div>
                    <label class="form-label" for="card_name">Kart Üzerindeki İsim</label>
                    <input class="form-input" id="card_name" placeholder="Ad Soyad" type="text" />
                </div>
            </div>
            <button class="submit-button">
                <span class="truncate">Bağışı Tamamla</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</main>



<?php
include "../includes/footer.php";
?>