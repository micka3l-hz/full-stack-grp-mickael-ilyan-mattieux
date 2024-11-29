<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>
<!DOCTYPE HTML>

<html lang="fr">
	<head>
		<title>Portfolio-thiago-torres</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

			<div id="wrapper">

					<header id="header">
						<div>
						<img src="terres_tolue_12078.webp" width="400" height="341 />
						
						<div> class="content">
							<div class="inner">
								<h1>THIAGO TORRES</h1>
								<p>Portfolio de Thiago Torres</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#MOI">MOI</a></li>
								<li><a href="#PROJET">PROJETS</a></li>
								<li><a href="#PARCOURS">PARCOURS</a></li>
								<li><a href="#contact">Contact</a></li>
							
							</ul>
						</nav>
					</header>

					<div id="main">

							<article id="MOI">
								<h2 class="major">MOI</h2>
								<span class="image main"><img src="tiagoooo.png" alt="" /></span>
								<p> Je suis Thiago Torres, expert en cybersécurité spécialisé en tests d'intrusion 
									(<a href="https://foxeet.fr/contenu/article-qu-est-ce-qu-un-pentest">pentest</a>). 
									Avec plusieurs années d'expérience, je réalise des audits de sécurité pour 
									identifier et exploiter les vulnérabilités des systèmes informatiques, des 
									réseaux et des applications. Grâce à une approche méthodique et des outils de pointe, 
									je propose des recommandations concrètes pour renforcer la sécurité et prévenir les attaques. 
									Titulaire de certifications reconnues telles que <a href="https://openclassrooms.com/fr/">OSCP</a> et 
									<a href="https://www.cyberuniversity.com/post/ceh-certified-ethical-hacker-definition-et-comment-lobtenir"> CEH </a>,
									 mon objectif est d'aider les entreprises à anticiper les menaces en simulant des 
									 cyberattaques réelles et en fournissant des solutions pour sécuriser efficacement 
									 leurs infrastructures.
									</p>
							</article>

							

							<article id="PARCOURS">
								<h2 class="major">PARCOURS</h2>
								<span class="image main"><img src="Cyber-Security_Banner.jpg" alt="" /></span>
								<p>Après un baccalauréat scientifique avec spécialisation en informatique, j'ai poursuivi une licence en informatique à l'Université de Paris, où ma passion pour la cybersécurité s'est confirmée. En troisième année, j'ai choisi de me spécialiser et ai intégré un Master en sécurité des systèmes d'information. J'y ai acquis des compétences en gestion des risques, tests de pénétration, et sécurité des réseaux et applications. Pour valider mes compétences pratiques, j'ai obtenu des certifications professionnelles telles que OSCP et Certified Ethical Hacker (CEH). J'ai également effectué un stage de six mois dans une entreprise de cybersécurité, où j'ai participé à la sécurisation des systèmes d'information et à des audits de sécurité.
									Après mon diplôme, j'ai rejoint une société de consulting en cybersécurité en tant que consultant junior, où j'ai réalisé des audits de sécurité, identifié des vulnérabilités et mis en place des solutions de protection. J'ai utilisé des outils comme Metasploit, Wireshark, et Burp Suite pour effectuer des tests de pénétration et sécuriser les réseaux. Aujourd'hui, fort de trois ans d'expérience, je souhaite approfondir mes compétences avec des certifications avancées telles que le CISSP et m'orienter vers des rôles stratégiques, notamment en tant que Responsable de la sécurité des systèmes d'information (RSSI), pour élaborer des politiques de sécurité et protéger les infrastructures contre les menaces émergentes. Mon objectif est de diriger une équipe dédiée à la gestion des risques et à la cybersécurité dans une organisation internationale.
								</p>
							</article>

							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
<article id="PROJET">
								<h2 class="major">PROJETS</h2>
								<span class="image main"><img src="APIXIT-cybersecurite-SASE-SSE-1024x585.jpg" alt="" /></span>
									<style>
										body {
											font-family: Arial, sans-serif;
											padding: 20px;
										}
										.button {
											padding: 10px 20px;
											font-size: 16px;
											color: white;
											background-color: rgb(49, 49, 49);
											border: none;
											border-radius: 5px;
											cursor: pointer;
											margin-bottom: 20px;
										}
										.button:hover {
											background-color: rgb(49, 49, 49);
										}
										section {
											height: 400px; 
											padding: 20px;
											border: 1px solid #ccc;
											margin: 20px 0;
										}
									</style>
									
										<p>
											<a href=projet1.php>
												Projet 1 </a>
											<br>
											<a href=projet2.php>
												Projet 2 </a>
											<br>
											<a href=projet3.php>
												Projet 3 </a>
											<br>
											<a href=projet4.php>
												Projet 4 </a>
										</p>
									
							</article>
						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
