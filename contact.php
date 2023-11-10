<?php include 'includes/header.php'; ?>

<style>
    #section-contactus {
        position: relative;
        z-index: 3;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .contact-info {
        width: 50%;
    }

    .contact-info-item {
        display: flex;
        margin-bottom: 30px;
    }

    .contact-info-icon {
        height: 70px;
        width: 70px;
        background-color: #fff;
        text-align: center;
        border-radius: 50%;
        color: blue;
    }

    .contact-info-icon i {
        font-size: 30px;
        line-height: 70px;

    }

    .contact-info-content {
        margin-left: 20px;
    }

    .contact-info-content h4 {
        color: var(--dark-brown);
        font-size: 1.4em;
        margin-bottom: 5px;

    }

    .contact-info-content p {
        /* color: #FFF; */
        font-size: 1em;
    }

    .contact-form {
        background-color: #fff;
        padding: 40px;
        width: 45%;
        padding-bottom: 20px;
        padding-top: 20px;
    }

    .contact-form h2 {
        font-weight: bold;
        font-size: 2em;
        margin-bottom: 10px;
        color: #333;
    }

    .contact-form .input-box {
        position: relative;
        width: 100%;
        margin-top: 10px;
    }

    .contact-form .input-box input,
    .contact-form .input-box textarea {
        width: 100%;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        border: none;
        border-bottom: 2px solid #333;
        outline: none;
        resize: none;
    }

    .contact-form .input-box span {
        position: absolute;
        left: 0;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: #666;
    }

    .contact-form .input-box input:focus~span,
    .contact-form .input-box textarea:focus~span {
        color: #e91e63;
        font-size: 12px;
        transform: translateY(-20px);
    }

    .contact-form .input-box input[type="submit"] {
        width: 100%;
        background: #00bcd4;
        color: #FFF;
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;
        border: 1px solid #00bcd4;
        transition: 0.5s;
    }

    .contact-form .input-box input[type="submit"]:hover {
        background: #FFF;
        color: #00bcd4;
    }

    .contact-form .input-box input[type="submit"] {
        background-color: var(--theme-primary);
        border:1px solid var(--theme-secondary);
        border-radius: 5px;
    }


    .social-media {
        text-align: center;
        margin-bottom: 20px;
    }

    .social-icon-block {
        display: inline-block;
        vertical-align: top;
    }

    .social-icon {
        display: inline-block;
        vertical-align: top;
        width: 40px;
        /*    margin: 0 35px; */
        margin: 0 22px;
    }

    .social-icon i {
        font-size: 36px;
        color: var(--theme-primary);
    }

    .social-icon i:hover {
        transform: 1.5;
        color: var(--theme-secondary);
    }

    .social-name {
        color: #9b9b9b;
        text-align: center;
        font-family: "Source Sans Pro";
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 22px;
    }

    @media (max-width: 991px) {
        #section-contactus {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .row {
            flex-direction: column;
        }

        .contact-info {
            margin-bottom: 40px;
            width: 100%;
        }

        .contact-form {
            width: 100%;
        }
    }
</style>


<div class="container">
    <h2 class="text-center mb-5 mt-4" style="font-size:36pt">Contact Us</h2>
    <p class="text-center mx-5" style="font-size:20px">Get in touch with us for any queries and details about the products.<br> Let's start a wonderful International Business Together!</p>
</div>



<section id="section-contactus">

    <div class="container">
        <div class="row">

            <div class="contact-info">
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-home"></i>
                    </div>

                    <div class="contact-info-content">
                        <h4>Address</h4>
                        <p>Hansi Alpha Apartment, 1st Floor,<br />Kavyalbysanda, Bangalore<br />560032</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone"></i>
                    </div>

                    <div class="contact-info-content">
                        <h4>Phone</h4>
                        <p>(+91) 9886114464</p>
                        <p>(+91) 9986611424</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="contact-info-content">
                        <h4>Email</h4>
                        <p>info@anhexim.com</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form action="" id="contact-form">
                    <h2>Send Message</h2>
                    <div class="input-box">
                        <input type="text" required="true" name="">
                        <span>Full Name</span>
                    </div>

                    <div class="input-box">
                        <input type="email" required="true" name="">
                        <span>Email</span>
                    </div>

                    <div class="input-box">
                        <textarea required="true" name=""></textarea>
                        <span>Type your Message...</span>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="Send" name="">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>



<div class="social-media">
    <div class="social-icon-block">
        <table>
            <tr>
                <td>
                    <div class="social-icon">
                        <a href="">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="social-name"></div>
                </td>
            </tr>
        </table>
    </div>
    <div class="social-icon-block">
        <table>
            <tr>
                <td>
                    <div class="social-icon">
                        <a href="">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="social-name"></div>
                </td>
            </tr>
        </table>
    </div>
    <div class="social-icon-block">
        <table>
            <tr>
                <td>
                    <div class="social-icon">
                        <a href="">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="social-name"></div>
                </td>
            </tr>
        </table>
    </div>
    <div class="social-icon-block">
        <table>
            <tr>
                <td>
                    <div class="social-icon">
                        <a href="">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="social-name"></div>
                </td>
            </tr>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>