<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BusStopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus_stops')->truncate();
        DB::table('bus_stops')->insert(array (
            0 =>
                array (
                    'id' => '14430',
                    'name' => 'CITADELLE',
                    'latitude' => 47.51432,
                    'longitude' => 6.783473,
                ),
            1 =>
                array (
                    'id' => '14431',
                    'name' => 'JEAN JAURES',
                    'latitude' => 47.51636,
                    'longitude' => 6.781013,
                ),
            2 =>
                array (
                    'id' => '14432',
                    'name' => 'MONT CHEVIS',
                    'latitude' => 47.518608,
                    'longitude' => 6.77908,
                ),
            3 =>
                array (
                    'id' => '14433',
                    'name' => 'ROUTE DE LAIRE',
                    'latitude' => 47.519164,
                    'longitude' => 6.779611,
                ),
            4 =>
                array (
                    'id' => '14434',
                    'name' => 'CHIFFOGNE',
                    'latitude' => 47.51964,
                    'longitude' => 6.784597,
                ),
            5 =>
                array (
                    'id' => '14435',
                    'name' => 'RENAUD DE BOURGOGNE',
                    'latitude' => 47.52007,
                    'longitude' => 6.787018,
                ),
            6 =>
                array (
                    'id' => '14436',
                    'name' => 'DIDEROT',
                    'latitude' => 47.520522,
                    'longitude' => 6.790467,
                ),
            7 =>
                array (
                    'id' => '14437',
                    'name' => 'MIEMONT',
                    'latitude' => 47.520628,
                    'longitude' => 6.792797,
                ),
            8 =>
                array (
                    'id' => '14438',
                    'name' => 'BOULLOCHE',
                    'latitude' => 47.518913,
                    'longitude' => 6.793073,
                ),
            9 =>
                array (
                    'id' => '14439',
                    'name' => 'THOUROT',
                    'latitude' => 47.51632,
                    'longitude' => 6.794917,
                ),
            10 =>
                array (
                    'id' => '14440',
                    'name' => 'GAMBETTA',
                    'latitude' => 47.514503,
                    'longitude' => 6.79741,
                ),
            11 =>
                array (
                    'id' => '14441',
                    'name' => 'ETUVE',
                    'latitude' => 47.512672,
                    'longitude' => 6.799185,
                ),
            12 =>
                array (
                    'id' => '14442',
                    'name' => 'RENE THOM',
                    'latitude' => 47.511415,
                    'longitude' => 6.795865,
                ),
            13 =>
                array (
                    'id' => '14443',
                    'name' => 'PLACE FERRER',
                    'latitude' => 47.509317,
                    'longitude' => 6.793899,
                ),
            14 =>
                array (
                    'id' => '14445',
                    'name' => 'LA SCHLIFFE',
                    'latitude' => 47.509297,
                    'longitude' => 6.79834,
                ),
            15 =>
                array (
                    'id' => '14446',
                    'name' => 'ACROPOLE QUAI 6',
                    'latitude' => 47.510017,
                    'longitude' => 6.801915,
                ),
            16 =>
                array (
                    'id' => '14447',
                    'name' => 'HELVETIE',
                    'latitude' => 47.508578,
                    'longitude' => 6.806803,
                ),
            17 =>
                array (
                    'id' => '14449',
                    'name' => 'CHAMP DU CERF',
                    'latitude' => 47.50003,
                    'longitude' => 6.813166,
                ),
            18 =>
                array (
                    'id' => '14451',
                    'name' => 'ARBOUANS',
                    'latitude' => 47.491907,
                    'longitude' => 6.811407,
                ),
            19 =>
                array (
                    'id' => '14452',
                    'name' => 'KELLER',
                    'latitude' => 47.488768,
                    'longitude' => 6.81767,
                ),
            20 =>
                array (
                    'id' => '14453',
                    'name' => 'LES FORGES',
                    'latitude' => 47.488838,
                    'longitude' => 6.824905,
                ),
            21 =>
                array (
                    'id' => '14454',
                    'name' => 'ES COMBAS',
                    'latitude' => 47.488897,
                    'longitude' => 6.82724,
                ),
            22 =>
                array (
                    'id' => '14456',
                    'name' => 'CHAMPAGNE',
                    'latitude' => 47.493135,
                    'longitude' => 6.833204,
                ),
            23 =>
                array (
                    'id' => '14457',
                    'name' => 'TEMPLE QUAI 1',
                    'latitude' => 47.482978,
                    'longitude' => 6.838973,
                ),
            24 =>
                array (
                    'id' => '14458',
                    'name' => 'BRIAND',
                    'latitude' => 47.482247,
                    'longitude' => 6.841621,
                ),
            25 =>
                array (
                    'id' => '14459',
                    'name' => 'PLACE DU MARCHE QUAI 1',
                    'latitude' => 47.482442,
                    'longitude' => 6.844832,
                ),
            26 =>
                array (
                    'id' => '14460',
                    'name' => 'RANCHOTS',
                    'latitude' => 47.47783,
                    'longitude' => 6.842928,
                ),
            27 =>
                array (
                    'id' => '14461',
                    'name' => 'ACACIAS',
                    'latitude' => 47.476,
                    'longitude' => 6.844307,
                ),
            28 =>
                array (
                    'id' => '14463',
                    'name' => 'REIMS',
                    'latitude' => 47.473385,
                    'longitude' => 6.849175,
                ),
            29 =>
                array (
                    'id' => '14464',
                    'name' => 'LE COTEAU',
                    'latitude' => 47.47196,
                    'longitude' => 6.851022,
                ),
            30 =>
                array (
                    'id' => '14465',
                    'name' => 'LES BESSOTS',
                    'latitude' => 47.470538,
                    'longitude' => 6.852457,
                ),
            31 =>
                array (
                    'id' => '14466',
                    'name' => 'LES NOYERS',
                    'latitude' => 47.46661,
                    'longitude' => 6.854707,
                ),
            32 =>
                array (
                    'id' => '14467',
                    'name' => 'LA MALETIERE',
                    'latitude' => 47.464345,
                    'longitude' => 6.856487,
                ),
            33 =>
                array (
                    'id' => '14469',
                    'name' => 'LA LANNE',
                    'latitude' => 47.460498,
                    'longitude' => 6.86282,
                ),
            34 =>
                array (
                    'id' => '14470',
                    'name' => 'ESPERANCE',
                    'latitude' => 47.458423,
                    'longitude' => 6.869287,
                ),
            35 =>
                array (
                    'id' => '14471',
                    'name' => 'BERNE',
                    'latitude' => 47.456472,
                    'longitude' => 6.870863,
                ),
            36 =>
                array (
                    'id' => '14472',
                    'name' => 'TERRE BLANCHE',
                    'latitude' => 47.45152,
                    'longitude' => 6.87607,
                ),
            37 =>
                array (
                    'id' => '14473',
                    'name' => 'LE CERCLE',
                    'latitude' => 47.449197,
                    'longitude' => 6.877802,
                ),
            38 =>
                array (
                    'id' => '14474',
                    'name' => 'LES PRES',
                    'latitude' => 47.447262,
                    'longitude' => 6.880302,
                ),
            39 =>
                array (
                    'id' => '14475',
                    'name' => 'LES TILLEULS',
                    'latitude' => 47.444182,
                    'longitude' => 6.881495,
                ),
            40 =>
                array (
                    'id' => '14476',
                    'name' => 'VIEUX MOULIN',
                    'latitude' => 47.442187,
                    'longitude' => 6.88164,
                ),
            41 =>
                array (
                    'id' => '14477',
                    'name' => 'MONTOILLE',
                    'latitude' => 47.440018,
                    'longitude' => 6.883223,
                ),
            42 =>
                array (
                    'id' => '14478',
                    'name' => 'QUELET',
                    'latitude' => 47.439453,
                    'longitude' => 6.885588,
                ),
            43 =>
                array (
                    'id' => '14479',
                    'name' => 'GRANJEAN',
                    'latitude' => 47.437967,
                    'longitude' => 6.885498,
                ),
            44 =>
                array (
                    'id' => '14480',
                    'name' => 'VERS ABBEVILLERS',
                    'latitude' => 47.43538,
                    'longitude' => 6.88617,
                ),
            45 =>
                array (
                    'id' => '14481',
                    'name' => 'LA BOULOIE',
                    'latitude' => 47.432896,
                    'longitude' => 6.887095,
                ),
            46 =>
                array (
                    'id' => '14483',
                    'name' => 'BEL AIR',
                    'latitude' => 47.48566,
                    'longitude' => 6.73068,
                ),
            47 =>
                array (
                    'id' => '14484',
                    'name' => 'LES EGREYOTTES',
                    'latitude' => 47.485662,
                    'longitude' => 6.730165,
                ),
            48 =>
                array (
                    'id' => '14485',
                    'name' => 'FRAMBOISIERS',
                    'latitude' => 47.484132,
                    'longitude' => 6.726978,
                ),
            49 =>
                array (
                    'id' => '14486',
                    'name' => 'VERGERS',
                    'latitude' => 47.481939,
                    'longitude' => 6.719714,
                ),
            50 =>
                array (
                    'id' => '14487',
                    'name' => 'POMMIERS',
                    'latitude' => 47.48021,
                    'longitude' => 6.717529,
                ),
            51 =>
                array (
                    'id' => '14488',
                    'name' => 'FAURECIA',
                    'latitude' => 47.475512,
                    'longitude' => 6.707617,
                ),
            52 =>
                array (
                    'id' => '14489',
                    'name' => 'SAUSSENET',
                    'latitude' => 47.481274,
                    'longitude' => 6.724342,
                ),
            53 =>
                array (
                    'id' => '14490',
                    'name' => 'PLACE CENTRALE',
                    'latitude' => 47.480726,
                    'longitude' => 6.729905,
                ),
            54 =>
                array (
                    'id' => '14491',
                    'name' => 'STADE',
                    'latitude' => 47.479623,
                    'longitude' => 6.733122,
                ),
            55 =>
                array (
                    'id' => '14492',
                    'name' => 'VIEILLE VIE',
                    'latitude' => 47.480413,
                    'longitude' => 6.737781,
                ),
            56 =>
                array (
                    'id' => '14494',
                    'name' => 'LE LORDAY',
                    'latitude' => 47.480046,
                    'longitude' => 6.752338,
                ),
            57 =>
                array (
                    'id' => '14496',
                    'name' => 'LA ROCHE',
                    'latitude' => 47.481643,
                    'longitude' => 6.765715,
                ),
            58 =>
                array (
                    'id' => '14497',
                    'name' => 'MONT BART',
                    'latitude' => 47.486592,
                    'longitude' => 6.769501,
                ),
            59 =>
                array (
                    'id' => '14498',
                    'name' => 'LES FIOS',
                    'latitude' => 47.489154,
                    'longitude' => 6.77167,
                ),
            60 =>
                array (
                    'id' => '14499',
                    'name' => 'RUE DE DUNG',
                    'latitude' => 47.492011,
                    'longitude' => 6.771269,
                ),
            61 =>
                array (
                    'id' => '14500',
                    'name' => 'CHALETS',
                    'latitude' => 47.495973,
                    'longitude' => 6.772162,
                ),
            62 =>
                array (
                    'id' => '14501',
                    'name' => 'VERS COURCELLES',
                    'latitude' => 47.500793,
                    'longitude' => 6.771923,
                ),
            63 =>
                array (
                    'id' => '14502',
                    'name' => 'LA GROTTE',
                    'latitude' => 47.503169,
                    'longitude' => 6.772409,
                ),
            64 =>
                array (
                    'id' => '14503',
                    'name' => 'SAINTE SUZANNE',
                    'latitude' => 47.50542,
                    'longitude' => 6.77471,
                ),
            65 =>
                array (
                    'id' => '14504',
                    'name' => 'LES VOIRONNES',
                    'latitude' => 47.508285,
                    'longitude' => 6.774939,
                ),
            66 =>
                array (
                    'id' => '14505',
                    'name' => 'LES LILAS',
                    'latitude' => 47.509603,
                    'longitude' => 6.778377,
                ),
            67 =>
                array (
                    'id' => '14506',
                    'name' => 'LES ROSES',
                    'latitude' => 47.509786,
                    'longitude' => 6.781847,
                ),
            68 =>
                array (
                    'id' => '14507',
                    'name' => 'NEUFS MOULINS',
                    'latitude' => 47.509474,
                    'longitude' => 6.784835,
                ),
            69 =>
                array (
                    'id' => '14508',
                    'name' => 'LAENNEC',
                    'latitude' => 47.509145,
                    'longitude' => 6.787545,
                ),
            70 =>
                array (
                    'id' => '14509',
                    'name' => 'SAINT GEORGES',
                    'latitude' => 47.50903,
                    'longitude' => 6.792357,
                ),
            71 =>
                array (
                    'id' => '14515',
                    'name' => 'CHABAUD LATOUR',
                    'latitude' => 47.51026,
                    'longitude' => 6.808922,
                ),
            72 =>
                array (
                    'id' => '14516',
                    'name' => 'JOFFRE',
                    'latitude' => 47.514157,
                    'longitude' => 6.808498,
                ),
            73 =>
                array (
                    'id' => '14517',
                    'name' => 'PRAIRIE',
                    'latitude' => 47.51573,
                    'longitude' => 6.814769,
                ),
            74 =>
                array (
                    'id' => '14519',
                    'name' => 'RUE DE L\'EGLISE',
                    'latitude' => 47.514684,
                    'longitude' => 6.825801,
                ),
            75 =>
                array (
                    'id' => '14520',
                    'name' => 'LECLERC',
                    'latitude' => 47.513955,
                    'longitude' => 6.828682,
                ),
            76 =>
                array (
                    'id' => '14521',
                    'name' => 'MUSEE PEUGEOT',
                    'latitude' => 47.51496,
                    'longitude' => 6.832222,
                ),
            77 =>
                array (
                    'id' => '14522',
                    'name' => 'EGLANTINE',
                    'latitude' => 47.517097,
                    'longitude' => 6.834101,
                ),
            78 =>
                array (
                    'id' => '14523',
                    'name' => 'CREPON',
                    'latitude' => 47.520608,
                    'longitude' => 6.833217,
                ),
            79 =>
                array (
                    'id' => '14524',
                    'name' => 'ES COURES',
                    'latitude' => 47.52381,
                    'longitude' => 6.831165,
                ),
            80 =>
                array (
                    'id' => '14525',
                    'name' => 'RUE DU NORD',
                    'latitude' => 47.52481964389247,
                    'longitude' => 6.830109375671327,
                ),
            81 =>
                array (
                    'id' => '14527',
                    'name' => 'PIERRE CURIE',
                    'latitude' => 47.527842,
                    'longitude' => 6.822773,
                ),
            82 =>
                array (
                    'id' => '14530',
                    'name' => 'GASCOGNE',
                    'latitude' => 47.532954,
                    'longitude' => 6.816539,
                ),
            83 =>
                array (
                    'id' => '14531',
                    'name' => 'LUTECE',
                    'latitude' => 47.534135,
                    'longitude' => 6.822687,
                ),
            84 =>
                array (
                    'id' => '14533',
                    'name' => 'LES FOUGERES',
                    'latitude' => 47.5371,
                    'longitude' => 6.822343,
                ),
            85 =>
                array (
                    'id' => '14541',
                    'name' => 'ANATOLE FRANCE',
                    'latitude' => 47.537281,
                    'longitude' => 6.804403,
                ),
            86 =>
                array (
                    'id' => '14542',
                    'name' => 'CAMUS',
                    'latitude' => 47.53653,
                    'longitude' => 6.801592,
                ),
            87 =>
                array (
                    'id' => '14543',
                    'name' => 'CONTEJEAN',
                    'latitude' => 47.535505,
                    'longitude' => 6.79694,
                ),
            88 =>
                array (
                    'id' => '14544',
                    'name' => 'LA LIZAINE',
                    'latitude' => 47.532273,
                    'longitude' => 6.796187,
                ),
            89 =>
                array (
                    'id' => '14547',
                    'name' => 'BETHONCOURT',
                    'latitude' => 47.530237,
                    'longitude' => 6.794137,
                ),
            90 =>
                array (
                    'id' => '14548',
                    'name' => 'LE BOURBET',
                    'latitude' => 47.530137,
                    'longitude' => 6.791953,
                ),
            91 =>
                array (
                    'id' => '14549',
                    'name' => 'PRE FALLOT',
                    'latitude' => 47.531882,
                    'longitude' => 6.789408,
                ),
            92 =>
                array (
                    'id' => '14550',
                    'name' => 'RUDEROP',
                    'latitude' => 47.533662,
                    'longitude' => 6.788487,
                ),
            93 =>
                array (
                    'id' => '14551',
                    'name' => 'PRE L\'EPINE',
                    'latitude' => 47.535497,
                    'longitude' => 6.783008,
                ),
            94 =>
                array (
                    'id' => '14552',
                    'name' => 'RESISTANCE',
                    'latitude' => 47.534118,
                    'longitude' => 6.784327,
                ),
            95 =>
                array (
                    'id' => '14553',
                    'name' => 'LIBERTE',
                    'latitude' => 47.529323,
                    'longitude' => 6.785983,
                ),
            96 =>
                array (
                    'id' => '14554',
                    'name' => 'LE MITTAN',
                    'latitude' => 47.526475,
                    'longitude' => 6.785184,
                ),
            97 =>
                array (
                    'id' => '14557',
                    'name' => 'COTEAU JOUVENT',
                    'latitude' => 47.501847,
                    'longitude' => 6.791485,
                ),
            98 =>
                array (
                    'id' => '14558',
                    'name' => 'LOU BLAZER',
                    'latitude' => 47.499318,
                    'longitude' => 6.792356,
                ),
            99 =>
                array (
                    'id' => '14560',
                    'name' => 'PETITE HOLLANDE',
                    'latitude' => 47.497861,
                    'longitude' => 6.797131,
                ),
            100 =>
                array (
                    'id' => '14562',
                    'name' => 'JEAN MOULIN',
                    'latitude' => 47.500638,
                    'longitude' => 6.802045,
                ),
            101 =>
                array (
                    'id' => '14564',
                    'name' => 'CAMPUS',
                    'latitude' => 47.495767,
                    'longitude' => 6.803876,
                ),
            102 =>
                array (
                    'id' => '14565',
                    'name' => 'FOILLET',
                    'latitude' => 47.49959,
                    'longitude' => 6.815497,
                ),
            103 =>
                array (
                    'id' => '14566',
                    'name' => 'FROMAGERIE',
                    'latitude' => 47.497673,
                    'longitude' => 6.819592,
                ),
            104 =>
                array (
                    'id' => '14567',
                    'name' => 'ZINGG',
                    'latitude' => 47.497982,
                    'longitude' => 6.82623,
                ),
            105 =>
                array (
                    'id' => '14568',
                    'name' => 'LAMARTINE',
                    'latitude' => 47.499378,
                    'longitude' => 6.828562,
                ),
            106 =>
                array (
                    'id' => '14569',
                    'name' => 'CLEMENCEAU',
                    'latitude' => 47.500752,
                    'longitude' => 6.831685,
                ),
            107 =>
                array (
                    'id' => '14570',
                    'name' => 'RUE BASSE',
                    'latitude' => 47.502105,
                    'longitude' => 6.83398,
                ),
            108 =>
                array (
                    'id' => '14571',
                    'name' => 'GRANDE RUE',
                    'latitude' => 47.502152,
                    'longitude' => 6.838263,
                ),
            109 =>
                array (
                    'id' => '14572',
                    'name' => 'RUE DE SOCHAUX',
                    'latitude' => 47.50399,
                    'longitude' => 6.843481,
                ),
            110 =>
                array (
                    'id' => '14573',
                    'name' => 'ECUREUILS',
                    'latitude' => 47.505247,
                    'longitude' => 6.847765,
                ),
            111 =>
                array (
                    'id' => '14574',
                    'name' => 'LE CHATEAU',
                    'latitude' => 47.506283,
                    'longitude' => 6.854043,
                ),
            112 =>
                array (
                    'id' => '14575',
                    'name' => 'ALOUETTES',
                    'latitude' => 47.50678,
                    'longitude' => 6.859167,
                ),
            113 =>
                array (
                    'id' => '14576',
                    'name' => 'MARCHE',
                    'latitude' => 47.50582,
                    'longitude' => 6.861375,
                ),
            114 =>
                array (
                    'id' => '14577',
                    'name' => 'ODESSA',
                    'latitude' => 47.503815,
                    'longitude' => 6.856208,
                ),
            115 =>
                array (
                    'id' => '14578',
                    'name' => 'SOUVENIR',
                    'latitude' => 47.49704249741176,
                    'longitude' => 6.8497410343933325,
                ),
            116 =>
                array (
                    'id' => '14579',
                    'name' => 'LA MONTAGNE',
                    'latitude' => 47.502467,
                    'longitude' => 6.855748,
                ),
            117 =>
                array (
                    'id' => '14580',
                    'name' => 'DAMBENOIS',
                    'latitude' => 47.55044,
                    'longitude' => 6.867968,
                ),
            118 =>
                array (
                    'id' => '14581',
                    'name' => 'LOICHOTTES',
                    'latitude' => 47.546402,
                    'longitude' => 6.868543,
                ),
            119 =>
                array (
                    'id' => '14582',
                    'name' => 'VILLAGE',
                    'latitude' => 47.543772,
                    'longitude' => 6.8655,
                ),
            120 =>
                array (
                    'id' => '14583',
                    'name' => 'LA SAVOUREUSE',
                    'latitude' => 47.539917,
                    'longitude' => 6.853192,
                ),
            121 =>
                array (
                    'id' => '14584',
                    'name' => 'NOMMAY',
                    'latitude' => 47.538112,
                    'longitude' => 6.84711,
                ),
            122 =>
                array (
                    'id' => '14585',
                    'name' => 'ES EPRAUX',
                    'latitude' => 47.536475,
                    'longitude' => 6.846207,
                ),
            123 =>
                array (
                    'id' => '14587',
                    'name' => 'CHAMP SIMONIN',
                    'latitude' => 47.52931,
                    'longitude' => 6.841667,
                ),
            124 =>
                array (
                    'id' => '14589',
                    'name' => 'LES SOURCES',
                    'latitude' => 47.524415,
                    'longitude' => 6.836885,
                ),
            125 =>
                array (
                    'id' => '14590',
                    'name' => 'SUR LE BIEF',
                    'latitude' => 47.524512,
                    'longitude' => 6.833148,
                ),
            126 =>
                array (
                    'id' => '14594',
                    'name' => 'MARGUERITES',
                    'latitude' => 47.52272622580492,
                    'longitude' => 6.819281457672105,
                ),
            127 =>
                array (
                    'id' => '14595',
                    'name' => 'GIBOULON',
                    'latitude' => 47.520368,
                    'longitude' => 6.816217,
                ),
            128 =>
                array (
                    'id' => '14596',
                    'name' => 'SOUS LA CHAUX',
                    'latitude' => 47.517554,
                    'longitude' => 6.813553,
                ),
            129 =>
                array (
                    'id' => '14597',
                    'name' => 'JUSSIEU',
                    'latitude' => 47.519012,
                    'longitude' => 6.809312,
                ),
            130 =>
                array (
                    'id' => '14598',
                    'name' => 'BUFFON',
                    'latitude' => 47.518597,
                    'longitude' => 6.806602,
                ),
            131 =>
                array (
                    'id' => '14599',
                    'name' => 'CIMETIERE DU HAUT',
                    'latitude' => 47.516357,
                    'longitude' => 6.804705,
                ),
            132 =>
                array (
                    'id' => '14601',
                    'name' => 'CUVIER',
                    'latitude' => 47.514643,
                    'longitude' => 6.805623,
                ),
            133 =>
                array (
                    'id' => '14602',
                    'name' => 'COMBE AUX BICHES',
                    'latitude' => 47.516075,
                    'longitude' => 6.80916,
                ),
            134 =>
                array (
                    'id' => '14603',
                    'name' => 'RUE DU PORT',
                    'latitude' => 47.503865,
                    'longitude' => 6.792547,
                ),
            135 =>
                array (
                    'id' => '14604',
                    'name' => 'COURCELLES',
                    'latitude' => 47.503813,
                    'longitude' => 6.776317,
                ),
            136 =>
                array (
                    'id' => '14605',
                    'name' => 'CHENEVIER',
                    'latitude' => 47.500957,
                    'longitude' => 6.776598,
                ),
            137 =>
                array (
                    'id' => '14606',
                    'name' => 'LA CRUE',
                    'latitude' => 47.49878,
                    'longitude' => 6.78024,
                ),
            138 =>
                array (
                    'id' => '14607',
                    'name' => 'AERODROME',
                    'latitude' => 47.496875,
                    'longitude' => 6.780679,
                ),
            139 =>
                array (
                    'id' => '14608',
                    'name' => 'CHATILLON',
                    'latitude' => 47.489378,
                    'longitude' => 6.776697,
                ),
            140 =>
                array (
                    'id' => '14609',
                    'name' => 'FONDERIE',
                    'latitude' => 47.480538,
                    'longitude' => 6.769245,
                ),
            141 =>
                array (
                    'id' => '14610',
                    'name' => 'CANAL',
                    'latitude' => 47.478877,
                    'longitude' => 6.768532,
                ),
            142 =>
                array (
                    'id' => '14611',
                    'name' => 'LE PONT',
                    'latitude' => 47.475963,
                    'longitude' => 6.766983,
                ),
            143 =>
                array (
                    'id' => '14612',
                    'name' => 'BOUDRY',
                    'latitude' => 47.474445,
                    'longitude' => 6.764447,
                ),
            144 =>
                array (
                    'id' => '14613',
                    'name' => 'MONNOT',
                    'latitude' => 47.475647,
                    'longitude' => 6.757258,
                ),
            145 =>
                array (
                    'id' => '14614',
                    'name' => 'MOULIN',
                    'latitude' => 47.475652,
                    'longitude' => 6.757278,
                ),
            146 =>
                array (
                    'id' => '14615',
                    'name' => 'LA LANGE',
                    'latitude' => 47.476267,
                    'longitude' => 6.753702,
                ),
            147 =>
                array (
                    'id' => '14616',
                    'name' => 'LES ETROITS',
                    'latitude' => 47.473242,
                    'longitude' => 6.769625,
                ),
            148 =>
                array (
                    'id' => '14617',
                    'name' => 'LA BLONGEOTTE',
                    'latitude' => 47.473755,
                    'longitude' => 6.772135,
                ),
            149 =>
                array (
                    'id' => '14618',
                    'name' => 'LES FONTAINES',
                    'latitude' => 47.475562,
                    'longitude' => 6.774137,
                ),
            150 =>
                array (
                    'id' => '14619',
                    'name' => 'BOUTONNIERS',
                    'latitude' => 47.477288,
                    'longitude' => 6.777097,
                ),
            151 =>
                array (
                    'id' => '14620',
                    'name' => 'FONTENOTTE',
                    'latitude' => 47.479473,
                    'longitude' => 6.780447,
                ),
            152 =>
                array (
                    'id' => '14621',
                    'name' => 'LA CRAY',
                    'latitude' => 47.48166,
                    'longitude' => 6.780163,
                ),
            153 =>
                array (
                    'id' => '14622',
                    'name' => 'COTEAU DE L\'ANE',
                    'latitude' => 47.483962,
                    'longitude' => 6.776168,
                ),
            154 =>
                array (
                    'id' => '14623',
                    'name' => 'LES CANTONS',
                    'latitude' => 47.485596,
                    'longitude' => 6.856872,
                ),
            155 =>
                array (
                    'id' => '14624',
                    'name' => 'CHAMPS ROFROID',
                    'latitude' => 47.48445,
                    'longitude' => 6.856758,
                ),
            156 =>
                array (
                    'id' => '14625',
                    'name' => 'LA BAUME',
                    'latitude' => 47.482903,
                    'longitude' => 6.850742,
                ),
            157 =>
                array (
                    'id' => '14627',
                    'name' => 'PEUPLIERS',
                    'latitude' => 47.474595,
                    'longitude' => 6.840944,
                ),
            158 =>
                array (
                    'id' => '14628',
                    'name' => 'PONT DE GLAND',
                    'latitude' => 47.473163,
                    'longitude' => 6.841632,
                ),
            159 =>
                array (
                    'id' => '14629',
                    'name' => 'VERS BONDEVAL',
                    'latitude' => 47.471616,
                    'longitude' => 6.843121,
                ),
            160 =>
                array (
                    'id' => '14630',
                    'name' => 'PAQUERETTES',
                    'latitude' => 47.469496,
                    'longitude' => 6.84358,
                ),
            161 =>
                array (
                    'id' => '14631',
                    'name' => 'GRANDES BRIERES',
                    'latitude' => 47.467834,
                    'longitude' => 6.843924,
                ),
            162 =>
                array (
                    'id' => '14632',
                    'name' => 'DELACROIX',
                    'latitude' => 47.462219,
                    'longitude' => 6.8457,
                ),
            163 =>
                array (
                    'id' => '14633',
                    'name' => 'PICASSO',
                    'latitude' => 47.461704,
                    'longitude' => 6.848565,
                ),
            164 =>
                array (
                    'id' => '14634',
                    'name' => 'CEZANNE',
                    'latitude' => 47.461188,
                    'longitude' => 6.851487,
                ),
            165 =>
                array (
                    'id' => '14635',
                    'name' => 'BERGERONNETTES',
                    'latitude' => 47.459011,
                    'longitude' => 6.851888,
                ),
            166 =>
                array (
                    'id' => '14636',
                    'name' => 'BANNOT',
                    'latitude' => 47.458954,
                    'longitude' => 6.856586,
                ),
            167 =>
                array (
                    'id' => '14637',
                    'name' => 'VIETTE',
                    'latitude' => 47.460271,
                    'longitude' => 6.85819,
                ),
            168 =>
                array (
                    'id' => '14638',
                    'name' => 'BALANCE',
                    'latitude' => 47.439092,
                    'longitude' => 6.881522,
                ),
            169 =>
                array (
                    'id' => '14639',
                    'name' => 'VERS THULAY',
                    'latitude' => 47.435577,
                    'longitude' => 6.88002,
                ),
            170 =>
                array (
                    'id' => '14640',
                    'name' => 'PRAYS',
                    'latitude' => 47.433514,
                    'longitude' => 6.882999,
                ),
            171 =>
                array (
                    'id' => '14641',
                    'name' => 'CRATET',
                    'latitude' => 47.431624,
                    'longitude' => 6.883343,
                ),
            172 =>
                array (
                    'id' => '14642',
                    'name' => 'LA CHAPOTTE',
                    'latitude' => 47.425264,
                    'longitude' => 6.882885,
                ),
            173 =>
                array (
                    'id' => '14648',
                    'name' => 'BOISGENETS',
                    'latitude' => 47.53070806288755,
                    'longitude' => 6.839655507934594,
                ),
            174 =>
                array (
                    'id' => '14649',
                    'name' => 'LES HAUTS BOIS',
                    'latitude' => 47.532579,
                    'longitude' => 6.838194,
                ),
            175 =>
                array (
                    'id' => '14650',
                    'name' => 'LES BARRES',
                    'latitude' => 47.534699,
                    'longitude' => 6.841517,
                ),
            176 =>
                array (
                    'id' => '14651',
                    'name' => 'LE LONGEOT',
                    'latitude' => 47.543408,
                    'longitude' => 6.850513,
                ),
            177 =>
                array (
                    'id' => '14652',
                    'name' => 'ROUTE DE MONTBELIARD',
                    'latitude' => 47.552089,
                    'longitude' => 6.851773,
                ),
            178 =>
                array (
                    'id' => '14653',
                    'name' => 'CHATENOIS',
                    'latitude' => 47.555861161776384,
                    'longitude' => 6.852614984130923,
                ),
            179 =>
                array (
                    'id' => '14666',
                    'name' => 'LA TOUR',
                    'latitude' => 47.534718,
                    'longitude' => 6.798708,
                ),
            180 =>
                array (
                    'id' => '14667',
                    'name' => 'MARCONI',
                    'latitude' => 47.532342,
                    'longitude' => 6.800593,
                ),
            181 =>
                array (
                    'id' => '14668',
                    'name' => 'PASTEUR',
                    'latitude' => 47.53447,
                    'longitude' => 6.803868,
                ),
            182 =>
                array (
                    'id' => '14669',
                    'name' => 'LAVOISIER',
                    'latitude' => 47.532935,
                    'longitude' => 6.807751,
                ),
            183 =>
                array (
                    'id' => '14671',
                    'name' => 'CORA',
                    'latitude' => 47.530205,
                    'longitude' => 6.810233,
                ),
            184 =>
                array (
                    'id' => '14672',
                    'name' => 'CHARMONTET',
                    'latitude' => 47.522963,
                    'longitude' => 6.812172,
                ),
            185 =>
                array (
                    'id' => '14674',
                    'name' => 'LULLI',
                    'latitude' => 47.50072,
                    'longitude' => 6.792782,
                ),
            186 =>
                array (
                    'id' => '14675',
                    'name' => 'PETIT CHENOIS',
                    'latitude' => 47.501293,
                    'longitude' => 6.796652,
                ),
            187 =>
                array (
                    'id' => '14676',
                    'name' => 'BIZET',
                    'latitude' => 47.502402,
                    'longitude' => 6.799623,
                ),
            188 =>
                array (
                    'id' => '14679',
                    'name' => 'CARRONS',
                    'latitude' => 47.494817,
                    'longitude' => 6.828939,
                ),
            189 =>
                array (
                    'id' => '14685',
                    'name' => 'EPOISSES',
                    'latitude' => 47.48416,
                    'longitude' => 6.833018,
                ),
            190 =>
                array (
                    'id' => '14687',
                    'name' => 'PEUGEOT',
                    'latitude' => 47.480738,
                    'longitude' => 6.824612,
                ),
            191 =>
                array (
                    'id' => '14688',
                    'name' => 'ROUGET DE L\'ISLE',
                    'latitude' => 47.479625,
                    'longitude' => 6.824533,
                ),
            192 =>
                array (
                    'id' => '14690',
                    'name' => 'LYCEE PEUGEOT',
                    'latitude' => 47.470577,
                    'longitude' => 6.828437,
                ),
            193 =>
                array (
                    'id' => '14691',
                    'name' => 'PISCINE',
                    'latitude' => 47.46835983241269,
                    'longitude' => 6.8334168478851325,
                ),
            194 =>
                array (
                    'id' => '14693',
                    'name' => 'OEHMICHEN',
                    'latitude' => 47.46350983142631,
                    'longitude' => 6.832498660049396,
                ),
            195 =>
                array (
                    'id' => '14694',
                    'name' => 'VILLEDIEU',
                    'latitude' => 47.461775,
                    'longitude' => 6.83773,
                ),
            196 =>
                array (
                    'id' => '14695',
                    'name' => 'LE MANDRIN',
                    'latitude' => 47.462148,
                    'longitude' => 6.835225,
                ),
            197 =>
                array (
                    'id' => '14699',
                    'name' => 'RAMEAU',
                    'latitude' => 47.45732,
                    'longitude' => 6.8294,
                ),
            198 =>
                array (
                    'id' => '14703',
                    'name' => 'NATETRE',
                    'latitude' => 47.454078,
                    'longitude' => 6.82682,
                ),
            199 =>
                array (
                    'id' => '14704',
                    'name' => 'LES BRUYERES',
                    'latitude' => 47.45671,
                    'longitude' => 6.824208,
                ),
            200 =>
                array (
                    'id' => '14717',
                    'name' => 'LES CHENES',
                    'latitude' => 47.51363,
                    'longitude' => 6.835352,
                ),
            201 =>
                array (
                    'id' => '14718',
                    'name' => 'CITEDO',
                    'latitude' => 47.512259,
                    'longitude' => 6.836693,
                ),
            202 =>
                array (
                    'id' => '14719',
                    'name' => 'CFAI',
                    'latitude' => 47.500878,
                    'longitude' => 6.842337,
                ),
            203 =>
                array (
                    'id' => '14720',
                    'name' => 'LA CROISEE',
                    'latitude' => 47.496767,
                    'longitude' => 6.8394,
                ),
            204 =>
                array (
                    'id' => '14721',
                    'name' => 'RESIDENCES',
                    'latitude' => 47.492202,
                    'longitude' => 6.840902,
                ),
            205 =>
                array (
                    'id' => '14722',
                    'name' => 'CHARLES ALLEMAND',
                    'latitude' => 47.489777,
                    'longitude' => 6.841983,
                ),
            206 =>
                array (
                    'id' => '14723',
                    'name' => 'ARBLETIERS',
                    'latitude' => 47.485459,
                    'longitude' => 6.844056,
                ),
            207 =>
                array (
                    'id' => '14724',
                    'name' => 'RUE DE BELFORT',
                    'latitude' => 47.487069,
                    'longitude' => 6.840587,
                ),
            208 =>
                array (
                    'id' => '14726',
                    'name' => 'CASTORS',
                    'latitude' => 47.479053,
                    'longitude' => 6.848452,
                ),
            209 =>
                array (
                    'id' => '14727',
                    'name' => 'ALLENDE',
                    'latitude' => 47.475549,
                    'longitude' => 6.850507,
                ),
            210 =>
                array (
                    'id' => '14728',
                    'name' => 'ES BREUX',
                    'latitude' => 47.47463,
                    'longitude' => 6.855167,
                ),
            211 =>
                array (
                    'id' => '14729',
                    'name' => 'COMBE MIREY',
                    'latitude' => 47.474133,
                    'longitude' => 6.857615,
                ),
            212 =>
                array (
                    'id' => '14731',
                    'name' => 'CHAMPS MONTANTS',
                    'latitude' => 47.473758,
                    'longitude' => 6.86448,
                ),
            213 =>
                array (
                    'id' => '14736',
                    'name' => 'SAINT MICHEL',
                    'latitude' => 47.508447,
                    'longitude' => 6.766419,
                ),
            214 =>
                array (
                    'id' => '14737',
                    'name' => 'CHEMIN DES CHARS',
                    'latitude' => 47.511172,
                    'longitude' => 6.770217,
                ),
            215 =>
                array (
                    'id' => '14738',
                    'name' => 'ROUTE D\'ALLONDANS',
                    'latitude' => 47.517612,
                    'longitude' => 6.776357,
                ),
            216 =>
                array (
                    'id' => '14739',
                    'name' => 'BOSSIERE',
                    'latitude' => 47.515018,
                    'longitude' => 6.78626,
                ),
            217 =>
                array (
                    'id' => '14740',
                    'name' => 'PROUDHON',
                    'latitude' => 47.516793,
                    'longitude' => 6.788057,
                ),
            218 =>
                array (
                    'id' => '14741',
                    'name' => 'VICTOR HUGO',
                    'latitude' => 47.518688,
                    'longitude' => 6.787205,
                ),
            219 =>
                array (
                    'id' => '14742',
                    'name' => 'PASCAL',
                    'latitude' => 47.518042,
                    'longitude' => 6.791003,
                ),
            220 =>
                array (
                    'id' => '14751',
                    'name' => 'JOLY',
                    'latitude' => 47.52595,
                    'longitude' => 6.787603,
                ),
            221 =>
                array (
                    'id' => '14752',
                    'name' => 'PONT DE BOLLARDIERE',
                    'latitude' => 47.475802,
                    'longitude' => 6.83877,
                ),
            222 =>
                array (
                    'id' => '14753',
                    'name' => 'SOUS ROCHES',
                    'latitude' => 47.475267,
                    'longitude' => 6.836333,
                ),
            223 =>
                array (
                    'id' => '14754',
                    'name' => 'NORMANDIE',
                    'latitude' => 47.471047,
                    'longitude' => 6.836803,
                ),
            224 =>
                array (
                    'id' => '14755',
                    'name' => 'PROVENCE',
                    'latitude' => 47.467397,
                    'longitude' => 6.837792,
                ),
            225 =>
                array (
                    'id' => '14756',
                    'name' => 'POITOU',
                    'latitude' => 47.464622,
                    'longitude' => 6.837848,
                ),
            226 =>
                array (
                    'id' => '14758',
                    'name' => 'RIVES DU DOUBS',
                    'latitude' => 47.458677,
                    'longitude' => 6.837875,
                ),
            227 =>
                array (
                    'id' => '14759',
                    'name' => 'ESPLANADE',
                    'latitude' => 47.456133,
                    'longitude' => 6.837517,
                ),
            228 =>
                array (
                    'id' => '14760',
                    'name' => 'LONGINES',
                    'latitude' => 47.452288,
                    'longitude' => 6.839595,
                ),
            229 =>
                array (
                    'id' => '14761',
                    'name' => 'BEAULIEU',
                    'latitude' => 47.449867,
                    'longitude' => 6.8388,
                ),
            230 =>
                array (
                    'id' => '14762',
                    'name' => 'COURTES MESIERES',
                    'latitude' => 47.44731,
                    'longitude' => 6.835363,
                ),
            231 =>
                array (
                    'id' => '14763',
                    'name' => 'SAINTE THERESE',
                    'latitude' => 47.445878,
                    'longitude' => 6.833028,
                ),
            232 =>
                array (
                    'id' => '14764',
                    'name' => 'GRAVIERS',
                    'latitude' => 47.444602,
                    'longitude' => 6.830507,
                ),
            233 =>
                array (
                    'id' => '14765',
                    'name' => 'MAROC',
                    'latitude' => 47.443848,
                    'longitude' => 6.82679,
                ),
            234 =>
                array (
                    'id' => '14766',
                    'name' => 'LES LANNES',
                    'latitude' => 47.444873,
                    'longitude' => 6.824467,
                ),
            235 =>
                array (
                    'id' => '14767',
                    'name' => 'GUYOT',
                    'latitude' => 47.44434,
                    'longitude' => 6.820972,
                ),
            236 =>
                array (
                    'id' => '14768',
                    'name' => 'LES GRANGES',
                    'latitude' => 47.4447,
                    'longitude' => 6.818448,
                ),
            237 =>
                array (
                    'id' => '14769',
                    'name' => 'COURCELLE',
                    'latitude' => 47.445803,
                    'longitude' => 6.815142,
                ),
            238 =>
                array (
                    'id' => '14770',
                    'name' => 'LES ANDANGES',
                    'latitude' => 47.44758,
                    'longitude' => 6.8134,
                ),
            239 =>
                array (
                    'id' => '14771',
                    'name' => 'FOCH',
                    'latitude' => 47.449373,
                    'longitude' => 6.811548,
                ),
            240 =>
                array (
                    'id' => '14772',
                    'name' => 'PAPETERIE',
                    'latitude' => 47.450973,
                    'longitude' => 6.809777,
                ),
            241 =>
                array (
                    'id' => '14773',
                    'name' => 'FOURNEAU',
                    'latitude' => 47.451455,
                    'longitude' => 6.80616,
                ),
            242 =>
                array (
                    'id' => '14774',
                    'name' => 'COUDROYE',
                    'latitude' => 47.451528,
                    'longitude' => 6.803254,
                ),
            243 =>
                array (
                    'id' => '14775',
                    'name' => 'THEATRE',
                    'latitude' => 47.451073,
                    'longitude' => 6.797305,
                ),
            244 =>
                array (
                    'id' => '14776',
                    'name' => 'LE CLOS',
                    'latitude' => 47.451397,
                    'longitude' => 6.79458,
                ),
            245 =>
                array (
                    'id' => '14777',
                    'name' => 'PONT DE MANDEURE',
                    'latitude' => 47.451391,
                    'longitude' => 6.788289,
                ),
            246 =>
                array (
                    'id' => '14778',
                    'name' => 'POINT S',
                    'latitude' => 47.448596,
                    'longitude' => 6.786643,
                ),
            247 =>
                array (
                    'id' => '14779',
                    'name' => 'RUE DU PONT',
                    'latitude' => 47.444916,
                    'longitude' => 6.785425,
                ),
            248 =>
                array (
                    'id' => '14781',
                    'name' => 'LA POSTE',
                    'latitude' => 47.437525,
                    'longitude' => 6.785998,
                ),
            249 =>
                array (
                    'id' => '14782',
                    'name' => 'LA PLAINE',
                    'latitude' => 47.430845,
                    'longitude' => 6.783639,
                ),
            250 =>
                array (
                    'id' => '14784',
                    'name' => 'HOPITAL NORD FC',
                    'latitude' => 47.576187,
                    'longitude' => 6.872023,
                ),
            251 =>
                array (
                    'id' => '14786',
                    'name' => 'MARCEL PAUL',
                    'latitude' => 47.477982,
                    'longitude' => 6.854743,
                ),
            252 =>
                array (
                    'id' => '14787',
                    'name' => 'ROUTE DE DASLE',
                    'latitude' => 47.477288,
                    'longitude' => 6.880249,
                ),
            253 =>
                array (
                    'id' => '14788',
                    'name' => 'SAUSSOTTES',
                    'latitude' => 47.47593,
                    'longitude' => 6.890222,
                ),
            254 =>
                array (
                    'id' => '14789',
                    'name' => 'AIGUILLOTTES',
                    'latitude' => 47.476715,
                    'longitude' => 6.893542,
                ),
            255 =>
                array (
                    'id' => '14790',
                    'name' => 'DASLE',
                    'latitude' => 47.477919,
                    'longitude' => 6.894745,
                ),
            256 =>
                array (
                    'id' => '14791',
                    'name' => 'COMBE JEANNE',
                    'latitude' => 47.478847,
                    'longitude' => 6.899143,
                ),
            257 =>
                array (
                    'id' => '14792',
                    'name' => 'LA FERME',
                    'latitude' => 47.48036,
                    'longitude' => 6.903113,
                ),
            258 =>
                array (
                    'id' => '14793',
                    'name' => 'COMBOTTE',
                    'latitude' => 47.482731,
                    'longitude' => 6.906261,
                ),
            259 =>
                array (
                    'id' => '14794',
                    'name' => 'LES BRIERES',
                    'latitude' => 47.482877,
                    'longitude' => 6.913773,
                ),
            260 =>
                array (
                    'id' => '14795',
                    'name' => 'JAPY',
                    'latitude' => 47.485025,
                    'longitude' => 6.919592,
                ),
            261 =>
                array (
                    'id' => '14797',
                    'name' => 'BEUCLER',
                    'latitude' => 47.4885,
                    'longitude' => 6.926015,
                ),
            262 =>
                array (
                    'id' => '14798',
                    'name' => 'RUE DE BADEVEL',
                    'latitude' => 47.490678,
                    'longitude' => 6.92635,
                ),
            263 =>
                array (
                    'id' => '14800',
                    'name' => 'JULG',
                    'latitude' => 47.49288,
                    'longitude' => 6.920365,
                ),
            264 =>
                array (
                    'id' => '14801',
                    'name' => 'VERDOTS',
                    'latitude' => 47.490982,
                    'longitude' => 6.918809,
                ),
            265 =>
                array (
                    'id' => '14802',
                    'name' => 'MESANGE',
                    'latitude' => 47.491808,
                    'longitude' => 6.917326,
                ),
            266 =>
                array (
                    'id' => '14803',
                    'name' => 'POPINS',
                    'latitude' => 47.494534,
                    'longitude' => 6.913653,
                ),
            267 =>
                array (
                    'id' => '14804',
                    'name' => 'PRE SERGENT',
                    'latitude' => 47.499074,
                    'longitude' => 6.913028,
                ),
            268 =>
                array (
                    'id' => '14805',
                    'name' => 'LES ROCHERS',
                    'latitude' => 47.50156,
                    'longitude' => 6.914708,
                ),
            269 =>
                array (
                    'id' => '14806',
                    'name' => 'SAINT LAURENT',
                    'latitude' => 47.50481,
                    'longitude' => 6.913341,
                ),
            270 =>
                array (
                    'id' => '14807',
                    'name' => 'DAMPIERRE',
                    'latitude' => 47.506241,
                    'longitude' => 6.912801,
                ),
            271 =>
                array (
                    'id' => '14808',
                    'name' => 'DODILLET',
                    'latitude' => 47.507349,
                    'longitude' => 6.911882,
                ),
            272 =>
                array (
                    'id' => '14809',
                    'name' => 'BARRIERE BLANCHE',
                    'latitude' => 47.511666,
                    'longitude' => 6.913767,
                ),
            273 =>
                array (
                    'id' => '14810',
                    'name' => 'ANGOULOTTE',
                    'latitude' => 47.513626,
                    'longitude' => 6.913489,
                ),
            274 =>
                array (
                    'id' => '14811',
                    'name' => 'LA FESCHOTTE',
                    'latitude' => 47.519659,
                    'longitude' => 6.914676,
                ),
            275 =>
                array (
                    'id' => '14812',
                    'name' => 'FESCHES',
                    'latitude' => 47.522526,
                    'longitude' => 6.912809,
                ),
            276 =>
                array (
                    'id' => '14813',
                    'name' => 'KIOSQUE',
                    'latitude' => 47.523496,
                    'longitude' => 6.908142,
                ),
            277 =>
                array (
                    'id' => '14814',
                    'name' => 'LES BOULOTTES',
                    'latitude' => 47.52397,
                    'longitude' => 6.904516,
                ),
            278 =>
                array (
                    'id' => '14815',
                    'name' => 'HUOT',
                    'latitude' => 47.524099,
                    'longitude' => 6.899386,
                ),
            279 =>
                array (
                    'id' => '14816',
                    'name' => 'SALENGRO',
                    'latitude' => 47.523526,
                    'longitude' => 6.897953,
                ),
            280 =>
                array (
                    'id' => '14817',
                    'name' => 'VOIVRE',
                    'latitude' => 47.520432,
                    'longitude' => 6.887583,
                ),
            281 =>
                array (
                    'id' => '14818',
                    'name' => 'LA CASCADE',
                    'latitude' => 47.518008,
                    'longitude' => 6.876315,
                ),
            282 =>
                array (
                    'id' => '14819',
                    'name' => 'BREUIL',
                    'latitude' => 47.514891,
                    'longitude' => 6.868845,
                ),
            283 =>
                array (
                    'id' => '14820',
                    'name' => 'ZI  ETUPES',
                    'latitude' => 47.512714,
                    'longitude' => 6.863179,
                ),
            284 =>
                array (
                    'id' => '14823',
                    'name' => 'GARE DE BELFORT',
                    'latitude' => 47.63985775504232,
                    'longitude' => 6.859476466064507,
                ),
            285 =>
                array (
                    'id' => '14884',
                    'name' => 'GRANJEAN',
                    'latitude' => 47.437915,
                    'longitude' => 6.885455,
                ),
            286 =>
                array (
                    'id' => '14885',
                    'name' => 'VERS ABBEVILLERS',
                    'latitude' => 47.435497,
                    'longitude' => 6.886172,
                ),
            287 =>
                array (
                    'id' => '14890',
                    'name' => 'QUELET',
                    'latitude' => 47.43932,
                    'longitude' => 6.885897,
                ),
            288 =>
                array (
                    'id' => '14891',
                    'name' => 'MONTOILLE',
                    'latitude' => 47.439973,
                    'longitude' => 6.883125,
                ),
            289 =>
                array (
                    'id' => '14892',
                    'name' => 'VIEUX MOULIN',
                    'latitude' => 47.442425,
                    'longitude' => 6.88121,
                ),
            290 =>
                array (
                    'id' => '14893',
                    'name' => 'LES TILLEULS',
                    'latitude' => 47.443888,
                    'longitude' => 6.8815,
                ),
            291 =>
                array (
                    'id' => '14894',
                    'name' => 'LES PRES',
                    'latitude' => 47.446838,
                    'longitude' => 6.880598,
                ),
            292 =>
                array (
                    'id' => '14895',
                    'name' => 'LE CERCLE',
                    'latitude' => 47.448908,
                    'longitude' => 6.878097,
                ),
            293 =>
                array (
                    'id' => '14896',
                    'name' => 'TERRE BLANCHE',
                    'latitude' => 47.450873,
                    'longitude' => 6.876308,
                ),
            294 =>
                array (
                    'id' => '14897',
                    'name' => 'BERNE',
                    'latitude' => 47.456473,
                    'longitude' => 6.8708,
                ),
            295 =>
                array (
                    'id' => '14898',
                    'name' => 'ESPERANCE',
                    'latitude' => 47.458738,
                    'longitude' => 6.868367,
                ),
            296 =>
                array (
                    'id' => '14899',
                    'name' => 'LA LANNE',
                    'latitude' => 47.460288,
                    'longitude' => 6.863218,
                ),
            297 =>
                array (
                    'id' => '14901',
                    'name' => 'LA MALETIERE',
                    'latitude' => 47.464587,
                    'longitude' => 6.856143,
                ),
            298 =>
                array (
                    'id' => '14902',
                    'name' => 'LES NOYERS',
                    'latitude' => 47.466088,
                    'longitude' => 6.854937,
                ),
            299 =>
                array (
                    'id' => '14903',
                    'name' => 'LES BESSOTS',
                    'latitude' => 47.470385,
                    'longitude' => 6.852502,
                ),
            300 =>
                array (
                    'id' => '14904',
                    'name' => 'LE COTEAU',
                    'latitude' => 47.471758,
                    'longitude' => 6.851143,
                ),
            301 =>
                array (
                    'id' => '14905',
                    'name' => 'REIMS',
                    'latitude' => 47.473268,
                    'longitude' => 6.849235,
                ),
            302 =>
                array (
                    'id' => '14906',
                    'name' => 'SQUARE DISON',
                    'latitude' => 47.474917,
                    'longitude' => 6.846977,
                ),
            303 =>
                array (
                    'id' => '14907',
                    'name' => 'ACACIAS',
                    'latitude' => 47.475716,
                    'longitude' => 6.844928,
                ),
            304 =>
                array (
                    'id' => '14908',
                    'name' => 'RANCHOTS',
                    'latitude' => 47.477998,
                    'longitude' => 6.842935,
                ),
            305 =>
                array (
                    'id' => '14910',
                    'name' => 'BRIAND',
                    'latitude' => 47.482144,
                    'longitude' => 6.841462,
                ),
            306 =>
                array (
                    'id' => '14912',
                    'name' => 'CHAMPAGNE',
                    'latitude' => 47.49303,
                    'longitude' => 6.833075,
                ),
            307 =>
                array (
                    'id' => '14913',
                    'name' => 'PRESBYTÈRE',
                    'latitude' => 47.487148,
                    'longitude' => 6.830978,
                ),
            308 =>
                array (
                    'id' => '14914',
                    'name' => 'ES COMBAS',
                    'latitude' => 47.488728,
                    'longitude' => 6.828003,
                ),
            309 =>
                array (
                    'id' => '14915',
                    'name' => 'LES FORGES',
                    'latitude' => 47.48887,
                    'longitude' => 6.825473,
                ),
            310 =>
                array (
                    'id' => '14916',
                    'name' => 'KELLER',
                    'latitude' => 47.488728,
                    'longitude' => 6.818207,
                ),
            311 =>
                array (
                    'id' => '14917',
                    'name' => 'ARBOUANS',
                    'latitude' => 47.491102,
                    'longitude' => 6.811175,
                ),
            312 =>
                array (
                    'id' => '14919',
                    'name' => 'CHAMP DU CERF',
                    'latitude' => 47.49968,
                    'longitude' => 6.812902,
                ),
            313 =>
                array (
                    'id' => '14921',
                    'name' => 'HELVETIE',
                    'latitude' => 47.508453,
                    'longitude' => 6.80571,
                ),
            314 =>
                array (
                    'id' => '14924',
                    'name' => 'GAMBETTA',
                    'latitude' => 47.514392,
                    'longitude' => 6.79729,
                ),
            315 =>
                array (
                    'id' => '14925',
                    'name' => 'THOUROT',
                    'latitude' => 47.516365,
                    'longitude' => 6.79481,
                ),
            316 =>
                array (
                    'id' => '14926',
                    'name' => 'BOULLOCHE',
                    'latitude' => 47.518538,
                    'longitude' => 6.793045,
                ),
            317 =>
                array (
                    'id' => '14927',
                    'name' => 'MIEMONT',
                    'latitude' => 47.521052,
                    'longitude' => 6.792673,
                ),
            318 =>
                array (
                    'id' => '14928',
                    'name' => 'DIDEROT',
                    'latitude' => 47.520892,
                    'longitude' => 6.791488,
                ),
            319 =>
                array (
                    'id' => '14929',
                    'name' => 'RENAUD DE BOURGOGNE',
                    'latitude' => 47.520207,
                    'longitude' => 6.787733,
                ),
            320 =>
                array (
                    'id' => '14930',
                    'name' => 'CHIFFOGNE',
                    'latitude' => 47.519367,
                    'longitude' => 6.783148,
                ),
            321 =>
                array (
                    'id' => '14931',
                    'name' => 'ROUTE DE LAIRE',
                    'latitude' => 47.519186,
                    'longitude' => 6.779884,
                ),
            322 =>
                array (
                    'id' => '14932',
                    'name' => 'MONT CHEVIS',
                    'latitude' => 47.518735,
                    'longitude' => 6.778973,
                ),
            323 =>
                array (
                    'id' => '14933',
                    'name' => 'JEAN JAURES',
                    'latitude' => 47.51655,
                    'longitude' => 6.781062,
                ),
            324 =>
                array (
                    'id' => '14934',
                    'name' => 'CITADELLE',
                    'latitude' => 47.514133,
                    'longitude' => 6.783923,
                ),
            325 =>
                array (
                    'id' => '15286',
                    'name' => 'LES ANDANGES',
                    'latitude' => 47.447917,
                    'longitude' => 6.81314,
                ),
            326 =>
                array (
                    'id' => '15287',
                    'name' => 'COURCELLE',
                    'latitude' => 47.446398,
                    'longitude' => 6.814583,
                ),
            327 =>
                array (
                    'id' => '15288',
                    'name' => 'LES GRANGES',
                    'latitude' => 47.444787,
                    'longitude' => 6.818672,
                ),
            328 =>
                array (
                    'id' => '15289',
                    'name' => 'GUYOT',
                    'latitude' => 47.444527,
                    'longitude' => 6.82195,
                ),
            329 =>
                array (
                    'id' => '15290',
                    'name' => 'LES LANNES',
                    'latitude' => 47.444845,
                    'longitude' => 6.82455,
                ),
            330 =>
                array (
                    'id' => '15291',
                    'name' => 'MAROC',
                    'latitude' => 47.443785,
                    'longitude' => 6.826415,
                ),
            331 =>
                array (
                    'id' => '15292',
                    'name' => 'GRAVIERS',
                    'latitude' => 47.44457,
                    'longitude' => 6.830432,
                ),
            332 =>
                array (
                    'id' => '15293',
                    'name' => 'SAINTE THERESE',
                    'latitude' => 47.445293,
                    'longitude' => 6.831897,
                ),
            333 =>
                array (
                    'id' => '15294',
                    'name' => 'COURTES MESIERES',
                    'latitude' => 47.447295,
                    'longitude' => 6.83535,
                ),
            334 =>
                array (
                    'id' => '15295',
                    'name' => 'BEAULIEU',
                    'latitude' => 47.449745,
                    'longitude' => 6.838603,
                ),
            335 =>
                array (
                    'id' => '15296',
                    'name' => 'LONGINES',
                    'latitude' => 47.451961,
                    'longitude' => 6.838802,
                ),
            336 =>
                array (
                    'id' => '15297',
                    'name' => 'ESPLANADE',
                    'latitude' => 47.45584,
                    'longitude' => 6.837535,
                ),
            337 =>
                array (
                    'id' => '15298',
                    'name' => 'RIVES DU DOUBS',
                    'latitude' => 47.458808,
                    'longitude' => 6.837878,
                ),
            338 =>
                array (
                    'id' => '15299',
                    'name' => 'VILLEDIEU',
                    'latitude' => 47.461215,
                    'longitude' => 6.83704,
                ),
            339 =>
                array (
                    'id' => '15300',
                    'name' => 'POITOU',
                    'latitude' => 47.464938,
                    'longitude' => 6.837942,
                ),
            340 =>
                array (
                    'id' => '15301',
                    'name' => 'PROVENCE',
                    'latitude' => 47.467657,
                    'longitude' => 6.837723,
                ),
            341 =>
                array (
                    'id' => '15302',
                    'name' => 'NORMANDIE',
                    'latitude' => 47.470338,
                    'longitude' => 6.836858,
                ),
            342 =>
                array (
                    'id' => '15303',
                    'name' => 'SOUS ROCHES',
                    'latitude' => 47.474817,
                    'longitude' => 6.83642,
                ),
            343 =>
                array (
                    'id' => '15304',
                    'name' => 'PONT DE BOLLARDIERE',
                    'latitude' => 47.475797,
                    'longitude' => 6.838232,
                ),
            344 =>
                array (
                    'id' => '15332',
                    'name' => 'LE CLOS',
                    'latitude' => 47.451506,
                    'longitude' => 6.794419,
                ),
            345 =>
                array (
                    'id' => '15333',
                    'name' => 'THEATRE',
                    'latitude' => 47.451189,
                    'longitude' => 6.798182,
                ),
            346 =>
                array (
                    'id' => '15334',
                    'name' => 'COUDROYE',
                    'latitude' => 47.451438,
                    'longitude' => 6.803208,
                ),
            347 =>
                array (
                    'id' => '15335',
                    'name' => 'FOURNEAU',
                    'latitude' => 47.451425,
                    'longitude' => 6.806488,
                ),
            348 =>
                array (
                    'id' => '15336',
                    'name' => 'PAPETERIE',
                    'latitude' => 47.45112,
                    'longitude' => 6.809352,
                ),
            349 =>
                array (
                    'id' => '15337',
                    'name' => 'FOCH',
                    'latitude' => 47.449598,
                    'longitude' => 6.81139,
                ),
            350 =>
                array (
                    'id' => '15384',
                    'name' => 'LA PLAINE',
                    'latitude' => 47.430744,
                    'longitude' => 6.783435,
                ),
            351 =>
                array (
                    'id' => '15385',
                    'name' => 'LA POSTE',
                    'latitude' => 47.437553,
                    'longitude' => 6.785995,
                ),
            352 =>
                array (
                    'id' => '15387',
                    'name' => 'RUE DU PONT',
                    'latitude' => 47.444793,
                    'longitude' => 6.785275,
                ),
            353 =>
                array (
                    'id' => '15388',
                    'name' => 'POINT S',
                    'latitude' => 47.448373,
                    'longitude' => 6.786429,
                ),
            354 =>
                array (
                    'id' => '15389',
                    'name' => 'PONT DE MANDEURE',
                    'latitude' => 47.451517,
                    'longitude' => 6.78825,
                ),
            355 =>
                array (
                    'id' => '15436',
                    'name' => 'LE MITTAN',
                    'latitude' => 47.526475,
                    'longitude' => 6.785173,
                ),
            356 =>
                array (
                    'id' => '15437',
                    'name' => 'JOLY',
                    'latitude' => 47.52585,
                    'longitude' => 6.78832,
                ),
            357 =>
                array (
                    'id' => '15489',
                    'name' => 'ANATOLE FRANCE',
                    'latitude' => 47.537511,
                    'longitude' => 6.805098,
                ),
            358 =>
                array (
                    'id' => '15490',
                    'name' => 'CAMUS',
                    'latitude' => 47.536571,
                    'longitude' => 6.801212,
                ),
            359 =>
                array (
                    'id' => '15491',
                    'name' => 'LA TOUR',
                    'latitude' => 47.534657,
                    'longitude' => 6.798677,
                ),
            360 =>
                array (
                    'id' => '15492',
                    'name' => 'MARCONI',
                    'latitude' => 47.532137,
                    'longitude' => 6.801063,
                ),
            361 =>
                array (
                    'id' => '15493',
                    'name' => 'PASTEUR',
                    'latitude' => 47.534517,
                    'longitude' => 6.804318,
                ),
            362 =>
                array (
                    'id' => '15494',
                    'name' => 'LAVOISIER',
                    'latitude' => 47.532968,
                    'longitude' => 6.80762,
                ),
            363 =>
                array (
                    'id' => '15496',
                    'name' => 'CORA',
                    'latitude' => 47.529852,
                    'longitude' => 6.810322,
                ),
            364 =>
                array (
                    'id' => '15497',
                    'name' => 'CHARMONTET',
                    'latitude' => 47.522747,
                    'longitude' => 6.811995,
                ),
            365 =>
                array (
                    'id' => '15498',
                    'name' => 'SOUS LA CHAUX',
                    'latitude' => 47.517393,
                    'longitude' => 6.813642,
                ),
            366 =>
                array (
                    'id' => '15499',
                    'name' => 'PRAIRIE',
                    'latitude' => 47.51582,
                    'longitude' => 6.813699,
                ),
            367 =>
                array (
                    'id' => '15500',
                    'name' => 'JOFFRE',
                    'latitude' => 47.514094,
                    'longitude' => 6.807964,
                ),
            368 =>
                array (
                    'id' => '15501',
                    'name' => 'CHABAUD LATOUR',
                    'latitude' => 47.509681,
                    'longitude' => 6.808828,
                ),
            369 =>
                array (
                    'id' => '15509',
                    'name' => 'COTEAU JOUVENT',
                    'latitude' => 47.501922,
                    'longitude' => 6.79135,
                ),
            370 =>
                array (
                    'id' => '15510',
                    'name' => 'LULLI',
                    'latitude' => 47.500682,
                    'longitude' => 6.792232,
                ),
            371 =>
                array (
                    'id' => '15511',
                    'name' => 'PETIT CHENOIS',
                    'latitude' => 47.501272,
                    'longitude' => 6.796733,
                ),
            372 =>
                array (
                    'id' => '15512',
                    'name' => 'BIZET',
                    'latitude' => 47.50214,
                    'longitude' => 6.799083,
                ),
            373 =>
                array (
                    'id' => '15513',
                    'name' => 'JEAN MOULIN',
                    'latitude' => 47.500452,
                    'longitude' => 6.801985,
                ),
            374 =>
                array (
                    'id' => '15515',
                    'name' => 'CAMPUS',
                    'latitude' => 47.49569,
                    'longitude' => 6.804118,
                ),
            375 =>
                array (
                    'id' => '15518',
                    'name' => 'CARRONS',
                    'latitude' => 47.494949,
                    'longitude' => 6.828891,
                ),
            376 =>
                array (
                    'id' => '15524',
                    'name' => 'EPOISSES',
                    'latitude' => 47.484122,
                    'longitude' => 6.83279,
                ),
            377 =>
                array (
                    'id' => '15526',
                    'name' => 'PEUGEOT',
                    'latitude' => 47.480878,
                    'longitude' => 6.82469,
                ),
            378 =>
                array (
                    'id' => '15527',
                    'name' => 'ROUGET DE L\'ISLE',
                    'latitude' => 47.479267,
                    'longitude' => 6.824803,
                ),
            379 =>
                array (
                    'id' => '15529',
                    'name' => 'LYCEE PEUGEOT',
                    'latitude' => 47.470922,
                    'longitude' => 6.828163,
                ),
            380 =>
                array (
                    'id' => '15530',
                    'name' => 'PISCINE',
                    'latitude' => 47.46835,
                    'longitude' => 6.833382,
                ),
            381 =>
                array (
                    'id' => '15532',
                    'name' => 'OEHMICHEN',
                    'latitude' => 47.463707,
                    'longitude' => 6.832452,
                ),
            382 =>
                array (
                    'id' => '15534',
                    'name' => 'LE MANDRIN',
                    'latitude' => 47.462162,
                    'longitude' => 6.835185,
                ),
            383 =>
                array (
                    'id' => '15536',
                    'name' => 'RUE DES CHAMPS',
                    'latitude' => 47.45986,
                    'longitude' => 6.831607,
                ),
            384 =>
                array (
                    'id' => '15537',
                    'name' => 'PEZOLE',
                    'latitude' => 47.46105,
                    'longitude' => 6.828145,
                ),
            385 =>
                array (
                    'id' => '15538',
                    'name' => 'SAINT SAENS',
                    'latitude' => 47.459056,
                    'longitude' => 6.825219,
                ),
            386 =>
                array (
                    'id' => '15673',
                    'name' => 'COMBE MIREY',
                    'latitude' => 47.474006,
                    'longitude' => 6.857759,
                ),
            387 =>
                array (
                    'id' => '15674',
                    'name' => 'ES BREUX',
                    'latitude' => 47.474392,
                    'longitude' => 6.855702,
                ),
            388 =>
                array (
                    'id' => '15675',
                    'name' => 'ALLENDE',
                    'latitude' => 47.475346,
                    'longitude' => 6.851073,
                ),
            389 =>
                array (
                    'id' => '15676',
                    'name' => 'CASTORS',
                    'latitude' => 47.478769,
                    'longitude' => 6.848562,
                ),
            390 =>
                array (
                    'id' => '15679',
                    'name' => 'RUE DE BELFORT',
                    'latitude' => 47.48714,
                    'longitude' => 6.840658,
                ),
            391 =>
                array (
                    'id' => '15680',
                    'name' => 'ARBLETIERS',
                    'latitude' => 47.485338,
                    'longitude' => 6.844024,
                ),
            392 =>
                array (
                    'id' => '15681',
                    'name' => 'CHARLES ALLEMAND',
                    'latitude' => 47.489702,
                    'longitude' => 6.841859,
                ),
            393 =>
                array (
                    'id' => '15682',
                    'name' => 'RESIDENCES',
                    'latitude' => 47.491895,
                    'longitude' => 6.841122,
                ),
            394 =>
                array (
                    'id' => '15683',
                    'name' => 'LA CROISEE',
                    'latitude' => 47.496017,
                    'longitude' => 6.83915,
                ),
            395 =>
                array (
                    'id' => '15684',
                    'name' => 'CFAI',
                    'latitude' => 47.500792,
                    'longitude' => 6.842085,
                ),
            396 =>
                array (
                    'id' => '15685',
                    'name' => 'RUE DE SOCHAUX',
                    'latitude' => 47.50410025094289,
                    'longitude' => 6.843396441802952,
                ),
            397 =>
                array (
                    'id' => '15686',
                    'name' => 'CITEDO',
                    'latitude' => 47.511942,
                    'longitude' => 6.836908,
                ),
            398 =>
                array (
                    'id' => '15687',
                    'name' => 'LES CHENES',
                    'latitude' => 47.513728,
                    'longitude' => 6.835128,
                ),
            399 =>
                array (
                    'id' => '15688',
                    'name' => 'MUSEE PEUGEOT',
                    'latitude' => 47.514949,
                    'longitude' => 6.831608,
                ),
            400 =>
                array (
                    'id' => '15689',
                    'name' => 'LECLERC',
                    'latitude' => 47.514129,
                    'longitude' => 6.828912,
                ),
            401 =>
                array (
                    'id' => '15690',
                    'name' => 'RUE DE L\'EGLISE',
                    'latitude' => 47.515280431523465,
                    'longitude' => 6.825551253967319,
                ),
            402 =>
                array (
                    'id' => '15697',
                    'name' => 'SAINT MICHEL 2',
                    'latitude' => 47.50853,
                    'longitude' => 6.766964,
                ),
            403 =>
                array (
                    'id' => '15698',
                    'name' => 'CHEMIN DES CHARS',
                    'latitude' => 47.510672,
                    'longitude' => 6.769842,
                ),
            404 =>
                array (
                    'id' => '15699',
                    'name' => 'ROUTE D\'ALLONDANS',
                    'latitude' => 47.517457,
                    'longitude' => 6.776077,
                ),
            405 =>
                array (
                    'id' => '15703',
                    'name' => 'BOSSIERE',
                    'latitude' => 47.51523,
                    'longitude' => 6.786783,
                ),
            406 =>
                array (
                    'id' => '15704',
                    'name' => 'PROUDHON',
                    'latitude' => 47.516867,
                    'longitude' => 6.787873,
                ),
            407 =>
                array (
                    'id' => '15705',
                    'name' => 'VICTOR HUGO',
                    'latitude' => 47.518592,
                    'longitude' => 6.787133,
                ),
            408 =>
                array (
                    'id' => '15706',
                    'name' => 'PASCAL',
                    'latitude' => 47.517745,
                    'longitude' => 6.791405,
                ),
            409 =>
                array (
                    'id' => '15741',
                    'name' => 'CHAMPS MONTANTS',
                    'latitude' => 47.474026,
                    'longitude' => 6.863915,
                ),
            410 =>
                array (
                    'id' => '15978',
                    'name' => 'LES ROSES',
                    'latitude' => 47.50988,
                    'longitude' => 6.781083,
                ),
            411 =>
                array (
                    'id' => '15979',
                    'name' => 'LES LILAS',
                    'latitude' => 47.509603,
                    'longitude' => 6.778148,
                ),
            412 =>
                array (
                    'id' => '15980',
                    'name' => 'LES VOIRONNES',
                    'latitude' => 47.508973,
                    'longitude' => 6.775283,
                ),
            413 =>
                array (
                    'id' => '15981',
                    'name' => 'SAINTE SUZANNE',
                    'latitude' => 47.506095,
                    'longitude' => 6.774769,
                ),
            414 =>
                array (
                    'id' => '15982',
                    'name' => 'LA GROTTE',
                    'latitude' => 47.503281,
                    'longitude' => 6.77235,
                ),
            415 =>
                array (
                    'id' => '15983',
                    'name' => 'VERS COURCELLES',
                    'latitude' => 47.499692,
                    'longitude' => 6.772395,
                ),
            416 =>
                array (
                    'id' => '15984',
                    'name' => 'CHALETS',
                    'latitude' => 47.495451,
                    'longitude' => 6.77196,
                ),
            417 =>
                array (
                    'id' => '15985',
                    'name' => 'RUE DE DUNG',
                    'latitude' => 47.49216,
                    'longitude' => 6.771041,
                ),
            418 =>
                array (
                    'id' => '15986',
                    'name' => 'LES FIOS',
                    'latitude' => 47.488566,
                    'longitude' => 6.771349,
                ),
            419 =>
                array (
                    'id' => '15987',
                    'name' => 'MONT BART',
                    'latitude' => 47.486351,
                    'longitude' => 6.76898,
                ),
            420 =>
                array (
                    'id' => '15988',
                    'name' => 'LA ROCHE',
                    'latitude' => 47.481466,
                    'longitude' => 6.765124,
                ),
            421 =>
                array (
                    'id' => '15990',
                    'name' => 'LE LORDAY',
                    'latitude' => 47.480155,
                    'longitude' => 6.751988,
                ),
            422 =>
                array (
                    'id' => '15992',
                    'name' => 'VIEILLE VIE',
                    'latitude' => 47.480433,
                    'longitude' => 6.736254,
                ),
            423 =>
                array (
                    'id' => '15993',
                    'name' => 'STADE',
                    'latitude' => 47.479702,
                    'longitude' => 6.733137,
                ),
            424 =>
                array (
                    'id' => '15994',
                    'name' => 'PLACE CENTRALE',
                    'latitude' => 47.480497,
                    'longitude' => 6.730994,
                ),
            425 =>
                array (
                    'id' => '15995',
                    'name' => 'SAUSSENET',
                    'latitude' => 47.481328,
                    'longitude' => 6.724373,
                ),
            426 =>
                array (
                    'id' => '15997',
                    'name' => 'POMMIERS',
                    'latitude' => 47.480325,
                    'longitude' => 6.718217,
                ),
            427 =>
                array (
                    'id' => '15998',
                    'name' => 'VERGERS',
                    'latitude' => 47.482273,
                    'longitude' => 6.72005,
                ),
            428 =>
                array (
                    'id' => '15999',
                    'name' => 'FRAMBOISIERS',
                    'latitude' => 47.484519,
                    'longitude' => 6.727625,
                ),
            429 =>
                array (
                    'id' => '16024',
                    'name' => 'NEUF MOULINS',
                    'latitude' => 47.509547,
                    'longitude' => 6.785071,
                ),
            430 =>
                array (
                    'id' => '16025',
                    'name' => 'LAENNEC',
                    'latitude' => 47.509145,
                    'longitude' => 6.788289,
                ),
            431 =>
                array (
                    'id' => '16039',
                    'name' => 'EGLANTINE',
                    'latitude' => 47.517166,
                    'longitude' => 6.833954,
                ),
            432 =>
                array (
                    'id' => '16040',
                    'name' => 'CREPON',
                    'latitude' => 47.520231,
                    'longitude' => 6.833239,
                ),
            433 =>
                array (
                    'id' => '16041',
                    'name' => 'ES COURES',
                    'latitude' => 47.52252762550464,
                    'longitude' => 6.8324766613769725,
                ),
            434 =>
                array (
                    'id' => '16042',
                    'name' => 'RUE DU NORD',
                    'latitude' => 47.524571989021624,
                    'longitude' => 6.8300737314910975,
                ),
            435 =>
                array (
                    'id' => '16044',
                    'name' => 'PIERRE CURIE',
                    'latitude' => 47.527902,
                    'longitude' => 6.822703,
                ),
            436 =>
                array (
                    'id' => '16047',
                    'name' => 'GASCOGNE',
                    'latitude' => 47.532903,
                    'longitude' => 6.815921,
                ),
            437 =>
                array (
                    'id' => '16048',
                    'name' => 'LUTECE',
                    'latitude' => 47.534048,
                    'longitude' => 6.822569,
                ),
            438 =>
                array (
                    'id' => '16050',
                    'name' => 'LES FOUGERES',
                    'latitude' => 47.53696,
                    'longitude' => 6.822821,
                ),
            439 =>
                array (
                    'id' => '16054',
                    'name' => 'CONTEJEAN',
                    'latitude' => 47.535422,
                    'longitude' => 6.796488,
                ),
            440 =>
                array (
                    'id' => '16055',
                    'name' => 'LA LIZAINE',
                    'latitude' => 47.53216,
                    'longitude' => 6.795947,
                ),
            441 =>
                array (
                    'id' => '16058',
                    'name' => 'BETHONCOURT',
                    'latitude' => 47.530257,
                    'longitude' => 6.794095,
                ),
            442 =>
                array (
                    'id' => '16059',
                    'name' => 'LE BOURBET',
                    'latitude' => 47.530248,
                    'longitude' => 6.791637,
                ),
            443 =>
                array (
                    'id' => '16061',
                    'name' => 'RUDEROP',
                    'latitude' => 47.53367,
                    'longitude' => 6.788512,
                ),
            444 =>
                array (
                    'id' => '16063',
                    'name' => 'RESISTANCE',
                    'latitude' => 47.533783,
                    'longitude' => 6.784567,
                ),
            445 =>
                array (
                    'id' => '16064',
                    'name' => 'LIBERTE',
                    'latitude' => 47.529245,
                    'longitude' => 6.785935,
                ),
            446 =>
                array (
                    'id' => '16076',
                    'name' => 'LOU BLAZER',
                    'latitude' => 47.498938,
                    'longitude' => 6.792297,
                ),
            447 =>
                array (
                    'id' => '16078',
                    'name' => 'PETITE HOLLANDE',
                    'latitude' => 47.497861,
                    'longitude' => 6.797635,
                ),
            448 =>
                array (
                    'id' => '16085',
                    'name' => 'FOILLET',
                    'latitude' => 47.49942,
                    'longitude' => 6.815727,
                ),
            449 =>
                array (
                    'id' => '16086',
                    'name' => 'FROMAGERIE',
                    'latitude' => 47.497662,
                    'longitude' => 6.819506,
                ),
            450 =>
                array (
                    'id' => '16087',
                    'name' => 'ZINGG',
                    'latitude' => 47.497905,
                    'longitude' => 6.826308,
                ),
            451 =>
                array (
                    'id' => '16088',
                    'name' => 'LAMARTINE',
                    'latitude' => 47.499278,
                    'longitude' => 6.828618,
                ),
            452 =>
                array (
                    'id' => '16089',
                    'name' => 'CLEMENCEAU',
                    'latitude' => 47.500567,
                    'longitude' => 6.83148,
                ),
            453 =>
                array (
                    'id' => '16090',
                    'name' => 'RUE BASSE',
                    'latitude' => 47.502342,
                    'longitude' => 6.835515,
                ),
            454 =>
                array (
                    'id' => '16091',
                    'name' => 'GRANDE RUE',
                    'latitude' => 47.502093,
                    'longitude' => 6.840177,
                ),
            455 =>
                array (
                    'id' => '16093',
                    'name' => 'ECUREUILS',
                    'latitude' => 47.505244,
                    'longitude' => 6.848044,
                ),
            456 =>
                array (
                    'id' => '16094',
                    'name' => 'LE CHATEAU',
                    'latitude' => 47.506003,
                    'longitude' => 6.853483,
                ),
            457 =>
                array (
                    'id' => '16095',
                    'name' => 'ALOUETTES',
                    'latitude' => 47.506715,
                    'longitude' => 6.859245,
                ),
            458 =>
                array (
                    'id' => '16096',
                    'name' => 'MARCHE',
                    'latitude' => 47.505831,
                    'longitude' => 6.861166,
                ),
            459 =>
                array (
                    'id' => '16097',
                    'name' => 'ODESSA',
                    'latitude' => 47.503677,
                    'longitude' => 6.855968,
                ),
            460 =>
                array (
                    'id' => '16146',
                    'name' => 'LA MONTAGNE',
                    'latitude' => 47.502261447931716,
                    'longitude' => 6.855011999999988,
                ),
            461 =>
                array (
                    'id' => '16257',
                    'name' => 'LOICHOTTES',
                    'latitude' => 47.546137,
                    'longitude' => 6.868587,
                ),
            462 =>
                array (
                    'id' => '16258',
                    'name' => 'VILLAGE',
                    'latitude' => 47.543815,
                    'longitude' => 6.8655,
                ),
            463 =>
                array (
                    'id' => '16290',
                    'name' => 'CHENEVIER',
                    'latitude' => 47.500743,
                    'longitude' => 6.776825,
                ),
            464 =>
                array (
                    'id' => '16291',
                    'name' => 'LA CRUE',
                    'latitude' => 47.498948,
                    'longitude' => 6.7796,
                ),
            465 =>
                array (
                    'id' => '16292',
                    'name' => 'AERODROME',
                    'latitude' => 47.496719,
                    'longitude' => 6.780497,
                ),
            466 =>
                array (
                    'id' => '16293',
                    'name' => 'CHATILLON',
                    'latitude' => 47.489188,
                    'longitude' => 6.776513,
                ),
            467 =>
                array (
                    'id' => '16294',
                    'name' => 'FONDERIE',
                    'latitude' => 47.48035,
                    'longitude' => 6.769152,
                ),
            468 =>
                array (
                    'id' => '16295',
                    'name' => 'CANAL',
                    'latitude' => 47.478997,
                    'longitude' => 6.768582,
                ),
            469 =>
                array (
                    'id' => '16296',
                    'name' => 'LE PONT',
                    'latitude' => 47.475663,
                    'longitude' => 6.766742,
                ),
            470 =>
                array (
                    'id' => '16297',
                    'name' => 'BOUDRY',
                    'latitude' => 47.474397,
                    'longitude' => 6.7644,
                ),
            471 =>
                array (
                    'id' => '16298',
                    'name' => 'MONNOT',
                    'latitude' => 47.475098,
                    'longitude' => 6.761193,
                ),
            472 =>
                array (
                    'id' => '16299',
                    'name' => 'MOULIN',
                    'latitude' => 47.475725,
                    'longitude' => 6.75653,
                ),
            473 =>
                array (
                    'id' => '16300',
                    'name' => 'LA LANGE',
                    'latitude' => 47.476262,
                    'longitude' => 6.753693,
                ),
            474 =>
                array (
                    'id' => '16304',
                    'name' => 'LES ETROITS',
                    'latitude' => 47.473198,
                    'longitude' => 6.769902,
                ),
            475 =>
                array (
                    'id' => '16305',
                    'name' => 'LA BLONGEOTTE',
                    'latitude' => 47.473558,
                    'longitude' => 6.772148,
                ),
            476 =>
                array (
                    'id' => '16306',
                    'name' => 'LES FONTAINES',
                    'latitude' => 47.475562,
                    'longitude' => 6.774198,
                ),
            477 =>
                array (
                    'id' => '16307',
                    'name' => 'BOUTONNIERS',
                    'latitude' => 47.477507,
                    'longitude' => 6.777417,
                ),
            478 =>
                array (
                    'id' => '16308',
                    'name' => 'FONTENOTTE',
                    'latitude' => 47.479537,
                    'longitude' => 6.780612,
                ),
            479 =>
                array (
                    'id' => '16309',
                    'name' => 'LA CRAY',
                    'latitude' => 47.48195,
                    'longitude' => 6.78,
                ),
            480 =>
                array (
                    'id' => '16439',
                    'name' => 'COURCELLES',
                    'latitude' => 47.503328,
                    'longitude' => 6.775825,
                ),
            481 =>
                array (
                    'id' => '16440',
                    'name' => 'RUE DU PORT',
                    'latitude' => 47.503757,
                    'longitude' => 6.791937,
                ),
            482 =>
                array (
                    'id' => '16449',
                    'name' => 'COMBE AUX BICHES',
                    'latitude' => 47.516027,
                    'longitude' => 6.809323,
                ),
            483 =>
                array (
                    'id' => '16450',
                    'name' => 'CUVIER',
                    'latitude' => 47.514292,
                    'longitude' => 6.805482,
                ),
            484 =>
                array (
                    'id' => '16452',
                    'name' => 'CIMETIERE DU HAUT',
                    'latitude' => 47.516283,
                    'longitude' => 6.805052,
                ),
            485 =>
                array (
                    'id' => '16453',
                    'name' => 'BUFFON',
                    'latitude' => 47.518478,
                    'longitude' => 6.806492,
                ),
            486 =>
                array (
                    'id' => '16454',
                    'name' => 'JUSSIEU',
                    'latitude' => 47.519565,
                    'longitude' => 6.809275,
                ),
            487 =>
                array (
                    'id' => '16456',
                    'name' => 'GIBOULON',
                    'latitude' => 47.52011,
                    'longitude' => 6.815895,
                ),
            488 =>
                array (
                    'id' => '16457',
                    'name' => 'MARGUERITES',
                    'latitude' => 47.52253,
                    'longitude' => 6.818915,
                ),
            489 =>
                array (
                    'id' => '16462',
                    'name' => 'SUR LE BIEF',
                    'latitude' => 47.52435,
                    'longitude' => 6.83372,
                ),
            490 =>
                array (
                    'id' => '16463',
                    'name' => 'LES SOURCES',
                    'latitude' => 47.52442,
                    'longitude' => 6.836645,
                ),
            491 =>
                array (
                    'id' => '16465',
                    'name' => 'CHAMP SIMONIN',
                    'latitude' => 47.529193,
                    'longitude' => 6.841572,
                ),
            492 =>
                array (
                    'id' => '16467',
                    'name' => 'ES EPRAUX',
                    'latitude' => 47.536818,
                    'longitude' => 6.846215,
                ),
            493 =>
                array (
                    'id' => '16468',
                    'name' => 'NOMMAY',
                    'latitude' => 47.538527,
                    'longitude' => 6.847582,
                ),
            494 =>
                array (
                    'id' => '16469',
                    'name' => 'LA SAVOUREUSE',
                    'latitude' => 47.539845,
                    'longitude' => 6.85285,
                ),
            495 =>
                array (
                    'id' => '16471',
                    'name' => 'CHAMPS ROFROID',
                    'latitude' => 47.484314,
                    'longitude' => 6.856381,
                ),
            496 =>
                array (
                    'id' => '16472',
                    'name' => 'LA BAUME',
                    'latitude' => 47.482846,
                    'longitude' => 6.849997,
                ),
            497 =>
                array (
                    'id' => '16476',
                    'name' => 'PEUPLIERS',
                    'latitude' => 47.474538,
                    'longitude' => 6.840944,
                ),
            498 =>
                array (
                    'id' => '16477',
                    'name' => 'PONT DE GLAND',
                    'latitude' => 47.472647,
                    'longitude' => 6.842033,
                ),
            499 =>
                array (
                    'id' => '16478',
                    'name' => 'VERS BONDEVAL',
                    'latitude' => 47.471655,
                    'longitude' => 6.842994,
                ),
            500 =>
                array (
                    'id' => '16479',
                    'name' => 'PAQUERETTES',
                    'latitude' => 47.469659,
                    'longitude' => 6.843426,
                ),
            501 =>
                array (
                    'id' => '16480',
                    'name' => 'GRANDES BRIERES',
                    'latitude' => 47.467892,
                    'longitude' => 6.843809,
                ),
            502 =>
                array (
                    'id' => '16481',
                    'name' => 'DELACROIX',
                    'latitude' => 47.462219,
                    'longitude' => 6.846158,
                ),
            503 =>
                array (
                    'id' => '16482',
                    'name' => 'PICASSO',
                    'latitude' => 47.461647,
                    'longitude' => 6.848622,
                ),
            504 =>
                array (
                    'id' => '16483',
                    'name' => 'CEZANNE',
                    'latitude' => 47.461131,
                    'longitude' => 6.851601,
                ),
            505 =>
                array (
                    'id' => '16484',
                    'name' => 'BERGERONNETTES',
                    'latitude' => 47.458896,
                    'longitude' => 6.851658,
                ),
            506 =>
                array (
                    'id' => '16485',
                    'name' => 'BANNOT',
                    'latitude' => 47.458667,
                    'longitude' => 6.856471,
                ),
            507 =>
                array (
                    'id' => '16486',
                    'name' => 'VIETTE',
                    'latitude' => 47.460443,
                    'longitude' => 6.85819,
                ),
            508 =>
                array (
                    'id' => '16496',
                    'name' => 'BALANCE',
                    'latitude' => 47.43901748657882,
                    'longitude' => 6.881496999999968,
                ),
            509 =>
                array (
                    'id' => '16497',
                    'name' => 'VERS THULAY',
                    'latitude' => 47.435749,
                    'longitude' => 6.879275,
                ),
            510 =>
                array (
                    'id' => '16498',
                    'name' => 'PRAYS',
                    'latitude' => 47.432941,
                    'longitude' => 6.882999,
                ),
            511 =>
                array (
                    'id' => '16499',
                    'name' => 'CRATET',
                    'latitude' => 47.430879,
                    'longitude' => 6.883343,
                ),
            512 =>
                array (
                    'id' => '16548',
                    'name' => 'BOISGENETS',
                    'latitude' => 47.53046652024822,
                    'longitude' => 6.840308509262059,
                ),
            513 =>
                array (
                    'id' => '16549',
                    'name' => 'LES HAUTS BOIS',
                    'latitude' => 47.532464,
                    'longitude' => 6.83785,
                ),
            514 =>
                array (
                    'id' => '16550',
                    'name' => 'LES BARRES',
                    'latitude' => 47.535157,
                    'longitude' => 6.84209,
                ),
            515 =>
                array (
                    'id' => '16554',
                    'name' => 'ROUTE DE MONTBELIARD',
                    'latitude' => 47.551857,
                    'longitude' => 6.851547,
                ),
            516 =>
                array (
                    'id' => '16740',
                    'name' => 'MARCEL PAUL',
                    'latitude' => 47.478056,
                    'longitude' => 6.854797,
                ),
            517 =>
                array (
                    'id' => '16741',
                    'name' => 'ROUTE DE DASLE',
                    'latitude' => 47.477346,
                    'longitude' => 6.880192,
                ),
            518 =>
                array (
                    'id' => '16742',
                    'name' => 'SAUSSOTTES',
                    'latitude' => 47.475983,
                    'longitude' => 6.890287,
                ),
            519 =>
                array (
                    'id' => '16743',
                    'name' => 'AIGUILLOTTES',
                    'latitude' => 47.476887,
                    'longitude' => 6.893313,
                ),
            520 =>
                array (
                    'id' => '16859',
                    'name' => 'BREUIL',
                    'latitude' => 47.514742,
                    'longitude' => 6.868815,
                ),
            521 =>
                array (
                    'id' => '16860',
                    'name' => 'CASCADE',
                    'latitude' => 47.51795,
                    'longitude' => 6.876415,
                ),
            522 =>
                array (
                    'id' => '16861',
                    'name' => 'VOIVRE',
                    'latitude' => 47.520489,
                    'longitude' => 6.888041,
                ),
            523 =>
                array (
                    'id' => '16862',
                    'name' => 'SALENGRO',
                    'latitude' => 47.523506,
                    'longitude' => 6.898073,
                ),
            524 =>
                array (
                    'id' => '16863',
                    'name' => 'HUOT',
                    'latitude' => 47.52435,
                    'longitude' => 6.900952,
                ),
            525 =>
                array (
                    'id' => '16864',
                    'name' => 'LES BOULOTTES',
                    'latitude' => 47.523869,
                    'longitude' => 6.90471,
                ),
            526 =>
                array (
                    'id' => '16865',
                    'name' => 'KIOSQUE',
                    'latitude' => 47.523424,
                    'longitude' => 6.908196,
                ),
            527 =>
                array (
                    'id' => '16866',
                    'name' => 'FESCHES',
                    'latitude' => 47.52175,
                    'longitude' => 6.913481,
                ),
            528 =>
                array (
                    'id' => '16867',
                    'name' => 'LA FESCHOTTE',
                    'latitude' => 47.519648,
                    'longitude' => 6.914511,
                ),
            529 =>
                array (
                    'id' => '16868',
                    'name' => 'ANGOULOTTE',
                    'latitude' => 47.51356,
                    'longitude' => 6.913386,
                ),
            530 =>
                array (
                    'id' => '16870',
                    'name' => 'DODILLET',
                    'latitude' => 47.507422,
                    'longitude' => 6.911835,
                ),
            531 =>
                array (
                    'id' => '16871',
                    'name' => 'DAMPIERRE',
                    'latitude' => 47.506151,
                    'longitude' => 6.912983,
                ),
            532 =>
                array (
                    'id' => '16872',
                    'name' => 'SAINT LAURENT',
                    'latitude' => 47.504767,
                    'longitude' => 6.913254,
                ),
            533 =>
                array (
                    'id' => '16873',
                    'name' => 'LES ROCHERS',
                    'latitude' => 47.501685,
                    'longitude' => 6.91468,
                ),
            534 =>
                array (
                    'id' => '16874',
                    'name' => 'PRE SERGENT',
                    'latitude' => 47.498772,
                    'longitude' => 6.912888,
                ),
            535 =>
                array (
                    'id' => '16875',
                    'name' => 'POPINS',
                    'latitude' => 47.494248,
                    'longitude' => 6.913882,
                ),
            536 =>
                array (
                    'id' => '16876',
                    'name' => 'MESANGE',
                    'latitude' => 47.492357,
                    'longitude' => 6.916403,
                ),
            537 =>
                array (
                    'id' => '16877',
                    'name' => 'VERDOTS',
                    'latitude' => 47.490695,
                    'longitude' => 6.919153,
                ),
            538 =>
                array (
                    'id' => '16878',
                    'name' => 'JULG',
                    'latitude' => 47.492715,
                    'longitude' => 6.920405,
                ),
            539 =>
                array (
                    'id' => '16880',
                    'name' => 'RUE DE BADEVEL',
                    'latitude' => 47.49066,
                    'longitude' => 6.926323,
                ),
            540 =>
                array (
                    'id' => '16881',
                    'name' => 'BEUCLER',
                    'latitude' => 47.487593,
                    'longitude' => 6.926005,
                ),
            541 =>
                array (
                    'id' => '16884',
                    'name' => 'JAPY',
                    'latitude' => 47.48505,
                    'longitude' => 6.919212,
                ),
            542 =>
                array (
                    'id' => '16885',
                    'name' => 'LES BRIERES',
                    'latitude' => 47.483029,
                    'longitude' => 6.914343,
                ),
            543 =>
                array (
                    'id' => '16886',
                    'name' => 'COMBOTTE',
                    'latitude' => 47.482674,
                    'longitude' => 6.905975,
                ),
            544 =>
                array (
                    'id' => '16887',
                    'name' => 'LA FERME',
                    'latitude' => 47.480513,
                    'longitude' => 6.903248,
                ),
            545 =>
                array (
                    'id' => '16888',
                    'name' => 'COMBE JEANNE',
                    'latitude' => 47.478893,
                    'longitude' => 6.899042,
                ),
            546 =>
                array (
                    'id' => '16889',
                    'name' => 'DASLE',
                    'latitude' => 47.478399,
                    'longitude' => 6.895583,
                ),
            547 =>
                array (
                    'id' => '16981',
                    'name' => 'MARECHAL JUIN',
                    'latitude' => 47.52538,
                    'longitude' => 6.789775,
                ),
            548 =>
                array (
                    'id' => '16992',
                    'name' => 'EMAILLERIE',
                    'latitude' => 47.479167,
                    'longitude' => 6.759354,
                ),
            549 =>
                array (
                    'id' => '17017',
                    'name' => '08-mai',
                    'latitude' => 47.462175,
                    'longitude' => 6.858897,
                ),
            550 =>
                array (
                    'id' => '17019',
                    'name' => 'ACROPOLE QUAI 2',
                    'latitude' => 47.509369,
                    'longitude' => 6.802058,
                ),
            551 =>
                array (
                    'id' => '17020',
                    'name' => 'ACROPOLE QUAI 3',
                    'latitude' => 47.509527,
                    'longitude' => 6.801921,
                ),
            552 =>
                array (
                    'id' => '17021',
                    'name' => 'ACROPOLE QUAI 5',
                    'latitude' => 47.50969,
                    'longitude' => 6.801888,
                ),
            553 =>
                array (
                    'id' => '17025',
                    'name' => 'CARRIERES',
                    'latitude' => 47.480751,
                    'longitude' => 6.745514,
                ),
            554 =>
                array (
                    'id' => '17027',
                    'name' => 'CERISIERS',
                    'latitude' => 47.481455,
                    'longitude' => 6.727236,
                ),
            555 =>
                array (
                    'id' => '17029',
                    'name' => 'DOUBS',
                    'latitude' => 47.485783,
                    'longitude' => 6.834472,
                ),
            556 =>
                array (
                    'id' => '17032',
                    'name' => 'L\'ATELIER',
                    'latitude' => 47.520418,
                    'longitude' => 6.863537,
                ),
            557 =>
                array (
                    'id' => '17034',
                    'name' => 'LE PAUVREMENT',
                    'latitude' => 47.477466,
                    'longitude' => 6.841251,
                ),
            558 =>
                array (
                    'id' => '17035',
                    'name' => 'LES COLONNES',
                    'latitude' => 47.438901,
                    'longitude' => 6.779852,
                ),
            559 =>
                array (
                    'id' => '17036',
                    'name' => 'LORRAINE',
                    'latitude' => 47.47124543378561,
                    'longitude' => 6.832235846557637,
                ),
            560 =>
                array (
                    'id' => '17040',
                    'name' => 'PLACE DU MARCHE QUAI 2',
                    'latitude' => 47.48242,
                    'longitude' => 6.845025,
                ),
            561 =>
                array (
                    'id' => '17041',
                    'name' => 'PLACE DU MARCHE QUAI 3',
                    'latitude' => 47.480915,
                    'longitude' => 6.844289,
                ),
            562 =>
                array (
                    'id' => '17042',
                    'name' => 'PLACE DU MARCHE QUAI 4',
                    'latitude' => 47.481288,
                    'longitude' => 6.844649,
                ),
            563 =>
                array (
                    'id' => '17043',
                    'name' => 'PRE GIRARD',
                    'latitude' => 47.525693,
                    'longitude' => 6.840125,
                ),
            564 =>
                array (
                    'id' => '17045',
                    'name' => 'RUE DE LA GARE',
                    'latitude' => 47.436789,
                    'longitude' => 6.781708,
                ),
            565 =>
                array (
                    'id' => '17050',
                    'name' => 'TEMPLE QUAI  2',
                    'latitude' => 47.483529,
                    'longitude' => 6.838657,
                ),
            566 =>
                array (
                    'id' => '17053',
                    'name' => '08-mai',
                    'latitude' => 47.461644,
                    'longitude' => 6.859446,
                ),
            567 =>
                array (
                    'id' => '17060',
                    'name' => 'CARNOT',
                    'latitude' => 47.462968,
                    'longitude' => 6.837555,
                ),
            568 =>
                array (
                    'id' => '17061',
                    'name' => 'LES CARRIERES',
                    'latitude' => 47.480814,
                    'longitude' => 6.745575,
                ),
            569 =>
                array (
                    'id' => '17063',
                    'name' => 'CERISIERS',
                    'latitude' => 47.481504,
                    'longitude' => 6.727365,
                ),
            570 =>
                array (
                    'id' => '17066',
                    'name' => 'EMAILLERIE',
                    'latitude' => 47.479312,
                    'longitude' => 6.758821,
                ),
            571 =>
                array (
                    'id' => '17068',
                    'name' => 'L\'ATELIER',
                    'latitude' => 47.5204032974276,
                    'longitude' => 6.863751411437988,
                ),
            572 =>
                array (
                    'id' => '17070',
                    'name' => 'LE PAUVREMENT',
                    'latitude' => 47.477529,
                    'longitude' => 6.841006,
                ),
            573 =>
                array (
                    'id' => '17071',
                    'name' => 'LES COLONNES',
                    'latitude' => 47.439002,
                    'longitude' => 6.779841,
                ),
            574 =>
                array (
                    'id' => '17079',
                    'name' => 'PRE GIRARD',
                    'latitude' => 47.525645,
                    'longitude' => 6.840052,
                ),
            575 =>
                array (
                    'id' => '17081',
                    'name' => 'RUE DE LA GARE',
                    'latitude' => 47.436753,
                    'longitude' => 6.781633,
                ),
            576 =>
                array (
                    'id' => '17103',
                    'name' => 'COLLEGE PAUL LANGEVIN',
                    'latitude' => 47.502602,
                    'longitude' => 6.855305,
                ),
            577 =>
                array (
                    'id' => '17108',
                    'name' => 'PRESBYTERE',
                    'latitude' => 47.487362,
                    'longitude' => 6.830698,
                ),
            578 =>
                array (
                    'id' => '17109',
                    'name' => 'PLACE DU MARCHE',
                    'latitude' => 47.481945,
                    'longitude' => 6.845695,
                ),
            579 =>
                array (
                    'id' => '17132',
                    'name' => 'ZI ETUPES',
                    'latitude' => 47.512692,
                    'longitude' => 6.86329,
                ),
            580 =>
                array (
                    'id' => '17142',
                    'name' => 'ACROPOLE QUAI 4',
                    'latitude' => 47.509494,
                    'longitude' => 6.802018,
                ),
            581 =>
                array (
                    'id' => '17151',
                    'name' => 'ALLENJOIE',
                    'latitude' => 47.533793,
                    'longitude' => 6.896528,
                ),
            582 =>
                array (
                    'id' => '17198',
                    'name' => 'BARRIERES BLANCHES',
                    'latitude' => 47.510864,
                    'longitude' => 6.913176,
                ),
            583 =>
                array (
                    'id' => '17205',
                    'name' => 'BEAUCOURT',
                    'latitude' => 47.486078,
                    'longitude' => 6.925138,
                ),
            584 =>
                array (
                    'id' => '17223',
                    'name' => 'BLESSONIERS',
                    'latitude' => 47.494115,
                    'longitude' => 6.923223,
                ),
            585 =>
                array (
                    'id' => '17234',
                    'name' => 'BOUDRY',
                    'latitude' => 47.474438,
                    'longitude' => 6.764482,
                ),
            586 =>
                array (
                    'id' => '17236',
                    'name' => 'BOURGUIGNON FORGES',
                    'latitude' => 47.406517,
                    'longitude' => 6.769456,
                ),
            587 =>
                array (
                    'id' => '17241',
                    'name' => 'BOURGUIGNON',
                    'latitude' => 47.414607,
                    'longitude' => 6.777256,
                ),
            588 =>
                array (
                    'id' => '17247',
                    'name' => 'BROGNARD',
                    'latitude' => 47.530445,
                    'longitude' => 6.868815,
                ),
            589 =>
                array (
                    'id' => '17305',
                    'name' => 'CHAUFFOUR',
                    'latitude' => 47.53097,
                    'longitude' => 6.89325,
                ),
            590 =>
                array (
                    'id' => '17325',
                    'name' => 'CIMETIÈRE P',
                    'latitude' => 47.387255,
                    'longitude' => 6.767036,
                ),
            591 =>
                array (
                    'id' => '17353',
                    'name' => 'LA CORNETTE',
                    'latitude' => 47.481598,
                    'longitude' => 6.827482,
                ),
            592 =>
                array (
                    'id' => '17389',
                    'name' => 'DOUBS',
                    'latitude' => 47.485805,
                    'longitude' => 6.83448,
                ),
            593 =>
                array (
                    'id' => '17390',
                    'name' => 'DONZELOT',
                    'latitude' => 47.496223,
                    'longitude' => 6.808543,
                ),
            594 =>
                array (
                    'id' => '17428',
                    'name' => 'ETUPES 4',
                    'latitude' => 47.51785325191419,
                    'longitude' => 6.859288169311526,
                ),
            595 =>
                array (
                    'id' => '17429',
                    'name' => 'ETUPES',
                    'latitude' => 47.507517,
                    'longitude' => 6.860228,
                ),
            596 =>
                array (
                    'id' => '17432',
                    'name' => 'ETUVE',
                    'latitude' => 47.511637,
                    'longitude' => 6.798716,
                ),
            597 =>
                array (
                    'id' => '17458',
                    'name' => 'GRANDS BOIS',
                    'latitude' => 47.474944,
                    'longitude' => 6.860608,
                ),
            598 =>
                array (
                    'id' => '17460',
                    'name' => 'GRAND BOIS',
                    'latitude' => 47.473707,
                    'longitude' => 6.861702,
                ),
            599 =>
                array (
                    'id' => '17462',
                    'name' => 'GRAND CHENOIS',
                    'latitude' => 47.499865590769815,
                    'longitude' => 6.808905601501465,
                ),
            600 =>
                array (
                    'id' => '17472',
                    'name' => 'GARE LGV',
                    'latitude' => 47.585091,
                    'longitude' => 6.89833,
                ),
            601 =>
                array (
                    'id' => '17476',
                    'name' => 'GROS PIERRONS',
                    'latitude' => 47.494349,
                    'longitude' => 6.820597,
                ),
            602 =>
                array (
                    'id' => '17501',
                    'name' => 'HAUTES VIGNES',
                    'latitude' => 47.470756,
                    'longitude' => 6.857368,
                ),
            603 =>
                array (
                    'id' => '17541',
                    'name' => 'LA BOULOIE',
                    'latitude' => 47.432892,
                    'longitude' => 6.887022,
                ),
            604 =>
                array (
                    'id' => '17592',
                    'name' => 'LES JONCHETS',
                    'latitude' => 47.53040138018575,
                    'longitude' => 6.864984949737618,
                ),
            605 =>
                array (
                    'id' => '17600',
                    'name' => 'LE LONGEOT',
                    'latitude' => 47.54348231610854,
                    'longitude' => 6.8505120277404785,
                ),
            606 =>
                array (
                    'id' => '17639',
                    'name' => 'LUMIERES',
                    'latitude' => 47.488807,
                    'longitude' => 6.838493,
                ),
            607 =>
                array (
                    'id' => '17640',
                    'name' => 'LUMIERE',
                    'latitude' => 47.489186,
                    'longitude' => 6.838512,
                ),
            608 =>
                array (
                    'id' => '17661',
                    'name' => 'MOULIN DU BOIS',
                    'latitude' => 47.528474,
                    'longitude' => 6.888514,
                ),
            609 =>
                array (
                    'id' => '17675',
                    'name' => 'MERMOZ',
                    'latitude' => 47.50141,
                    'longitude' => 6.785596,
                ),
            610 =>
                array (
                    'id' => '17688',
                    'name' => 'MARECHAL JUIN',
                    'latitude' => 47.525373,
                    'longitude' => 6.789765,
                ),
            611 =>
                array (
                    'id' => '17692',
                    'name' => 'MONNOT',
                    'latitude' => 47.475312,
                    'longitude' => 6.76018,
                ),
            612 =>
                array (
                    'id' => '17698',
                    'name' => 'MOUCHOTTE',
                    'latitude' => 47.501524,
                    'longitude' => 6.789321,
                ),
            613 =>
                array (
                    'id' => '17704',
                    'name' => 'MOULIN',
                    'latitude' => 47.475648,
                    'longitude' => 6.757242,
                ),
            614 =>
                array (
                    'id' => '17726',
                    'name' => 'OEHMICHEN',
                    'latitude' => 47.46248,
                    'longitude' => 6.83223,
                ),
            615 =>
                array (
                    'id' => '17765',
                    'name' => 'PRES FALLOT',
                    'latitude' => 47.532265,
                    'longitude' => 6.7892,
                ),
            616 =>
                array (
                    'id' => '17766',
                    'name' => 'PLACE FERRER',
                    'latitude' => 47.508606,
                    'longitude' => 6.794057,
                ),
            617 =>
                array (
                    'id' => '17770',
                    'name' => 'PIED DES GOUTTES',
                    'latitude' => 47.503463,
                    'longitude' => 6.813453,
                ),
            618 =>
                array (
                    'id' => '17777',
                    'name' => 'PRES L\'EPINE',
                    'latitude' => 47.535737,
                    'longitude' => 6.782457,
                ),
            619 =>
                array (
                    'id' => '17779',
                    'name' => 'PLACE DU MARCHE',
                    'latitude' => 47.482003,
                    'longitude' => 6.845641,
                ),
            620 =>
                array (
                    'id' => '17793',
                    'name' => 'LES HALLES',
                    'latitude' => 47.38341575711842,
                    'longitude' => 6.771376132965088,
                ),
            621 =>
                array (
                    'id' => '17799',
                    'name' => 'PIERRE RONSARD',
                    'latitude' => 47.516157,
                    'longitude' => 6.774273,
                ),
            622 =>
                array (
                    'id' => '17800',
                    'name' => 'PIERRE DE RONSARD',
                    'latitude' => 47.516404,
                    'longitude' => 6.774595,
                ),
            623 =>
                array (
                    'id' => '17803',
                    'name' => 'PORTIÈRE OUEST',
                    'latitude' => 47.509253,
                    'longitude' => 6.810751,
                ),
            624 =>
                array (
                    'id' => '17815',
                    'name' => 'RANCEUSE',
                    'latitude' => 47.39348832593511,
                    'longitude' => 6.77004291534422,
                ),
            625 =>
                array (
                    'id' => '17829',
                    'name' => 'ROUTE DE BERMONT',
                    'latitude' => 47.488035,
                    'longitude' => 6.8422,
                ),
            626 =>
                array (
                    'id' => '17833',
                    'name' => 'RUE DES CHAMPS',
                    'latitude' => 47.459346381588944,
                    'longitude' => 6.831865310668945,
                ),
            627 =>
                array (
                    'id' => '17838',
                    'name' => 'RUE DE L\'EUROPE',
                    'latitude' => 47.441869,
                    'longitude' => 6.785586,
                ),
            628 =>
                array (
                    'id' => '17870',
                    'name' => 'ROSELIERE',
                    'latitude' => 47.50641812545053,
                    'longitude' => 6.7939714074096855,
                ),
            629 =>
                array (
                    'id' => '17880',
                    'name' => 'RUE DE SOCHAUX',
                    'latitude' => 47.503747,
                    'longitude' => 6.842447,
                ),
            630 =>
                array (
                    'id' => '17907',
                    'name' => 'SAINT',
                    'latitude' => 47.509114,
                    'longitude' => 6.791629,
                ),
            631 =>
                array (
                    'id' => '17923',
                    'name' => 'SAINT PAUL',
                    'latitude' => 47.484305,
                    'longitude' => 6.923858,
                ),
            632 =>
                array (
                    'id' => '17941',
                    'name' => 'TECHNOLAND 2',
                    'latitude' => 47.53074912384755,
                    'longitude' => 6.875810534484799,
                ),
            633 =>
                array (
                    'id' => '17943',
                    'name' => 'TEMPLE QUAI  1',
                    'latitude' => 47.483649,
                    'longitude' => 6.838742,
                ),
            634 =>
                array (
                    'id' => '17944',
                    'name' => 'TEMPLE QUAI 1',
                    'latitude' => 47.481908,
                    'longitude' => 6.838453,
                ),
            635 =>
                array (
                    'id' => '17962',
                    'name' => 'TERRE ROUGE',
                    'latitude' => 47.529981,
                    'longitude' => 6.815697,
                ),
            636 =>
                array (
                    'id' => '18135',
                    'name' => 'NOUVEAU1',
                    'latitude' => 47.442192,
                    'longitude' => 6.785683,
                ),
            637 =>
                array (
                    'id' => '18136',
                    'name' => 'TERRE ROUGE',
                    'latitude' => 47.530024,
                    'longitude' => 6.815836,
                ),
            638 =>
                array (
                    'id' => '18176',
                    'name' => 'LES FOUGERES',
                    'latitude' => 47.537217,
                    'longitude' => 6.821169,
                ),
            639 =>
                array (
                    'id' => '18191',
                    'name' => 'CIMETIÈRE PONT DE ROIDE',
                    'latitude' => 47.38715,
                    'longitude' => 6.766725,
                ),
            640 =>
                array (
                    'id' => '18264',
                    'name' => 'EPINOTTES',
                    'latitude' => 47.45466740319661,
                    'longitude' => 6.829183101654053,
                ),
            641 =>
                array (
                    'id' => '18266',
                    'name' => 'CHAMPVALLON',
                    'latitude' => 47.53945544742496,
                    'longitude' => 6.812639236450195,
                ),
            642 =>
                array (
                    'id' => '18267',
                    'name' => 'GRANDS JARDINS',
                    'latitude' => 47.51322374931723,
                    'longitude' => 6.803372334616142,
                ),
            643 =>
                array (
                    'id' => '18268',
                    'name' => 'SAINT MICHEL',
                    'latitude' => 47.50807004236025,
                    'longitude' => 6.765604019165039,
                ),
            644 =>
                array (
                    'id' => '18269',
                    'name' => 'LA MONTAGNE',
                    'latitude' => 47.50257639064545,
                    'longitude' => 6.855146884918213,
                ),
            645 =>
                array (
                    'id' => '18270',
                    'name' => 'LONGINES',
                    'latitude' => 47.4517727569518,
                    'longitude' => 6.8396759033203125,
                ),
            646 =>
                array (
                    'id' => '18271',
                    'name' => 'HORBOURG',
                    'latitude' => 47.51710650077488,
                    'longitude' => 6.776735186576843,
                ),
            647 =>
                array (
                    'id' => '18273',
                    'name' => 'LA PIERRE MARTIN',
                    'latitude' => 47.53138629420017,
                    'longitude' => 6.812746524810791,
                ),
            648 =>
                array (
                    'id' => '18274',
                    'name' => 'SUR LE BIEF',
                    'latitude' => 47.52438815969256,
                    'longitude' => 6.83349609375,
                ),
            649 =>
                array (
                    'id' => '18276',
                    'name' => 'LE CLOS',
                    'latitude' => 47.45158412785739,
                    'longitude' => 6.79429292678833,
                ),
            650 =>
                array (
                    'id' => '18277',
                    'name' => 'CHAMPVALLON',
                    'latitude' => 47.53899190312069,
                    'longitude' => 6.81126594543457,
                ),
            651 =>
                array (
                    'id' => '18279',
                    'name' => 'ACROPOLE QUAI 7',
                    'latitude' => 47.51045003315634,
                    'longitude' => 6.801576025318354,
                ),
            652 =>
                array (
                    'id' => '18280',
                    'name' => 'COURBET',
                    'latitude' => 47.4780001209756,
                    'longitude' => 6.829032897949219,
                ),
            653 =>
                array (
                    'id' => '18282',
                    'name' => 'PAQUIS',
                    'latitude' => 47.52575018865222,
                    'longitude' => 6.824848651885986,
                ),
            654 =>
                array (
                    'id' => '18284',
                    'name' => 'VERNOIS',
                    'latitude' => 47.45281745968742,
                    'longitude' => 6.831393241882324,
                ),
            655 =>
                array (
                    'id' => '18285',
                    'name' => 'LEON BLUM',
                    'latitude' => 47.498618865764314,
                    'longitude' => 6.801438331604004,
                ),
            656 =>
                array (
                    'id' => '18286',
                    'name' => 'LA PIERRE MARTIN',
                    'latitude' => 47.53141816824323,
                    'longitude' => 6.81231307957205,
                ),
            657 =>
                array (
                    'id' => '18287',
                    'name' => 'LES VERNES',
                    'latitude' => 47.45635768683943,
                    'longitude' => 6.832036972045898,
                ),
            658 =>
                array (
                    'id' => '18288',
                    'name' => 'PAQUIS',
                    'latitude' => 47.52572120968094,
                    'longitude' => 6.824955940246582,
                ),
            659 =>
                array (
                    'id' => '18289',
                    'name' => 'LEON BLUM',
                    'latitude' => 47.49867685363259,
                    'longitude' => 6.8015241622924805,
                ),
            660 =>
                array (
                    'id' => '18290',
                    'name' => 'LES VERNES',
                    'latitude' => 47.45580635565634,
                    'longitude' => 6.831951141357422,
                ),
            661 =>
                array (
                    'id' => '18291',
                    'name' => 'VERNOIS',
                    'latitude' => 47.45287549811827,
                    'longitude' => 6.831350326538086,
                ),
            662 =>
                array (
                    'id' => '18292',
                    'name' => 'COURBET',
                    'latitude' => 47.47779708325134,
                    'longitude' => 6.82924747467041,
                ),
            663 =>
                array (
                    'id' => '18293',
                    'name' => 'PARROT',
                    'latitude' => 47.47576821418199,
                    'longitude' => 6.823752001655521,
                ),
            664 =>
                array (
                    'id' => '18294',
                    'name' => 'R. DES CHAMPS',
                    'latitude' => 47.45985084154221,
                    'longitude' => 6.831617879867508,
                ),
            665 =>
                array (
                    'id' => '18295',
                    'name' => 'RENE JACOT',
                    'latitude' => 47.51018617695428,
                    'longitude' => 6.855318546295166,
                ),
            666 =>
                array (
                    'id' => '18296',
                    'name' => 'CHANOIT',
                    'latitude' => 47.52767725431514,
                    'longitude' => 6.874802112579346,
                ),
            667 =>
                array (
                    'id' => '18297',
                    'name' => 'HAUTS DES BUIS',
                    'latitude' => 47.47772528790893,
                    'longitude' => 6.8236401019385085,
                ),
            668 =>
                array (
                    'id' => '18298',
                    'name' => 'LIBERATION',
                    'latitude' => 47.46244039782697,
                    'longitude' => 6.8414991378783725,
                ),
            669 =>
                array (
                    'id' => '18299',
                    'name' => 'PIERRE MARTI',
                    'latitude' => 47.51772240159851,
                    'longitude' => 6.855940818786621,
                ),
            670 =>
                array (
                    'id' => '18300',
                    'name' => 'LA NOVIE',
                    'latitude' => 47.471241443698446,
                    'longitude' => 6.830127239227295,
                ),
            671 =>
                array (
                    'id' => '18302',
                    'name' => 'CHANOIT',
                    'latitude' => 47.527807654697135,
                    'longitude' => 6.874909400939941,
                ),
            672 =>
                array (
                    'id' => '18303',
                    'name' => 'RENE JACOT',
                    'latitude' => 47.510157189385396,
                    'longitude' => 6.854074001312256,
                ),
            673 =>
                array (
                    'id' => '18304',
                    'name' => 'LIBERATION',
                    'latitude' => 47.46236392042981,
                    'longitude' => 6.841692924499512,
                ),
            674 =>
                array (
                    'id' => '18305',
                    'name' => 'HAUTS DES BUIS',
                    'latitude' => 47.47781552735587,
                    'longitude' => 6.8236463546752475,
                ),
            675 =>
                array (
                    'id' => '18307',
                    'name' => 'ARCADES',
                    'latitude' => 47.48509144634638,
                    'longitude' => 6.9258928298950195,
                ),
            676 =>
                array (
                    'id' => '18308',
                    'name' => 'BOURGUIGNON',
                    'latitude' => 47.39275691810086,
                    'longitude' => 6.774337291717529,
                ),
            677 =>
                array (
                    'id' => '18309',
                    'name' => 'PASSERELLE',
                    'latitude' => 47.392727865734436,
                    'longitude' => 6.774294376373291,
                ),
            678 =>
                array (
                    'id' => '18310',
                    'name' => 'ACROPOLE',
                    'latitude' => 47.51007022658332,
                    'longitude' => 6.801824569702148,
                ),
            679 =>
                array (
                    'id' => '18312',
                    'name' => 'GROS PIERRONS',
                    'latitude' => 47.49419710235954,
                    'longitude' => 6.819462776184082,
                ),
            680 =>
                array (
                    'id' => '18313',
                    'name' => 'BOURGUIGNON LES FORGES',
                    'latitude' => 47.38959011588431,
                    'longitude' => 6.769208908081055,
                ),
            681 =>
                array (
                    'id' => '18314',
                    'name' => 'MAISON POUR TOUS',
                    'latitude' => 47.384999367501415,
                    'longitude' => 6.773843765258789,
                ),
            682 =>
                array (
                    'id' => '18315',
                    'name' => 'ETUPES 4',
                    'latitude' => 47.51828757481711,
                    'longitude' => 6.859416961669922,
                ),
            683 =>
                array (
                    'id' => '18316',
                    'name' => 'RANCEUSE',
                    'latitude' => 47.38345934336161,
                    'longitude' => 6.769208908081055,
                ),
            684 =>
                array (
                    'id' => '18317',
                    'name' => 'BOULEAUX',
                    'latitude' => 47.38957558883024,
                    'longitude' => 6.7691874504089355,
                ),
            685 =>
                array (
                    'id' => '18318',
                    'name' => 'ECOLE VERMONDANS',
                    'latitude' => 47.38948856707831,
                    'longitude' => 6.75485372543335,
                ),
            686 =>
                array (
                    'id' => '18319',
                    'name' => 'GROS PIERRONS',
                    'latitude' => 47.49402312372716,
                    'longitude' => 6.81926965713501,
                ),
            687 =>
                array (
                    'id' => '18320',
                    'name' => 'BOULEAUX',
                    'latitude' => 47.38434558916418,
                    'longitude' => 6.773672103881836,
                ),
            688 =>
                array (
                    'id' => '18321',
                    'name' => 'ECOLE VERMONDANS',
                    'latitude' => 47.39364300758482,
                    'longitude' => 6.7700886726379395,
                ),
            689 =>
                array (
                    'id' => '18322',
                    'name' => 'PARVIS',
                    'latitude' => 47.38961916998057,
                    'longitude' => 6.754252910614014,
                ),
            690 =>
                array (
                    'id' => '18323',
                    'name' => 'MAISON POUR TOUS',
                    'latitude' => 47.40659854869167,
                    'longitude' => 6.769466400146484,
                ),
        ));
    }
}
