<div class="reg__wrapper bg-body-2 section_gap_y_bottom__1 section_gap_y_top__1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="reg_form__wrap">
                    <div class="reg_form__top">
                        <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-shapes.png" alt="" class="reg-shapes">
                        <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-fig.png" alt="">
                        <h4>Forgot Password <?=ucfirst($this->fungsi->sett_website()->nama_website)?></h4>
                        <p>Don't have an account yet? <a href="<?= base_url() ?>web/register">Register</a></p>
                    </div>

                    <div class="reg__inputs mt-40 flex-column flex-lg-row">
                        <div class="reg__left order-2 order-lg-0">
                            <form action="<?= base_url() ?>lupa_password" id="login__form" method="post">
                                <div class="custom_input_style__two">
                                    <input type="email" placeholder="Enter your Email" name="email" id="email" class="form-input-theme">

                                    <label for="email">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M12 13.6H4C1.6 13.6 0 12.4 0 9.6V4C0 1.2 1.6 0 4 0H12C14.4 0 16 1.2 16 4V9.6C16 12.4 14.4 13.6 12 13.6Z" fill="currentColor"></path>
                                            <path d="M8.0006 7.49604C7.3286 7.49604 6.64861 7.28804 6.12861 6.86404L3.6246 4.86404C3.3686 4.65604 3.32061 4.28004 3.52861 4.02404C3.73661 3.76804 4.11261 3.72005 4.36861 3.92805L6.8726 5.92805C7.4806 6.41605 8.5126 6.41605 9.1206 5.92805L11.6246 3.92805C11.8806 3.72005 12.2646 3.76004 12.4646 4.02404C12.6726 4.28004 12.6326 4.66404 12.3686 4.86404L9.8646 6.86404C9.3526 7.28804 8.6726 7.49604 8.0006 7.49604Z" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                </div>
                                <br>
                                <button type="submit" name="forgot_password" class="submit-v2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Mode Terang (Default) */
.theme-light-active {
    --input-bg: #ffffff;
    --input-border: #e2e8f0;
    --input-text: #1a202c;
    --input-placeholder: #a0aec0;
    --input-focus-bg: #ffffff;
    --input-focus-border: #667eea;
    --input-focus-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

/* Mode Gelap */
.theme-dark-active {
    --input-bg: #2d3748;
    --input-border: #4a5568;
    --input-text: #ffffff;
    --input-placeholder: #a0aec0;
    --input-focus-bg: #2d3748;
    --input-focus-border: #667eea;
    --input-focus-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
}

/* Styling untuk input form */
.form-input-theme {
    background: var(--input-bg) !important;
    border: 1px solid var(--input-border) !important;
    color: var(--input-text) !important;
    transition: all 0.3s ease;
}

.form-input-theme::placeholder {
    color: var(--input-placeholder) !important;
    opacity: 1;
}

.form-input-theme:focus {
    background: var(--input-focus-bg) !important;
    border-color: var(--input-focus-border) !important;
    box-shadow: var(--input-focus-shadow) !important;
    color: var(--input-text) !important;
    outline: none;
}

/* Styling untuk custom input container */
.custom_input_style__two {
    position: relative;
}

.custom_input_style__two label {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--input-placeholder);
    transition: all 0.3s ease;
}

.custom_input_style__two input {
    width: 100%;
    padding: 12px 16px 12px 48px;
    border-radius: 8px;
    font-size: 14px;
}

.custom_input_style__two input:focus + label {
    color: var(--input-focus-border);
}

/* Styling untuk teks register */
.reg_form__top p {
    color: var(--input-text);
}

.reg_form__top p a {
    color: var(--input-focus-border);
    text-decoration: none;
    font-weight: 600;
}

.reg_form__top p a:hover {
    text-decoration: underline;
}
</style>
