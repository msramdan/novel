<div class="contact_wrapper__style bg-body-2 section_gap_y_top__2" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); margin-bottom: 0; padding-bottom: 0;">
	<div class="container">
		<div class="contact_form__wrap section_gap_y_top__3 section_gap_y_bottom__3" style="padding: 60px 0;">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-7 text-center">
					<!-- Icon/Logo -->
					<div class="app-icon" style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; backdrop-filter: blur(10px);">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17 1H7C5.34315 1 4 2.34315 4 4V20C4 21.6569 5.34315 23 7 23H17C18.6569 23 20 21.6569 20 20V4C20 2.34315 18.6569 1 17 1Z" stroke="white" stroke-width="2"/>
							<path d="M12 19H12.01" stroke="white" stroke-width="2" stroke-linecap="round"/>
							<rect x="8" y="4" width="8" height="2" rx="1" fill="white"/>
							<path d="M8 8H16" stroke="white" stroke-width="2" stroke-linecap="round"/>
						</svg>
					</div>
					
					<!-- Title -->
					<h2 class="contact__title" style="color: white; font-size: 2.5rem; font-weight: 700; margin-bottom: 15px;">
						<span style="background: linear-gradient(45deg, #fff, #f0f0f0); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Aplikasi Mobile Siap Diunduh</span>
					</h2>
					
					<!-- Version Info -->
					<div class="version-badge" style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 25px; padding: 8px 20px; display: inline-block; margin-bottom: 25px;">
						<p class="disc-text-2" style="color: white; margin: 0; font-size: 1.1rem; font-weight: 600;">
							📱 APK <?= ucfirst($this->fungsi->sett_website()->nama_website) ?> v1.0.0
						</p>
					</div>
					
					<!-- Features -->
					<div class="features" style="display: flex; justify-content: center; gap: 30px; margin: 30px 0;">
						<div class="feature-item" style="text-align: center;">
							<div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; backdrop-filter: blur(10px);">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="2"/>
									<path d="M19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12Z" stroke="white" stroke-width="2"/>
								</svg>
							</div>
							<span style="color: white; font-size: 0.9rem; font-weight: 500;">Updated</span>
						</div>
						<div class="feature-item" style="text-align: center;">
							<div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; backdrop-filter: blur(10px);">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<span style="color: white; font-size: 0.9rem; font-weight: 500;">Premium</span>
						</div>
						<div class="feature-item" style="text-align: center;">
							<div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; backdrop-filter: blur(10px);">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2"/>
									<path d="M9.08997 9.00008C9.32507 8.33175 9.78912 7.76819 10.3999 7.40921C11.0107 7.05024 11.7289 6.91902 12.4271 7.03879C13.1254 7.15857 13.7588 7.52161 14.215 8.06361C14.6713 8.60561 14.921 9.2916 14.92 10.0001C14.92 12.0001 11.92 13.0001 11.92 13.0001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M12 17H12.01" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<span style="color: white; font-size: 0.9rem; font-weight: 500;">Support</span>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Download Buttons -->
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-10">
					<div class="download-buttons" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 30px;">
						<a href="" target="_blank" class="download-btn" style="background: rgba(255,255,255,0.95); color: #667eea; text-decoration: none; padding: 15px 20px; border-radius: 12px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; transition: all 0.3s ease; border: 2px solid transparent;">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M7 10L12 15L17 10" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M12 15V3" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							Google Drive
						</a>
						<a href="" target="_blank" class="download-btn" style="background: rgba(255,255,255,0.95); color: #667eea; text-decoration: none; padding: 15px 20px; border-radius: 12px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; transition: all 0.3s ease; border: 2px solid transparent;">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M7 10L12 15L17 10" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M12 15V3" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							ZippyShare
						</a>
						<a href="" target="_blank" class="download-btn" style="background: rgba(255,255,255,0.95); color: #667eea; text-decoration: none; padding: 15px 20px; border-radius: 12px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; transition: all 0.3s ease; border: 2px solid transparent;">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M7 10L12 15L17 10" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M12 15V3" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							MediaFire
						</a>
					</div>
				</div>
			</div>
			
			<!-- Additional Info -->
			<div class="row justify-content-center" style="margin-top: 30px;">
				<div class="col-xl-6 col-lg-7 text-center">
					<p style="color: rgba(255,255,255,0.8); font-size: 0.9rem; margin: 0;">
						⭐ Compatible dengan Android 5.0+ | Size: ~25MB | Free Download
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
.download-btn:hover {
	transform: translateY(-3px);
	box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
	background: white !important;
	border-color: #667eea !important;
}

/* Responsive Design */
@media (max-width: 768px) {
	.contact__title {
		font-size: 2rem !important;
	}
	
	.features {
		gap: 20px !important;
	}
	
	.download-buttons {
		grid-template-columns: 1fr !important;
	}
	
	.feature-item {
		flex: 1;
	}
}
</style>
