<div class="reg__wrapper bg-body-2 section_gap_y_bottom__1 section_gap_y_top__1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="reg_form__wrap">
                        <div class="reg_form__top">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-shapes.png" alt="" class="reg-shapes">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-fig.png" alt="">
                            <h4>Reset Password <?=ucfirst($this->fungsi->sett_website()->nama_website)?></h4>
                            <p>Don't have an account yet? <a href="<?= base_url() ?>lupa_password/reset_password">Register</a></p>
                        </div>

                        <div class="reg__inputs mt-40 flex-column flex-lg-row">
                            <div class="reg__left order-2 order-lg-0">
                                <form action="<?= base_url() ?>lupa_password/update_password" id="login__form" method="post">
                                    <div class="custom_input_style__two">
										<input type="hidden" name="nama_lengkap" value="<?= $nama ?>">
										<input type="hidden" name="email" value="<?= $email ?>" >
										<input type="hidden" name="token" value="<?= $token ?>"> 
                                        <input type="password" placeholder="Enter your new Password" name="password" id="password">

                                       <label for="password">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.3977 5.4V7.08001C13.0457 7.032 12.6457 7.008 12.1977 7V5.4C12.1977 2.88 11.4857 1.2 7.99766 1.2C4.50966 1.2 3.79766 2.88 3.79766 5.4V7C3.34966 7.008 2.94966 7.032 2.59766 7.08001V5.4C2.59766 3.08 3.15766 0 7.99766 0C12.8377 0 13.3977 3.08 13.3977 5.4Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M16 11V12.6C16 15.8 15.2 16.6 12 16.6H4C0.8 16.6 0 15.8 0 12.6V11C0 8.328 0.56 7.328 2.6 7.08C2.952 7.032 3.352 7.008 3.8 7H12.2C12.648 7.008 13.048 7.032 13.4 7.08C15.44 7.328 16 8.328 16 11Z" fill="currentColor"></path>
                                                <path d="M4.8 12.6C4.696 12.6 4.592 12.576 4.496 12.536C4.392 12.496 4.31201 12.44 4.23201 12.368C4.08801 12.216 4 12.008 4 11.8C4 11.696 4.02399 11.592 4.06399 11.496C4.10399 11.4 4.16001 11.312 4.23201 11.232C4.31201 11.16 4.392 11.104 4.496 11.064C4.792 10.936 5.14399 11.008 5.36799 11.232C5.43999 11.312 5.49601 11.4 5.53601 11.496C5.57601 11.592 5.6 11.696 5.6 11.8C5.6 12.008 5.51199 12.216 5.36799 12.368C5.21599 12.512 5.008 12.6 4.8 12.6Z" fill="currentColor"></path>
                                                <path d="M7.99531 12.6C7.77931 12.6 7.57932 12.512 7.42732 12.368C7.35532 12.288 7.2993 12.2 7.2593 12.104C7.2193 12.008 7.19531 11.904 7.19531 11.8C7.19531 11.584 7.28332 11.384 7.42732 11.232C7.72332 10.936 8.25931 10.936 8.56331 11.232C8.70731 11.384 8.79531 11.584 8.79531 11.8C8.79531 11.904 8.77132 12.008 8.73132 12.104C8.69132 12.2 8.63531 12.288 8.56331 12.368C8.41131 12.512 8.20331 12.6 7.99531 12.6Z" fill="currentColor"></path>
                                                <path d="M11.2063 12.6C10.9983 12.6 10.7903 12.512 10.6383 12.368C10.4943 12.216 10.4062 12.016 10.4062 11.8C10.4062 11.584 10.4943 11.384 10.6383 11.232C10.9423 10.936 11.4782 10.936 11.7742 11.232C11.8062 11.272 11.8382 11.312 11.8702 11.36C11.9022 11.4 11.9263 11.448 11.9423 11.496C11.9663 11.544 11.9823 11.592 11.9903 11.64C11.9983 11.696 12.0063 11.752 12.0063 11.8C12.0063 12.008 11.9182 12.216 11.7742 12.368C11.6222 12.512 11.4143 12.6 11.2063 12.6Z" fill="currentColor"></path>
                                            </svg>
                                        </label>

                                    </div>
                                    <div class="custom_input_style__two mt-3">
                                        <input type="password" placeholder="Password Confirmation" name="passconf" id="passconf">

                                        <label for="password">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.3977 5.4V7.08001C13.0457 7.032 12.6457 7.008 12.1977 7V5.4C12.1977 2.88 11.4857 1.2 7.99766 1.2C4.50966 1.2 3.79766 2.88 3.79766 5.4V7C3.34966 7.008 2.94966 7.032 2.59766 7.08001V5.4C2.59766 3.08 3.15766 0 7.99766 0C12.8377 0 13.3977 3.08 13.3977 5.4Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M16 11V12.6C16 15.8 15.2 16.6 12 16.6H4C0.8 16.6 0 15.8 0 12.6V11C0 8.328 0.56 7.328 2.6 7.08C2.952 7.032 3.352 7.008 3.8 7H12.2C12.648 7.008 13.048 7.032 13.4 7.08C15.44 7.328 16 8.328 16 11Z" fill="currentColor"></path>
                                                <path d="M4.8 12.6C4.696 12.6 4.592 12.576 4.496 12.536C4.392 12.496 4.31201 12.44 4.23201 12.368C4.08801 12.216 4 12.008 4 11.8C4 11.696 4.02399 11.592 4.06399 11.496C4.10399 11.4 4.16001 11.312 4.23201 11.232C4.31201 11.16 4.392 11.104 4.496 11.064C4.792 10.936 5.14399 11.008 5.36799 11.232C5.43999 11.312 5.49601 11.4 5.53601 11.496C5.57601 11.592 5.6 11.696 5.6 11.8C5.6 12.008 5.51199 12.216 5.36799 12.368C5.21599 12.512 5.008 12.6 4.8 12.6Z" fill="currentColor"></path>
                                                <path d="M7.99531 12.6C7.77931 12.6 7.57932 12.512 7.42732 12.368C7.35532 12.288 7.2993 12.2 7.2593 12.104C7.2193 12.008 7.19531 11.904 7.19531 11.8C7.19531 11.584 7.28332 11.384 7.42732 11.232C7.72332 10.936 8.25931 10.936 8.56331 11.232C8.70731 11.384 8.79531 11.584 8.79531 11.8C8.79531 11.904 8.77132 12.008 8.73132 12.104C8.69132 12.2 8.63531 12.288 8.56331 12.368C8.41131 12.512 8.20331 12.6 7.99531 12.6Z" fill="currentColor"></path>
                                                <path d="M11.2063 12.6C10.9983 12.6 10.7903 12.512 10.6383 12.368C10.4943 12.216 10.4062 12.016 10.4062 11.8C10.4062 11.584 10.4943 11.384 10.6383 11.232C10.9423 10.936 11.4782 10.936 11.7742 11.232C11.8062 11.272 11.8382 11.312 11.8702 11.36C11.9022 11.4 11.9263 11.448 11.9423 11.496C11.9663 11.544 11.9823 11.592 11.9903 11.64C11.9983 11.696 12.0063 11.752 12.0063 11.8C12.0063 12.008 11.9182 12.216 11.7742 12.368C11.6222 12.512 11.4143 12.6 11.2063 12.6Z" fill="currentColor"></path>
                                            </svg>
                                        </label>

                                    </div>
                                    <button type="submit" name="reset_password" class="submit-v2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
