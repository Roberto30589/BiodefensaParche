<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crea permisos para administrar usuarios
        Permission::create(['name' => 'user_read','description'=>'Permite leer Usuarios']);
        Permission::create(['name' => 'user_create','description'=>'Permite crear Usuarios']);
        Permission::create(['name' => 'user_update','description'=>'Permite actualizar Usuarios']);
        Permission::create(['name' => 'user_delete','description'=>'Permite eliminar usuarios']);

        Permission::create(['name' => 'file_create','description'=>'Permite Subir archivos']);
        Permission::create(['name' => 'file_read','description'=>'Permite Bajar archivos']);
        Permission::create(['name' => 'file_delete','description'=>'Permite Eliminar archivos']);

        //crea un rol
        $role_root = Role::create(['name' => 'root','description'=>'Rol Root Administrador']);
        $role_root->givePermissionTo(['user_create','user_read','user_update','user_delete','file_create','file_delete']);

        $user = User::create([
            "name" => "Programador",
            "email" => "roberto30589@gmail.com",
            'password' => bcrypt('password')
        ]);
        $user->assignRole('root');

        //crea un rol
        $role_client = Role::create(['name' => 'cliente','description'=>'solo ver sus archivos']);
        $role_client->givePermissionTo(['file_read']);


        $users = array(
            array(
                "id" => 2,
                "name" => "Programador 2",
                "email" => "osvaldo.alvarado.dev@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$10$Rm4EdNaKDJ25Mo3GzqcnQ.bjCRVNCU20qZI4.hf9RlWMCGhyHuWI6',
                "remember_token" => null,
                "created_at" => "2021-04-23 19:12:54",
                "updated_at" => "2021-04-23 19:12:54",
                "enabled" => 1
            ),
            array(
                "id" => 3,
                "name" => "Luis Aliste",
                "email" => "luis.aliste@brazoderecho.com",
                "email_verified_at" => null,
                "password" => '$2y$10$N4hYy\/5BPqi9zWV5wn3Q0uJq3VkEFKZeS8v.AQQoJXn.xT.Z9fpHS',
                "remember_token" => null,
                "created_at" => "2021-04-23 19:12:54",
                "updated_at" => "2022-11-09 18:50:30",
                "enabled" => 1
            ),
            array(
                "id" => 4,
                "name" => "Francisco Chadwick",
                "email" => "fchadwick@condortrust.com",
                "email_verified_at" => null,
                "password" => '$2y$10$17uAxmj5dce3zBSjdVBKOuP4Urm6zKPeXv8E66A2qttkyipciROZu',
                "remember_token" => null,
                "created_at" => "2021-04-25 22:46:54",
                "updated_at" => "2021-04-25 22:48:13",
                "enabled" => 1
            ),
            array(
                "id" => 5,
                "name" => "Jhon Carrillo",
                "email" => "operaciones@biodefensa.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$BDDqMBwIGQ5Va4UH7Sm5W.kPWwxf9RnJNqVdS1JWi9uhn.anNXsn2',
                "remember_token" => "rl6SYGqZNX07TzcRWeRJAqFbYLtr7tRQNuv5PE1hg5QmtP6njpbg10Y8XdJf",
                "created_at" => "2021-04-28 11:25:06",
                "updated_at" => "2021-04-28 11:25:06",
                "enabled" => 1
            ),
            array(
                "id" => 7,
                "name" => "Carolina Rojas",
                "email" => "crojas@dpschile.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$VQUzNydLmIavrqW0oXleFu9QSrCBvZBozTBw5Gd61C39Fg4D6AllC',
                "remember_token" => null,
                "created_at" => "2021-05-10 19:13:43",
                "updated_at" => "2021-05-10 19:13:43",
                "enabled" => 1
            ),
            array(
                "id" => 8,
                "name" => "Fabian Ramírez",
                "email" => "Fabian.ramirez@linkservice.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$rqdPvBCgILuF3v9MVP7.0.HPwdXrVEUkLpxJGJpbSGd0xd2VvyLuG',
                "remember_token" => "kdXSrGT7fSA78r7HpGZEx8xjzdeyQaIeaXcFXTrx74JcsNCjcwRniMr1nkdN",
                "created_at" => "2021-05-14 13:34:30",
                "updated_at" => "2021-05-14 13:36:36",
                "enabled" => 1
            ),
            array(
                "id" => 9,
                "name" => "PABLO SANCHEZ",
                "email" => "PABLOSANCHEZ@Biodefensa.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$j6T.7MWWLQp3lz7OktIiauyVNcRbpA6DDVA5cgcXPbKjO5zjKNMjK',
                "remember_token" => "VNYdcOWq4ZzyXgazcKO0YU4psz5StaSaZkUeIHFGWDivvTtZqeZfTqngSjHG",
                "created_at" => "2021-05-20 09:09:38",
                "updated_at" => "2021-05-20 10:42:25",
                "enabled" => 1
            ),
            array(
                "id" => 10,
                "name" => "José Luis Rodríguez",
                "email" => "transportista@valuetech.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$0bB270FS.UZ7.fAuHe91NOk66E98.w9VLhVkPN6fpPxYl7vkXgz7C',
                "remember_token" => "6VqxQprLjlSqixt0XacA0Lk3IpaAWMmT04YjwJfkquaLXBene6ERT4kKuZNK",
                "created_at" => "2021-05-27 11:31:30",
                "updated_at" => "2021-05-27 11:59:10",
                "enabled" => 1
            ),
            array(
                "id" => 11,
                "name" => "Andrés Haensel",
                "email" => "andres@biodefensa.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$Ryy2V7totSO80iV3zXVmsud2mW\/JtXfCJEA83uM8VL3L\/xd73G3F2',
                "remember_token" => "aZN1Xv0cVK1QBu8VZYcPkgkBF4WqYze2KtJ9F3uglF37fQSGPKNXKdbH0xXG",
                "created_at" => "2021-06-02 11:40:01",
                "updated_at" => "2021-06-02 11:40:01",
                "enabled" => 1
            ),
            array(
                "id" => 12,
                "name" => "Victor Vera",
                "email" => "vvera@bsf.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$QOaL.XK9DIQB5NzeFyHihusxSCAaS9rbyRXyz45aVHnzb92vbzvKi',
                "remember_token" => null,
                "created_at" => "2021-06-02 11:44:20",
                "updated_at" => "2021-06-02 11:44:20",
                "enabled" => 1
            ),
            array(
                "id" => 13,
                "name" => "Equipo Tramontina - Adalys",
                "email" => "prevencion.tchile@tramontina.com",
                "email_verified_at" => null,
                "password" => '$2y$10$1eP02NFVuuljS4X92g.JJeOJjckTYxK.fQZKXdAkDmWbDk8JIaAV.',
                "remember_token" => null,
                "created_at" => "2021-07-02 11:30:14",
                "updated_at" => "2021-07-02 11:30:14",
                "enabled" => 1
            ),
            array(
                "id" => 14,
                "name" => "Adalys Quintero",
                "email" => "adalys.quintero@tramontina.com",
                "email_verified_at" => null,
                "password" => '$2y$10$m2.LZO3vqF4gJDdITBfeGePBocwRIZenQidrOuhyavtXo6fzU4jau',
                "remember_token" => null,
                "created_at" => "2021-07-02 11:32:26",
                "updated_at" => "2021-07-02 11:32:26",
                "enabled" => 1
            ),
            array(
                "id" => 15,
                "name" => "Yurly Varela",
                "email" => "yurly.varela@arenasycayo.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$I1lv2Z.JTublD9QdKyATvOeEHfidAhew2nVmtIJ9ZriTuaBNYMW3K',
                "remember_token" => null,
                "created_at" => "2021-07-04 21:04:41",
                "updated_at" => "2021-07-04 21:05:36",
                "enabled" => 1
            ),
            array(
                "id" => 16,
                "name" => "Carmen Gutierrez",
                "email" => "Carmen.Gutierrez@cgcompass.com",
                "email_verified_at" => null,
                "password" => '$2y$10$0YRqRZFS7Um3usQe2Dd0J.iLtTGF7H4gGuC09ykcSVNhqaDm4E1Ea',
                "remember_token" => null,
                "created_at" => "2021-07-04 23:05:03",
                "updated_at" => "2021-07-04 23:05:03",
                "enabled" => 1
            ),
            array(
                "id" => 18,
                "name" => "Austerlitz capriles",
                "email" => "acapriles@hecaglobal.com",
                "email_verified_at" => null,
                "password" => '$2y$10$UtEVch2.jHcixAMKOHOHSOeWYo0uoeA2h.5m\/DzBt8Jke2G0CTugu',
                "remember_token" => "FGvqM1DJ884GaVI6VVqEtDPYsIA1JwchqUEwuv9ZcWaEM1Mn1mokvOZakC3k",
                "created_at" => "2021-07-12 11:26:40",
                "updated_at" => "2021-07-12 11:26:40",
                "enabled" => 1
            ),
            array(
                "id" => 19,
                "name" => "Edificio Manantiales",
                "email" => "edificiomanantiales@cbre.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$WKzzoYNmaiCOdru.TlLg9eGTi6.wRN0U01MKTrn7HxL6vh3DrQAny',
                "remember_token" => null,
                "created_at" => "2021-07-19 17:28:15",
                "updated_at" => "2021-07-19 17:28:15",
                "enabled" => 1
            ),
            array(
                "id" => 20,
                "name" => "Francisco Chiessa",
                "email" => "fchiessa@ivymca.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$e6NDtG7XdtrlTK7kPGGiMecYyoKDim5RXbch0Iv6ftelNmos7OTkG',
                "remember_token" => null,
                "created_at" => "2021-08-02 12:48:52",
                "updated_at" => "2021-08-02 12:48:52",
                "enabled" => 1
            ),
            array(
                "id" => 21,
                "name" => "Apoquindo 3600",
                "email" => "apoquindo3600@cbre.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$WiWnNcvuuRCJhWPYaUi1duObpb8TlfnsRkL9\/M803tp5adaKbrqhC',
                "remember_token" => null,
                "created_at" => "2021-08-10 11:36:30",
                "updated_at" => "2021-08-10 11:36:30",
                "enabled" => 1
            ),
            array(
                "id" => 22,
                "name" => "Colegios JAN",
                "email" => "gespinoza@jan.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$mt7FIbIstKRI6ZkccY8UJ.ZmJ95VMRs8F6fPX4fndNF6pnZ7Vd6iW',
                "remember_token" => null,
                "created_at" => "2021-08-10 12:15:13",
                "updated_at" => "2021-08-10 12:15:13",
                "enabled" => 1
            ),
            array(
                "id" => 23,
                "name" => "Ricardo Rojo",
                "email" => "ricardo.rojo@sochicar.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$EAaLyhodCbCqMjBo\/qyt\/eytAIVYu92lGjDq59AvzqbT4AiRsu9XO',
                "remember_token" => null,
                "created_at" => "2021-08-16 10:08:13",
                "updated_at" => "2021-08-16 10:08:13",
                "enabled" => 1
            ),
            array(
                "id" => 24,
                "name" => "Faros Asesores",
                "email" => "magdalena.larrain@farosasesores.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$kEaEBgSBGO0V1M5kmUojJOutgPknOOPXS5VKQgVJa7cn2JdRDarWa',
                "remember_token" => null,
                "created_at" => "2021-08-23 09:49:06",
                "updated_at" => "2021-08-23 09:49:06",
                "enabled" => 1
            ),
            array(
                "id" => 25,
                "name" => "Marcela Cerda",
                "email" => "Marcela.cerda@provectis.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$SgyM71VWnmW2jfVUh6nV8O670rvf5OjHDrYeC5dxDMxBXI3SyN6B6',
                "remember_token" => null,
                "created_at" => "2021-10-01 12:55:45",
                "updated_at" => "2021-10-01 12:55:45",
                "enabled" => 1
            ),
            array(
                "id" => 26,
                "name" => "Daniel Cabezas",
                "email" => "daniel.cabeza@wsp.com",
                "email_verified_at" => null,
                "password" => '$2y$10$IP\/WCZMPp35wKyECqjGyuuj0Fk5GyVb3BDwZ\/hmMnzrcPu1WEXYAm',
                "remember_token" => null,
                "created_at" => "2021-12-20 14:08:27",
                "updated_at" => "2021-12-20 14:08:27",
                "enabled" => 1
            ),
            array(
                "id" => 27,
                "name" => "Mariela Trejo",
                "email" => "mariela.trejo@wsp.com",
                "email_verified_at" => null,
                "password" => '$2y$10$uAvQTqmM4NRuyHh.y3C8Eud88AZiqqFVGJDqt6UP9mrCedqDtS.gu',
                "remember_token" => null,
                "created_at" => "2021-12-20 14:10:51",
                "updated_at" => "2021-12-20 14:10:51",
                "enabled" => 1
            ),
            array(
                "id" => 28,
                "name" => "Gustavo Santana",
                "email" => "laalistee@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$10$mm\/Y1NOTYXr5TqVl.4T9XOswp3KKzawVe7VBsXg6XyCU7IzFMgsxi',
                "remember_token" => null,
                "created_at" => "2021-12-23 15:36:04",
                "updated_at" => "2021-12-23 15:36:04",
                "enabled" => 1
            ),
            array(
                "id" => 29,
                "name" => "Patricio Briceño",
                "email" => "patricio.briceno@stein.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$mVER1OGr9mChu7x1sKu3VukesvO5deeVNqNfZDabbK77VzDjHtJja',
                "remember_token" => null,
                "created_at" => "2022-06-16 12:09:18",
                "updated_at" => "2022-06-16 12:09:18",
                "enabled" => 1
            ),
            array(
                "id" => 31,
                "name" => "Rosa Salinas",
                "email" => "rosita.salinas97@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$10$S1S\/L0guThvb3Frzy15P6ubm1RPRdUOmewXE10Bc0Ilq\/srbiyuRa',
                "remember_token" => null,
                "created_at" => "2022-09-13 19:37:08",
                "updated_at" => "2022-09-13 19:37:08",
                "enabled" => 1
            ),
            array(
                "id" => 32,
                "name" => "Ivan Julio",
                "email" => "ivanjulio@tecnove.com",
                "email_verified_at" => null,
                "password" => '$2y$10$6cZPv.iNl3pRQMuKic0n0.aRhInqwkSQEJVhhCbikg.vmjKAcmVb6',
                "remember_token" => "FtXNJ5whKpymoQRQdXzPvAJn4HNo2Q5Wz2rK5737JmORsmKdJiEB2dvoMsFC",
                "created_at" => "2022-10-12 18:43:56",
                "updated_at" => "2022-10-12 18:43:56",
                "enabled" => 1
            ),
            array(
                "id" => 33,
                "name" => "Edgardo Navarro",
                "email" => "Edgardonavarro@tecnove.com",
                "email_verified_at" => null,
                "password" => '$2y$10$VvieJlJsbqWANg6SW51\/XOA9Jp4txJx.U4H.r8IW3RbhduVWE3fTW',
                "remember_token" => null,
                "created_at" => "2022-10-19 10:35:48",
                "updated_at" => "2022-10-19 10:35:48",
                "enabled" => 1
            ),
            array(
                "id" => 34,
                "name" => "Gabriel Steck",
                "email" => "gsteck@metro.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$C0cVbRDlxlPkXtStjRH5qOrIn4bpGKI0OPWrtOZgnT4.nIkAVoaOO',
                "remember_token" => "cjtCmMX3fnxuBRAYVP9iSN8q3dxdcWBsuqU6MTMZRa8ZKwKF26cy4L7Y6J0z",
                "created_at" => "2022-10-28 12:23:43",
                "updated_at" => "2022-10-28 12:23:43",
                "enabled" => 1
            ),
            array(
                "id" => 37,
                "name" => "Adriana Rojas",
                "email" => "josephlinerojas2@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$10$qjUuQqh7WIqWCdkuvaoqvu9MdxPC\/ATBH7f5\/HZpThCbN.oCsdMUC',
                "remember_token" => null,
                "created_at" => "2022-11-10 09:42:29",
                "updated_at" => "2022-11-10 09:42:29",
                "enabled" => 1
            ),
            array(
                "id" => 38,
                "name" => "Patricio Riquelme",
                "email" => "patricio.riquelme@cl.issworld.com",
                "email_verified_at" => null,
                "password" => '$2y$10$iQFPHGXpITyZqD.C8UB7eu.7VfwsMD4XZS3ucnPqBKEyKaarszs\/y',
                "remember_token" => null,
                "created_at" => "2022-11-10 17:40:23",
                "updated_at" => "2022-11-17 09:25:23",
                "enabled" => 1
            ),
            array(
                "id" => 39,
                "name" => "Carolina Saavedra",
                "email" => "carolina.saavedra@cl.issworld.com",
                "email_verified_at" => null,
                "password" => '$2y$10$gFLkPKcxDuRBa0\/k6HyMyuTYG1E\/tF\/iOl2PO2qDNYyCFYp3FGrxq',
                "remember_token" => null,
                "created_at" => "2022-11-10 23:56:09",
                "updated_at" => "2022-11-17 09:48:07",
                "enabled" => 1
            ),
            array(
                "id" => 40,
                "name" => "Antonio Canrera",
                "email" => "antoniocabrera@tecnove.com",
                "email_verified_at" => null,
                "password" => '$2y$10$qnyK3XSsuw9K1T82BJ5iueln6sb01Bl6V18jWfEM.teLZJ\/agtFV.',
                "remember_token" => null,
                "created_at" => "2022-11-15 16:02:51",
                "updated_at" => "2022-11-15 16:02:51",
                "enabled" => 1
            ),
            array(
                "id" => 41,
                "name" => "Clientes SS - Operacion Metro de Santiago",
                "email" => "cliente.iss@metro.cl",
                "email_verified_at" => null,
                "password" => '$2y$10$LjGBV.3y3kQKhOt2K74qs.\/zNS.I\/O0HIXY.rV8ql53z2xa4zMz1y',
                "remember_token" => null,
                "created_at" => "2022-11-17 13:56:39",
                "updated_at" => "2022-11-17 13:56:39",
                "enabled" => 1
            )
        );

        foreach ($users as $key => $u) {
            User::create($u);
        }
    }
}
