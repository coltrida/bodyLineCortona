<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use function now;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            [
                'nome' => 'KRAV MAGA',
                'descrizione' => 'Il Krav Maga in ebraico significa combattimento a corta distanza, è un moderno ed efficace sistema di autodifesa adatto a uomini e donne di tutte le età. Ideato da Imi Lichtenfeld è un mix di tecniche di varie discipline (boxe, thay boxe, judo, lotta, ju jitsu) adattate e semplificate per la vita reale dove non ci sono ring o tatami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'SCUOLA DI BALLO',
                'descrizione' => 'Lezioni di ballo liscio e da sala con la scuola BRIO DANCE Non compreso nel costo standard dell’abbonamento in palestra.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'CARDIO e TONE',
                'descrizione' => 'La lezione si compone di 4 momenti, una prima fase di riscaldamento, una seconda fase con movimenti aerobici semplici a ritmo di musica, una terza fase di lavoro sulla tonificazione di alcuni gruppi muscolari e l’ultima fase di rilassamento e stretching. Si svolge a corpo libero o con l’utilizzo di piccoli attrezzi ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'HIIT TRAINING',
                'descrizione' => "L'High Intensity Interval Training descrive una modalità di esercizio caratterizzata da brevi e intermittenti esplosioni di vigorosa attività, inframezzate da periodi di riposo o di recupero attivo. Si tratta di una tipologia di allenamento molto efficace nel dimagrimento dove si alternano momenti di lavoro ad alta intensità ad esercizi a più bassa intensità.  INSANY-T   TABABA   NTC sono protocolli di allenamento hiit.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'FUNCTIONAL STEP',
                'descrizione' => "I classici passi dello step, sali e scendi sullo scalino, si combinano con esercizi di tonificazione per creare un allenamento divertente, vario ed allenante che coinvolge ogni distretto muscolare.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'KICK BOXING',
                'descrizione' => "La kick boxing è uno sport da combattimento, che nel suo insieme combina tecniche di calcio delle arti marziali orientali e tecniche di pugno del pugilato. É un tipo di sport che soddisfa sia uomini che donne per la sua preparazione atletica e il raggiungimento di ottime prestazioni fisiche, ha come obiettivo un intenso training cardiovascolare con un sensibile miglioramento della resistenza e del tono muscolare interessando tutte le parti del corpo (gambe, braccia, spalle, addome e dorsali) di fatti può essere praticato come allenamento fisico completo anche per chi non vuole combattere, è inoltre un perfetto anti-stress, ed ultimo ma non meno importante costituisce un mezzo di autodifesa sia per donne che per uomini conferendo all’atleta non solo la conoscenza di tecniche da combattimento ma anche una maggiore sicurezza di se e delle proprie capacità.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'FIT BOX',
                'descrizione' => " ",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'GINNASTICA DOLCE',
                'descrizione' => "Si tratta di una ginnastica eseguita con movimenti lenti, graduali, a basso impatto. E' un esercizio ginnico soft studiato per avvicinare al movimento persone sedentarie, anziani o coloro che hanno problemi di tipo ortopedico.  La ginnastica dolce consiste in movimenti semplici: piegamenti, allungamenti e stretching, eseguiti in modo da non richiedere a muscoli e articolazioni eccessivi sforzi. Prevede esercizi a corpo libero o l’utilizzo di piccoli attrezzi.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BODY FLEX & TONE',
                'descrizione' => "è un allenamento mirato alla tonificazione di tutti i principali distretti muscolari: addome, glutei, spalle, gambe e braccia. Gli esercizi possono essere svolti a corpo libero o con piccoli attrezzi come elastici, palle, bosu o fit ball. . Ha la durata di circa 60 minuti e si suddivide in tre fasi: i primi dieci minuti sono dedicati agli esercizi di riscaldamento, a seguire vengono proposti gli esercizi di tonificazione sia al suolo che in piedi, mentre nella  terza e ultima fase si eseguiranno tecniche  di  rilassamento: stretching ed esercizi di respirazione.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'MODRIAN AEROTONE',
                'descrizione' => "Lezione in tarda serata della durata di circa 50 minuti Sotto la guida di Alessio Modrian si eseguiranno movimenti aerobici semplici a tempo di musica ed esercizi di tonificazione. L’ultima parte della lezione si svolgerà a terra per un lavoro specifico sull’addome e stretching.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'POSTURAL & CORE WORKOUT',
                'descrizione' => "Questo tipo di lezione si prefigge di migliorare la postura, rinforzando i principali muscoli ed essa correlati, lavorando sulla mobilità articolare, sulla respirazione e sull’equilibrio. Scopo del corso è prevenire ed alleviare i principali fastidi legati scorretta postura del corpo utilizzando tecniche di ginnastica, yoga e pilates. Grande attenzione e lavoro sarà svolto sulla fascia del core al rinforzo dunque dei muscoli profondi del tronco e del bacino, al fine di ottimizzare qualsiasi gesto che richieda stabilità. Il core è il centro, ed è proprio dal centro del nostro corpo che parte il movimento. Con un core stabile e forte tutto sarà piu' semplice e sicuro.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'SPINNING',
                'descrizione' => "Se siete amanti della bike ecco l’attività che fa per voi. Si pedala a ritmo di musica seguendo un percorso costruito dall’insegnante con salite, discese e conseguenti cambi di velocità ed intensità",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'FUNCIONAL & CORE WORKOUT',
                'descrizione' => "Un movimento si dice funzionale quando rispecchia i gesti della vita quotidiana, movimenti naturali realizzati grazie alla contrazione sinergica di piu' gruppi muscolari. Scopo di questo allenamento è sviluppare un corpo bello, armonico e forte tramite esercizi che richiamano le funzioni base per cui è nato; per questo si vanno a creare percorsi che si avvicinino il più possibile a quello che il corpo umano fa per natura. Nella nostra vita quotidiana non esiste l'isolamento muscolare tipico della sala attrezzi, qualsiasi cosa facciamo, dal semplice camminare all'alzare una busta della spesa, dall'arrampicata al salto, richiede movimenti permessi dalla sinergia muscolare.  L'allenamento funzionale è un allenamento a 360° , essere funzionali vuol dire essere forti, reattivi, agili, veloci, elastici, coordinati, grazie al fatto che si acquisiscono nuovi schemi motori attraverso esperienze motorie multiple e sempre piu' difficili (la progressione è fondamentale nel functional training). Tale allenamento, grazie alle sue caratteristiche, va a sollecitare la muscolatura profonda che crea stabilizzazione articolare, a differenza del classico lavoro analitico che siamo abituati a svolgere in palestra. Questo lavoro di stabilizzazione previene molti infortuni e rinforza le articolazioni. Core workout. Esso si riferisce al rinforzo dei muscoli profondi del tronco e del bacino, al fine di ottimizzare qualsiasi gesto che richieda stabilità. Il core è il centro, ed è proprio dal centro del nostro corpo che parte il movimento. Con un core stabile e forte tutto sarà piu' semplice e sicuro, dal salire sopra uno sgabello allo svolgimento di squat – affondi – military press ecc",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BALLI CARAIBICI',
                'descrizione' => "a cura della scuola di ballo SALSA ACADEMY. Disciplina non compresa nel costo dell’abbonamento standard della palestra.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'B WORKOUT',
                'descrizione' => "Allenamento dedicato agli arti inferiori e glutei. La lezione della durata di circa un ora prevede una fase di riscaldamento e a seguire una serie di esercizi di tonificazione volti a migliorare il lato B.  Squat e affondi saranno le parole chiave di questo intenso workout",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BOOT CAMP MILITARY',
                'descrizione' => "Allenamento ispirato a quello militare, piegamenti sulle braccia, trazioni, percorsi, esercizi a corpo libero. Allenamento ad alta intensità consigliato a soggetti già allenati.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'PILATES',
                'descrizione' => "Il Pilates ha lo scopo di rafforzare il corpo, di sviluppare fluidità e precisione dei movimenti, di migliorare o correggere la postura con un lavoro centrato sulle regioni addominale e dorsale. Il Metodo si prefigge di ottenere questi obiettivi eseguendo movimenti lenti, mantenendo una grande concentrazione e attenzione alla respirazione, in modo che l’attività fisica risulti in una maggiore consapevolezza del proprio corpo e dei movimenti che si compiono. Prende il nome da Joseph Pilates, che nella prima metà del 900 lo ha sviluppato e ha messo a punto i macchinari necessari alla sua pratica, utilizzandolo per riabilitare reduci di guerra e allenare ballerini e atleti.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'YOGA DOLCE',
                'descrizione' => "  ",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'YOGA DINAMICO',
                'descrizione' => "  ",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'YOGA',
                'descrizione' => "Yoga è il termine generico per definire una disciplina di origine orientale. Una disciplina mirata a garantire benefici al corpo, attraverso il potenziamento muscolare e il miglioramento posturale, ma anche alla mente. Nato in India nei secoli scorsi, lo yoga si basa sull’assunzione di determinate posizioni, chiamate Asana, mantenute con il controllo del respiro, Pranayama, e il dominio della mente. La versione più nota e praticata è l’Hata yoga: posizioni statiche del corpo unite a una respirazione corretta e a un   atteggiamento mentale finalizzato a cancellare ogni forma di pensiero; migliora la consapevolezza di sé, l’atteggiamento posturale e mentale.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'SPARTAN CIRCUIT',
                'descrizione' => "allenamento a postazioni ad alta intensitÃ , svolto a corpo libero o con i vari attrezzi dell'area funzionale come kettlebell, suspension trainer, fune nautica, med ball, fit ball ecc. ecc.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'CARDIO & CORE',
                'descrizione' => "lavoro intenso sull'addome con intervalli cardio ",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'TOTAL BODY',
                'descrizione' => "Il Total body è un allenamento mirato alla tonificazione di tutti i principali distretti muscolari: addome, glutei, spalle, gambe e braccia. Gli esercizi possono essere svolti a corpo libero o con attrezzi come step, manubri, cavigliere, elastici o palle mediche. La lezione si svolge in gruppo e a tempo di musica. Ha la durata di circa 60 minuti e si suddivide in tre fasi: i primi dieci minuti sono dedicati allo stretching e agli esercizi di riscaldamento Segue il total body vero e proprio con esercizi sia al suolo che in piedi.  La terza e ultima fase è dedicata al rilassamento: stretching ed esercizi di respirazione.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'ACQUA DANCE',
                'descrizione' => 'Su Prenotazione',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BODY CROSS',
                'descrizione' => 'Su Prenotazione',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'ACQUA BOND',
                'descrizione' => 'Su Prenotazione',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'ASS & ABS',
                'descrizione' => 'Gambe, Glutei e Addome',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'ACQUA HIIT',
                'descrizione' => 'Su Prenotazione',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BODY BALANCE',
                'descrizione' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'NTC HIIT',
                'descrizione' => 'Focus Resistenza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'NTC STRENGTH',
                'descrizione' => 'Focus Forza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BRAZILIAN JIU-JITSU',
                'descrizione' => 'Su Prenotazione',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BODY TONE',
                'descrizione' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'ACQUA GYM',
                'descrizione' => 'Giuly',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'ACQUA GYM',
                'descrizione' => 'Nadia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'WORKOUT & YOGA',
                'descrizione' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'BJJ OPEN TATAMI',
                'descrizione' => 'Su Prenotazione',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
