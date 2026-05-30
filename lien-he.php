<!DOCTYPE html>
<html lang="en">

<?php

include 'header.php';

?>
<!-- Contact Page Hero Banner -->
<section class="banner-hero philosophy-banner contact-banner d-flex align-items-center">
    <div class="banner-bg">
        <img src="dist/images/triet-ly-phat-trien/Hero Banner.jpg" alt="Hero Banner">
    </div>
    <div class="container-fluid px-md-5 position-relative z-2">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="banner-content ps-3 ps-md-5">
                    <div class="banner-tagline mb-2">Ngọc Tín Holdings</div>
                    <h1 class="banner-title mb-0">Liên hệ</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-fade-bottom"></div>
</section>

<div class="contact-content-wrap">
    <!-- Section 1: Intro Header -->
    <section class="contact-intro-section py-4">
        <div class="container">
            <h2 class="contact-title">Liên hệ với Ngọc Tín Holdings</h2>
            <div class="contact-title-line"></div>
            <p class="contact-desc">
                Chúng tôi luôn sẵn sàng đồng hành cùng quý khách hàng, đối tác và nhà đầu tư trong hành trình kiến tạo những giá trị bền vững. Hãy để lại thông tin để đội ngũ Ngọc Tín Holdings nhanh chóng kết nối và hỗ trợ tư vấn phù hợp với nhu cầu của bạn.
            </p>
        </div>
    </section>

    <!-- Section 2: Form & Newsletter Block -->
    <section class="contact-form-section py-4">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Left Form -->
                <div class="col-12 col-lg-7">
                    <div class="contact-form-block">
                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="item-input">
                                        <input type="email" name="email" required placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="item-input">
                                        <input type="tel" name="phone" required placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="item-input">
                                        <input type="text" name="name" required placeholder="Tên">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="item-input">
                                        <textarea name="message" required placeholder="Ghi chú"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-submit-contact">Nhận tư vấn</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Newsletter Card -->
                <div class="col-12 col-lg-5">
                    <div class="newsletter-card">
                        <div>
                            <h3 class="newsletter-title">Bản tin & cập nhật</h3>
                            <p class="newsletter-desc">
                                Đăng ký nhận newsletter để cập nhật nhanh chóng các dự án mới, xu hướng thị trường và những thông tin nổi bật từ Ngọc Tín Holdings.
                            </p>
                        </div>
                        <form action="#" method="POST" class="newsletter-form">
                            <div class="item-input">
                                <input type="email" name="newsletter_email" required placeholder="Email">
                            </div>
                            <button type="submit" class="btn-newsletter">Nhận thông tin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Contact Info Cards -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1: Phone -->
                <div class="col-12 col-md-4">
                    <div class="contact-info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon">
                                <i class="fal fa-phone-alt"></i>
                            </div>
                            <h4 class="info-card-title">0247 100 1868</h4>
                        </div>
                        <p class="info-card-desc">
                            Kết nối nhanh chóng với đội ngũ Ngọc Tín Holdings để được tư vấn chi tiết về dự án, đầu tư và các dịch vụ liên quan.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Email -->
                <div class="col-12 col-md-4">
                    <div class="contact-info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4 class="info-card-title">info@ngoctin.com.vn</h4>
                        </div>
                        <p class="info-card-desc">
                            Gửi thông tin và nhu cầu của bạn qua email để chúng tôi hỗ trợ nhanh chóng và chính xác nhất.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Address -->
                <div class="col-12 col-md-4">
                    <div class="contact-info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4 class="info-card-title">Golden Palace</h4>
                        </div>
                        <p class="info-card-desc">
                            Tầng M, Tháp A Toà nhà Golden Palace Mễ Trì, phường Mễ Trì, quận Nam Từ Liêm, Thành phố Hà Nội, Việt Nam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Map Section -->
    <section class="contact-map-section">
        <div class="container">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7176100588667!2d105.7794301!3d21.003954600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453b3f2ffb9ef%3A0xb3bd6a09abfcab5b!2sGolden%20Palace%20M%E1%BB%85%20Tr%C3%AC!5e0!3m2!1svi!2s!4v1717088494951!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</div>
<?php
include 'footer.php';
?>