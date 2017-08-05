<?php 
defined('_JEXEC') or die; ?>
<!--
No direct access
Vérifier si l'installation se passe bien avec UTF-8.
Le copié collé manuel vers default.php depuis le FTP en ligne de LWS ne fonctionne pas avec UTF-8.
Charger le fichier totalement en cas de modification fonctionne et permet d'afficher les caractères avec accents normalement.
-->

<script language="JavaScript">
function ChangeUrlBitcoin(formbitcoin)
   {
   if (formbitcoin.bitcoin.selectedIndex != 0)
      {
     var urlbitcoin ;
     urlbitcoin = formbitcoin.bitcoin.options[formbitcoin.bitcoin.selectedIndex].value;
     window.open(urlbitcoin,'_blank','toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, copyhistory=0, menuBar=0');
       }
   }
</script>

<?php echo $BitcoinFaucet; ?>

<!--FORMULAIRE BITCOIN -->
<!--<label for="bitcoin"><p style="width:350px;font-size:12px;">Soutenir Vision du web avec un don en Bitcoins.<br/>33ZsupGQr1rUmwj62HadcZ55hsGJajD9wN</p></label>-->
<span>
<form method="get" name="formbitcoin">
<select name="bitcoin" id="bitcoin" size=1 onchange="ChangeUrlBitcoin(this.form)">
<option selected value="">-Gagner des Bitcoins-</option>
  <option value="https://block.io" title="Créer un portefeuille.&#013;Stocker des Bitcoins.&#013;Gratuit et rapide.">1 ★ ★ ★ Créer un portefeuille</option>
  <option value="https://www.bitcoinget.com/?r=3GJ1uxp29CPgfU3jqzPJQAAqjL2RNJkfZz" title="Répondre à des sondages.&#013;Installer des jeux.&#013;Installer des applications.">2 ★ ➘ ➙ Bitcoinget.com</option>
  <option value="https://bitminer.io/2345991" title="Gains de Satoshis permanent.&#013;Vérifier si le service transfert les Satoshis.&#013;Vérifier si des Satoshis sont transférés pour de nouvelles affiliations.">2 ❄ ❄ ➙ Bitminer.io</option>
  <option value="https://bitzonk.com?afid=3662" title="Gains de 500 Satoshis toutes les 30 minutes.&#013;Limite à 1500 Satoshis offerts en tout et pour tout.&#013;Plateforme de jeux qui nécessite un dépôt de Satoshis.">2 ➘ ➘ ➘ Bitzonk.com</option>
  <option value="https://bonusbitcoin.co/?ref=D33CF2C73520" title="Gains de Satoshis toutes les 15 minutes.&#013;Répondre à des sondages.&#013;Tester des logiciels.">2 ★ ★ ★ Bonusbitcoin.co</option>
  <option value="https://btcprominer.life/228462" title="Gains de Satoshis permament.&#013;Vérifier si le service transfert les Satoshis.&#013;Des Satoshis sont transférés pour de nouvelles affiliations valides.">2 ☢ ★ ➙ Btcprominer.life</option>
  <option value="https://dailyfreebits.com/?id=45822551" title="Gains de 30 Satoshis toutes les 60 minutes.&#013;Le montant offert est vraiment minime.">2 ★ ★ ➙ Dailyfreebits.com</option>
  <option value="https://faucethub.io/r/7442367" title="Plateforme qui liste les meilleurs services pour gagner des Bitcoins.&#013;S'inscrire et récolter sur les sites présentés.">2 ★ ★ ★ Faucethub.io</option>
  <option value="https://freebitco.in/?r=4223431" title="Gains de Satoshis toutes les 60 minutes.">2 ★ ★ ★ Freebitco.in</option>
  <option value="http://frogfaucet.com/?r=100519" title="Gains de Satoshis toutes les 10 minutes.">2 ★ ★ ★ Frogfaucet.com</option>
  <option value="http://getcoin.site/bitcoin/?id=1616" title="Gains de quelques Satoshis.&#013;Inscription avec votre portefeuille Bitcoin, votre portefeuille doit également être lié sur Faucethub.">2 ★ ➙ ➙ Getcoin.site/bitcoin</option>
  <option value="https://hashrev.com/?r=108695">2 Hashrev.com</option>
  <option value="https://mellowads.com/?ref=346FD8CD381D" title="Gains de Satoshis toutes les 24 heures&#013;Plateforme pour réinvestir dans la publicité.">2 ★ ★ ★ Mellowads.com</option>
  <option value="https://moonbit.co.in/?ref=a4e136b6aac0" title="Gains de Satoshis permanent.">2 ★ ★ ★ Moonbit.co.in</option>
  <option value="https://xtenfaucet.com/?r=34xh4B35bYqtWGUnxYeGTMJL7bwgrdw9Pp" title="Gains de Satoshis toutes les 30 minutes.&#013;Il faut ajouter son compte Bitcoin sur FaucetHub.&#013;Les transferts ne semblent pas se faire.">2 ❄ ❄ ❄ Xtenfaucet.com</option>
  <option value="https://www.visionduweb.eu/altcoins/bitcoins/qrcode/" title="Faire un don en Bitcoins pour Vision du web.">3 ★ ★ ★ Un don pour Vision du web</option>
</select>
</form>
</span>
