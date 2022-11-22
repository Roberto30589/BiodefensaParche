<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = array(
            array(
                "id" => 1,
                "name" => "Prueba01",
                "created_at" => "2021-04-28 11:27:19",
                "updated_at" => "2022-11-09 22:35:13",
                "representative" => "Luis Aliste",
                "rut" => "100.000.111-0",
                "phone" => "+56998205886",
                "email" => "laalistee@gmail.com"
            ),
            array(
                "id" => 2,
                "name" => "Valuetech",
                "created_at" => "2021-04-30 14:35:03",
                "updated_at" => "2021-05-10 16:27:36",
                "representative" => "jose luis rodriguez",
                "rut" => "96.957.280-k",
                "phone" => "+56971537006",
                "email" => "nballacey@valuetech.cl"
            ),
            array(
                "id" => 3,
                "name" => "Arenas y Cayo",
                "created_at" => "2021-04-30 14:44:18",
                "updated_at" => "2021-06-29 13:16:44",
                "representative" => "Yurli  Varela",
                "rut" => "76.715.810-6",
                "phone" => "+56959832516",
                "email" => "yurly.varela@arenasycayo.cl"
            ),
            array(
                "id" => 4,
                "name" => "DPS Chile",
                "created_at" => "2021-05-06 15:56:19",
                "updated_at" => "2021-05-07 17:35:43",
                "representative" => "Carolina Rojas",
                "rut" => "79.921.330-3",
                "phone" => "974794086",
                "email" => "crojas@dpschile.cl"
            ),
            array(
                "id" => 5,
                "name" => "San Clemente",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "Paz ",
                "rut" => "79.500.510-2",
                "phone" => "56961221954",
                "email" => ""
            ),
            array(
                "id" => 6,
                "name" => "VALUETECH",
                "created_at" => null,
                "updated_at" => "2021-07-04 23:28:56",
                "representative" => "Alexis Fica",
                "rut" => "96.957.280-k",
                "phone" => "56223905600",
                "email" => "afica@valuetech.cl"
            ),
            array(
                "id" => 7,
                "name" => "Arena y Cayo - Cliente Duplicado no considerar",
                "created_at" => null,
                "updated_at" => "2021-06-29 13:15:52",
                "representative" => "Yurly Varela",
                "rut" => "76.715.810-6",
                "phone" => "+5695983 2516",
                "email" => "yurly.varela@arenasycayo.cl"
            ),
            array(
                "id" => 8,
                "name" => "DPS Chile",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "",
                "rut" => "",
                "phone" => "",
                "email" => ""
            ),
            array(
                "id" => 9,
                "name" => "Stein",
                "created_at" => null,
                "updated_at" => "2021-07-04 23:17:20",
                "representative" => "Patricio Briceño",
                "rut" => "89.218.600-6",
                "phone" => "56959987274",
                "email" => "patricio.briceño@stein.cl"
            ),
            array(
                "id" => 10,
                "name" => "Compass Group",
                "created_at" => null,
                "updated_at" => "2021-07-24 08:00:27",
                "representative" => "Carmen Gituerrez",
                "rut" => "96.978.660-5",
                "phone" => "+56995792960",
                "email" => "carmen.gutierrez@cgcompass.com"
            ),
            array(
                "id" => 11,
                "name" => "Edificio Apoquindo 3600",
                "created_at" => null,
                "updated_at" => "2021-07-10 08:37:25",
                "representative" => "Marco Oliva",
                "rut" => "56063920-1",
                "phone" => "569 9322 0931",
                "email" => "apoquindo3600@cbre.cl"
            ),
            array(
                "id" => 12,
                "name" => "Edificio Manantiales",
                "created_at" => null,
                "updated_at" => "2021-07-15 11:52:45",
                "representative" => "Nelson Bustamante",
                "rut" => "56065430-8",
                "phone" => "23789436",
                "email" => "edificiomanantiales@cbre.cl"
            ),
            array(
                "id" => 13,
                "name" => "Icare",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "Matias Palacios",
                "rut" => "99594380-8",
                "phone" => "",
                "email" => "mpalacios@icare.cl"
            ),
            array(
                "id" => 14,
                "name" => "Corporación Educacional IVYMCA",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "F. Chiessa",
                "rut" => "65.147.294-6",
                "phone" => "5697997099",
                "email" => "fchiessa@ivymca.cl"
            ),
            array(
                "id" => 15,
                "name" => "ELITE BRANDS - LEGO",
                "created_at" => null,
                "updated_at" => "2022-02-01 18:58:47",
                "representative" => "Luz Palma",
                "rut" => "77.029.472-K",
                "phone" => "+5699663 9353",
                "email" => "luz.palma@elitebrands.cl"
            ),
            array(
                "id" => 16,
                "name" => "Fundación JDFS",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "Gloria Espinoza",
                "rut" => "65.155.712-7",
                "phone" => "56981096688",
                "email" => "gespinoza@jan.cl"
            ),
            array(
                "id" => 17,
                "name" => "Fundación JAN",
                "created_at" => null,
                "updated_at" => "2021-05-15 11:10:45",
                "representative" => "Gloria Espinoza",
                "rut" => "65146175-8",
                "phone" => "+56981096688",
                "email" => "jespinoza@jan.cl"
            ),
            array(
                "id" => 18,
                "name" => "HECAGLOBAL",
                "created_at" => null,
                "updated_at" => "2022-07-15 15:05:14",
                "representative" => "Austerlitz Capriles",
                "rut" => "76.886.693-7",
                "phone" => "56954059979",
                "email" => "acapriles@hecaglobal.com"
            ),
            array(
                "id" => 19,
                "name" => "INMOBILIARIA CUMBRES DE SANTA ELENA",
                "created_at" => null,
                "updated_at" => "2021-07-09 14:22:39",
                "representative" => "Santibañez",
                "rut" => "76.452.109-9",
                "phone" => "56982330545",
                "email" => "maite@sepco.cl"
            ),
            array(
                "id" => 20,
                "name" => "INSTITUTO ODONTOLOGICO SANTA MAGDALENA",
                "created_at" => null,
                "updated_at" => "2021-07-05 16:32:21",
                "representative" => "María Josefina",
                "rut" => "76.122.553-7",
                "phone" => "123",
                "email" => "josefina.vt@gmail.com"
            ),
            array(
                "id" => 21,
                "name" => "JOAQUIN ROMO PASTEN JARDIN INFANTIL",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "Joaquin ",
                "rut" => "76.591.440-k",
                "phone" => "",
                "email" => "salacunayjardincharbel@gmail.com"
            ),
            array(
                "id" => 22,
                "name" => "KINDER SONRISA ",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "Luis Alfonso",
                "rut" => "76.190.008-0",
                "phone" => "",
                "email" => "luisalfonso.tapia@kindersonrisa.cl"
            ),
            array(
                "id" => 23,
                "name" => "LINK MAS",
                "created_at" => null,
                "updated_at" => "2022-08-30 11:18:44",
                "representative" => "VICTOR",
                "rut" => "99.566.280-9",
                "phone" => "56991300681",
                "email" => "victor.gutierrez@linkservice.cl"
            ),
            array(
                "id" => 24,
                "name" => "OVALLE Y COMPANIA",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "Andres",
                "rut" => "79.777.210-0",
                "phone" => "562 2447 5400",
                "email" => "aovalle@empresasovalle.cl"
            ),
            array(
                "id" => 25,
                "name" => "PROEQUIPOS",
                "created_at" => null,
                "updated_at" => "2022-01-21 12:36:06",
                "representative" => "Katherine",
                "rut" => "79.745.670-5",
                "phone" => "+",
                "email" => "proequipos@proequipos.com"
            ),
            array(
                "id" => 26,
                "name" => "SOC PROFESIONAL KREISBERGLIMITADA",
                "created_at" => null,
                "updated_at" => null,
                "representative" => "Jeanete ",
                "rut" => "76.259.600-8",
                "phone" => "569 7856 2051",
                "email" => "kreisbergortodoncia@gmail.com"
            ),
            array(
                "id" => 27,
                "name" => "SOCIEDAD CHILENA DE CARDIOLOGIA",
                "created_at" => null,
                "updated_at" => "2021-08-16 10:08:40",
                "representative" => "Ricardo Rojo",
                "rut" => "70.008.590-2",
                "phone" => "998247233",
                "email" => "ricardo.rojo@sochicar.cl"
            ),
            array(
                "id" => 28,
                "name" => "STRYKER",
                "created_at" => null,
                "updated_at" => "2021-07-04 23:20:19",
                "representative" => "Carolina",
                "rut" => "78.874.470-6",
                "phone" => "56994996518",
                "email" => "carolina.contador@stryker.com"
            ),
            array(
                "id" => 29,
                "name" => "TRAMONTINA CHILE",
                "created_at" => null,
                "updated_at" => "2021-07-02 11:28:52",
                "representative" => "Adalys Quintero",
                "rut" => "77.479.170-1",
                "phone" => "56957790930",
                "email" => "prevencion.tchile@tramontina.com"
            ),
            array(
                "id" => 30,
                "name" => "TRAMONTINA STORE",
                "created_at" => null,
                "updated_at" => "2021-07-04 23:19:49",
                "representative" => "Jennifer",
                "rut" => "76.413.476-1",
                "phone" => "123",
                "email" => "jennifer@tramontina.cl"
            ),
            array(
                "id" => 31,
                "name" => "WM WIRELESS & MOBILE",
                "created_at" => null,
                "updated_at" => "2021-07-04 23:18:57",
                "representative" => "Gernhy",
                "rut" => "76.426.400-2",
                "phone" => "56229492840",
                "email" => "recepcionchile@wi-mobile.com"
            ),
            array(
                "id" => 32,
                "name" => "WSP Chile",
                "created_at" => null,
                "updated_at" => "2021-07-04 23:18:34",
                "representative" => "Daniel Cabeza",
                "rut" => "79.906.490-1",
                "phone" => "+56982889883",
                "email" => "daniel.cabeza@wsp.com"
            ),
            array(
                "id" => 33,
                "name" => "VGC Abogados",
                "created_at" => "2021-05-27 12:08:23",
                "updated_at" => "2021-06-02 12:16:40",
                "representative" => "Marcela Carrasco",
                "rut" => "76.034.174-6",
                "phone" => "+5695993363",
                "email" => "mcarrasco@vgcabogados.cl"
            ),
            array(
                "id" => 34,
                "name" => "BSF Bodegas",
                "created_at" => "2021-05-28 12:11:51",
                "updated_at" => "2021-06-02 12:15:37",
                "representative" => "Víctor Vera",
                "rut" => "76940910-6",
                "phone" => "+56975393946",
                "email" => "vvera@bsf.cl"
            ),
            array(
                "id" => 35,
                "name" => "FAROS ASESORES",
                "created_at" => "2021-08-16 13:04:54",
                "updated_at" => "2022-05-13 15:39:41",
                "representative" => "Magdalena Larrain",
                "rut" => "76.224.197-8",
                "phone" => "+56 9 9144 0331",
                "email" => "magdalena.larrain@farosasesores.cl"
            ),
            array(
                "id" => 36,
                "name" => "PROVECTIS",
                "created_at" => "2021-09-25 15:03:30",
                "updated_at" => "2021-09-25 15:03:30",
                "representative" => "Marcela Cerda",
                "rut" => "96.901.500-5",
                "phone" => "+56 9 7897 9817",
                "email" => "Marcela.cerda@provectis.cl"
            ),
            array(
                "id" => 37,
                "name" => "CATAMUTUN",
                "created_at" => "2021-10-22 15:42:28",
                "updated_at" => "2021-10-22 15:42:52",
                "representative" => "Rodrigo Ganzt",
                "rut" => "76.471.333-8",
                "phone" => "42645532",
                "email" => "Jocelyn.valle@catamutun.com"
            ),
            array(
                "id" => 38,
                "name" => "THB Chile Corredores de Seguros S.A.",
                "created_at" => "2021-11-19 17:41:09",
                "updated_at" => "2021-11-22 19:00:54",
                "representative" => "Estefanía Castañeda",
                "rut" => "77.508.900-8",
                "phone" => "+56 9 5666 9668",
                "email" => "ecastaneda@thbseguros.cl"
            ),
            array(
                "id" => 39,
                "name" => "THB Chile Corredores de Reaseguros",
                "created_at" => "2021-11-22 11:39:14",
                "updated_at" => "2021-11-22 18:55:24",
                "representative" => "Estefanía Castañeda",
                "rut" => "76.541.880-1",
                "phone" => "+56 9 5666 9668",
                "email" => "ecastaneda@thbseguros.cl"
            ),
            array(
                "id" => 40,
                "name" => "DEMARIA",
                "created_at" => "2021-12-12 09:41:18",
                "updated_at" => "2022-03-30 10:21:00",
                "representative" => "Yusenia Cisternas",
                "rut" => "90727000-9",
                "phone" => "+56964075932",
                "email" => "ycisternas@demaria.cl"
            ),
            array(
                "id" => 41,
                "name" => "Prueba Adclean1",
                "created_at" => "2021-12-23 15:42:17",
                "updated_at" => "2021-12-23 15:42:17",
                "representative" => "Elon",
                "rut" => "12345-1",
                "phone" => "998205886",
                "email" => "luis.aliste@outlook.com"
            ),
            array(
                "id" => 42,
                "name" => "SIGA SONRIENDO",
                "created_at" => "2022-01-12 18:38:43",
                "updated_at" => "2022-01-13 10:11:59",
                "representative" => "Fernando Stange",
                "rut" => "77.422.425-4",
                "phone" => "998779715",
                "email" => "Austerlitz@hecaglobal.com"
            ),
            array(
                "id" => 43,
                "name" => "CASA FRANCISCO CHADWICK",
                "created_at" => "2022-01-19 09:58:57",
                "updated_at" => "2022-01-19 09:58:57",
                "representative" => "Francisco Chadwick",
                "rut" => "10.503.465-2",
                "phone" => "56982895808",
                "email" => "Fc@biodefensa.cl"
            ),
            array(
                "id" => 44,
                "name" => "Karime Messenger",
                "created_at" => "2022-01-24 20:18:56",
                "updated_at" => "2022-01-24 20:18:56",
                "representative" => "Gabriel Cancino",
                "rut" => "13.903.109-1",
                "phone" => "+56 9 9304 2832",
                "email" => "Karime.messenger@gmail.com"
            ),
            array(
                "id" => 45,
                "name" => "FIDE",
                "created_at" => "2022-03-18 11:58:46",
                "updated_at" => "2022-03-18 11:58:46",
                "representative" => "Vega Lidia",
                "rut" => "81.755.500-2",
                "phone" => "+56 2 27969694",
                "email" => "Vega.lidia@gmail.com"
            ),
            array(
                "id" => 46,
                "name" => "Metro de Santiago (TECNOVE)",
                "created_at" => "2022-10-03 19:04:20",
                "updated_at" => "2022-11-03 18:04:12",
                "representative" => "Edgardo Navarro",
                "rut" => "61.219.000-3",
                "phone" => "+56950004198",
                "email" => "Edgardonavarro@tecnove.com"
            ),
            array(
                "id" => 47,
                "name" => "Metro de Santiago (ISS)",
                "created_at" => "2022-11-03 20:50:58",
                "updated_at" => "2022-11-03 20:50:58",
                "representative" => "Patricio Riquelme",
                "rut" => "61.219.000-3",
                "phone" => "+56962077015",
                "email" => "patricio.riquelme@cl.issworld.com"
            )
        );

        
        foreach ($clients as $key => $c) {
            Client::create($c);
        }
    }
}
