<!-- START CONTENT -->
<div id="content-page" class="content group">
	<div class="hentry group">
		<form id="contact-form-contact-us" class="contact-form" method="GET" action="#" enctype="multipart/form-data">
			
			<?php echo $msgResult; ?>
			
			<input type="hidden" name="pge" value="1" id="pge" />
			<div class="usermessagea"></div>
			<fieldset>
				
				<ul>
				
					<fieldset><legend><h3>RENSEIGNEMENT PERSONNEL</h3></legend>
					
					<!--//// NOM ==============================================================-->
					<li class="full text-field">
					
						<label for="name-contact-us">
							<span class="label">Nom</span>
							<br />
							<span class="sublabel">Veuillez entrer votre nom.</span>
							<br />
						</label>
						
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-user">
								</i>
							</span>
							<input type="text" name="nom" id="name-contact-us" class="required" value="" />
						</div>
						
						<div class="msg-error">
						
						</div>
					</li>
					<!--//// PRENOM ==============================================================-->
					<li class="full text-field">
					
						<label for="name-contact-us">
							<span class="label">Prénom</span>
							<br />
							<span class="sublabel">Veuillez entrer votre prénom.</span>
							<br />
						</label>
						
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-user">
								</i>
							</span>
							<input type="text" name="nom" id="name-contact-us" class="required" value="" />
						</div>
						
						<div class="msg-error">
						
						</div>
					</li>
					<!--// EMAIL ============================================================ -->
					<li class="full text-field">
					
						<label for="email-contact-us">
							<span class="label">Email</span>
							<br />
							<span class="sublabel">Entrez votre adresse mail ici</span>
							<br />
						</label>
						
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-envelope"></i>
							</span>
							<input type="text" name="email" id="email-contact-us" class="required email-validate" value="" />
						</div>
						
						<div class="msg-error"></div>
					</li>
					
					
					<!--// TEL ============================================================ -->
					 <li class="full text-field">
					 
						<label for="tel-contact-us">
							<span class="label">Téléphone</span>
							<br />
							<span class="sublabel">Entrez votre numéro pour être recontacté (<i>falcutatif</i>)</span>
							<br />
						</label>
						
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-phone"></i>
							</span>
							<div class="input-prepend">
							<input placeholder="1"
							type="number"
							name="tel">
							</div>
						<div class="msg-error"></div>
					</li>
					</fieldset>
					<fieldset><legend><h3>VOTRE PROJET</h3></li></legend>
					<!--// TYPE DE TRAVAUX ============================================================ -->
					<li class="full text-field">
					
						<label for="subject-contact-us">
							<span class="label">Type de travaux</span>
							<br />
							<span class="sublabel">Quel est le type de votre demande ?</span>
							<br />
						</label>
						
						<div class="input-prepend">
							<SELECT name="objet" size="1">
								<OPTION value="1"></option>
								<OPTION value="2">Peinture</option>
								<OPTION value="3">Revêtement spécial ou la réalisation d'effets décoratifs</option>
								<OPTION value="4">Rénovation</option>
							</SELECT>
						</div>
						<div class="msg-error"></div>
					</li>
					<!--// ETAT DU SUPPORT ============================================================ -->
					<li class="full text-field">
					
						<label for="subject-contact-us">
							<span class="label">Etat du support</span>
							<br />
							<span class="sublabel">Dans quel état se trouve la surface à traiter ?</span>
							<br />
						</label>
						
						<div class="input-prepend">
							<SELECT name="objet" size="1">
								<OPTION value="1">Très abîmé</option>
								<OPTION value="2">Abîmé</option>
								<OPTION value="3">Etat moyen</option>
								<OPTION value="6">Petite rénovation ou simple décoration</option>
							</SELECT>
						</div>
						<div class="msg-error"></div>
					</li>
					
					<!--// SS-COUCHES ============================================================ -->
					<li class="full text-field">
					
						<label for="subject-contact-us">
							<span class="label">Sous-coûches nécessaires</span>
							<br />
							<span class="sublabel">Vous pouvez estimez vous même le nombre de sous-couche nécessaire en fonction de la surface
							et du rendu souhaité. Cependant, nous vous conseillons de prévoir 2 sous-couchespour un rendu parfait.</span>
							<br />
						</label>
						
						
						
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-move"></i>
							</span>
							<input placeholder="1"
							type="number"
							name="tel">
						</div>
						<div class="msg-error"></div>
					</li>
					<!--// SURFACE MUR ============================================================ -->
					<li class="text-field">
					
						<label for="subject-contact-us">
							<span class="label">Surface mur en m²</span>
							<br />
							<span class="sublabel">Entrez la surface de mur à peindre.</span>
							<br />
						</label>
						
						
						
						<div class="input-prepend">
						<span class="add-on">
								<i class="icon-move"></i>
							</span>
							<input placeholder="01..."
							type="number"
							name="tel">												
						</div>
						<div class="msg-error"></div>
					<!--// SURFACE PLAFOND ============================================================ -->
					<li class="text-field">
					
						<label for="subject-contact-us">
							<span class="label">Surface plafond en m²</span>
							<br />
							<span class="sublabel">Entrez la surface à peindre au plafond.</span>
							<br />
						</label>
						
						
						
						<div class="input-prepend">
						<span class="add-on">
								<i class="icon-move"></i>
							</span>
							<input placeholder="01..."
							type="number"
							name="tel">
						</div>
						<div class="msg-error"></div>
					</li>
					 <!--// PORTES ============================================================ -->
					<li class="text-field">
					
						<label for="subject-contact-us">
							<span class="label">Portes</span>
							<br />
							<span class="sublabel">Indiquez le nombre de portes que vous souhaitez repeindre.</span>
							<br />
						</label>
						
						
						
						<div class="input-prepend">
							<input placeholder="01..."
							type="number"
							name="tel">
						</div>
						<div class="msg-error"></div>
					</li>
					
					<!--// FENETRES ============================================================ -->
					<li class="text-field">
					
						<label for="subject-contact-us">
							<span class="label">Fenêtres</span>
							<br />
							<span class="sublabel">Indiquez le nombre de fenêtres que vous souhaitez repeindre.</span>
							<br />
						</label>
						
						
						
						<div class="input-prepend">
							<input placeholder="01..."
							type="number"
							name="tel">
						</div>
						<div class="msg-error"></div>
					</li>
					<!--// RADIATEURS ============================================================ -->
					<li class="text-field">
					
						<label for="subject-contact-us">
							<span class="label">Radiateurs</span>
							<br />
							<span class="sublabel">Indiquez le nombre de fenêtres que vous souhaitez repeindre.</span>
							<br />
						</label>
						
						
						
						<div class="input-prepend">
							<input placeholder="01..."
							type="number"
							name="tel">
						</div>
						<div class="msg-error"></div>
					</li>
					<!--// RADIATEURS ============================================================ -->
					<li class="text-field">
					
						<label for="subject-contact-us">
							<span class="label">Trous ou imperfections</span>
							<br />
							<span class="sublabel">Indiquez la taille de la surface défectueuse.</span>
							<br />
						</label>
						
						
						
						<div class="input-prepend">
							<input placeholder="01..."
							type="number"
							name="tel">
						</div>
						<div class="msg-error"></div>
					</li>
					<!--// MESSAGE ============================================================ -->
					<li class="textarea-field">
						<label for="message-contact-us">
							<span class="label">Votre message</span>
						</label>
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-pencil"></i>
							</span>
							<textarea name="txt" id="message-contact-us" rows="8" cols="30" class="required">
							</textarea>
						</div>
						<div class="msg-error"></div>
					</li>
					
					
					<li class="submit-button" style="text-align:center;">
						<input type="text" name="yit_bot" id="yit_bot" />
						
						<div class="box-sections">
							<img src="img/icons/clipboard32.png" alt="monitor" class="icon" />
							<input type="submit" name="envoiReq" value="Estimation rapide" class="sendmail alignright" />
						</div>
						
						<div class="box-sections">
							<img src="img/icons/pc32.png" alt="monitor" class="icon" />
							<input type="submit" name="envoiReq" value="Envoyez un mail" class="sendmail alignright" />								
						</div>
						
						<div class="box-sections">
							<img src="img/icons/phone32.png" alt="phone" class="icon" />
							<input type="submit" name="envoiReq" value=" Rappelez-moi " class="sendmail alignright" />
						</div>
					</li>
					</legend>
				</ul>
			</fieldset>
		</form>
	</div>
	<!-- START COMMENTS -->
	<div id="comments">
	</div>
	<!-- END COMMENTS -->
</div>