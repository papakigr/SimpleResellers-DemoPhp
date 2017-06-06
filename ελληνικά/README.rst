Script demo_php.
================


To script για την αναζήτηση domain σε php σας δίνει 2 παραδείγματα. Το ένα για αναζήτηση ονομάτων χώρου
και το άλλο για whois.
Ρυθμίσεις πρέπει να γίνουν στο αρχείο:

config.php

$Papaki_apikey="myapikey"; //place your apikey here


Για να δουλεύει σωστά ο κώδικας θα πρέπει να έχετε ορίσει μέσα από το προφίλ σας στο control panel του Papaki.gr,
την IP του server που τρέχει το site σας.


Test environment
----------------
Αν θέλετε πρώτα να τεστάρετε το script σε test environment τότε μπορείτε να κάνετε τις εξής αλλαγές στο config.php:

Βάλτε το apikey του test environment και αλλάξτε το papaki_Post_url σε https://api-test.papaki.com/register_url2.aspx

