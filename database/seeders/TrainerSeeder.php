<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::insert([
            [
                'nome' => 'Nadia',
                'cognome' => 'Castellani',
                'foto' => '1.jpg',
                'descrizione' => "Nata a Perugia il 14 marzo 1986 dopo aver frequentato il liceo scientifico si iscrive a scienze motorie. Le prime esperienze lavorative la vedono coinvolta con i più piccoli nelle scuole elementari ed infanzia con il progetto 'sport giocando', successivamente si dedicherà al mondo del fitness frequentando numerosi corsi specializzandosi in fitness musicale, functional training, postural training e allenamenti al femminile. Cresciuta nel mondo del fitness porto avanti questo lavoro con professionalità e passione, convinta che l'attività fisica sia prima di tutto salute e che si debba rendere cura del proprio corpo essendo lo specchio dell'anima e l'unico posto che abbiamo per vivere."
            ],
            [
                'nome' => 'Giuliana',
                'cognome' => 'Moretti',
                'foto' => '2.jpg',
                'descrizione' => "Nasce a Cortona il 07/10/1961 – 1986 1° donna nel comune di Cortona, consegue la cintura nera di Karate. 1987 Si diploma istruttore di Body building, a Ravenna (oggi F.I.F. – federazione italiana fitness). 1988 E’ scelta dall’Associazione Italiana di Ginnastica Aerobica, a far parte di un gruppo ristretto di circa 20 atlete/i, che dovranno esibirsi c/o lo stadio dei marmi a Roma nella cerimonia di apertura del meeting internazionale di Atletica Leggera. 1993  A Firenze vince i campionati regionali di Ginnastica Aerobica. 1994 - 1996   «Expò Etruria» (due edizioni) 1995  Meeting di Body building c/o teatro comunale di Sinalunga 1996  «Bettolle in… immagini e musica» 1997  Campionato Italiano di Body building Sinalunga 1997   «Mayspotmeeting97» dove il gruppo si esibisce ad Arezzo sia in piazza Grande che in p. San  Jacopo. 2001 1° edizione del premio sport «Citta di Cortona» c/o le terme di Manzano  2003  Frequenta uno dei primi corsi che abilitano all’insegnamento della Fit-boxe. 2° classificata Trail «Città di Cortona» 2016  14 km cat. «Over 50» 2° classificata  Trail «delle valli Etrusche» 2016  14 km     cat. «Over 50» 	2017 – I migliori piazzamenti nelle ultime gare disputate 	1°    classificata  «Città di Cortona» 2017  14 km    cat. «Over 50» 4°   classificata   Trail «delle valli Etrusche» 2017  14 km      cat. «Over 50» 	10°  class. Assoluta  «Tuscany crossing» 2017 _ 15 km _  cat. Unica (sul podio poiché tra le prime 10) 	1°    classificata   Trail «del Pratomagno» 2017  14 km cat. «Over 50» 3°    classificata   Trail «Sacret forrest» 2017  cat. «Over 50» 2°    classificata Trail «del Falterona» 2017 14 km        cat. «Over 50» 	1°    classificata  Ecomezza della acque Val d’Orcia  22 km     cat. «Veterane» 3°   classificata  Ecotrail «Tra i borghi»  21 km   cat. «Over 50» 	1°   classificata   Campionato  «Valli Aretine Trail Cup 2017»   cat. «Sprint trail over 50» 1°   classificata   Trail  Girifalco - Cortona 2017  7 km  cat. «Over 50» 	1°   classificata  Trail  dell’Amiata  2017  14 km   cat. «Over 50»"
            ],
            [
                'nome' => 'Alessio',
                'cognome' => 'Mariottoni',
                'foto' => '3.jpg',
                'descrizione' => "Laurea in scienze motorie (2001) Laurea in scienze dell'alimentazione (2002), Specializzazione recupero spalla anca e ginocchio (EAA) / Personale Trainer (MSP) / Istruttore avviamento atletica leggera ( FIDAL) / Allenatore di nuoto di I livello (FIN)/ Assistente bagnanti/primo soccorso ( FIN salvamento) / Istruttore nuoto II livello ( FIN ) / Presidente il corpo nel mondo acsd ( ginn dolce, musica, attivita' fisica adattata per anziani, scuola avviamento atletica leggera, escursioni orientering patto ambientale, progetto termografia equina, organizzazione eventi di beneficenza,progetto ippoterapia, progetto musica negli asili, progetto educazione fisica nelle elementari, progetto scuola/acqua/medicinali LIFOG Kenya (dal 2008) ,gestione estiva associativa dell'organizzazione corsi tempo libero eventi in piscine nel periodo estivo); guida di safari di I livello con driver (kenya), produttore discografico dal 1999 iscritto alla Siae, autore discografico deejay e pensatore libero educato al rispetto e all altruismo, credo negli animali ma molti uomini possono farcela. Appassionato di biologia anatomia animale etologia (corso guida di safari di I livello AIEA (associazione italiana esperti d'africa) con driver (kenya) )"
            ],
        ]);
    }
}
