<?php
// index.php - Formulario responsivo en PHP
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorecard de sostenibilidad by CODI Costa Rica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e0f7fa; /* Fondo claro azul verdoso */
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
        }
        .text-white-50 {
            color :  #24717e !important;
            text-align: left !important;
        }
        .col-form-label {
            color: #24717e !important;   /* azul oscuro */           
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* Fondo blanco para la tarjeta */
        }
        .card-header {
            background-color: #d8eaf1; /* azul claro */
            color: #24717e;
            text-align: center;
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }
        .form-check-input:checked {
            background-color: #24717e;
            border-color: #d8eaf1; 
        }
        .btn-primary {
            background-color: #3cbed4;
            border: none;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #24717e; /* Verde oscuro */
        }
        h5 {
            color: #1b5e20; /* Verde oscuro para títulos */
        }
        .form-label {
            color: #1b5e20; /* Verde oscuro para etiquetas */
        }
        .row {
            margin-bottom: 10px; /* Espaciado entre filas */
        }
        .col-8, .col-3, .col-1 {
            color: #1b5e20; /* Verde oscuro para texto */
        }
        .total-puntos {
            color: #2e7d32; /* Verde oscuro para Puntoss */
            font-weight: bold;
        }
        .section {
            margin-bottom: 30px; /* Más espacio entre secciones */
            padding-bottom: 20px; /* Espacio interno en la parte inferior */
            border-bottom: 2px solid #c8e6c9; /* Borde inferior verde claro */
        }
        .bkgreen {
            background-color: #94cc97; /* Verde medio */
            color: white;
        }
        .big {
            font-size: 20px;
            background-color: #7ca37e;
            color: white;
        }
        .section:last-child {
            border-bottom: none; /* Eliminar borde de la última sección */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Scorecard de Sostenibilidad para proyectos inmobiliarios</h4>
                        <img src="https://codicr.com/img/logos/codi.png">
                        <ul class="text-white-50 text-left"><br>
                         <li>Selecciona el tipo de proyecto: Elige entre residencial o comercial para acceder al checklist correspondiente.
                         </li><li>Responda cada criterio: Marque el puntaje si tiene la estrategia sostenible ya  implementada o en caso de que este evaluando el inicio de la implementación, aquellas que considere viables para su proyecto y con ellos crear una línea base.
                         </li><li> Obtenga su puntaje: El sistema calculará automáticamente el nivel de estrategias y los créditos obtenidos.
                         </li><li>Revise oportunidades de mejora: Identifica áreas donde puedes optimizar el desempeño sostenible de tu proyecto consultando la guía de sostenibilidad.
                         </li><li>Guarde y comparta su evaluación: Descarga su reporte o compártelo con su equipo para tomar decisiones informadas.
                        </li><li>Evalúa, mejora y construye con impacto positivo.</li></ul>
                    </div>
                    <div class="card-body">
                        <form action="procesar.php" method="post">
                            <div class="row mb-3 align-items-center">
                                <label class="col-md-4 col-form-label">Empresa</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="empresa" required>
                                </div>
                            </div>
                            
                            <div class="row mb-3 align-items-center">
                                <label class="col-md-4 col-form-label">Correo</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="correo" required>
                                </div>
                            </div>
                    
                            <div class="row mb-3 align-items-center">
                                <label class="col-md-4 col-form-label">Nombre del Proyecto</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="nombreProyecto" required>
                                </div>
                            </div>
                    
                            <div class="row mb-3 align-items-center">
                                <label class="col-md-4 col-form-label">Tipo de Evaluación</label>
                                <div class="col-md-8">
                                    <select class="form-select" name="tipo" required>
                                        <option value="" disabled selected>Seleccione</option>
                                        <option value="Residencial">Residencial</option>
                                        <option value="Comercial">Comercial</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="row mb-3 align-items-center">
                                <label class="col-md-4 col-form-label">Provincia</label>
                                <div class="col-md-8">
                                    <select class="form-select" name="provincia" id="provincia" required>
                                        <option value="" disabled selected>Seleccione una provincia</option>
                                        <option value="San José">San José</option>
                                        <option value="Alajuela">Alajuela</option>
                                        <option value="Cartago">Cartago</option>
                                        <option value="Heredia">Heredia</option>
                                        <option value="Guanacaste">Guanacaste</option>
                                        <option value="Puntarenas">Puntarenas</option>
                                        <option value="Limón">Limón</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="row mb-3 align-items-center">
                                <label class="col-md-4 col-form-label">Cantón</label>
                                <div class="col-md-8">
                                    <select class="form-select" name="canton" id="canton" required>
                                        <option value="" disabled selected>Seleccione un cantón</option>
                                    </select>
                                </div>
                            </div>
                            
                            <script>
                                const cantonesPorProvincia = {
                                    "San José": ["San José", "Escazú", "Desamparados", "Puriscal", "Tarrazú", "Aserrí", "Mora", "Goicoechea", "Santa Ana"],
                                    "Alajuela": ["Alajuela", "San Ramón", "Grecia", "San Mateo", "Atenas", "Naranjo", "Palmares", "Poás"],
                                    "Cartago": ["Cartago", "Paraíso", "La Unión", "Jiménez", "Turrialba", "Alvarado", "Oreamuno"],
                                    "Heredia": ["Heredia", "Barva", "Santo Domingo", "Santa Bárbara", "San Rafael", "San Isidro", "Belén"],
                                    "Guanacaste": ["Liberia", "Nicoya", "Santa Cruz", "Bagaces", "Carrillo", "Cañas", "Tilarán"],
                                    "Puntarenas": ["Puntarenas", "Esparza", "Buenos Aires", "Montes de Oro", "Osa", "Golfito"],
                                    "Limón": ["Limón", "Pococí", "Siquirres", "Talamanca", "Matina", "Guácimo"]
                                };
                            
                                document.getElementById("provincia").addEventListener("change", function () {
                                    let provincia = this.value;
                                    let cantonSelect = document.getElementById("canton");
                                    
                                    cantonSelect.innerHTML = '<option value="" disabled selected>Seleccione un cantón</option>'; 
                                    
                                    if (provincia && cantonesPorProvincia[provincia]) {
                                        cantonesPorProvincia[provincia].forEach(canton => {
                                            let option = new Option(canton, canton);
                                            cantonSelect.add(option);
                                        });
                                    }
                                });
                            </script>

                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    let selectTipo = document.querySelector('select[name="tipo"]');
                                    let contenido = document.querySelectorAll('.section'); // Secciones a ocultar
                                   // let ocultarResidencial = [];
                                    let ocultarResidencial = ['DivEne_3']; // IDs a ocultar 
                            
                                    // Mantener el select siempre visible
                                    let selectContainer = selectTipo.closest('.col-md-8');
                            
                                    // Oculta todas las secciones al inicio (excepto el select)
                                    contenido.forEach(section => {
                                        section.style.display = 'none';
                                    });
                            
                                    if (selectContainer) {
                                        selectContainer.style.display = 'block';
                                    }
                                    
                                    selectTipo.addEventListener('change', function () {
                                        let isResidencial = this.value === 'Comercial';
                            
                                        // Muestra todas las secciones al elegir un tipo de evaluación
                                        contenido.forEach(section => {
                                            section.style.display = 'block';
                                        });
                            
                                        // Ocultar/deshabilitar checkboxes específicos para Residencial
                                    ocultarResidencial.forEach(id => {
                                                    let checkbox = document.getElementById(id);
                                                    if (checkbox) {
                                                        if (isResidencial) {
                                                            checkbox.checked = false; // 🔹 Desmarcar el checkbox
                                                            checkbox.dispatchEvent(new Event('change')); // 🔹 Disparar su evento 'change'
                                                        }
                                                        checkbox.disabled = isResidencial;
                                                        //checkbox.closest('.row').style.display = isResidencial ? 'none' : 'flex';
                                                        checkbox.style.display = isResidencial ? 'none' : 'block';
                                                    }
                                                });
                                    });
                                });
                            </script>
<!----- GOBERNANZA ----->                             
                            <div class="mb-3 section">
                                <h5 style="background-color: rgb(34,121,118); color: white; padding: 10px 15px;">Gobernanza</h5>
                                <div class="mb-2" style="padding-left: 20px;">
                                    <strong>G01 Comité de sostenibilidad</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input gobernanza" name="gobernanza[]" value="0" id="gob_1" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                    <label for="gob_2a"><strong>G02 Código de ética interno y hacia proveedores</strong></label><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">G02a Subestrategia: Contiene 3 puntos.</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input gobernanza" name="gobernanza[]" value="1" id="gob_2a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-1"></div>
                                        <div class="col-6">G02b Subestrategia: Contiene 4 puntos o más.</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input gobernanza" name="gobernanza[]" value="1" id="gob_2b"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                    <strong>G03 Elección de sitio</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input gobernanza" name="gobernanza[]" value="0" id="gob_3" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                    <strong>G04 Medidas en la operación</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input gobernanza" name="gobernanza[]" value="1" id="gob_4"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>
                                <div class="mb-3" style="background-color : rgb(34,121,118); color : white">
                                    <center><p><b>Puntos gobernanza</b><br><span id="totalPuntosGob">0</span></p></center>
                                </div>
                            </div>
                            <input type="hidden" name="gobMax" id="gobMax" value="3">
                            <script>
                                document.querySelectorAll('.gobernanza').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                        let totalGob = 0;
                                        document.querySelectorAll('.gobernanza:checked').forEach(cb => {
                                            totalGob += parseInt(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                        document.getElementById('totalPuntosGob').textContent = totalGob;
                                    });
                                });
                            </script>                           
<!----- AGUA ----->                             
                            <div class="mb-3 section">
                                <h5 style="background-color: rgb(49,148,209); color: white; padding: 10px 15px;">Agua</h5>
                                <div class="mb-2" style="padding-left: 20px;">
                                    <strong>A01 Reducción del uso de agua en interiores</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input agua" name="agua[]" value="3" id="agu_1" ></div>
                                        <div class="col-4 text-center">Puntos 3</div>
                                    </div>
                                </div>                                
                                <div class="mb-2" style="padding-left: 20px;">
                                    <strong>A02 Reducción del uso de agua en exteriores</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input agua" name="agua[]" value="1" id="agu_2" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>                                
                                <div class="mb-2" style="padding-left: 20px;">
                                    <strong>A03 Submedición de los sistemas de agua</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input agua" name="agua[]" value="2" id="agu_3" ></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div>
                                </div>                                
                                 <div class="mb-2" style="padding-left: 20px;">
                                    <strong>A04 Sistemas de recuperación/reutilización de agua</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">A04a 30% de ahorro</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input agua" name="agua[]" value="1" id="agu_4a" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">A04b 50% de ahorro</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input agua" name="agua[]" value="1" id="agu_4b" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>                                    
                                </div>                               
                                <div class="mb-3" style="background-color : rgb(49,148,209); color : white">
                                    <center><p><b>Puntos Agua</b><br><span id="totalPuntosAgu">0</span></p></center>
                                </div>
                            </div>
                            <input type="hidden" name="aguaMax" id="aguaMax" value="8">
                            <script>
                                
                                document.querySelectorAll('.agua').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                        let totalAgu = 0;
                                        document.querySelectorAll('.agua:checked').forEach(cb => {
                                            totalAgu += parseInt(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                        document.getElementById('totalPuntosAgu').textContent = totalAgu;
                                    });
                                });
                            </script>                             
 <!----- ENERGIA ----->                            
                            <div class="mb-3 section">
                                <h5 style="background-color: rgb(239,106,6); color: white; padding: 10px 15px;">Energia</h5>
                                  <div class="mb-2" style="padding-left: 20px;">
                                    <strong>E01 Planeamiento operativo</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="0" id="ene_1" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                  </div>
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E02 Medición y submedición de la energía a nivel del edificio</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="0" id="ene_2" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                  </div>
                                  
                                 <div class="mb-2" style="padding-left: 20px;" id="DivEne_3">
                                  <strong>E03 Medición de energía inteligente a nivel de unidad de vivienda</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="2" id="ene_3"></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div>
                                  </div> 
                                  
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E04 Sistemas de control automatizado</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="1" id="ene_4"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                  </div> 
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E05 Densidad de potencia de iluminación</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="1" id="ene_5" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                  </div>  
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E06 Control de iluminación</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="1" id="ene_6" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                  </div>
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E07 Ventanas de alta eficiencia</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="2" id="ene_7" ></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div>
                                  </div> 
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E08 Energías renovables en sitio</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">E08a Calentamiento del agua</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="1" id="ene_8a" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">E08b Sistema fotovoltaico</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="2" id="ene_8b" ></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div>
                                  </div> 
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E09  Eficiencia de los sistemas de aire acondicionado</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">E09a SEER</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="1" id="ene_9a" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">E09b Equipos energ. Eficientes</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="1" id="ene_9b" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                  </div> 
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E10 Relación ventana-pared</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="0" id="ene_10" checked disabled></div>
                                        <div class="col-4 text-center">Recomendado</div>
                                    </div>
                                  </div>
                                  <div class="mb-2" style="padding-left: 20px;">
                                  <strong>E11 Aprovechamiento del entorno</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input energia" name="energia[]" value="0" id="ene_11" checked disabled></div>
                                        <div class="col-4 text-center">Recomendado</div>
                                    </div>
                                  </div>                                 
                                <div class="mb-3" style="background-color : rgb(239,106,6); color : white">
                                    <center><p><b>Puntos Energía</b><br><span id="totalPuntosEne">0</span></p></center>
                                </div>
                            </div>
                            <input type="hidden" name="energiaMax" id="energiaMax" value="12">
                            <script>
                                
                                document.querySelectorAll('.energia').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                        let totalEne = 0;
                                        document.querySelectorAll('.energia:checked').forEach(cb => {
                                            totalEne += parseInt(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                        document.getElementById('totalPuntosEne').textContent = totalEne;
                                    });
                                });
                            </script>                          
 <!----- MATERIALES ----->                             
                            <div class="mb-3 section">
                                <h5 style="background-color: rgb(249,177,34); color: white; padding: 10px 15px;">Materiales</h5>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>M01 Espacios destinados al reciclaje y compostaje</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">M01a Separación de reciclaje</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="0" id="mat_1a" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">M01b Compostaje</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="0" id="mat_1b" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">M01c Desechos electrónicos</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="0" id="mat_1c" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                </div>                           
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>M02 Plan de los residuos de construcción y demolición</strong><br>
                                    <div class="row">
                                        <div class="col-1 "></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="0" id="mat_2" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div> 
                                </div>                           
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>M03 Declaración ambiental de producto (EPD)</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6 text-center"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="2" id="mat_3" ></div>
                                        <div class="col-4 text-center" >Puntos 2</div>
                                    </div> 
                                </div>                                  
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>M04 Divulgación de los ingredientes de materiales</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="2" id="mat_4" ></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div> 
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>M05 Materiales de baja emisividad</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="2" id="mat_5" ></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div> 
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>M06 Reducción del efecto "Isla de calor"</strong><br>
                                    <div class="row">
                                         <div class="col-1"></div>
                                         <div class="col-6">M06a Cubiertas y áreas pavimentadas</div>
                                         <div class="col-1 text-center "><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="1" id="mat_6a" ></div>
                                         <div class="col-4 text-center">Puntos 1</div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">M06b Parqueo bajo techo</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input materiales" name="materiales[]" value="1" id="mat_6b" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div> 
                                </div>
                                <div class="mb-3" style="background-color : rgb(249,177,34); color : white">
                                    <center><p><b>Puntos Materiales</b><br><span id="totalPuntosMat">0</span></p></center>
                                </div>
                            </div>
                            <input type="hidden" name="materialesMax" id="materialesMax" value="8">
                            <script>
                               
                                document.querySelectorAll('.materiales').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                         let totalMat = 0;
                                        document.querySelectorAll('.materiales:checked').forEach(cb => {
                                             totalMat += parseInt(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                        document.getElementById('totalPuntosMat').textContent = totalMat;
                                    });
                                });
                            </script>    
<!----- MOVILIDAD ----->   
                            <div class="mb-3 section">
                                <h5 style="background-color: rgb(32,112,128); color: white; padding: 10px 15px;">Movilidad Sostenible</h5>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS01 Acceso a transporte público</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">MS01a Bus 72 viajes/ tren 24 viajes</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_1a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">MS01b Bus 144 viajes/ tren 40 viajes</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_1b" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>                                  
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS02 Diversidad de usos</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">4-7 usos</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_2a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">> 7 usos</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_2b" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS03 Información de alternativas a vehículos de movilidad personal</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Transporte público</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="0" id="mov_3" checked disabled></div>
                                        <div class="col-4 text-center">Requerido</div>
                                    </div>
                                </div>
                               <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS04 Infraestructura ciclista</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Espacios comunes</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_4a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Cargadores</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_4b" ></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>	
                               <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS05 Reducción de la huella de estacionamiento</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_5"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>
                               <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS06 Vehículos eléctricos</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Parqueos preferenciales</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_6a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Parqueos privados</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="2" id="mov_6b" ></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div>
                                </div>	
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS07 Espacio de teletrabajo</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="1" id="mov_7"></div>
                                        <div class="col-4 text-center">Puntos 2</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>MS08 Tránsito peatonal "caminabilidad"</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input movilidad" name="movilidad[]" value="0" id="mov_8" checked disabled></div>
                                        <div class="col-4 text-center">Recomendado</div>
                                    </div>
                                </div>	
                                <div class="mb-3" style="background-color : rgb(32,112,128); color : white">
                                    <center><p><b>Puntos Movilidad Sostenible</b><br><span id="totalPuntosMov">0</span></p></center>
                                </div>
                            </div>
                            <input type="hidden" name="movilidadMax" id="movilidadMax" value="10">
                            <script>
                                
                                document.querySelectorAll('.movilidad').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                        let totalMov = 0;
                                        document.querySelectorAll('.movilidad:checked').forEach(cb => {
                                            totalMov += parseInt(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                        document.getElementById('totalPuntosMov').textContent = totalMov;
                                    });
                                });
                            </script>  
<!----- BIODIVERSIDAD ----->   
                            <div class="mb-3 section">
                                <h5 style="background-color: rgb(113,174,47); color: white; padding: 10px 15px;">Biodiversidad y regeneración</h5>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>BR01 Luminarias exteriores</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input biodiversidad" name="biodiversidad[]" value="1" id="bio_1"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>	
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>BR02 Educación y sensibilización de la naturaleza</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Rotulación</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input biodiversidad" name="biodiversidad[]" value="0.5" id="bio_2a"></div>
                                        <div class="col-4 text-center">Puntos 0,5</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Jardines y hoteles</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input biodiversidad" name="biodiversidad[]" value="0.5" id="bio_2b"></div>
                                        <div class="col-4 text-center">Puntos 0,5</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>BR03 Jardines verticales</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input biodiversidad" name="biodiversidad[]" value="1" id="bio_3"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>	
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>BR04 Reducción del impacto y reforestación</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Preservación de la naturaleza</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input biodiversidad" name="biodiversidad[]" value="1" id="bio_4a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Reforestación</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input biodiversidad" name="biodiversidad[]" value="1" id="bio_4b"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>BR05 Línea base de ecosistemas y biodiversidad</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6"></div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input biodiversidad" name="biodiversidad[]" value="1" id="bio_5"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>	
                                <div class="mb-3" style="background-color : rgb(113,174,47); color : white">
                                    <center><p><b>Puntos Biodiversidad y regeneración</b><br><span id="totalPuntosBio">0</span></p></center>
                                </div>
                            </div>
                            <input type="hidden" name="biodiversidadMax" id="biodiversidadMax" value="6">
                            <script>
                                
                                document.querySelectorAll('.biodiversidad').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                        let totalBio = 0;
                                        document.querySelectorAll('.biodiversidad:checked').forEach(cb => {
                                            totalBio += parseFloat(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                        document.getElementById('totalPuntosBio').textContent = totalBio;
                                    });
                                });
                            </script>  
 <!----- IMPACTO----->   
                            <div class="mb-3 section"> 
                                <h5 style="background-color: rgb(205,79,23); color: white; padding: 10px 15px;">Impacto social</h5>

                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>IS01 Integración social del inmueble con la comunidad desde el diseño</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Integración con la comunidad</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_1a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Conexión con la naturaleza</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_1b"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Producción local de alimentos</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_1c"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Integración social interna</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_1d"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Baños neutros</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_1e"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div> 
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>IS02 Integración social del inmueble con la comunidad desde la desarrolladora</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Diagnóstico comunitario</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_2a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Oportunidades emprendedores</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_2b"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Actividades de acercamiento</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_2c"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>IS03 Salud y seguridad ocupacional</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Reglamentación para 8 puntos</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_3a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">8 puntos o más</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_3b"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>
                                <div class="mb-2" style="padding-left: 20px;">
                                  <strong>IS04 Operación del inmueble</strong><br>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-6">Manual operativo</div>
                                        <div class="col-1 text-center"><input type="checkbox" class="form-check-input impacto" name="impacto[]" value="1" id="imp_4a"></div>
                                        <div class="col-4 text-center">Puntos 1</div>
                                    </div>
                                </div>	
                                <div class="mb-3" style="background-color : rgb(205,79,23); color : white">
                                    <center><p><b>Puntos Impacto social</b><br><span id="totalPuntosImp">0</span></p></center>
                                </div>
                            </div>
                            <input type="hidden" name="impactoMax" id="impactoMax" value="11">
                            <script>
                               
                                document.querySelectorAll('.impacto').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                        let totalImp = 0;
                                        document.querySelectorAll('.impacto:checked').forEach(cb => {
                                            totalImp += parseInt(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                        document.getElementById('totalPuntosImp').textContent = totalImp;
                                    });
                                });
                            </script>                           
                            
                            
                            <div class="mb-3 bkgreen big section" style="backgorund-color: #d8eaf1 important!; padding-top: 20px">
                                <center><p><b>Puntos Total</b><br><span id="totalPuntosGeneral">0</span></p></center>
                            </div>
                            <script>
                                document.querySelectorAll('.form-check-input').forEach(checkbox => {
                                    checkbox.addEventListener('change', () => {
                                        let totalGeneral=0;
                                        document.querySelectorAll('.form-check-input:checked').forEach(cb => {
                                            totalGeneral+= parseInt(cb.value) || 0; // Asegura que el valor sea un número
                                        });
                                       document.getElementById('totalPuntosGeneral').textContent = totalGeneral;
                                    });
                                });
                            </script>
                            



                            <script>
                                function imprimirPagina() {
                                    window.print();
                                }
                            </script>

                            <button onclick="imprimirPagina()" class="btn btn-primary w-100 section">Imprimir <br>scorecard de Sostenibilidad para su proyecto inmobiliario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>