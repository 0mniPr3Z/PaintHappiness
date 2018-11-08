<!-- START CONTENT -->
<div id="content-page" class="content group">
	<div class="hentry group">
		<form id="contact-form" class="contact-form" method="GET" action="#" enctype="multipart/form-data">
			
			<?php echo $msgResult; ?>
			
			<input type="hidden" name="pge" value="4" id="pge" />
			<div class="usermessagea"></div>
			<fieldset>
				
				<ul>
				

					
					<!--//// NOM ==============================================================-->
					<li class="text-field">
					
						<label for="name-contact-us">
							<span class="label">Nom, Prénom</span>
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
					
					<!--// EMAIL ============================================================ -->
					<li class="text-field">
					
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
					 <li class="text-field">
					 
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
							<input type="tel" pattern="^((\+\d{1,9}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
							name="tel"
							placeholder="01...">												
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
					
					
					<li class="submit-button">
						<input type="text" name="yit_bot" id="yit_bot" />
						<input type="submit" name="envoiReq" value="Envoyer" class="sendmail alignright" />			
					</li>
				</ul>
			</fieldset>
		</form>
	</div>
	<!-- START COMMENTS -->
	<div id="comments">
	</div>
	<!-- END COMMENTS -->
</div>