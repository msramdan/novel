<div class="reg__wrapper bg-body-2">
        <div class="container">
			<br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="reg_form__wrap">
                        <div class="reg_form__top">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-shapes.png" alt="" class="reg-shapes">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-fig.png" alt="">
                            <h4>Register To <?=ucfirst($this->fungsi->sett_website()->nama_website)?></h4>
                            <p>Already have an account? <a href="<?= base_url() ?>web/login">Login</a></p>
                        </div>

                        <div class="reg__inputs mt-40 flex-column flex-lg-row">
                            <div class="reg__left order-2 order-lg-0">
                                <form action="<?= base_url() ?>auth_member/register" id="login__form" method="post" autocomplete="off">
                                    <div class="custom_input_style__two">
                                        <input type="text" placeholder="Your full name" name="nama_lengkap" id="name" autocomplete="off">

                                        <label for="name">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.53696 8.29268C9.82693 8.29268 11.6833 6.4363 11.6833 4.14634C11.6833 1.85638 9.82693 0 7.53696 0C5.247 0 3.39062 1.85638 3.39062 4.14634C3.39062 6.4363 5.247 8.29268 7.53696 8.29268Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M7.53807 10.3658C3.38344 10.3658 0 13.1522 0 16.5854C0 16.8176 0.182439 17 0.414634 17H14.6615C14.8937 17 15.0761 16.8176 15.0761 16.5854C15.0761 13.1522 11.6927 10.3658 7.53807 10.3658Z" fill="currentColor"></path>
                                                <path d="M15.3585 10.5649C14.6121 9.81855 14.0234 10.059 13.5175 10.5649L10.5819 13.5005C10.4658 13.6166 10.358 13.8322 10.3331 13.9898L10.1755 15.1093C10.1175 15.5156 10.3995 15.7976 10.8058 15.7395L11.9253 15.582C12.0828 15.5571 12.3068 15.4493 12.4146 15.3332L15.3502 12.3976C15.8643 11.9 16.1048 11.3112 15.3585 10.5649Z" fill="currentColor"></path>
                                            </svg>
                                        </label>

                                    </div>
									<div class="custom_input_style__two mt-3">
                                        <input type="email" placeholder="Email" name="email" id="email" autocomplete="off">

                                        <label for="email">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M12 13.6H4C1.6 13.6 0 12.4 0 9.6V4C0 1.2 1.6 0 4 0H12C14.4 0 16 1.2 16 4V9.6C16 12.4 14.4 13.6 12 13.6Z" fill="currentColor"></path>
                                                <path d="M8.0006 7.49604C7.3286 7.49604 6.64861 7.28804 6.12861 6.86404L3.6246 4.86404C3.3686 4.65604 3.32061 4.28004 3.52861 4.02404C3.73661 3.76804 4.11261 3.72005 4.36861 3.92805L6.8726 5.92805C7.4806 6.41605 8.5126 6.41605 9.1206 5.92805L11.6246 3.92805C11.8806 3.72005 12.2646 3.76004 12.4646 4.02404C12.6726 4.28004 12.6326 4.66404 12.3686 4.86404L9.8646 6.86404C9.3526 7.28804 8.6726 7.49604 8.0006 7.49604Z" fill="currentColor"></path>
                                            </svg>

                                        </label>

                                    </div>
                                    <div class="custom_input_style__two mt-3">
                                        <input type="text" placeholder="Username" name="username" id="username" autocomplete="off">
                                        <label for="email">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M12 13.6H4C1.6 13.6 0 12.4 0 9.6V4C0 1.2 1.6 0 4 0H12C14.4 0 16 1.2 16 4V9.6C16 12.4 14.4 13.6 12 13.6Z" fill="currentColor"></path>
                                                <path d="M8.0006 7.49604C7.3286 7.49604 6.64861 7.28804 6.12861 6.86404L3.6246 4.86404C3.3686 4.65604 3.32061 4.28004 3.52861 4.02404C3.73661 3.76804 4.11261 3.72005 4.36861 3.92805L6.8726 5.92805C7.4806 6.41605 8.5126 6.41605 9.1206 5.92805L11.6246 3.92805C11.8806 3.72005 12.2646 3.76004 12.4646 4.02404C12.6726 4.28004 12.6326 4.66404 12.3686 4.86404L9.8646 6.86404C9.3526 7.28804 8.6726 7.49604 8.0006 7.49604Z" fill="currentColor"></path>
                                            </svg>

                                        </label>
                                    </div>
									<div class="custom_input_style__two mt-3">
                                        <input type="text" placeholder="Phone" name="no_hp" id="no_hp" autocomplete="off">

                                        <label for="no_hp">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M12 13.6H4C1.6 13.6 0 12.4 0 9.6V4C0 1.2 1.6 0 4 0H12C14.4 0 16 1.2 16 4V9.6C16 12.4 14.4 13.6 12 13.6Z" fill="currentColor"></path>
                                                <path d="M8.0006 7.49604C7.3286 7.49604 6.64861 7.28804 6.12861 6.86404L3.6246 4.86404C3.3686 4.65604 3.32061 4.28004 3.52861 4.02404C3.73661 3.76804 4.11261 3.72005 4.36861 3.92805L6.8726 5.92805C7.4806 6.41605 8.5126 6.41605 9.1206 5.92805L11.6246 3.92805C11.8806 3.72005 12.2646 3.76004 12.4646 4.02404C12.6726 4.28004 12.6326 4.66404 12.3686 4.86404L9.8646 6.86404C9.3526 7.28804 8.6726 7.49604 8.0006 7.49604Z" fill="currentColor"></path>
                                            </svg>

                                        </label>
                                    </div>
									<div class="custom_input_style__two mt-3">
										<span class="label-radio">Jenis Kelamin</span><br>
										<div class="d-flex">
											<div class="d-flex mr-3">
												<input class="form-radio" type="radio" name="jk_kelamin">
												<label class="label-form-radio">
													Laki laki
												</label>
											</div>
											<div class="d-flex">
												<input class="form-radio" type="radio" name="jk_kelamin">
												<label class="label-form-radio" >
													Perempuan
												</label>
											</div>
										</div>
                                    </div>
									<div class="custom_input_style__two mt-3">
                                        <textarea name="alamat" id="alamat" placeholder="Alamat" autocomplete="off"></textarea>
                                    </div>
                                    <div class="custom_input_style__two mt-3">
                                        <input type="password" placeholder="Password" name="password" id="password" autocomplete="off">

                                        <label for="password">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.3977 5.4V7.08001C13.0457 7.032 12.6457 7.008 12.1977 7V5.4C12.1977 2.88 11.4857 1.2 7.99766 1.2C4.50966 1.2 3.79766 2.88 3.79766 5.4V7C3.34966 7.008 2.94966 7.032 2.59766 7.08001V5.4C2.59766 3.08 3.15766 0 7.99766 0C12.8377 0 13.3977 3.08 13.3977 5.4Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M16 11V12.6C16 15.8 15.2 16.6 12 16.6H4C0.8 16.6 0 15.8 0 12.6V11C0 8.328 0.56 7.328 2.6 7.08C2.952 7.032 3.352 7.008 3.8 7H12.2C12.648 7.008 13.048 7.032 13.4 7.08C15.44 7.328 16 8.328 16 11Z" fill="currentColor"></path>
                                                <path d="M4.8 12.6C4.696 12.6 4.592 12.576 4.496 12.536C4.392 12.496 4.31201 12.44 4.23201 12.368C4.08801 12.216 4 12.008 4 11.8C4 11.696 4.02399 11.592 4.06399 11.496C4.10399 11.4 4.16001 11.312 4.23201 11.232C4.31201 11.16 4.392 11.104 4.496 11.064C4.792 10.936 5.14399 11.008 5.36799 11.232C5.43999 11.312 5.49601 11.4 5.53601 11.496C5.57601 11.592 5.6 11.696 5.6 11.8C5.6 12.008 5.51199 12.216 5.36799 12.368C5.21599 12.512 5.008 12.6 4.8 12.6Z" fill="currentColor"></path>
                                                <path d="M7.99531 12.6C7.77931 12.6 7.57932 12.512 7.42732 12.368C7.35532 12.288 7.2993 12.2 7.2593 12.104C7.2193 12.008 7.19531 11.904 7.19531 11.8C7.19531 11.584 7.28332 11.384 7.42732 11.232C7.72332 10.936 8.25931 10.936 8.56331 11.232C8.70731 11.384 8.79531 11.584 8.79531 11.8C8.79531 11.904 8.77132 12.008 8.73132 12.104C8.69132 12.2 8.63531 12.288 8.56331 12.368C8.41131 12.512 8.20331 12.6 7.99531 12.6Z" fill="currentColor"></path>
                                                <path d="M11.2063 12.6C10.9983 12.6 10.7903 12.512 10.6383 12.368C10.4943 12.216 10.4062 12.016 10.4062 11.8C10.4062 11.584 10.4943 11.384 10.6383 11.232C10.9423 10.936 11.4782 10.936 11.7742 11.232C11.8062 11.272 11.8382 11.312 11.8702 11.36C11.9022 11.4 11.9263 11.448 11.9423 11.496C11.9663 11.544 11.9823 11.592 11.9903 11.64C11.9983 11.696 12.0063 11.752 12.0063 11.8C12.0063 12.008 11.9182 12.216 11.7742 12.368C11.6222 12.512 11.4143 12.6 11.2063 12.6Z" fill="currentColor"></path>
                                            </svg>
                                        </label>

                                    </div> <br>

                                    <button type="submit" name="register" class="submit-v2">Register</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
