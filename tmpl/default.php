<?php 
defined('_JEXEC') or die; ?>
<!-- No direct access -->
<?php echo $BitcoinFaucet; ?>

<script language="JavaScript">
function ChangeUrlBitcoin(formbitcoin)
   {
   if (formbitcoin.bitcoin.selectedIndex != 0)
      {
     var urlbitcoin ;
     urlbitcoin = formbitcoin.bitcoin.options[formbitcoin.bitcoin.selectedIndex].value;
     window.open(urlbitcoin,'_blank','toolbar=1, location=0, directories=1, status=1, scrollbars=1, resizable=1, copyhistory=1, menuBar=1');
       }
   }
</script>

<!--FORMULAIRE BITCOIN -->
<!--<label for="bitcoin"><p style="width:350px;font-size:12px;">Soutenir Vision du web avec un don en Bitcoins.<br/>33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN</p></label>-->
<span>
<form method="get" name="formbitcoin">
<select name="bitcoin" id="bitcoin" size=1 onchange="ChangeUrlBitcoin(this.form)">
<option selected value="#">--- <?php echo $BitcoinFaucet; ?> ---</option>
 <option value="#" title="Créer un portefeuille.">- Créer un portefeuille -</option>
 <option value="https://block.io" title="Conserver vos Bitcoins en ligne.&#013;Gratuit et rapide.">Block.io</option>
 <option value="#" title="Bitcoins gratuits.">- Le top du Bitcoin gratuit -</option>
 <option value="http://bestbitcoinfaucet.com/?r=33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN" title="Gagner des Satoshis une fois par jour.">★ ★ ➙ Bestbitcoinfaucet.com</option>
 <option value="https://www.bitcoinget.com/?r=3GJ1uxp29CPgfU3jqzPJQAAqjL2RNJkfZz" title="Gagner des Satoshis.&#013;Répondre à des sondages.&#013;Installer des applications.&#013;Installer des jeux.">★ ➘ ➙ Bitcoinget.com</option>
 <option value="http://www.bitdesire.it/?id=46332" title="Saisir votre adresse Bitcoin pour toucher votre gain.">★ ★ ➙ Bitdesire.it</option>
 <option value="http://bitflips.info/33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN/" title="Saisir votre adresse Bitcoin pour toucher votre gain.">★ ★ ➙ Bitflips.info</option>
 <option value="http://bitter.io/?r=870836" title="Consulter des liens pour gagner des Satoshis.">★ ★ ➙ Bitter.io</option>
 <option value="https://bonusbitcoin.co/?ref=D33CF2C73520" title="Gains de Satoshis toutes les 15 minutes.&#013;Répondre à des sondages.&#013;Tester des logiciels.">★ ★ ★ Bonusbitcoin.co</option>
 <option value="http://btcclicks.com/?r=c3fd7aca" title="Gains de Satoshis en ouvrant des liens.&#013;Attendre quelques secondes pour valider votre gain.">★ ★ ➙ Btcclicks.com</option>
 <option value="http://claimbit.win/?r=33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN" title="Saisir votre adresse Bitcoin pour toucher votre gain toutes les 15 minutes.">★ ★ ➙ Claimbit.win</option>
 <option value="https://dailyfreebits.com/?id=45822551" title="Gains de 30 Satoshis toutes les 60 minutes.&#013;Le montant offert est minime.">★ ★ ➙ Dailyfreebits.com</option>
 <option value="https://faucethub.io/r/7442367" title="Liste des meilleurs services pour gagner des Bitcoins.&#013;S'inscrire et récolter sur les sites présentés.">★ ★ ★ Faucethub.io</option>
 <option value="https:www.fautsy.com/?r=33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN" title="Nécessite de lier son adresse Bitcoin sur FaucetHub.">★ ★ ★ Fautsy.com</option>
 <option value="https://freebitco.in/?r=4223431" title="Gains de Satoshis toutes les 60 minutes.">★ ★ ★ Freebitco.in</option>
 <option value="https://www.ifaucet.info/33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN/" title="Nécessite de lier son adresse Bitcoin sur FaucetHub.">★ ★ ➙ Ifaucet.info</option>
 <option value="Micro-btc.com/?r=Zer00CooL" title="Mineur de Bitcoin en ligne.&#013;15 Kh/s offert chaque jour.">★ ★ ➙ Micro-BTC.com</option>
 <option value="https://mellowads.com/?ref=346FD8CD381D" title="Gains de Satoshis toutes les 24 heures&#013;Plateforme pour réinvestir dans la publicité.">★ ★ ★ Mellowads.com</option>
 <option value="https://moonbit.co.in/?ref=a4e136b6aac0" title="Gains de Satoshis permanent.">★ ★ ★ Moonbit.co.in</option>
 <option value="http://onewayfaucet.us/?r=33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN" title="Gains de Satoshis toutes les 180 minutes.">★ ★ ★ Onewayfaucet.us</option>
 <option value="http://smartcoin.fr?id=e888127694350c93eeb808d037bf6a7b" title="Gains de Satoshis toutes les 60 minutes.">★ ★ ➙ Smartcoin.fr</option>
 <option value="http://www.zedclick.com/faucet-bitcoin/?r=33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN" title="Nécessite de lier son adresse Bitcoin sur FaucetHub.">★ ★ ➙ Zedclick.com</option>
</select>
</form>
</span>

<!--<option value="#" title="Faire un don.">- Faire un don -</option>-->
<!--<option value="https://www.visionduweb.eu/altcoins/bitcoins/qrcode/" title="Remercier le développeur.">Versement au développeur</option>-->


Ajouter
Winfreebitcoin
Saisir votre adresse Bitcoin pour toucher votre gain après validation du captcha. Nécessite un compte FaucetHub.
Adresse pour affilier de nouveaux utilisateurs : https://winfreebitcoin.net/?r=33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN

77bitcoin
Créer un compte pour pouvoir se connecter pour toucher votre gain après validation du captcha.
 Adresse pour affilier de nouveaux utilisateurs : http://77bitcoin.com/r/20278

Coinbrawl (Gagner des Bitcoins.)
Créer un compte pour pouvoir jouer et affronter des adversaires pour gagner des satoshis.
Adresse pour affilier de nouveaux utilisateurs : www.coinbrawl.com/?ref=223413

Bitfun (Gagner des Bitcoins.)
Créer un compte pour pouvoir jouer à des jeux rémunérés.
Adresse pour affilier de nouveaux utilisateurs : http://bitfun.co/?ref=EADB37F862FC

Bagi (Gagner des Bitcoins.)
Créer un compte pour pouvoir gagner quelques satoshis.
Adresse pour affilier de nouveaux utilisateurs : https://bagi.co.in/bitcoin/?ref=88977



