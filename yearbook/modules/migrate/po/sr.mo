��    o      �  �         `	  *   a	  (   �	  %   �	  �   �	    �
  
   �     �     �     �  D   �  �   D     @     N     T     [  "   c  	   �  	   �     �  |   �     )     =     K     Y  U   g     �  Y   �  2   6  
   i  �   t     �            a   #     �  �  �     6  '   C     k     �  A   �  ?   �       �   3     �     �  >     	   J  D  T  A   �     �  �   �     �     �     �     �     �     �     �               !     2     B     S  "   a      �  *   �  	   �     �     �           "   !     D     S  '   g     �     �     �     �     �     �               $  @   ,  >   m     �  %   �  C   �  B     ?   a  -   �     �     �  -   �     %  	   +  1   5  \   g  
   �     �     �     �     �  �     $   �  $   �  I     �  ^  +      )   3   5   ]   �   �   C  �!     �"     �"     �"     �"  C   #    U#     W$     p$     w$     $  )   �$     �$     �$     �$  �   �$     n%     �%     �%     �%  J   �%     &  ^   "&  N   �&  
   �&  �   �&     �'     �'     �'  ]   �'     !(  �  ;(     2*  +   E*     q*     �*  G   �*  M   �*     @+  �   X+  
   F,     Q,  U   e,  
   �,  G  �,  K   .     Z.  �   k.     8/     ?/     O/     ]/     m/     ~/     �/     �/  	   �/     �/     �/     �/     �/  #   0  #   (0  2   L0  	   0     �0     �0     �0    �0  3   �1     '2     ;2  +   W2     �2     �2  *   �2  -   �2     3     3     '3     :3     @3  5   G3  ;   }3     �3  %   �3  J   �3  E   34  =   y4      �4     �4     �4  5   5     D5  
   K5  B   V5  R   �5  
   �5     �5     6      6     >6  �   \6  !   17  !   S7  P   u7             D      .   V   d       9   B   1   2   4   U   W   e       >   $   @              0   '             5       f   
   8   ?   I                 	              j       l   6          3   [   X       n   <   %      k   g   ]   M                 \   :   G          F                    =   &   7       ;      )   _                   (         !          C   Z   S   *          O   /      c       T       m      K   o   `   h   "          J   L      ,       A   E       H   i   ^           Q   +   b                         a      N   Y   P   #       -      R    %sSummary%s was truncated for %sitem %d%s. %sTitle%s was truncated for %sitem %d%s. (Default to summary value if not set) <b>Note:</b> Before you import any data you should make sure your Gallery 1 is installed correctly by adding a photo through the Gallery 1 web interface.  Make sure you resolve any errors you see there first. Add the same <tt>.htaccess</tt> block in the Gallery1 albums directory if you also wish to redirect links to image files and album directories. Note that these redirects are not active until the G1 images are actually removed or moved. Omit the !-f line shown below to redirect anyway. Album Name Album Notes Album Title Albums to import: An album already exists with this name.  This album will be renamed. Any hidden albums or items will be imported with restricted view permissions. Activate the Hidden Items module before migration to import these as "hidden" which means they are invisible to guest users until accessed by the direct URL for those items. Base filename Blank Cancel Caption Character Encoding of Source Text: Check All Clear All Confirm Migration Copy all or part of an existing Gallery 1 installation into your Gallery 2.  It won't modify your Gallery 1 data in any way. Creating thumbnails Custom Field: Custom field: Custom fields Custom fields imported into item fields above will not be duplicated as custom fields Custom fields will be imported Custom fields will not be imported.  Activate Custom Fields module to enable this option. Default to same as summary if custom field not set Delete All Deleting map entries will cause old G1 URLs to produce HTTP Not Found errors instead of redirecting to G2 pages.  Delete all entries? Description Description: %s Destination: Do not create Gallery 2 custom fields for fields selected above for title, summary or description Download .htaccess file Edit or create a file called <tt>.htaccess</tt> in your Gallery1 directory and add the text shown below to the file. Remove G1 rewrite rules from an existing file. Redirects will also work in your Gallery2 directory if G2 is installed in the path where G1 used to be. However, if you also use the G2 URL Rewrite module then activate the G1 redirect rule in that module instead of using the block shown below. Encoding: %s Ensure the %s Apache module is enabled. Enter a custom field name Error importing %s Error while importing %d album. Errors while importing %d albums. Error while importing %d user. Errors while importing %d users. Example: /var/www/albums G1 URL redirect. Use only if G2 is installed where G1 used to be and you have run a G1 import with the URL redirect option selected. Otherwise follow instructions in %sMigrate Site Admin%s. G1 path G1-&gt;G2 Mapping G1-&gt;G2 mappings will be recorded for use in URL Redirection Gallery 1 Gallery 2 has the following fields for all items and albums: title, summary text shown with thumbnails and description text shown in item or album view. G1 albums already have these three items (though the names of summary and description are reversed). G1 items have only a filename and caption. For items imported into G2: Gallery can redirect old Gallery1 URLs to the new Gallery2 pages. Hidden Items If G2 is installed in the path where G1 used to exist, you will need to remove the G1 file "gallery_remote2.php" file before you can use Gallery Remote to upload images to G2. Import Import %s now. Import Albums Import Complete Import Users Import custom fields Import from Gallery 1 Import more data Imported %s Importing Photos Importing Users Invert Selection Item captions Item fields will be imported from: Map entries deleted successfully Migrate your Gallery 1 albums to Gallery 2 Migration No albums imported. No available users No users imported. Normally Gallery will generate thumbnails the first time you look at them, then save them for subsequent views.  If you check this box, we'll create the thumbnails at migration time.  Migration will take longer but the first time you view an album will go much faster. Path to Gallery 1 albums directory Prepare Import Recently Used Paths Record G1-&gt;G2 mappings during import Select Select Albums and Users Select the albums to migrate Select the users to migrate Set description from: Set summary from: Set title from: Set: Source: Successfully imported %d album. Successfully imported %d albums. Successfully imported %d user. Successfully imported %d users. Summary The path that you entered is invalid. There is one G1-&gt;G2 map entry There are %d G1-&gt;G2 map entries These users are already in your gallery, and will not be imported: This album has an illegal name and will be renamed to <i>%s</i> This album's owner (%s) hasn't been imported. Thumbnail %d of %d Thumbnail generation Thumbnails will be generated during migration Title Title: %s To enable URL Redirection under Apache webserver: Top level albums and albums whose parents are not selected will be imported into this album: Truncated: URL Redirection Username Users to import: You did not enter a path. You don't have any Graphics Toolkit activated to handle JPEG images.  If you import now, you will not have any thumbnails.  Visit the %sModules%s page to activate a Graphics Toolkit. You must choose something to import! You must specify a custom field name Your Gallery 1 will be converted from this character encoding into UTF-8: Project-Id-Version: Gallery: Migration 1.0.13
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2005-08-14 16:53+0200
PO-Revision-Date: 2008-09-21 17:53+0100
Last-Translator: Jozef Selesi <selesi@gmail.com>
Language-Team: Srpski <gallery-translations@lists.sourceforge.net>
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=2; plural=(n != 1);
X-Generator: KBabel 1.10
 %sSažetak%s je skraćen za %sobjekat %d%s. %sNaslov%s je skraćen za %sobjekat %d%s. (ako nije navedeno, podrazumeva se vrednost sažetka) <b>Napomena:</b> Pre nego što prenesete bilo koje podatke, treba da se uverite da je Galerija 1 ispravno instalirana, tako što ćete dodati jednu fotografiju kroz njen web interfejs. Rešite eventualne probleme koji se prilikom toga jave. Dodajte isti <tt>.htaccess</tt> odeljak u direktorijum sa albumima Galerije 1 ako želite da preusmeravate i adrese albuma i slika. Obratite pažnju na to da ova preusmerenja nisu aktivna sve dok se same slike ne uklone iz Galerije 1. Preskočite dole navedenu liniju sa !-f, ako želite da preusmerite i posojeće objekte. Naziv albuma Napomene albuma Naslov albuma Albumu koji će biti preneti: Album sa ovim nazivom već postoji, pa će mu naziv biti promenjen. Skriveni albumi ili objekti će biti preneseni sa ograničenim pravima pregleda. Aktivirajte modul Skriveni objekti pre migracije, ako želite da ih prenesete kao "skrivene", što znači da su nevidljivi gostima sve dok se ne prikažu preko direktne adrese. Osnovnog naziva datoteke Prazno Otkaži Natpisa Kodni raspored znakova u izvornom tekstu: Obeleži sve Isključi sve Potvrda migracije Prenos čitave ili dela postojeće instalacije Galerije 1 u vašu Galeriju 2. Vaši podaci u Galeriji 1 neće ni na koji način biti izmenjeni. Pravljenje umanjenih prikaza Posebnog polja: Posebno polje: Posebna polja Posebna polja preneta u polja iznad neće biti duplirana kao posebna polja Posebna polja će biti preneta Posebna polja neće biti preneta. Aktivirajte modul za Posebna polja da omogućite ovu opciju. Podrazumevana vrednost je ista kao i kod sažetka ako posebno polje nije uneto Briši sve Brisanje stavki mapiranja će prouzrokovati da se prilikom pristupa starim G1 adresama prikažu HTTP Not Found greške umesto odgovarajućih G2 strana. Da li ste sigurni da želite da obrišete sve stavke? Opis Opis: %s Odredište: Nemoj praviti posebna polja u Galeriji 2 za gore izabrana polja za naslov, sažetak ili opis. Prenos .htaccess datoteke Izmenite ili napravite datoteku sa nazivom <tt>.htaccess</tt> u vašem direktorijumu sa Galerijom 1 i dodajte u nju dole naveden tekst. Uklonite pravila za prepisivanje adresa Galerije 1 iz postojeće datoteke. Preusmeravanje će raditi i u vašem direktorijumu sa Galerijom 2, ako je instalirana na mesto gde se nalazila Galerija 1. Međutim, ako koristite modul za prepisivanje adresa Galerije 2, onda aktivirajte G1 pravilo preusmeravanja u tom modulu, umesto onoga što je navedeno u odeljku ispod. Kodni raspored: %s Uverite se da je aktiviran Apache modul %s. Unesite nazov posebnog polja Greška prilikom prenosa %s Greška prilikom prenosa %d albuma. Greška prilikom prenosa %d albuma. Greška prilikom prenosa %d korisnika. Greška prilikom prenosa %d korisnika. Primer: /var/www/albumi Preusmeravanje G1 adrese. Koristite ovu mogućnost samo ako je G2 instalirana gde je bila G1, a pokrenuli ste prenos iz G1 sa uključenom mogućnošću preusmeravanja adrese. U protivnom, sledite uputstva u %sMigriranju Administracije%s. Putanja G1 Mapiranje G1-&gt;G2 G1-&gt;G2 mapiranja će biti sačuvana za korišćenje prilikom preusmeravanja adresa Galerija 1 Galerija 2 ima sledeća polja za sve objekte i albume: naslov, sažetak koji se prikazuje uz umanjen prikaz i opis koji se prikazuje pilikom pregledanja albuma ili objekta. G1 albumi već imaju ova tri polja (iako su nazivi sažetka i opisa obrnuti). G1 objekti imaju samo naziv i natpis. Za objekte koji će biti preneti u G2: Možete preusmeriti stare adrese iz Galerije 1 na nove stranice Galerije 2. Skriveni objekti Ako je G2 instalirana na putanju gde je bila G1, moraćete da uklonite datoteku Galerije 1 sa nazivom "gallery_remote2.php", pre nego što ćete moći da koristite Daljinsku Galeriju za prenos slika u G2. Prenos Prenesi %s sada Prenos albuma Prenos završen Prenos korisnika Prenos posebnih polja Prenos iz Galerije 1 Prenesi još podataka Prenet %s Prenos fotografija Prenos korisnika Obrni Natpisi objekata Polja objekata će biti preneta iz: Stavke mapiranja uspešno izbrisane Migriranje albuma iz vaše Galerije 1 u Galeriju 2 Migracija Ni jedan album nije prenet. Nema odgovarajućih korisnika Ni jedan korisnik nije prenet. U normalnim okolnostima, Galerija će generisati umanjene prikaze prvi put kada ih pregledate, i sačuvati ih za sledeći put. Ako obeležite ovo polje, napravićemo umanjene prikaze u toku prenosa. Migracija će trajati duže, ali će prvo prikazivanje albuma biti brže. Putanja do postojećeg direktorijuma sa Galerijom 1 Pripremanje prenosa Nedavno korišćene putanje Sačuvaj G1-&gt;G2 mapiranja u toku prenosa Izaberi Izaberite albume i korisnike Izaberite albume koje želite da prenesete Izaberite korisnike koje želite da prenesete Preuzmi opis iz: Preuzmi sažetak iz: Preuzmi naslov iz: Skup: Izvor: Uspešno prenet %d album. Uspešno preneto %d albuma. Uspešno prenet %d korisnik. Uspešno preneto %d korisnika. Sažetak Putanja koju ste uneli nije ispravna. Postoji jedna stavka u G1-&gt;G2 mapi. Postoji %d stavki u G1-&gt;G2 mapi. Ovi korisnici se već nalaze u vašoj Galeriji, i neće biti preneti: Album ima neispravno ime, pa će biti preimenovan u <i>%s</i> Vlasnik albuma (%s) nije prenet. %d. umanjen prikaz od %d Generacija umanjenih prikaza Umanjeni prikazi će biti generisani u toku migracije Naslov Naslov: %s Da biste omogućili preusmeravanje adresa pod Apache web serverom: Osnovni albumi i albumi čiji roditelji nisu izabrani, biće preneti u ovaj album: Skraćeno: Preusmeravanje adrese Korisničko ime Korisnici koji će biti preneti: Niste uneli ispravnu putanju. Nija aktivirana ni jedna grafička alatka koja može da radi sa JPEG slikama. Ako sada izvršite prenos, nećete imati ni jedan umenjen prikaz. Otvorite stranu %sModuli%s da aktivirate jednu od grafičkih alatki. Morate izabrati nešto za prenos! Morate uneti naziv posebnog polja Vaša Galerija 1 će biti konvertovana iz ovog kodnog rasporeda znakova u UTF-8. 