<?php 
defined('_JEXEC') or die; ?>
<!-- No direct access -->

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

<?php echo $BitcoinFaucet; ?>

<!--FORMULAIRE BITCOIN -->
<!--<label for="bitcoin"><p style="width:350px;font-size:12px;">Soutenir Vision du web avec un don en Bitcoins.<br/>33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN</p></label>-->
<span>
<form method="get" name="formbitcoin">
<select name="bitcoin" id="bitcoin" size=1 onchange="ChangeUrlBitcoin(this.form)">
<option selected value="#">--- Gagner des Bitcoins ---</option>
 <option value="#" title="Créer un portefeuille.">- Créer un portefeuille -</option>
 <option value="https://block.io" title="Conserver vos Bitcoins en ligne.&#013;Gratuit et rapide.">Block.io</option>
 <option value="#" title="Bitcoins gratuits.">- Le top du Bitcoin gratuit -</option>
 <option value="https://www.bitcoinget.com/?r=3GJ1uxp29CPgfU3jqzPJQAAqjL2RNJkfZz" title="Gagner des Satoshis.&#013;Répondre à des sondages.&#013;Installer des applications.&#013;Installer des jeux.">★ ➘ ➙ Bitcoinget.com</option>
 <option value="https://bonusbitcoin.co/?ref=D33CF2C73520" title="Gains de Satoshis toutes les 15 minutes.&#013;Répondre à des sondages.&#013;Tester des logiciels.">★ ★ ★ Bonusbitcoin.co</option>
 <option value="https://dailyfreebits.com/?id=45822551" title="Gains de 30 Satoshis toutes les 60 minutes.&#013;Le montant offert est minime.">★ ★ ➙ Dailyfreebits.com</option>
 <option value="https://faucethub.io/r/7442367" title="Plateforme qui liste les meilleurs services pour gagner des Bitcoins.&#013;S'inscrire et récolter sur les sites présentés.">★ ★ ★ Faucethub.io</option>
 <option value="https://freebitco.in/?r=4223431" title="Gains de Satoshis toutes les 60 minutes.">★ ★ ★ Freebitco.in</option>
 <option value="http://frogfaucet.com/?r=100519" title="Gains de Satoshis toutes les 10 minutes.">★ ★ ★ Frogfaucet.com</option>
 <option value="http://getcoin.site/bitcoin/?id=1616" title="Gains de quelques Satoshis.&#013;Inscription avec votre portefeuille Bitcoin.&#013;Votre portefeuille doit être lié sur Faucethub.">★ ➙ ➙ Getcoin.site/bitcoin</option>
 <option value="https://mellowads.com/?ref=346FD8CD381D" title="Gains de Satoshis toutes les 24 heures&#013;Plateforme pour réinvestir dans la publicité.">★ ★ ★ Mellowads.com</option>
 <option value="https://moonbit.co.in/?ref=a4e136b6aac0" title="Gains de Satoshis permanent.">★ ★ ★ Moonbit.co.in</option>
 <option value="http://onewayfaucet.us/?r=33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN" title="Gains de Satoshis toutes les 180 minutes.">★ ★ ★ Onewayfaucet.us</option>
 <option value="#" title="Scam à vérifier.">- Scam potentiel -</option>
 <option value="https://bitminer.io/2345991" title="Gains de Satoshis permanent.&#013;Vérifier si le service transfert les Satoshis.">❄ ❄ ➙ Bitminer.io</option>
 <option value="https://bitzonk.com?afid=3662" title="Gains de 500 Satoshis toutes les 30 minutes.&#013;Limite de 1500 Satoshis offerts.&#013;Plateforme de jeux qui nécessite un dépôt de Satoshis.">➘ ➘ ➘ Bitzonk.com</option>
 <option value="https://btcprominer.life/228462" title="Gains de Satoshis permament.&#013;Vérifier si le service transfert les Satoshis.&#013;Des Satoshis sont transférés pour de nouvelles affiliations valides.">☢ ★ ➙ Btcprominer.life</option>
 <option value="https://hashrev.com/?r=108695" title="Ajouter 40 affiliés pour recevoir 1 Bitcoin.">❄ ❄ ➙ Hashrev.com</option>
 <option value="https://xtenfaucet.com/?r=34xh4B35bYqtWGUnxYeGTMJL7bwgrdw9Pp" title="Gains de Satoshis toutes les 30 minutes.&#013;Il faut ajouter son compte Bitcoin sur FaucetHub.&#013;Les transferts ne semblent pas se faire.">❄ ❄ ❄ Xtenfaucet.com</option>
 <option value="#" title="Faire un don.">- Faire un don -</option>
 <option value="https://www.visionduweb.eu/altcoins/bitcoins/qrcode/" title="Remercier le développeur.">Remercier le développeur</option>
</select>
</form>
</span>
