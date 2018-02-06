<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultades')->insert([
            ['nombreFacultad' => 'Facultad de Ciencias'],
            ['nombreFacultad' => 'Facultad de Ciencias Administrativas'],
            ['nombreFacultad' => 'Facultad de Ing. Civil y Ambiental'],
            ['nombreFacultad' => 'Facultad de Ing. Electrica y Electronica'],
            ['nombreFacultad' => 'Facultad de Geologia y Petroleos'],
            ['nombreFacultad' => 'Facultad de Ing. Mecanica'],
            ['nombreFacultad' => 'Facultad de Ing. Quimica y Agroindustria'],
            ['nombreFacultad' => 'Facultad de Ing. de Sistemas'],
            ['nombreFacultad' => 'Escuela de Formacion de Tecnologos'],
            ['nombreFacultad' => 'Otros']
        ]);

        DB::table('carreras')->insert([
            ['nombreCarrera' => 'Física', 'idFacultad' => 1],
            ['nombreCarrera' => 'Matemáticas', 'idFacultad' => 1],
            ['nombreCarrera' => 'Ingeniería Matemática', 'idFacultad' => 1],
            ['nombreCarrera' => 'Ingeniería en Ciencias Económicas y Financieras', 'idFacultad' => 1],
            ['nombreCarrera' => 'Maestría en Física', 'idFacultad' => 1],
            ['nombreCarrera' => 'Ingeniería Empresarial', 'idFacultad' => 2],
            ['nombreCarrera' => 'Ingeniería de la Producción', 'idFacultad' => 2],
            ['nombreCarrera' => 'Maestría en Sistemas de Gestión Integrados', 'idFacultad' => 2],
            ['nombreCarrera' => 'Maestría en Gestión de Talento Humano', 'idFacultad' => 2],
            ['nombreCarrera' => 'Ingeniería Civil', 'idFacultad' => 3],
            ['nombreCarrera' => 'Ingeniería Ambiental', 'idFacultad' => 3],
            ['nombreCarrera' => 'Ingeniería Eléctrica', 'idFacultad' => 4],
            ['nombreCarrera' => 'Ingeniería en Electrónica y Control', 'idFacultad' => 4],
            ['nombreCarrera' => 'Ingeniería en Electrónica y Redes de Información', 'idFacultad' => 4],
            ['nombreCarrera' => 'Ingeniería en Electrónica y Telecomunicaciones', 'idFacultad' => 4],
            ['nombreCarrera' => 'Maestría en Ciencias de Ingeniería Eléctrica', 'idFacultad' => 4],
            ['nombreCarrera' => 'Maestría en Conectividad y Redes de Telecomunicaciones', 'idFacultad' => 4],
            ['nombreCarrera' => 'Maestría en Automatización y Control Electrónico Industrial', 'idFacultad' => 4],
            ['nombreCarrera' => 'Maestría en Administración de Negocios Eléctricos', 'idFacultad' => 4],
            ['nombreCarrera' => 'Maestría en Ingeniería Eléctrica en Distribución', 'idFacultad' => 4],
            ['nombreCarrera' => 'Maestría en Redes Eléctricas Inteligentes', 'idFacultad' => 4],
            ['nombreCarrera' => 'Ingeniería en Geología', 'idFacultad' => 5],
            ['nombreCarrera' => 'Ingeniería en Petróleos', 'idFacultad' => 5],
            ['nombreCarrera' => 'Ingenieria Mecanica', 'idFacultad' => 6],
            ['nombreCarrera' => 'Maestria en Mecatronica y Robotica', 'idFacultad' => 6],
            ['nombreCarrera' => 'Maestria en Sistemas Automotrices', 'idFacultad' => 6],
            ['nombreCarrera' => 'Maestria en Diseño y Simulacion', 'idFacultad' => 6],
            ['nombreCarrera' => 'Programa Doctoral en Ciencias de la Mecanica', 'idFacultad' => 6],
            ['nombreCarrera' => 'Ingeniería Agroindustrial', 'idFacultad' => 7],
            ['nombreCarrera' => 'Ingeniería Química', 'idFacultad' => 7],
            ['nombreCarrera' => 'Ingeniería en Software', 'idFacultad' => 8],
            ['nombreCarrera' => 'Ingeniería en Computación', 'idFacultad' => 8],
            ['nombreCarrera' => 'Ingeniería en Sistemas Informaticos y de Computacion', 'idFacultad' => 8],
            ['nombreCarrera' => 'Maestría y Especialista en Gestión de las Comunicaciones y Tecnología de la Información', 'idFacultad' => 8],
            ['nombreCarrera' => 'Maestría en Ciencias de la Computación', 'idFacultad' => 8],
            ['nombreCarrera' => 'Maestría en Sistemas de Información', 'idFacultad' => 8],
            ['nombreCarrera' => 'Doctorado en Informática', 'idFacultad' => 8],
            ['nombreCarrera' => 'Tecnología en Electrónica y Telecomunicaciones', 'idFacultad' => 9],
            ['nombreCarrera' => 'Tecnología en Análisis de Sistemas Informáticos', 'idFacultad' => 9],
            ['nombreCarrera' => 'Tecnología en Electromecánica', 'idFacultad' => 9],
            ['nombreCarrera' => 'Tecnología en Agua y Saneamiento Ambiental', 'idFacultad' => 9]
        ]);

        DB::table('departamentos')->insert([
            ['nombreDepartamento' => 'Departamento de Física (DF)', 'idFacultad' => 1],
            ['nombreDepartamento' => 'Departamento de Matemática (DM)', 'idFacultad' => 1],
            ['nombreDepartamento' => 'Departamento de Ciencias Administrativas (DEPCA)', 'idFacultad' => 2],
            ['nombreDepartamento' => 'Departamento de Estudios Organizacionales Desarrollo Humano (DESODEH)', 'idFacultad' => 2],
            ['nombreDepartamento' => 'Departamento de Ingeniería Civil y Ambiental (DICA)', 'idFacultad' => 3],
            ['nombreDepartamento' => 'Departamento de Automatización y Control Industrial (DACI)', 'idFacultad' => 4],
            ['nombreDepartamento' => 'Departamento de Energía Eléctrica (DEE)', 'idFacultad' => 4],
            ['nombreDepartamento' => 'Departamento de Electrónica, Telecomunicaciones y Redes de Información (DETRI)', 'idFacultad' => 4],
            ['nombreDepartamento' => 'Departamento de Geología (DG)', 'idFacultad' => 5],
            ['nombreDepartamento' => 'Departamento de Petróleos (DP)', 'idFacultad' => 5],
            ['nombreDepartamento' => 'Departamento de Ingenieria Mecanica (DIM)', 'idFacultad' => 6],
            ['nombreDepartamento' => 'Departamento de Materiales (DMT)', 'idFacultad' => 6],
            ['nombreDepartamento' => 'Departamento de Ingeniería Química (DIQ)', 'idFacultad' => 7],
            ['nombreDepartamento' => 'Departamento de Ciencias de Alimentos y Biotecnología (DECAB)', 'idFacultad' => 7],
            ['nombreDepartamento' => 'Departamento de Ciencias Nucleares (DCN)', 'idFacultad' => 7],
            ['nombreDepartamento' => 'Departamento de Metalurgia Extractiva (DEMEX)', 'idFacultad' => 7],
            ['nombreDepartamento' => 'Departamento de Informática y Ciencias de la Computación (DICC)', 'idFacultad' => 8],
            ['nombreDepartamento' => 'Departamento de Formacion Basica (DFB)', 'idFacultad' => 10],
            ['nombreDepartamento' => 'Instituto Geofisico', 'idFacultad' => 10],
            ['nombreDepartamento' => 'Departamento de Ciencias Sociales', 'idFacultad' => 10]
        ]);
    }
}
