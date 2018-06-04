@extends('layouts.napp')

@section('content')
<main>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                    Cuestionario de orientación vocacional
                    </div>
                    <div class="card-body align-middle container">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel">¿Con quién vives?</label>
                                <input name="Vivienda" id="Vivienda" class="form-control" type="text" required>
                                <label class="formLabel">¿Cuantos hermanos tienes?</label>
                                <input name="NumHermanos" id="NumHermanos" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">¿Quién paga tus estudios?</label>
                                <input name="PagoEstudios" id="PagoEstudios" class="form-control" type="text" required>
                                <label class="formLabel">¿Tus padres estan?</label>
                                <select name="EstadoCivil" id="EstadoCivil" class="form-control" required>
                                    <option>Casados</option>
                                    <option>Separados</option>
                                    <option>Divorciados</option>
                                    <option>Viudo(a)</option>
                                    <option>Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="formLabel">Nombre</label>
                                <input name="NombreHermano" id="NombreHermano" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-2">
                                <label class="formLabel">Sexo</label>
                                <select name="sexHermano" id="sexHermano" class="form-control" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="formLabel">Edad</label>
                                <input name="EdadHermano" id="EdadHermano" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-5">
                                <label class="formLabel text-center">Institución donde estudia o trabaja</label>
                                <input name="InstHermano" id="InstHermano" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="align-middle py-3">
                            <button class="text-center">Agregar Hermano</button>
                        </div>
                        <div class="text-center">
                            Escuelas donde estudiastes
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel">Primaria</label>
                                <input name="NombrePrimaria" id="NombrePrimaria" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel">Ciudad</label>
                                <input name="CiudadPrimaria" id="CiudadPrimaria" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel text-center">Promedio General</label>
                                <input name="PromPrimaria" id="PromPrimaria" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="row d-none" id="Primaria2">
                            <div class="col-md-6">
                                <label class="formLabel">Primaria</label>
                                <input name="NombrePrimaria2" id="NombrePrimaria2" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel">Ciudad</label>
                                <input name="CiudadPrimaria2" id="CiudadPrimaria2" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel text-center">Promedio General</label>
                                <input name="PromPrimaria2" id="PromPrimaria2" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="align-middle py-3">
                            <button class="text-center">Registrar más de una primaria</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel">Secundaria</label>
                                <input name="NombreSecundaria" id="NombreSecundaria" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel">Ciudad</label>
                                <input name="CiudadSecundaria" id="CiudadSecundaria" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel text-center">Promedio General</label>
                                <input name="PromSecundaria" id="PromSecundaria" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="row d-none" id="Secundaria2">
                            <div class="col-md-6">
                                <label class="formLabel">Secundaria</label>
                                <input name="NombreSecundaria2" id="NombreSecundaria2" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel">Ciudad</label>
                                <input name="CiudadSecundaria2" id="CiudadSecundaria2" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel text-center">Promedio General</label>
                                <input name="PromSecundaria2" id="PromSecundaria2" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="align-middle py-3">
                            <button onclick="mostrarSecu2()" class="text-center">Registrar más de una secundaria</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel">Preparatoria/Bachillerato</label>
                                <input name="NombrePreparatoria" id="NombrePreparatoria" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel">Ciudad</label>
                                <input name="CiudadPreparatoria" id="CiudadPreparatoria" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel text-center">Promedio General</label>
                                <input name="PromPreparatoria" id="PromPreparatoria" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="row d-none" id="Preparatoria2">
                            <div class="col-md-6">
                                <label class="formLabel">Preparatoria/Bachillerato</label>
                                <input name="NombrePreparatoria2" id="NombrePreparatoria2" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel">Ciudad</label>
                                <input name="CiudadPreparatoria2" id="CiudadPreparatoria2" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <label class="formLabel text-center">Promedio General</label>
                                <input name="PromPreparatoria2" id="PromPreparatoria2" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="align-middle py-3">
                            <button class="text-center">Registrar más de una preparatoria</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel">¿En qué area cursas/cursastes tu último año de bachillerato?</label>
                                <input name="AreaBachi" id="AreaBachi" class="form-control" type="text" required>
                                <label class="formLabel">¿En qué materia has obtenido las calificaciones más altas?</label>
                                <input name="MejorMateria" id="MejorMateria" class="form-control" type="text" required>
                                <label class="formLabel">¿Qué materias te gustan más?</label>
                                <input name="MateriasFavoritas" id="MateriasFavoritas" class="form-control" type="text" required>
                                <label class="formLabel">¿En qué materia has obtenido las calificaciones más altas?</label>
                                <input name="MejorMateria" id="MejorMateria" class="form-control" type="text" required>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">¿Has estudiado en el extranjero?</label>
                                <input name="PeorMateria" id="PeorMateria" class="form-control" type="text" required>
                                <label class="formLabel">¿En qué materia has obtenido las calificaciones más bajas?</label>
                                <input name="PeorMateria" id="PeorMateria" class="form-control" type="text" required>
                                <label class="formLabel">¿Qué materias te gustan menos?</label>
                                <input name="MateriasDificultan" id="MateriasDificultan" class="form-control" type="text" required>
                                <label class="formLabel">¿En qué materia has obtenido las calificaciones más altas?</label>
                                <input name="MejorMateria" id="MejorMateria" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection