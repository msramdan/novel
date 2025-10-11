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
									<input type="text" placeholder="Your full name" name="nama" id="name" autocomplete="off">
								</div>
								<div class="custom_input_style__two mt-3">
									<input type="email" placeholder="Email" name="email" id="email" autocomplete="off">
								</div>
								<div class="custom_input_style__two mt-3">
									<input type="text" placeholder="Username" name="username" id="username" autocomplete="off">
								</div>
								<div class="custom_input_style__two mt-3">
									<input type="text" placeholder="Phone" name="no_hp" id="no_hp" autocomplete="off">
								</div>
								<div class="custom_input_style__two mt-3">
									<label class="label-radio" style="display: block; margin-bottom: 10px; color: #8b92a7;">Jenis Kelamin</label>
									<div class="d-flex align-items-center" style="gap: 100px;">
										<div class="d-flex align-items-center">
											<input class="form-radio" type="radio" value="Laki Laki" name="jk_kelamin" id="laki_laki" style="margin-right: 8px;">
											<label class="label-form-radio" for="laki_laki" style="margin: 0; cursor: pointer; color: #c5c9d6;">
												Laki-laki
											</label>
										</div>
										<div class="d-flex align-items-center">
											<input class="form-radio" type="radio" value="Perempuan" name="jk_kelamin" id="perempuan" style="margin-right: 8px;">
											<label class="label-form-radio" for="perempuan" style="margin: 0; cursor: pointer; color: #c5c9d6;">
												Perempuan
											</label>
										</div>
									</div>
								</div>
								<div class="custom_input_style__two mt-3">
									<input type="text" placeholder="Alamat" name="alamat" id="alamat" autocomplete="off">
								</div>
								<div class="custom_input_style__two mt-3">
									<input type="password" placeholder="Password" name="password" id="password" autocomplete="off">
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
