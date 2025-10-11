<div class="reg__wrapper bg-body-2 section_gap_y_bottom__1 section_gap_y_top__1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="reg_form__wrap">
                    <div class="reg_form__top">
                        <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-shapes.png" alt="" class="reg-shapes">
                        <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-fig.png" alt="">
                        <h4>Register To <?= ucfirst($this->fungsi->sett_website()->nama_website) ?></h4>
                        <p>Already have an account? <a href="<?= base_url() ?>web/login">Login</a></p>
                    </div>

                    <div class="reg__inputs mt-40 flex-column flex-lg-row">
                        <div class="reg__left order-2 order-lg-0">
                            <form action="<?= base_url() ?>auth_member/register" id="login__form" method="post" autocomplete="off">
                                <div class="custom_input_style__two">
                                    <input type="text" placeholder="Your full name" name="nama" id="name" autocomplete="off" class="form-input-theme">
                                </div>
                                <div class="custom_input_style__two mt-3">
                                    <input type="email" placeholder="Email" name="email" id="email" autocomplete="off" class="form-input-theme">
                                </div>
                                <div class="custom_input_style__two mt-3">
                                    <input type="text" placeholder="Username" name="username" id="username" autocomplete="off" class="form-input-theme">
                                </div>
                                <div class="custom_input_style__two mt-3">
                                    <input type="text" placeholder="Phone" name="no_hp" id="no_hp" autocomplete="off" class="form-input-theme">
                                </div>
                                
                                <!-- Jenis Kelamin Section -->
                                <div class="gender-section mt-3">
                                    <label class="gender-label">Jenis Kelamin</label>
                                    <div class="gender-options">
                                        <div class="gender-option">
                                            <input class="gender-radio" type="radio" value="Laki Laki" name="jk_kelamin" id="laki_laki">
                                            <label class="gender-label-radio" for="laki_laki">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="gender-option">
                                            <input class="gender-radio" type="radio" value="Perempuan" name="jk_kelamin" id="perempuan">
                                            <label class="gender-label-radio" for="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom_input_style__two mt-3">
                                    <input type="text" placeholder="Alamat" name="alamat" id="alamat" autocomplete="off" class="form-input-theme">
                                </div>
                                <div class="custom_input_style__two mt-3">
                                    <input type="password" placeholder="Password" name="password" id="password" autocomplete="off" class="form-input-theme">
                                </div>

                                <button type="submit" name="register" class="submit-v2 mt-4">Register</button>
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
    --label-color: #4a5568;
    --radio-border: #cbd5e0;
    --radio-bg: #ffffff;
    --radio-checked-bg: #667eea;
    --radio-checked-border: #667eea;
    --radio-label: #4a5568;
    --radio-label-hover: #2d3748;
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
    --label-color: #e2e8f0;
    --radio-border: #4a5568;
    --radio-bg: #2d3748;
    --radio-checked-bg: #667eea;
    --radio-checked-border: #667eea;
    --radio-label: #e2e8f0;
    --radio-label-hover: #ffffff;
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

.custom_input_style__two input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 8px;
    font-size: 14px;
}

/* Styling untuk section jenis kelamin */
.gender-section {
    padding: 16px;
    border: 1px solid var(--input-border);
    border-radius: 8px;
    background: var(--input-bg);
    transition: all 0.3s ease;
}

.gender-section:focus-within {
    border-color: var(--input-focus-border);
    box-shadow: var(--input-focus-shadow);
}

.gender-label {
    display: block;
    margin-bottom: 12px;
    font-size: 14px;
    font-weight: 500;
    color: var(--label-color);
}

.gender-options {
    display: flex;
    gap: 40px;
    align-items: center;
}

.gender-option {
    display: flex;
    align-items: center;
    gap: 8px;
}

.gender-radio {
    width: 18px;
    height: 18px;
    margin: 0;
    cursor: pointer;
    accent-color: var(--radio-checked-bg);
}

.gender-label-radio {
    margin: 0;
    cursor: pointer;
    font-size: 14px;
    color: var(--radio-label);
    transition: color 0.3s ease;
    user-select: none;
}

.gender-label-radio:hover {
    color: var(--radio-label-hover);
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

/* Responsive Design */
@media (max-width: 576px) {
    .gender-options {
        gap: 20px;
        flex-direction: column;
        align-items: flex-start;
    }
    
    .gender-option {
        width: 100%;
    }
}
</style>
