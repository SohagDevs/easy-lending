<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ready eCommerce - Documentation Provider By Razinsoft</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Ready eCommerce - Documentation Provider By Razinsoft">
	<meta name="author" content="Razinsoft">
	<link rel="shortcut icon" href="/assets/images/Ready-ecommerce-fevIcon.png" type="image/x-icon">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- FontAwesome JS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
	<link rel="stylesheet" href="/assets/plugins/simplelightbox/simple-lightbox.min.css">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="/assets/css/theme.css">
	<link id="theme-style" rel="stylesheet" href="/assets/css/customize.css">

</head>

<body class="docs-page">
	<?php
	include_once "navbar.php"; 
	?>
	<div class="container">
		<div class="docs-wrapper">
			<div id="docs-sidebar" class="docs-sidebar">
				<div class="top-search-box d-lg-none p-3">
					<form class="search-form">
						<input type="text" placeholder="Search the docs..." name="search"
							class="form-control search-input">
						<button type="submit" class="btn search-btn" value="Search"><i
								class="fas fa-search"></i></button>
					</form>
				</div>
				<nav id="docs-nav" class="docs-nav navbar">
					<ul class="section-items list-unstyled nav flex-column pb-3">
						<li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span
									class="theme-icon-holder me-2"><i
										class="fas fa-map-signs"></i></span>Introduction</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">System Requirements 1.1</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Suggested Server 1.2</a>
						</li>
						<li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span
									class="theme-icon-holder me-2"><i class="fas fa-tablet-alt"></i></span>Flutter
								Mobile
								App</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">Flutter Project Run 2.1</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">Playstore Publish 2.2</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">App store Publish 2.3</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-2-4">FCM Configuration 2.4</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-2-5">Firebase CLI Setup 2.5</a>
						</li>
						<li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span
									class="theme-icon-holder me-2"><i class="fas fa-laptop-code"></i></span>Web and
								Admin</a></li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">Website & Admin Panel 3.1</a></li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">Install on Localhost 3.2</a>
						</li>
						<li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">System Update 3.3</a></li>
					</ul>

				</nav><!--//docs-nav-->
			</div><!--//docs-sidebar-->


			<div class="docs-content">
				<div class="container">
					<article class="docs-article" id="section-1">
						<header class="docs-header">
							<h1 class="docs-heading">Introduction <span class="docs-time">Last updated:
									21 December 2024</span>
							</h1>

							<section class="docs-intro">
								<h4><span class="linkHlight">Welcome to Ready eCommerce</span> documentation and thank you
									for choosing Ready eCommerce.
								</h4>
								<p>This documentation is here to guide you through installing the project. It includes
									detailed, step-by-step instructions to make the installation easy. Please take the
									time to read the guide carefully and follow each step. By doing so, you’ll be able
									to set up the project smoothly and without any issues.</p>
								<div>
									<hr>
									<p>We sincerely thank you for purchasing our product on CodeCanyon. Your trust in
										our offering is highly valued.</p>
									<div class="row">
										<div class="col-sm-6 col-lg-4">
											<ul class="list-unstyled">
												<li><strong>Version:</strong> <span class="linkHlight">3.0.0</span></li>
												<li><strong>Author:</strong> <a class="linkHlight"
														href="https://razinsoft.com/" target="_blank">Razinsoft</a></li>
											</ul>
										</div>
										<div class="col-sm-6 col-lg-4">
											<ul class="list-unstyled">
												<li><strong class="font-weight-700">Created:</strong> <span
														class="linkHlight">16 June 2024</span>
												</li>
												<li><strong class="font-weight-700">Updated:</strong> <span
														class="linkHlight">16 January 2025</span>
												</li>
											</ul>
										</div>
									</div>
									<p class="alert alert-info">If you have any questions not addressed in this help
										file, please feel free to reach out to us via the Item <a class="linkHlight"
											target="_blank" href="https://razinsoft.com/contact-us">Item Support
											Page</a>.</p>
								</div>
							</section><!--//docs-intro-->

						</header>

						<section class="docs-section" id="item-1-1">
							<h2 class="section-heading" style="margin-bottom: 2rem;">System Requirements 1.1</h2>


							<h3>The required specifications for the <span class="heightLight">Admin Panel</span>.</h3>
							<div class="row versionBox">
								<div class="col-md-6 versionCard alternate">
									<li style="--versionCard-color-accent:#617EB4">
										<div class="step"><i class="fa-brands fa-php"></i></div>
										<div class="vTitle">PHP Version: 8.2.x</div>
										<div class="content">PHP Version 8.2.x must be installed on your system to
											proceed further.</div>
									</li>
									<li style="--versionCard-color-accent:#00758F">
										<div class="step"><i><img src="/assets/images/mysql.png" width="30px"></i></div>
										<div class="vTitle">MySQL Version: 8.x</div>
										<div class="content">MySQL Version 8.x must be installed on your system to
											proceed further.</div>
									</li>
								</div>
								<div class="col-md-6 versionCard alternate  ">
									<li style="--versionCard-color-accent:#F34C36">
										<div class="step"><i class="fa-brands fa-laravel"></i></div>
										<div class="vTitle">Laravel Version: 10.x</div>
										<div class="content">Laravel Version 10.x must be installed on your system to
											proceed further.</div>
									</li>
									<li style="--versionCard-color-accent:#89552C">
										<div class="step"><i><img src="/assets/images/composer.svg" width="30px"></i></div>
										<div class="vTitle">Composer Version: 2.7.x</div>
										<div class="content">Composer Version 2.7.x must be installed on your system to
											proceed further.</div>
									</li>
								</div>
							</div>

							<h3 class="mt-3">The required specifications for the <span class="heightLight">Flutter
									App</span>.</h3>
							<div class="row versionBox">
								<div class="col-md-6 versionCard alternate">
									<li style="--versionCard-color-accent:#E87408">
										<div class="step"><i class="fa-brands fa-java"></i></div>
										<div class="vTitle">JDK Version: 21.0.5</div>
										<div class="content">Java Version 21 must be installed on your system to proceed
											further.</div>
									</li>
									<li style="--versionCard-color-accent:#1DBBFD">
										<div class="step"><i class="fa-brands fa-flutter"></i></div>
										<div class="vTitle">Flutter SDK: 3.24.0</div>
										<div class="content">Flutter SDK 3.24.0 must be installed on your system to
											proceed further.</div>
									</li>
								</div>
								<div class="col-md-6 versionCard alternate  ">
									<li style="--versionCard-color-accent:#08C6B5">
										<div class="step"><i class="fa-brands fa-dart-lang"></i></div>
										<div class="vTitle">Dart Version: 3.5.0</div>
										<div class="content">Dart Version 3.5.0 must be installed on your system to
											proceed further.</div>
									</li>
									<li style="--versionCard-color-accent:#76C676">
										<div class="step"><i class="fa-brands fa-android"></i></div>
										<div class="vTitle">Android SDK: 35.0.0</div>
										<div class="content">Android Version 2022.3 must be installed on your system to
											proceed further.</div>
									</li>
								</div>
							</div>

						</section><!--//section-->

						<section class="docs-section" id="item-1-2">
							<h2 class="section-heading">Suggested Server 1.2</h2>
							<div class="row d-flex justify-content-center">
								<!-- Design Card -->
								<div class="col-md-4 mb-4">
									<div class="serverCard DigitalOcean">
										<div class="top-shape"></div>
										<div class="bottom-shape"></div>
										<div class="icon-container">
											<img src="/assets/images/features/serverLogo/DigitalOcean.png" width="60px"
												alt="DigitalOcean">
										</div>
										<h3>DigitalOcean</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
										<a target="_blank" href="https://www.digitalocean.com/"
											class="readMore DigitalOcean-btn">Read More</a>
									</div>
								</div>

								<!-- Development Card -->
								<div class="col-md-4 mb-4">
									<div class="serverCard Hostinger">
										<div class="top-shape"></div>
										<div class="bottom-shape"></div>
										<div class="icon-container">
											<img src="/assets/images/features/serverLogo/Hostinger.png" width="60px"
												alt="Hostinger">
										</div>
										<h3>Hostinger</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
										<a target="_blank" href="https://www.hostinger.com/"
											class="readMore Hostinger-btn">Read More</a>
									</div>
								</div>

								<!-- Launch Card -->
								<div class="col-md-4 mb-4">
									<div class="serverCard Namecheap">
										<div class="top-shape"></div>
										<div class="bottom-shape"></div>
										<div class="icon-container">
											<img src="/assets/images/features/serverLogo/namecheap.png" width="60px"
												alt="Namecheap">
										</div>
										<h3>Namecheap</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
										<a target="_blank" href="https://www.namecheap.com/"
											class="readMore Namecheap-btn">Read More</a>
									</div>
								</div>

								<div class="col-md-4 mb-4">
									<div class="serverCard GoDaddy">
										<div class="top-shape"></div>
										<div class="bottom-shape"></div>
										<div class="icon-container">
											<img src="/assets/images/features/serverLogo/godaddy.png" width="60px"
												alt="GoDaddy">
										</div>
										<h3>GoDaddy</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
										<a target="_blank" href="https://www.godaddy.com/en-ph"
											class="readMore GoDaddy-btn">Read More</a>
									</div>
								</div>

								<div class="col-md-4 mb-4">
									<div class="serverCard GoogleCloud">
										<div class="top-shape"></div>
										<div class="bottom-shape"></div>
										<div class="icon-container">
											<img src="/assets/images/features/serverLogo/google-cloud.png" width="60px"
												alt="Google Cloud">
										</div>
										<h3>Google Cloud</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
										<a target="_blank" href="https://cloud.google.com/solutions/web-hosting?hl=en"
											class="readMore GoogleCloud-btn">Read More</a>
									</div>
								</div>

								<div class="col-md-4 mb-4">
									<div class="serverCard InMotion">
										<div class="top-shape"></div>
										<div class="bottom-shape"></div>
										<div class="icon-container">
											<img src="/assets/images/features/serverLogo/InMotion_Hosting_Logo.png"
												width="60px" alt="InMotio-Hosting">
										</div>
										<h3>InMotion Hosting</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
										<a target="_blank" href="https://www.inmotionhosting.com/"
											class="readMore InMotion-btn">Read More</a>
									</div>
								</div>
							</div>


						</section>
						<!--//section-->
					</article>


					<article class="docs-article" id="section-2">
						<header class="docs-header">
							<h1 class="docs-heading">Flutter Mobile App Installation</h1>
							<section class="docs-intro">
								<h3>Follow This Instructions</h3>
								<div class="crayons-article__body text-styles spec__body" data-article-id="1409695"
									id="article-body">
									<h2><a name="prerequisites" href="#prerequisites"></a>Prerequisites</h2>
									<p>This guide assumes Git is already installed. If not, <a
											href="https://git-scm.com/download/win" target="_blank"
											rel="noopener noreferrer"><strong>download Git here</strong></a>. For
										installation and basic usage, refer to this <a
											href="https://youtu.be/8JJ101D3knE" target="_blank"
											rel="noopener noreferrer"><strong>video tutorial</strong></a>.</p>
									<p>Now, let's get started!</p>

									<p>Download the latest version of <a href="https://developer.android.com/studio"
											target="_blank" rel="noopener noreferrer"><strong>Android
												Studio</strong></a>, currently
										<code>Android Studio Electric Eel | 2022.1.1 Patch 2 for Windows</code>. Expect
										newer releases later.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-01.png"
											width="100%" alt="flutter-system-setup-screen-01" loading="lazy" /></div>

									<p>Next, download <a href="https://code.visualstudio.com/download" target="_blank"
											rel="noopener noreferrer"><strong>Visual Studio Code (VS Code)</strong></a>
										for your respective operating system (Windows, Linux, or Mac).</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-02.png"
											width="100%" alt="flutter-system-setup-screen-02" loading="lazy" /></div>
									<p>Finally, download the <a
											href="https://www.oracle.com/java/technologies/javase/jdk19-archive-downloads.html"
											target="_blank" rel="noopener noreferrer"><strong>JDK from
												Oracle</strong></a>, currently using <code>JDK 19.0.2</code> in this
										article (although <code>JDK 20</code> is available).</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-03.png"
											width="100%" alt="flutter-system-setup-screen-03" loading="lazy" /></div>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-04.png"
											width="100%" alt="flutter-system-setup-screen-04" loading="lazy" /></div>

									<h2><a name="installing-amp-configuring-jdk-and-javahome"
											href="#installing-amp-configuring-jdk-and-javahome"></a>Installing &
										Configuring JDK and JAVA_HOME</h2>
									<p>To start installation, navigate to the folder containing the JDK installation
										file (typically named "<em>jdk_XX_OS-Name_Processor-Type_bin</em>") and
										double-click to run the installer.</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-05.png"
											width="100%" alt="flutter-system-setup-screen-05" loading="lazy" /></div>

									<p>Upon running the setup, you'll be greeted with the initial screen. Click "Next".
										You'll then see the option to customize your JDK installation. Click on
										"Change".</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-06.png"
											width="100%" alt="flutter-system-setup-screen-06" loading="lazy" /></div>


									<p>Click "Change" to modify the JDK directory. Avoid using "whitespaces" in the
										directory path as shown below:</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-07.png"
											width="100%" alt="flutter-system-setup-screen-07" loading="lazy" /></div>

									<p>The installation will take a few minutes. Accept User Access Control by clicking
										"Yes" when prompted. Once complete, click "Close" when the setup confirms your
										JDK installation at a directory like <code>C:\Users\Dexter\java\jdk19.02</code>.
									</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-08.png"
											width="100%" alt="flutter-system-setup-screen-08" loading="lazy" /></div>

									<p>Next, set the <code>JAVA_HOME</code> environment variable. Search for "PATH" and
										click "Edit the system environment variables".</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-09.png"
											width="100%" alt="flutter-system-setup-screen-09" loading="lazy" /></div>

									<p>Click on "Environment Variables", then "New" under the <em>System variables</em>
										section. Enter <code>JAVA_HOME</code> for the <em>Variable name</em> and the JDK
										path (e.g., <code>C:\Users\Dexter\java\jdk19.02</code>) for the <em>Variable
											value</em>. Click "OK".</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-10.png"
											width="100%" alt="flutter-system-setup-screen-10" loading="lazy" /></div>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-11.png"
											width="100%" alt="flutter-system-setup-screen-11" loading="lazy" /></div>

									<p>Now you’ve successfully installed and configured the JDK on your Windows machine.
										You can now proceed to install and configure Android Studio.</p>

									<h4><a name="">Installing & Configuring Android Studio</a></h4>

									<p>First, download <a href="https://developer.android.com/studio" target="_blank"
											rel="noopener noreferrer"><strong>Android Studio</strong></a> if you haven't
										already. I’ll be waiting for you! 😉</p>

									<p>Once downloaded, during installation, set the directory to
										<code>C:\Users\Dexter\Android\AndroidStudio</code>. Avoid spaces in the path, as
										this is important for correct configuration with commands like
										<code>flutter run</code>, <code>flutter doctor</code>,
										<code>flutter pub get</code>, and <code>flutter upgrade</code>.
									</p>

									<p>The installation may take about 30 minutes, depending on your system. You'll also
										need to install the Android SDKs. In the <strong><a
												href="https://developer.android.com/studio" target="_blank"
												rel="noopener noreferrer">SDK Manager</a></strong>, ensure you select
										the required options under the <strong>SDK Platforms</strong> tab, then move to
										<strong>SDK Tools</strong> for additional tool selections.
									</p>

									<p>Click <strong><a href="https://developer.android.com/studio" target="_blank"
												rel="noopener noreferrer">Apply</a></strong> to proceed with
										installation.</p>

									<p><em>Note:</em> I prefer using a physical device over a virtual one for
										development.</p>

									<p>During setup, confirm by clicking <strong>"OK"</strong> when prompted. Then,
										agree to the license terms and select <strong>"Accept"</strong> before
										proceeding by clicking <strong>"Next"</strong>.</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-12.png"
											width="100%" alt="flutter-system-setup-screen-12" loading="lazy" /></div>


									<p>Wait for the setup process to complete. If interrupted, you'll need to restart
										the process.</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-13.png"
											width="100%" alt="flutter-system-setup-screen-13" loading="lazy" /></div>

									<p>Once finished, click <strong>"Finish"</strong>.</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-14.png"
											width="100%" alt="flutter-system-setup-screen-14" loading="lazy" /></div>


									<p>Now, navigate to <strong>"Plugins"</strong> in the left pane. Search for the
										<strong>"Flutter"</strong>, <strong>"Dart"</strong>, and
										<strong>"Gradle"</strong> plugins in the "Marketplace" tab and install them.
										Restart Android Studio to activate the plugins.
									</p>
									<p><strong>Note:</strong> Install all necessary plugins before restarting Android
										Studio.</p>

									<h2><a name="installing-amp-configuring-vs-code"
											href="#installing-amp-configuring-vs-code"></a>Installing & Configuring VS
										Code</h2>

									<p>Next, download and install <strong>VS Code</strong>. Run the installation and
										click <strong>"I accept the agreement"</strong>, then <strong>"Next"</strong>.
									</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-15.png"
											width="100%" alt="flutter-system-setup-screen-15" loading="lazy" /></div>


									<p>Select all options to customize your installation, then click
										<strong>"Next"</strong> and <strong>"Install"</strong>.
									</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-16.png"
											width="100%" alt="flutter-system-setup-screen-16" loading="lazy" /></div>


									<p>Click <strong>"Install"</strong> and wait for the process to finish.</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-17.png"
											width="100%" alt="flutter-system-setup-screen-17" loading="lazy" /></div>


									<p>When done, click <strong>"Finish"</strong> to complete the installation.</p>

									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-18.png"
											width="100%" alt="flutter-system-setup-screen-18" loading="lazy" /></div>


									<p>
										Once your VS Code is running, you'll be greeted by the "<em>Welcome</em>" page.
										While my setup is customized, you should see this page in its default form.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-19.png"
											width="100%" alt="flutter-system-setup-screen-19" loading="lazy" /></div>


									<h2>Installing & Configuring Flutter SDK</h2>
									<p>
										Download the latest <a
											href="https://docs.flutter.dev/get-started/install/windows" target="_blank"
											rel="noopener noreferrer">Flutter SDK</a> from the official site. At the
										time of writing, the latest version is
										<code>flutter_windows_3.7.9-stable</code>.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-20.png"
											width="100%" alt="flutter-system-setup-screen-20" loading="lazy" /></div>

									<p>
										After downloading, extract the folder named <em>flutter</em> to a directory
										without spaces, such as <code>C:\Users\Dexter\flutter</code>.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-21.png"
											width="100%" alt="flutter-system-setup-screen-21" loading="lazy" /></div>

									<p>
										Run the following command to verify installation:
										<code>flutter --version</code>.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-22.png"
											width="100%" alt="flutter-system-setup-screen-22" loading="lazy" /></div>

									<p>
										Then run <code>flutter doctor</code> to check for necessary dependencies.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-23.png"
											width="100%" alt="flutter-system-setup-screen-23" loading="lazy" /></div>
									<p>
										After some processing, run <code>flutter doctor</code> again to complete the
										setup.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-24.png"
											width="100%" alt="flutter-system-setup-screen-24" loading="lazy" /></div>

									<p>
										If you encounter "Android SDK Licenses" issues, run the command
										<code>flutter doctor --android-licenses</code> to accept the necessary SDK
										licenses.
									</p>

									<h2>Verify Your Installation</h2>
									<p>
										Check your Git version by running <code>git --version</code> in the shell.
									</p>
									<div class="flutter-image"><img class="imageBox-shadow"
											src="/assets/images/features/flutter-system-setup/flutter-system-setup-screen-25.png"
											width="100%" alt="flutter-system-setup-screen-25" loading="lazy" /></div>

									<p>
										Run the commands <code>flutter --version</code> and <code>flutter doctor</code>
										to confirm everything is working.
									</p>
									<p><strong>Note:</strong> If you see warnings about Chrome or Visual Studio, don't
										worry—these are not critical. We'll cover Visual Studio installation later for
										Windows desktop app development using Flutter.</p>

									<h2>Conclusion</h2>
									<p>
										You've successfully set up Flutter on your Windows machine! Check the Flutter
										installation page for updated instructions and specific versions.
									</p>

								</div>
							</section>
						</header>

						<section class="docs-section" id="item-2-1">
							<h2 class="section-heading" style="margin-bottom: 2rem;">Flutter Project Run 2.1</h2>

							<p><strong>3. Download and Extract the Project:</strong></p>
							<ul>
								<li><strong>Download the Package:</strong> Go to your Codecanyon account and download
									the Ready eCommerceFlutter app package.</li>
								<li><strong>Extract the Files:</strong> Extract the downloaded ZIP file to a preferred
									location on your computer.</li>
							</ul>

							<p><strong>4. Set Up Your Development Environment:</strong></p>
							<ul>
								<li><strong>Install Flutter and Dart:</strong> Follow the instructions on the <a
										href="https://flutter.dev/docs/get-started/install" target="_blank">Flutter
										installation page</a> to install Flutter and Dart.</li>
								<li><strong>Configure Your IDE:</strong> Install and configure your preferred IDE
									(Android Studio, VS Code, or IntelliJ IDEA). Install the Flutter and Dart plugins.
								</li>
							</ul>

							<p><strong>5. Open the Project:</strong></p>
							<ul>
								<li><strong>Open Your IDE:</strong> Launch your IDE (Android Studio, VS Code, or
									IntelliJ IDEA).</li>
								<li><strong>Open the Project Folder:</strong> Use the "Open" or "Import" option in your
									IDE to open the folder where you extracted the project.</li>
							</ul>

							<p><strong>6. Install Dependencies:</strong></p>
							<ul>
								<li><strong>Open Terminal/Command Prompt:</strong> Navigate to the project directory:
									<div class="code-snippet">
										<div class="code-header">
											<span class="code-lang">bash</span>
											<button class="copy-btn" onclick="copyToClipboard(this)">
												<svg class="icon-sm" xmlns="http://www.w3.org/2000/svg" width="24"
													height="24" fill="none" viewBox="0 0 24 24">
													<path fill="currentColor" fill-rule="evenodd"
														d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z"
														clip-rule="evenodd"></path>
												</svg>
												<span>Copy code</span>
											</button>
										</div>
										<pre><code id="bash-command">cd path/to/your/project</code></pre>
									</div>
								</li>
								<li><strong>Install Dependencies:</strong> Run the following command to fetch and
									install the required dependencies:
									<div class="code-snippet">
										<div class="code-header">
											<span class="code-lang">bash</span>
											<button class="copy-btn" onclick="copyToClipboard(this)">
												<svg class="icon-sm" xmlns="http://www.w3.org/2000/svg" width="24"
													height="24" fill="none" viewBox="0 0 24 24">
													<path fill="currentColor" fill-rule="evenodd"
														d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z"
														clip-rule="evenodd"></path>
												</svg>
												<span>Copy code</span>
											</button>
										</div>
										<pre><code id="bash-command">flutter pub get</code></pre>
									</div>
								</li>
							</ul>

							<p><strong>7. Set Up Emulator or Device:</strong></p>
							<ul>
								<li><strong>Android Emulator:</strong> Open Android Studio and go to the AVD Manager.
									Create or start an Android Virtual Device (AVD).</li>
								<li><strong>iOS Simulator (macOS only):</strong> Open Xcode and start the iOS Simulator.
								</li>
							</ul>

							<p><strong>8. Run the App:</strong></p>
							<ul>
								<li><strong>Run the App:</strong> Ensure your emulator/device is connected and running.
									In your IDE, run the following command or use the built-in run feature:
									<div class="code-snippet">
										<div class="code-header">
											<span class="code-lang">bash</span>
											<button class="copy-btn" onclick="copyToClipboard(this)">
												<svg class="icon-sm" xmlns="http://www.w3.org/2000/svg" width="24"
													height="24" fill="none" viewBox="0 0 24 24">
													<path fill="currentColor" fill-rule="evenodd"
														d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z"
														clip-rule="evenodd"></path>
												</svg>
												<span>Copy code</span>
											</button>
										</div>
										<pre><code id="bash-command">flutter run</code></pre>
									</div>
								</li>
							</ul>

							<p><strong>9. Build the App for Release:</strong></p>
							<ul>
								<li><strong>For Android:</strong> Run the following command to generate a release APK:
									<div class="code-snippet">
										<div class="code-header">
											<span class="code-lang">bash</span>
											<button class="copy-btn" onclick="copyToClipboard(this)">
												<svg class="icon-sm" xmlns="http://www.w3.org/2000/svg" width="24"
													height="24" fill="none" viewBox="0 0 24 24">
													<path fill="currentColor" fill-rule="evenodd"
														d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z"
														clip-rule="evenodd"></path>
												</svg>
												<span>Copy code</span>
											</button>
										</div>
										<pre><code id="bash-command">flutter build apk --release</code></pre>
									</div>
								</li>
								<li><strong>For iOS:</strong> Run the following command to generate a release build for
									iOS:
									<div class="code-snippet">
										<div class="code-header">
											<span class="code-lang">bash</span>
											<button class="copy-btn" onclick="copyToClipboard(this)">
												<svg class="icon-sm" xmlns="http://www.w3.org/2000/svg" width="24"
													height="24" fill="none" viewBox="0 0 24 24">
													<path fill="currentColor" fill-rule="evenodd"
														d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z"
														clip-rule="evenodd"></path>
												</svg>
												<span>Copy code</span>
											</button>
										</div>
										<pre><code id="bash-command">flutter build ios --release</code></pre>
									</div>
								</li>
							</ul>

							<p><strong>10. Final Checks:</strong></p>
							<ul>
								<li><strong>Run Tests:</strong> Ensure that you have run all tests to verify the app
									functions as expected.</li>
								<li><strong>Update App Version:</strong> Don’t forget to increment the app version in
									the <strong>pubspec.yaml</strong> file for the release.</li>
							</ul>

						</section>
						<!--//section-->
						<!-- Publish-By-Google-PlayStore-Start -->
						<section class="docs-section" id="item-2-2">
							<h2 class="section-heading" style="margin-bottom: 2rem;">Play store Publish 2.2</h2>
							<h4><strong>How to Publish Your Android App on the Play Store</strong></h4>

							<p><strong>Before publishing your app, consider the following:</strong></p>

							<ul>
								<li><strong>Prepare Your Assets:</strong> Have high-quality app screenshots,
									descriptions,
									and your APK ready for upload.</li>
								<li><strong>App Signing:</strong> If using an Android App Bundle, enroll in Play App
									Signing
									for added security. This keeps your app signing key stored safely on Google's secure
									infrastructure.</li>
								<li><strong>File Size Limit:</strong> Keep your app's size under 150 MB to avoid
									download
									issues. Remove any unused code or resources if necessary.</li>
							</ul>

							<h4><strong>A Step-By-Step Guide</strong></h4>
							<h3>Step 1 – Google Play Console Developer Account.</h3>
							<p>Creating a Google Developer Account on the Google Play Console is one of the essential
								steps
								in publishing an Android app to the Play Store. The Google Play Console serves as the
								backend platform for managing and publishing apps on the Play Store. Developers must
								establish a developer account, which requires a one-time fee of $25, payable via credit
								card
								or online banking. After submission, please note that the account activation process may
								take up to 48 hours.</p>
							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-01.png"
									width="100%" alt="Publish-By-Google-Playtore-01" loading="lazy" /></div>

							<p>Sign in to the Google Play Console using your Gmail ID. After signing in, select whether
								the
								app account will be owned by an individual or an organization. Provide the required
								basic
								information, complete the payment process, and finalize your account creation.</p>
							<p>Finally, ensure you fill out all the credentials asked while creating the account.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-02.png"
									width="100%" alt="Publish-By-Google-Playtore-02" loading="lazy" /></div>

							<h3>Step 2 – Set-up up a Google Merchant Account.</h3>
							<p>If your app includes in-app purchases, link your developer account to a Google Merchant
								Account. If you already have a merchant account, go to <strong>Download reports >
									Financial</strong> to access financial data. Don’t have one? Create a Google
								Merchant
								Account to enable this feature.</p>
							<p>And to create one, click on setup up a merchant account.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-03.png"
									width="100%" alt="Publish-By-Google-Playtore-03" loading="lazy" /></div>
							<p>After creating your merchant account, it will automatically link to your Google Play
								Console,
								allowing you to manage app sales, monitor performance, and generate reports.</p>

							<h3>Step 3 – Create Application</h3>
							<p>Once the merchant account is linked to your Google Play Console, the next step is to
								create
								an</p>
							<p>application. And for creating an application, there are a few essential steps that you
								need
								to follow: </p>
							<ul class="wp-block-list">
								<li>Click on – Menu &gt; All applications</li>
								<li>Select the ‘Create Application’ option.</li>
							</ul>
							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-04.png"
									width="100%" alt="Publish-By-Google-Playtore-04" loading="lazy" /></div>
							<p>Next, the play console will ask you to enter some basic app details. For instance,</p>
							<ul class="wp-block-list">
								<li>App Name – You must enter a 30-character long name in this field which will be
									displayed
									on the Google Play Console. However, this app name can be changed
									afterward.&nbsp;<br>
								</li>
								<li>Default language – Another essential field is the setup of the app language. You can
									navigate to the drop-down menu and set a default language for your app.<br></li>
								<li>App or game – The next step is to define whether you upload an app or a game, but
									this
									can again be revised afterward from the store settings.<br></li>
								<li>Free or paid – Define whether your app will be available free of cost or will
									require
									the user to pay for it. The free or paid section can be updated from the Paid app
									page
									later, but only until you publish your app. Once the app is live, you cannot
									transform
									your app from free to paid.</li>
							</ul>
							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-05.png"
									width="100%" alt="Publish-By-Google-Playtore-05" loading="lazy" /></div>

							<p>Next, you need to set up the bundle identifier for your app. </p>
							<p>Once all of the above information is filled and verified, the Google Play Console will
								enquire for affirmations from you. Ensure that your app matches the Google policies of
								the
								Developer Program and Accepts US export laws. As soon as you agree to the terms and
								conditions, click <strong>Create App</strong>.<br></p>

							<h3>Step 4. App Store Listing Details</h3>
							<p>Click ‘Create App’ on the Google Play Console to access the setup dashboard. Here, you’ll
								provide key details such as the app name, description, category, tags, and contact
								information to complete your app listing.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-06.png"
									width="100%" alt="Publish-By-Google-Playtore-06" loading="lazy" /></div>

							<p>The Google Play Console will enquire about the following:</p>
							<ul>
								<li><strong>App Name:</strong> Already provided in the previous step. If needed, you can
									revise it here.</li>
								<li><strong>Short Description:</strong> Enter an 80-character summary that best captures
									your app’s purpose.</li>
								<li><strong>Full Description:</strong> Elaborate on your app in up to 4,000 characters.
									Include targeted keywords to optimize discoverability for the right audience.</li>
							</ul>
							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-07.png"
									width="100%" alt="Publish-By-Google-Playtore-07" loading="lazy" /></div>

							<p>After entering the information in the Google Play Console, the next step is to upload app
								graphics, select the app category, and add the privacy policy. Ensure you use the
								high-quality images prepared earlier for this stage of the publishing process.</p>
							<strong class="mt-3">Further, here are the details you would require:</strong>
							<div class="container mt-3">
								<table class="table table-bordered table-striped">
									<thead class="table-dark text-center">
										<tr>
											<th><strong class="text-light">Particulars</strong></th>
											<th><strong class="text-light">Details</strong></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Screenshots</strong></td>
											<td>2 to 8 in number, JPG or PNG. The ratio shouldn’t exceed 2:1.</td>
										</tr>
										<tr>
											<td><strong>Icon</strong></td>
											<td>512 x 512, PNG, Maximum file size: 1024KB.</td>
										</tr>
										<tr>
											<td><strong>Localization</strong></td>
											<td>
												If your app supports multiple languages, mention them and add
												translations
												to make your app information accessible to a broader audience.
											</td>
										</tr>
										<tr>
											<td><strong>Application Type and Categorization</strong></td>
											<td>
												Select application type (game or app) from the drop-down menu.
												Choose a suitable category for your app. Rate your content after
												uploading
												your APK.
											</td>
										</tr>
										<tr>
											<td><strong>Contact Details</strong></td>
											<td>Provide necessary contact forms for users to reach you.</td>
										</tr>
										<tr>
											<td><strong>Privacy Policy</strong></td>
											<td>
												Add a privacy policy to comply with Google's guidelines and ensure app
												privacy.
												If you need more time, save your work as a draft and return later.
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>Once you are done uploading details, Hit the Save button.</p>
							<p><strong>Also, Read- <a
										href="https://www.copperdigital.com/blog/mobile-app-security-a-comprehensive-guide-to-secure-your-apps/"
										target="_self" rel="noreferrer noopener follow" data-wpel-link="internal">Mobile
										App
										Security: A Comprehensive Guide to Secure Your Apps</a></strong></p>
							<p>The next critical step is completing the content rating questionnaire. Without this,
								Google
								will classify your app as 'Unrated' and may remove it from the Play Store. To avoid
								this,
								follow these steps to add a content rating.</p>
							<p>To add the content rating, you’ll have to navigate to the main dashboard, set up your
								app,
								and select the Content rating option.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-08.png"
									width="100%" alt="Publish-By-Google-Playtore-08" loading="lazy" /></div>

							<p>The Next dashboard will pop up, and you’ll be able to navigate the “Start Questionnaire”
								button; you have to click the tab and get started.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-09.png"
									width="100%" alt="Publish-By-Google-Playtore-09" loading="lazy" /></div>

							<p>In the content rating section, you'll provide basic information about your app. This
								section
								includes three subsections: Categories, Questionnaire, and Summary.</p>
							<p>In the Category section, provide a contact email for users and select the appropriate
								category for your app being published on the Play Store.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-10.png"
									width="100%" alt="Publish-By-Google-Playtore-10" loading="lazy" /></div>

							<p>After filling in the above fields, click the 'Next' button to proceed to the
								questionnaire
								section. This section helps Google gather more information about your app to better
								understand your target audience.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-11.png"
									width="100%" alt="Publish-By-Google-Playtore-11" loading="lazy" /></div>

							<p>Once all the details are filled in, you can look at the content rating summary and hit
								‘Submit’ to apply the changes.</p>

							<h3>Step 6 – Create & Upload Android App to Google Play</h3>
							<p>Uploading the APK to the Google Play Console is the first step in the app publishing
								process,
								where your app is submitted for Google's review and approval before going live</p>
							<p>Before uploading the app, it's important to decide on the release type: Internal Test (up
								to
								100 selected testers), Closed Test (limited testers), Production Release (available to
								all
								Play Store users in selected countries), or Open Test (available to Google Playtesters,
								with
								users joining through your store listing).</p>
							<p>Once you have decided on the testing, go to the dashboard and select “<strong>Create a
									new
									release.</strong>”</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-12.png"
									width="100%" alt="Publish-By-Google-Playtore-12" loading="lazy" /></div>

							<p>After selecting “<strong>Create a new release</strong>,” you will be redirected to a
								dashboard where you can upload the app bundles and enter the release details.</p>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/google-playStore-image/Publish-By-google-PlayStore-13.png"
									width="100%" alt="Publish-By-Google-Playtore-13" loading="lazy" /></div>

							<p>After entering all the details, double-check everything to ensure it's correct. Then,
								complete the final step by adding the app to the platform. Next, go to the ‘App
								Releases’
								tab, select ‘Manage Production’, and click on ‘Edit Release’. Proceed by clicking
								‘Review’,
								then select ‘Start rollout to production’.</p>

							<p>Finally, click ‘Confirm’, and that's it! Your app has been successfully uploaded to your
								Google Play Store account for free.</p>

						</section>
						<!-- Publish-By-Google-PlayStore-End -->

						<!-- Publish-By-Apple-AppStore-Start -->
						<section class="docs-section" id="item-2-3">
							<h2 class="section-heading" style="margin-bottom: 2rem;">App store Publish 2.3</h2>
							<h4><strong>Ready eCommerce: Publish Your App to the Apple App Store</strong></h4>
							<p>Here’s a simple guide to help you publish your app to the Apple App Store:</p>

							<ul>
								<li>
									<strong>Apple Developer Account</strong>
									<ul>
										<li>Create an Apple account if you don’t already have one.</li>
										<li>Join the Apple Developer Program and pay the $99/year membership fee.</li>
									</ul>
								</li>
								<li>
									<strong>Create a Bundle Identifier</strong>
									<p>This is a unique ID for your app within Apple’s system.</p>
									<ul>
										<li>Open your project in Draftbit.</li>
										<li>Go to <strong>Project Settings</strong>.</li>
										<li>Select <strong>Apple App Store</strong> from the menu.</li>
										<li>Enter your Bundle Identifier using the reverse DNS format (e.g.,
											<strong>com.example.appname</strong>).
										</li>
										<li>Click <strong>Save</strong>.</li>
									</ul>
								</li>
							</ul>

							<div class="codeBox">📘 Your Bundle Identifier should use the reverse-dns name structure.
								For
								example, if the domain you will use for this app is <code
									class="urlText">example.com</code>
								, set your Bundle Identifier to <code class="urlText">com.example.appname</code>.</div>

							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-01.png"
									width="100%" alt="Publish-By-Apple-AppStore-01" loading="lazy" /></div>

							<h4 class="mt-3">Next, log in to your Apple Developer account.</h4>
							<ul>
								<li>Go to your Apple Developer account and select Identifiers from Certificates, IDs &
									Profiles section.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-02.png"
										width="100%" alt="Publish-By-Apple-AppStore-02" loading="lazy" /></div>

								<li>Click on the <strong>Add New Identifier</strong> button.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-03.png"
										width="100%" alt="Publish-By-Apple-AppStore-03" loading="lazy" /></div>

								<li>The Register a new identifier page will open. Select <strong>App IDs</strong> and
									then
									select Continue.</li>
								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-04.png"
										width="100%" alt="Publish-By-Apple-AppStore-04" loading="lazy" /></div>

								<li>Select App and then <strong>click Continue.</strong></li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-05.png"
										width="100%" alt="Publish-By-Apple-AppStore-05" loading="lazy" /></div>
								<li>Enter the Apple Bundle information</li>
								<li><strong>Bundle ID</strong>: Copy the <strong>Bundle Identifier</strong> from your
									Draftbit settings into this field. <em>Be sure it matches the Bundle Identifier you
										entered in Project Settings. If they are different, you will encounter
										errors.</em>
								</li>
								<li><strong>Description</strong>: Enter a short description for your Bundle</li>
								<li><strong>Capabilities</strong>: Scroll down and select the capabilities that are
									required
									for your app.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-06.jpg"
										width="100%" alt="Publish-By-Apple-AppStore-06" loading="lazy" /></div>
								<li>Check the boxes next to any other capabilities your app requires. For example, if
									your
									app requires Map capabilities make sure to check the box for that.</li>
							</ul>

							<div class="codeBox">📘Draftbit requires <span class="">Push Notifications</span>, so check
								the
								box next to that capability..
							</div>
							<ul>
								<li>When you are finished, select <strong>Register</strong>.</li>
							</ul>
							<div class="appStore-image"><img class="imageBox-shadow"
									src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-07.png"
									width="100%" alt="Publish-By-Apple-AppStore-07" loading="lazy" /></div>

							<h4>Add A New App To App Store Connect</h4>
							<p>Now, you need to add your app to App Store Connect which is where you will manage and
								submit
								your app to the App Store.</p>
							<ul>
								<li>Go to <a target="_blank" href="https://appstoreconnect.apple.com/apps">App Store
										Connect</a> and then select <strong>Apps</strong>.</li>
								<li>Click on the <strong>Add button (+)</strong> and then select <strong>New
										App</strong>.
								</li>
								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-08.png"
										width="100%" alt="Publish-By-Apple-AppStore-08" loading="lazy" /></div>

								<li>Enter your app information in the modal that appears:
									<ul>
										<li><strong>Platform</strong>: for mobile apps this will be iOS.</li>
										<li><strong>Name</strong>: Enter a Name for your app (this is the name that will
											show in the App Store).</li>
										<li><strong>Primary Language</strong> for your app.</li>
										<li><strong>Bundle ID</strong>: Select the Bundle ID you created in the previous
											step.</li>
										<li><strong>SKU</strong>: Enter a unique identifier. We recommend using your
											Bundle
											ID here, as long as it's unique.</li>
										<li><strong>User Access</strong>: You should leave this set to <strong>Full
												Access</strong> unless you intend to only use this app privately. If you
											select <strong>Limited Access</strong>, you'll need to add the users that
											you
											would like to grant access to this app. <em>This will only appear if you
												have
												other users included in your App Store Connect account</em>.</li>

										<div class="w-50 my-2"><img class="imageBox-shadow"
												src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-09.png"
												width="100%" alt="Publish-By-Apple-AppStore-09" loading="lazy" /></div>
									</ul>
								</li>
							</ul>
							<h4>Generate Your App Store Connect API Key and add it to Draftbit</h4>
							<div class="codeBox">📘 This step must be performed by an Admin User. _
							</div>
							<p>At this point, you need to generate an API Key and add it to your Apple App Store
								settings in
								Draftbit.</p>
							<ul>
								<li>On the screen that you were navigated to after creating the app, choose Users and
									Access.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-10.png"
										width="100%" alt="Publish-By-Apple-AppStore-10" loading="lazy" /></div>

								<li>From the Users and Access page, select Integrations tab on the top.</li>
								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-11.png"
										width="100%" alt="Publish-By-Apple-AppStore-11" loading="lazy" /></div>
							</ul>
							<ul>
								<li>If you see the <strong>Request Access</strong> button, click on it.</li>
								<li>If you haven't added a key before, click on the <strong>Generate API Key</strong>.
									Otherwise, select the <strong>Add button (+)</strong>.</li>
								<li>Enter your <strong>API Key</strong> Information in the modal that appears:
									<ul>
										<li><strong>Name</strong>: Enter a name for the key. This is a reference and is
											not
											part of the key itself. We recommend naming it ‘<strong>Draftbit
												Publishing</strong>’ so it will be easier to identify in the future.
										</li>
										<li><strong>Access</strong>: Select <strong>App Manager</strong> as the access
											type.
											For additional information on Roles, <a target="_blank"
												href="https://developer.apple.com/support/roles/">see the docs here</a>.
										</li>
									</ul>
								</li>
								<li>When you are done, select <strong>Generate</strong>.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-12.png"
										width="100%" alt="Publish-By-Apple-AppStore-12" loading="lazy" /></div>

								<li>Find the row for the API Key you just generated and select Download API Key. A modal
									will appear, select Download. Refresh the page if the link doesn’t appear
									immediately.
								</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-13.png"
										width="100%" alt="Publish-By-Apple-AppStore-13" loading="lazy" /></div>
							</ul>
							<p>Return to Draftbit and then:</p>
							<ul>
								<li>Go to <strong>Project Settings -&gt; Apple App Store</strong>.</li>
								<li>Scroll down to where it says <strong>Connect Private Key</strong>.</li>
								<li>Upload the <strong>API Key</strong> file that you downloaded in the previous step
									and
									hit to Save button.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-14.png"
										width="100%" alt="Publish-By-Apple-AppStore-14" loading="lazy" /></div>
							</ul>
							<h4>Add Your Issuer ID To Draftbit</h4>
							<p>Next you’ll need to get your Issuer ID and add that to your Apple App Store settings in
								Draftbit.</p>
							<ul>
								<li>In App Store Connect, go to <a target="_blank"
										href="https://appstoreconnect.apple.com/access/integrations/api"><strong>Users
											and
											Access</strong> page</a> and select <strong>Integrations</strong> tab.</li>
								<li>Find the <strong>Issuer ID</strong> and select <strong>Copy</strong>.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-15.png"
										width="100%" alt="Publish-By-Apple-AppStore-15" loading="lazy" /></div>
							</ul>
							<p>Return to Draftbit and then:</p>
							<ul>
								<li>Go to <strong>Projects Settings -&gt; Apple App Store</strong>.</li>
								<li>Scroll down to where it says <strong>Connect Issuer Key</strong>.</li>
								<li>Paste the <strong>Issuer ID</strong> you copied during the previous step.</li>
								<li>Click the <strong>Save</strong> button</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-16.png"
										width="100%" alt="Publish-By-Apple-AppStore-16" loading="lazy" /></div>
							</ul>
							<h4>Add Your Key ID To Draftbit</h4>
							<p>Now, you need to get the Key ID for the API Key you generated and add that to your Apple
								App
								Store settings in Draftbit. In Ap</p>
							<ul>
								<li>In App Store Connect, go to <a target="_blank"
										href="https://appstoreconnect.apple.com/access/integrations/api"><strong>Users
											and
											Access</strong> page</a> and select <strong>Integrations</strong> tab.</li>
								<li>Find the row for the <strong>API Key</strong> you generated and select <strong>Copy
										Key
										ID</strong>.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-17.png"
										width="100%" alt="Publish-By-Apple-AppStore-17" loading="lazy" /></div>
							</ul>
							<p>Return to Draftbit and then:</p>
							<ul>
								<li>Go to <strong>Projects Settings -&gt; Apple App Store</strong>.</li>
								<li>Scroll down to <strong>Connect Key ID</strong>.</li>
								<li>Past the <strong>Key ID</strong> you copied during the previous step.</li>
								<li>Click the <strong>Save</strong> button.</li>

								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-18.png"
										width="100%" alt="Publish-By-Apple-AppStore-18" loading="lazy" /></div>
							</ul>
							<h4>Add Your App Store App ID to Draftbit</h4>
							<p>Finally, you need to get your App ID that was assigned to your new app and add that to
								your
								Apple App Store settings in Draftbit.</p>
							<ul>
								<li>Go to <a target="_blank" href="https://appstoreconnect.apple.com/apps">App Store
										Connect</a> go to the <strong>Apps</strong>.</li>
								<li>Click on your app in the list.</li>
								<li>Click <strong>App Information</strong> under the <strong>General</strong> heading on
									the
									left</li>
								<li>Scroll down to the <strong>General Information</strong> section</li>
								<li>Copy your <strong>Apple ID</strong></li>
								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-19.png"
										width="100%" alt="Publish-By-Apple-AppStore-19" loading="lazy" /></div>
							</ul>
							<p>Return to Draftbit and then: </p>
							<ul>
								<li>Go to <strong>Projects Settings -&gt; Apple App Store</strong>.</li>
								<li>Find the <strong>App Store App ID</strong> field.</li>
								<li>Paste the <strong>Apple ID</strong> you copied during the previous step.</li>
								<li>Click the <strong>Save</strong> button</li>
								<div class="appStore-image"><img class="imageBox-shadow"
										src="/assets/images/features/apple-appStore-image/Publish-By-Apple-AppStore-20.png"
										width="100%" alt="Publish-By-Apple-AppStore-20" loading="lazy" /></div>
							</ul>
						</section>
						<!-- Publish-By-Apple-AppStore-END -->

						<section class="docs-section" id="item-2-4">
							<h2 class="section-heading" style="margin-bottom: 2rem;">FCM Configuration 2.4</h2>
							<h3>FCM Configuration for Flutter Mobile App</h3>

							<p>This document provides a comprehensive guide to configuring Firebase Cloud Messaging
								(FCM)
								for your Flutter mobile app on both Android and iOS platforms.</p>

							<h3>1. Set Up Firebase Project</h3>
							<ul>
								<li>Go to the <a href="https://console.firebase.google.com/" target="_blank">Firebase
										Console</a>.</li>
								<li>Create a new project or select an existing one.</li>
								<li>Register your app (both Android and iOS) within the Firebase project.</li>
							</ul>

							<h3>2. Configure Android for Firebase</h3>
							<br />

							<h3>2.1 Add Firebase SDK to Your Android Project</h3>
							<ul>
								<li>Download the <code>google-services.json</code> file from the Firebase Console.</li>
								<li>Place the <code>google-services.json</code> file in the <code>android/app</code>
									directory of your Flutter project.</li>
							</ul>

							<h3>2.2 Update `android/build.gradle`</h3>
							<pre><code>buildscript {
    dependencies {
        // Add this classpath
        classpath 'com.google.gms:google-services:4.3.15'
    }
}</code></pre>

							<h3>2.3 Update `android/app/build.gradle`</h3>
							<ul>
								<li>Add the following line at the bottom of the file:</li>
								<pre><code>apply plugin: 'com.google.gms.google-services'</code></pre>
								<li>Add the Firebase messaging dependency in the <code>dependencies</code> section:</li>
								<pre><code>implementation 'com.google.firebase:firebase-messaging:24.2.0'</code></pre>
							</ul>

							<h3>2.4 Update `AndroidManifest.xml`</h3>
							<ul>
								<li>Add the necessary permissions and service declarations inside the
									<code>&lt;application&gt;</code> tag:
								</li>
								<pre><code>&lt;uses-permission android:name="android.permission.INTERNET"/&gt;
&lt;uses-permission android:name="android.permission.RECEIVE_BOOT_COMPLETED"/&gt;
&lt;uses-permission android:name="android.permission.WAKE_LOCK"/&gt;

&lt;application ...&gt;
    &lt;service
        android:name=".MyFirebaseMessagingService"
        android:exported="true"
        android:permission="android.permission.BIND_JOB_SERVICE"&gt;
        &lt;intent-filter&gt;
            &lt;action android:name="com.google.firebase.MESSAGING_EVENT"/&gt;
        &lt;/intent-filter&gt;
    &lt;/service&gt;
&lt;/application&gt;</code></pre>
							</ul>

							<h3>3. Configure iOS for Firebase</h3>
							<br />

							<h3>3.1 Add Firebase SDK to Your iOS Project</h3>
							<ul>
								<li>Download the <code>GoogleService-Info.plist</code> file from the Firebase Console.
								</li>
								<li>Place the <code>GoogleService-Info.plist</code> file in the <code>ios/Runner</code>
									directory of your Flutter project.</li>
							</ul>

							<h3>3.2 Install CocoaPods Dependencies</h3>
							<pre><code>cd ios
pod install</code></pre>

							<h3>3.3 Update `Podfile`</h3>
							<pre><code>platform :ios, '10.0'
use_frameworks!</code></pre>

							<h3>3.4 Update `AppDelegate.swift`</h3>
							<ul>
								<li>Import the required modules and configure Firebase:</li>
								<pre><code>import UIKit
import Flutter
import FirebaseCore
import FirebaseMessaging

@UIApplicationMain
@objc class AppDelegate: FlutterAppDelegate {
    override func application(
        _ application: UIApplication,
        didFinishLaunchingWithOptions launchOptions: [UIApplication.LaunchOptionsKey: Any]?
    ) -> Bool {
        FirebaseApp.configure()
        Messaging.messaging().delegate = self
        return super.application(application, didFinishLaunchingWithOptions: launchOptions)
    }

    override func application(
        _ application: UIApplication,
        didReceiveRemoteNotification userInfo: [String: Any],
        fetchCompletionHandler completionHandler: @escaping (UIBackgroundFetchResult) -> Void
    ) {
        Messaging.messaging().appDidReceiveMessage(userInfo)
        super.application(application, didReceiveRemoteNotification: userInfo, fetchCompletionHandler: completionHandler)
    }
}</code></pre>
							</ul>

							<h3>3.5 Request Notification Permissions</h3>
							<pre><code>import UserNotifications

func application(_ application: UIApplication,
                 didRegisterForRemoteNotificationsWithDeviceToken deviceToken: Data) {
    Messaging.messaging().apnsToken = deviceToken
}

func application(_ application: UIApplication,
                 didFailToRegisterForRemoteNotificationsWithError error: Error) {
    print("Failed to register: \(error)")
}

func application(_ application: UIApplication,
                 didReceive notification: UILocalNotification) {
    print("Notification received: \(notification)")
}</code></pre>

							<h2>4. Configure Flutter App</h2>

							<h3>4.1 Add FlutterFire Plugins</h3>
							<pre><code>dependencies:
      flutter:
        sdk: flutter
      firebase_core: ^2.10.0
      firebase_messaging: ^14.0.0</code></pre>

							<h3>4.2 Initialize Firebase in Your Flutter App</h3>
							<pre><code>import 'package:firebase_core/firebase_core.dart';
import 'package:firebase_messaging/firebase_messaging.dart';
import 'package:flutter/material.dart';

void main() async {
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp();
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter App',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: MyHomePage(),
    );
  }
}

class MyHomePage extends StatefulWidget {
  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  @override
  void initState() {
    super.initState();
    FirebaseMessaging.onMessage.listen((RemoteMessage message) {
      print('Message received: ${message.messageId}');
      // Handle foreground messages here
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('FCM Demo'),
      ),
      body: Center(
        child: Text('Hello World'),
      ),
    );
  }
}</code></pre>

							<h3>5. Testing Your Configuration</h3>
							<ul>
								<li><strong>Android:</strong> Use the Firebase Console to send test messages or use the
									<code>firebase_messaging</code> package to test messages locally.
								</li>
								<li><strong>iOS:</strong> Ensure you have a real device or use the simulator to test
									push
									notifications,
									as push notifications don't work on iOS simulators.</li>
							</ul>

							<p>Following these steps will help you successfully configure Firebase Cloud Messaging (FCM)
								for
								your Flutter mobile app on both Android and iOS platforms.</p>
						</section>

						<section class="docs-section" id="item-2-5">
							<h2 class="section-heading" style="margin-bottom: 2rem;">Firebase CLI Quick Setup 2.5</h2>
							<h1>Firebase CLI Quick Setup instruction</h1>

							<h4>Step 1: Create a Firebase Project</h4>
							<ul>
								<li>
									<strong>Open Firebase Console</strong>:
									Create a new project by visiting the following link:
									<a href="https://console.firebase.google.com/" target="_blank">Firebase Console</a>.
								</li>
								<li>
									<strong>Access Your Project</strong>:
									After creating the Firebase project, open it and click on the Flutter logo. Follow
									the provided setup steps.
									<br><br>
									<strong>Important Note</strong>:
									Before configuring Firebase, ensure you change the package name for Android and the
									bundle identifier for iOS in your app.
								</li>
							</ul>

							<h4>Installation</h4>
							<ul>
								<li>
									<strong>Install Firebase CLI</strong> (requires Node.js):
									<pre><code>npm install -g firebase-tools</code></pre>
								</li>
								<li>
									<strong>Install FlutterFire CLI</strong>:
									<pre><code>dart pub global activate flutterfire_cli</code></pre>
								</li>
							</ul>

							<h4>Usage</h4>

							<h4>Initialize Firebase</h4>
							<ul>
								<li>
									<strong>Run the Configuration Command</strong>:
									In the root of your Flutter application, execute:
									<pre><code>flutterfire configure</code></pre>
								</li>
								<li>
									<strong>Follow the Prompts</strong>:
									<ul>
										<li>Choose your Firebase project.</li>
										<li>Select the platforms (Android, iOS, web, etc.).</li>
										<li>The CLI generates a <code>firebase_options.dart</code> file in your project.
										</li>
									</ul>
								</li>
							</ul>

							<h4>Import and Initialize in Your App</h4>
							<p>In your <code>lib/main.dart</code>, add:</p>
							<pre><code>import 'firebase_options.dart';

// Initialize Firebase
await Firebase.initializeApp(
options: DefaultFirebaseOptions.currentPlatform,
);</code></pre>

							<h4>Note</h4>
							<p>If you add new platforms or Firebase services, rerun:</p>
							<pre><code>flutterfire configure</code></pre>
						</section>
					</article><!--//docs-article-->


					<article class="docs-article" id="section-3">
						<header class="docs-header">
							<h1 class="docs-heading">Web and Admin</h1>
							<!-- <section class="docs-intro">
							<p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
								finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit.
								Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
								lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section> -->
							<!-- //docs-intro -->
						</header>
						<section class="docs-section" id="item-3-1">
							<h2 class="section-heading">Website & Admin Panel 3.1</h2>
							<h3>Running Laravel Admin Panel for Ready eCommerce</h3>

							<p>This documentation provides a step-by-step guide to running a Laravel-based admin panel
								for a
								Ready eCommerce. Follow these instructions to set up your development environment and
								run
								the
								admin panel locally.</p>

							<h3>1. Prerequisites</h3>
							<ul>
								<li>PHP installed (version 8.1 or higher).</li>
								<li>Composer package manager installed.</li>
								<li>Laravel installed globally (optional but recommended).</li>
								<li>A MySQL or PostgreSQL database server running.</li>
								<li>Node.js and npm installed (for managing frontend dependencies and assets).</li>
							</ul>

							<h3 class="mt-4 section-heading">How to Install Ready eCommerce on cPanel Hosting</h3>
							<p> A step-by-step guide on setting up your Ready eCommerce project in cPanel hosting.</p>


							<div class="videoBox">
								<iframe width="860" height="415"
									src="https://www.youtube.com/embed/HRIlkDdv_9Q?si=ZJ6bySpGTNRe2Wor"
									title="YouTube video player" frameborder="0"
									allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>

							<h3 class="mt-4">Follow This Instructions</h3>
							<ol class="d-flex flex-column gap-2">
								<li>Zip your project folder.</li>
								<li>Login to your cPanel.</li>
								<li>Go to the File Manager option and select it.</li>
								<li>Ensure you're in the root folder, then click <strong>"Upload"</strong>.</li>
								<li>Select your zip folder and wait for the upload to complete. If the upload area is
									green,
									then go back
									to home.</li>
								<li>Unzip the uploaded folder.</li>
								<li>Selectall files and directory move to the root folder.</li>
								<li>Go back to Cpanel and navigate to Database.</li>
								<li>Created a database and add (create if non exist) a DB user.</li>
								<p class="my-3">Example</p>
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ReadyeCommerce-Screenshot-09.jpg"
									width="100%" alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(5).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerc(6).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<li>You can then run your domain in any browser after that</li>
								<li>Press the Start Installation Process button that appears on the screen</li>
								<li>Then go to the root folder to check permission and give permission to the mentioned
									folders</li>
								<li>After that, if the permissions of the files are all right, then press the Next
									button
								</li>
								<li>After that, if the server request extensions are enabled, then click on the next
									button.
									If any
									extension is shown as disabled, then go to select PHP version from the C panel and
									enable all the
									extensions that are shown as disabled, then refresh the browser and then click on
									the
									next button.</li>
								<li>Then fill up the written forms and press the next button</li>
								<p class="my-3">Example</p>
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(12).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<li class="mt-4">Connect to the database you created and press the next button</li>
								<p class="my-3">Example</p>
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(13).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<li class="mt-4">Then fill out the form using your Email Account, Domain, Codecanyon
									Username, and your
									Purchase Code, and click the Verify Purchases button.</li>
								<p class="my-3">Example</p>
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(14).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<li class="mt-4">Click on the Final Submission button and complete the installation
									process
									by clicking on
									the Click to Redirect button.</li>
							</ol>
							<h3 class="my-4">Full Installation Journey Example</h3>
							<div class="d-flex flex-column gap-4 mb-5">
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(11).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ReadyeCommerce-Screenshot-02.jpg"
									width="100%" alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ReadyeCommerce-Screenshot-03.jpg"
									width="100%" alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ReadyeCommerce-Screenshot-03.jpg"
									width="100%" alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(1).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ReadyeCommerce-Screenshot-06.jpg"
									width="100%" alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(3).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ReadyeCommerce-Screenshot-08.jpg"
									width="100%" alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ReadyeCommerce-Screenshot-09.jpg"
									width="100%" alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(5).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerc(6).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(7).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(8).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(9).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(18).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(10).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(12).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(13).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(14).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(15).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce(16).jpg" width="100%"
									alt="Example-01" loading="lazy" />
								<img class="imageBox-shadow"
									src="/assets/images/features/ReadyEcommerce-Screen/ready-ecommerce.png" width="100%"
									alt="Example-01" loading="lazy" />

							</div>


							<h3>2. Clone the Repository</h3>
							<p>Start by cloning the repository from your version control system:</p>
							<pre><code>git clone https://github.com/your-username/your-music-admin-panel.git</code></pre>
							<p>Navigate into the project directory:</p>
							<pre><code>cd your-music-admin-panel</code></pre>

							<h3>3. Install Dependencies</h3>
							<p>Once inside the project directory, install the necessary PHP and frontend dependencies:
							</p>
							<ul>
								<li>Install PHP dependencies using Composer:</li>
								<pre><code>composer install</code></pre>
								<li>Install frontend dependencies using npm:</li>
								<pre><code>npm install</code></pre>
							</ul>

							<h3>4. Configure Environment Variables</h3>
							<p>Copy the example environment file to create your local environment configuration:</p>
							<pre><code>cp .env.example .env</code></pre>
							<p>Edit the <code>.env</code> file to set up your database connection and other
								environment-specific settings:</p>
							<pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password</code></pre>

							<h2>5. Generate Application Key</h2>
							<p>Generate a new application key for Laravel:</p>
							<pre><code>php artisan key:generate</code></pre>

							<h2>6. Run Database Migrations</h2>
							<p>Run database migrations to set up your database schema:</p>
							<pre><code>php artisan migrate</code></pre>

							<h2>7. Seed the Database (Optional)</h2>
							<p>If you have seed data, you can populate your database with initial data:</p>
							<pre><code>php artisan db:seed</code></pre>

							<h2>8. Run the Development Server</h2>
							<p>Start the Laravel development server:</p>
							<pre><code>php artisan serve</code></pre>
							<p>The admin panel will be available at <code>http://localhost:8000</code>. Open this URL in
								your browser to view the admin panel.</p>

							<h2>9. Compile Frontend Assets</h2>
							<p>Compile your frontend assets for development:</p>
							<pre><code>npm run dev</code></pre>
							<p>For production builds, use:</p>
							<pre><code>npm run build</code></pre>

							<h2>10. Troubleshooting</h2>
							<p>If you encounter issues while running the admin panel, consider the following
								troubleshooting
								steps:</p>
							<ul>
								<li><strong>Check PHP Version:</strong> Ensure you are using a compatible version of
									PHP.
									Check your PHP version with <code>php -v</code>.</li>
								<li><strong>Check Dependencies:</strong> Ensure that all PHP and frontend dependencies
									are
									installed correctly. Use <code>composer install</code> and <code>npm install</code>
									to
									reinstall.</li>
								<li><strong>Verify Database Configuration:</strong> Ensure that your <code>.env</code>
									file
									has the correct database credentials and that the database server is running.</li>
								<li><strong>Clear Caches:</strong> Sometimes clearing application caches can resolve
									issues:
								</li>
								<pre><code>php artisan cache:clear
php artisan config:clear
php artisan view:clear</code></pre>
								<li><strong>Check Logs:</strong> Review the error messages in your terminal or log files
									(<code>storage/logs/</code>) for more information on what might be going wrong.</li>
							</ul>

							<h2>11. Conclusion</h2>
							<p>By following these steps, you should be able to run the Laravel-based admin panel for
								your
								Ready eCommerce locally. If you encounter issues, refer to the troubleshooting section
								or
								consult
								the Laravel documentation for additional guidance.</p>
						</section>

						<section class="docs-section" id="item-3-2">
							<article>
								<h2 class="section-heading">Install on localhost 3.2</h2>
								<p class="m-0">To install on localhost,and follow the installation prompts for seamless
									setup.
								</p>

								<h3 class="mt-4">How to Install Ready eCommerce on localhost</h3>
								<p> A step-by-step guide on setting up your Ready eCommerce project in Localhost.</p>
								<div class="videoBox mb-4">
									<iframe width="860" height="415"
										src="https://www.youtube.com/embed/p_Mv_4D14f0?si=upp6m7RfL9n65x5b"
										title="YouTube video player" frameborder="0"
										allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
										referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
								</div>

								<h2 class="section-heading mt-4">Follow This Instructions.</h2>
								<strong>If you use windows operating system</strong>
								<ol class="d-flex flex-column gap-1">
									<li>Download and install XAMPP in <code>C</code> drive.</li>
									<li>Start Your Xampp Server.</li>
									<li>Download and Install Composer in <code>C</code> drive.</li>
									<li>Unzip the downloaded archive package.</li>
									<li>Move the unzipped file to your htdocs folder.</li>
									<li>Creating Database</li>
									<ul class="d-flex flex-column gap-3">
										<li>Point your browser to phpMyAdmin address by typing
											<code>http://localhost/phpmyadmin</code> .
										</li>
										<li>In phpMyAdmin, click on Databases tab.</li>
										<li>Enter the name of new database that you want created.</li>
										<li> you may also need to select the collation for the database. Please select
											the
											collation match your
											language. If you do not know what to select, you can select utf8_general_ci
											or
											leave default
											(Collation).</li>
										<li>Click Create button.</li>
									</ul>
								</ol>
								<h5 class="my-3">Example</h5>
								<div class="my-4">
									<img class="imageBox-shadow" class="imageBox-shadow"
										src="/assets/images/features/create-new-database.png" width="100%" alt="Example-01"
										loading="lazy">
								</div>

								<h5 id="layout-notes">Configuration<a class="anchor" href="#layout-notes"></a></h5>
								<p> Please copy the <code>.env.example</code>
									and rename it to <code>.env</code> and
									fill up the <code> .env</code></p>
								<ul class="d-flex flex-column gap-1">
									<li>APP_NAME = (Youe App Name)</li>
									<li>APP_ENV = (Local Production)</li>
									<li>APP_URL = (https:// Your Domain Link..)</li>
									<li>DB_DATABASE = (Your Database Name)</li>
									<li>DB_USERNAME = (Your Database Username)</li>
									<li>DB_PASSWORD = (Your Database Password)</li>
									<li>MAIL_MAILER = (SMTP Email Relay Services)</li>
									<li>MAIL_HOST = Your Mail Host(For Example: smtp.gmail.com)</li>
									<li>MAIL_PORT = Your Mail Port(For Example: 587)</li>
									<li>MAIL_USERNAME = (Your Mail Username)</li>
									<li>MAIL_PASSWORD = (Your Mail Password)</li>
									<li>MAIL_ENCRYPTION = (SSL, TLS)</li>
									<li>MAIL_FROM_ADDRESS = (For Example: no-reply@gmail.com)</li>
								</ul>
								<p>You need to fill the database connection details, administration details, and store
									details to .env
									example file.</p>

								<h5 id="layout-notes">Run Installation Command<a class="anchor"
										href="#layout-notes"></a>
								</h5>
								<ul>
									<li>Open terminal/windows powershell and go to project folder directory</li>
									<li>If a terminal exists On your cpanel</li>
									<li>Open your terminal and go to root directory for example
										<code>(cd public_html/)</code>
									</li>
								</ul>
								<ol class="d-flex flex-column gap-0 localhostCommand">
									<li>
										<pre><code>composer install</code></pre>
									</li>
									<li>
										<pre><code>php artisan migrate:fresh --seed</code></pre>
									</li>
									<li>
										<pre><code>php artisan storage:link</code></pre>
									</li>
									<li>
										<pre><code>php artisan serve</code></pre>
									</li>
								</ol>
								<hr class="hr-dash">

								<h5 id="layout-notes">Run Project<a class="anchor" href="#layout-notes"></a></h5>
								<ul class="d-flex flex-column gap-2">
									<li>Open you browser</li>
									<li>browse <code>http://127.0.0.1:8000</code> Or <code>http://localhost:8000</code>
									</li>
									<p>This instruction shows how to run it locally on your PC, but it works generally
										the
										same on any hosting
										portals. In most case in payed portals you have any web panels to configure your
										public folder that
										reference to /public folder in laravel folder's structure.</p>
								</ul>
								<div class="alert alert-success">
									<div class="alert-head">
										<span>COMPLETE</span>
									</div>
									<p>You'll see a success message after successfully following the above steps. You
										now
										have the option to
										browse your application through respected domain or IP.</p>
								</div>
								<hr class="hr-dash">

							</article>
						</section>
						<!-- System-Update -->
						<section class="docs-section" id="item-3-3">
							<article>
								<h2 class="section-heading">System Update 3.3</h2>
								<p class="m-o">The latest system update includes enhanced security features, improved
									performance, bug fixes, and compatibility updates for newer hardware and software.
								</p>

								<div class="videoBox mb-4">
									<iframe width="860" height="415"
										src="https://www.youtube.com/embed/dexQRpAjWLs?si=56CXjdQtIdfk_-vL"
										title="YouTube video player" frameborder="0"
										allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
										referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
								</div>
								<hr class="mt-7 mb-5">
								<br>

								<h3 id="#">Follow This Instructions</h3>
								<ol class="d-flex flex-column gap-2">
									<li>Zip your project folder.</li>
									<li>Login to your cPanel.</li>
									<li>Go to the cPanel Terminal.</li>
									<li>Choose your root directory, and type the command <code>composer update </code>
									</li>
									<p class="fw-800 my-3">Example</p>

									<img class="imageBox-shadow" src="/assets/images/features/update-image/screen-03.jpg"
										width="100%" alt="Example-01" loading="lazy" />

									<li>Then open any browser and search by typing domain name / update, then update
										process
										button will be seen on the screen and press that button to go to the next step..
									</li>
									<p class="fw-800 my-3">Example</p>

									<img class="imageBox-shadow mb-3"
										src="/assets/images/features/update-image/screen-01.jpg" width="100%"
										alt="Example-01" loading="lazy" />
									<img class="imageBox-shadow" src="/assets/images/features/update-image/Screen-03.jpg"
										width="100%" alt="Example-01" loading="lazy" />

									<li>To verify purchases, Enter your Email, Domain, Codecanyon Username, and Purchase
										code,
										and press the verify purchase button.</li>
									<p class="fw-800 my-3">Example</p>

									<img class="imageBox-shadow" src="/assets/images/features/update-image/Screen-04.jpg"
										width="100%" alt="Example-01" loading="lazy" />

									<li>Now a Ready to Update screen will appear, select your update zip file and then
										press
										the
										Upgrade Now button.</li>
									<p class="fw-800 my-3">Example</p>
									<img class="imageBox-shadow" src="/assets/images/features/update-image/screen-02.jpg"
										width="100%" alt="Example-01" loading="lazy" />
									<li>Now a congratulation screen will appear where you have to wait for 10 seconds
										then
										your
										post system home page will show</li>
									<p class="fw-800 my-3">Example</p>

									<img class="imageBox-shadow mb-3"
										src="/assets/images/features/update-image/Screen-05.jpg" width="100%"
										alt="Example-01" loading="lazy" />
									<img class="imageBox-shadow" src="/assets/images/features/update-image/Screen.png"
										width="100%" alt="Example-01" loading="lazy" />
								</ol>
							</article>
						</section>

					</article><!--//docs-article-->

					<footer class="footer">
						<div class="container text-center py-5">
							<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
							<small class="copyright">Designed with <span class="sr-only">love</span> by <a
									class="theme-link" href="https://razinsoft.com/" target="_blank">Razinsoft</a> for
								developers</small>
						</div>
					</footer>
				</div>
			</div>
		</div><!--//docs-wrapper-->
	</div>


	<!-- Javascript -->
	<script src="/assets/plugins/popper.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


	<!-- Page Specific JS -->
	<script src="/assets/plugins/smoothscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
	<script src="/assets/js/highlight-custom.js"></script>
	<script src="/assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
	<script src="/assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
	<script src="/assets/js/docs.js"></script>

</body>

</html>