<?php
    // ACF variables
    // Address
    $street = get_field		('address', 'option');	
    $zipcode = get_field	('zipcode', 'option');	
    $city = get_field		('city', 'option');	

    // Contact
    $email = get_field		('email', 'option');	
    $phone = get_field		('phone', 'option');	

    // Bank details
    $kvk = get_field		('kvk','option');
    $bic = get_field		('bic','option');
    $btw = get_field		('btw','option');
    $iban = get_field		('iban','option');
?>
<div class="site-contact">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-sm-12 col-md-6 px-4">
				<div class="contact-details">
					<ul class="contact-address">
						<li>Contactgegevens</li>
						<li>Shuttersdiscount.nl</li>
						<li><?php echo $street; ?></li>
						<li><?php echo $zipcode; ?>, <?php echo $city; ?></li>						
					</ul>
					<ul class="contact-options">
						<li><strong>E-mailadres:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>						
						<li><strong>Bereikbaar vanaf:</strong> Ma t/m vrij van 09:30uur tot 18:00uur</li>
						<li><strong>Telefoon:</strong> <?php echo $phone; ?></li>
					</ul>
					<ul class="contact-address">
						<li>Bankgegevens</li>
						<li>KVK: <?php echo $kvk; ?></li>
						<li>BIC: <?php echo $bic; ?></li>						
						<li>BTW: <?php echo $btw; ?></li>
						<li>IBAN: <?php echo $iban; ?></li>
					</ul>
					<ul class="contact-guarantee">
						<li>Zeker van je aankoop</li>
						<li>Wist je dat wij een keurmerk hebben van het CBW erkend? <br/>
							Bekijk deze <a href="https://www.cbw-erkend.nl/bedrijven/Shuttersdiscountnl-ROSMALEN">hier</a>. 
							Meer zekerheid, veilig shutters kopen.
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 px-4">
				<div class="contact-form">
					<h2>Shutters advies</h2>
					<p>
						Wij helpen graag met het ontwerpen en vormgeven van de gekozen maatwerk shutters. Daarbij is er ruim keuze uit verschillende kleuren, lamel breedtes, type zijstijlen, en in scharnieren mogelijk.
						Wilt u ook geholpen worden om de beste shutter deal te kiezen?									
					</p>
					<?php echo do_shortcode('[contact-form-7 id="334" title="Bel mij terug"]'); ?>		
				</div>				
			</div>
		</div>
	</div>
</div>