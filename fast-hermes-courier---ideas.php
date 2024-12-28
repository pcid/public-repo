<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulos del Sistema - Cargo Expreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <div style="width:100%; height:300px; background-repeat:no-repeat; background-position:center; background-image: url(images/FHC-Logo-2--512x276.png);"></div>
    <h1 class="text-center mb-4">Fast Hermes Courier</h1>
    <h2 class="text-center mb-4">Definición General de Módulos del Sistema</h2>
    <div class="accordion" id="systemModules">

        <!-- Usuarios -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingUsers">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
                    Módulo de Usuarios y Seguridad
                </button>
            </h2>
            <div id="collapseUsers" class="accordion-collapse collapse show" aria-labelledby="headingUsers" data-bs-parent="#systemModules">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <strong>Gestión de roles y permisos</strong>: El sistema permitirá una gestión detallada de los roles y permisos de cada usuario, asegurando un control preciso sobre las acciones que pueden realizar. Esto incluirá:
                            <ol>
                                <li>Definición clara de roles para diferentes tipos de usuarios (administradores, operativos, empleados de ventas, etc.), con permisos específicos asignados a cada uno. Cada usuario podrá tener acceso solo a las funciones necesarias para su rol, minimizando el riesgo de acceso no autorizado.</li>
                                <li>Control granular sobre las acciones permitidas para cada rol, como la edición de datos sensibles, la generación de informes o la gestión de clientes, garantizando que solo los usuarios autorizados puedan realizar cambios críticos en el sistema.</li>
                                <li>Posibilidad de asignar permisos temporales, como acceso limitado a funciones durante un período determinado, lo que puede ser útil para situaciones especiales o proyectos temporales.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Control de accesos y auditorías</strong>: Este módulo será fundamental para realizar auditorías exhaustivas sobre las acciones de los usuarios en el sistema, asegurando la trazabilidad y el cumplimiento de políticas de seguridad, lo que incluirá:
                            <ol>
                                <li>Registro de todas las acciones realizadas por los usuarios, incluyendo accesos, modificaciones de datos y cualquier tipo de operación crítica. Estos registros se almacenarán de manera segura y podrán ser consultados en cualquier momento para auditar la actividad del sistema.</li>
                                <li>Dashboard de auditoría para administradores, que mostrará un resumen de todas las acciones realizadas, permitiendo filtrarlas por usuario, fecha, tipo de acción, y otras variables. Esto facilita la identificación de actividades sospechosas o no autorizadas.</li>
                                <li>Alertas automáticas cuando se detecten acciones que violen las políticas de seguridad, como accesos no autorizados a datos sensibles o intentos de modificar información crítica sin los permisos adecuados.</li>
                                <li>La auditoría de accesos y acciones está diseñada para que cualquier revisión pueda hacerse sin dificultad, permitiendo una trazabilidad completa de las operaciones realizadas en el sistema.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Autenticación y gestión de contraseñas seguras</strong>: La seguridad de la autenticación y las contraseñas es una de las bases más importantes para proteger la integridad del sistema y los datos de los usuarios, lo que incluirá:
                            <ol>
                                <li>Autenticación de múltiples factores (2FA) para los usuarios que requieren acceso a áreas sensibles del sistema, lo que agrega una capa extra de seguridad mediante el uso de contraseñas combinadas con códigos enviados a dispositivos móviles u otros métodos de autenticación.</li>
                                <li>Política de contraseñas seguras que obligue a los usuarios a crear contraseñas robustas, utilizando una combinación de letras, números y caracteres especiales. Además, el sistema forzará la actualización periódica de contraseñas para mitigar riesgos de seguridad.</li>
                                <li>Almacenamiento seguro de contraseñas mediante técnicas de cifrado avanzadas, garantizando que las contraseñas nunca sean almacenadas en texto claro y que la información sensible esté protegida.</li>
                                <li>Herramientas de recuperación de contraseña seguras, que permiten a los usuarios restablecer su acceso sin comprometer la seguridad del sistema.</li>
                            </ol>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <!-- Clientes -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingClients">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseClients" aria-expanded="false" aria-controls="collapseClients">
                    Módulo de Clientes
                </button>
            </h2>
            <div id="collapseClients" class="accordion-collapse collapse" aria-labelledby="headingClients" data-bs-parent="#systemModules">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <strong>Registro y actualización de datos de clientes</strong>: El sistema permitirá gestionar los datos de los clientes de forma segura y eficiente, lo que incluirá:
                            <ol>
                                <li>Formulario de registro en línea que permita a los clientes ingresar sus datos personales o de la empresa, como nombre, dirección, número de contacto, correo electrónico, y otros datos relevantes.</li>
                                <li>Los clientes podrán actualizar sus datos en cualquier momento a través de su cuenta en la web o la app móvil, asegurando que la información siempre esté al día.</li>
                                <li>Verificación y validación de los datos ingresados para evitar errores en la dirección de entrega y otros datos sensibles, como mediante la validación de la dirección con un sistema de geolocalización o confirmación telefónica.</li>
                                <li>Acceso seguro a la información, con medidas de protección para garantizar la privacidad de los datos personales de los clientes, cumpliendo con las regulaciones locales de protección de datos.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Gestión de contratos y convenios con empresas</strong>: El sistema permitirá gestionar contratos y acuerdos específicos con clientes empresariales, lo que incluirá:
                            <ol>
                                <li>Registro y almacenamiento digital de contratos y convenios con empresas que establecen términos especiales para servicios de logística (por ejemplo, tarifas preferenciales, plazos de entrega personalizados, etc.).</li>
                                <li>Seguimiento de las condiciones acordadas, asegurando que las tarifas, descuentos y plazos de entrega se apliquen correctamente a cada envío según lo estipulado en el contrato.</li>
                                <li>Facilidad para actualizar o renovar los contratos, con alertas automáticas para informar cuando se acerque la fecha de vencimiento o renovación de los acuerdos.</li>
                                <li>Generación de informes periódicos sobre el cumplimiento de los contratos, que permitan evaluar el desempeño de los acuerdos con las empresas y realizar ajustes si es necesario.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Seguimiento de historial de órdenes de servicio</strong>: El sistema llevará un historial completo de todas las órdenes de servicio realizadas por cada cliente, con funcionalidades que incluirán:
                            <ol>
                                <li>Acceso a un historial detallado de todas las órdenes realizadas por un cliente, que incluirá información sobre los paquetes enviados, el estado de las entregas, tiempos de tránsito y cualquier incidente o problema que se haya presentado.</li>
                                <li>La posibilidad de filtrar y buscar en el historial de órdenes por fecha, tipo de servicio (urgente, estándar), o estado del envío, lo que facilita el acceso a la información relevante para el cliente.</li>
                                <li>Notificación de estados de las órdenes pasadas, como entregas retrasadas o canceladas, con información sobre los motivos y las soluciones proporcionadas.</li>
                                <li>El cliente podrá acceder a los detalles de facturación de cada orden de servicio, incluyendo un resumen de los costos, impuestos y pagos realizados, para tener un control completo sobre sus gastos logísticos.</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Órdenes de Servicio -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOrders">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrders" aria-expanded="false" aria-controls="collapseOrders">
                    Módulo de Órdenes de Servicio
                </button>
            </h2>
            <div id="collapseOrders" class="accordion-collapse collapse" aria-labelledby="headingOrders" data-bs-parent="#systemModules">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <strong>Gestión de paquetes: contenido, peso y dimensiones</strong>: El sistema permitirá la gestión completa de los paquetes, desde el momento de la recepción hasta la entrega, con detalles como:
                            <ol>
                                <li>Registro detallado del contenido de cada paquete, incluyendo la descripción, peso y dimensiones. Esto ayudará a asegurar que los paquetes sean correctamente clasificados y gestionados durante todo el proceso de envío.</li>
                                <li>Verificación automática de las dimensiones y peso del paquete durante el proceso de recepción, para garantizar que se ajuste a las políticas de transporte y facturación de Cargo Expreso.</li>
                                <li>La información sobre el contenido se almacenará de manera segura, con acceso restringido a personal autorizado, para garantizar la privacidad y seguridad de los paquetes.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Registro de tiempos de recepción y entrega</strong>: El sistema permitirá registrar los tiempos clave de cada paquete, facilitando un seguimiento detallado, lo que incluirá:
                            <ol>
                                <li>Registro automático de la hora de recepción del paquete en el almacén o centro de distribución, proporcionando datos precisos sobre cuándo cada paquete entra en el sistema.</li>
                                <li>El sistema también registrará la hora de entrega, permitiendo calcular el tiempo total de tránsito y asegurar el cumplimiento de los tiempos de entrega comprometidos con los clientes.</li>
                                <li>Dashboard de seguimiento que permite a los administradores visualizar los tiempos de recepción, tránsito y entrega de los paquetes en tiempo real, identificando posibles retrasos o ineficiencias.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Priorización de órdenes urgentes ("colados") en base a colas FIFO con recargos</strong>: Para manejar las órdenes urgentes, el sistema permitirá una gestión eficiente utilizando el sistema de colas FIFO (First In, First Out), con recargos adicionales para envíos prioritarios, lo que incluirá:
                            <ol>
                                <li>Las órdenes urgentes serán identificadas y priorizadas automáticamente en el sistema de colas FIFO, lo que asegura que las órdenes más antiguas se procesen primero, pero permitiendo que las órdenes urgentes sean adelantadas en la cola.</li>
                                <li>Las órdenes urgentes podrán incluir un recargo adicional que dependerá de la urgencia y las condiciones del envío (por ejemplo, un recargo por entrega en 24 horas).</li>
                                <li>El sistema calculará el recargo y lo mostrará claramente al cliente antes de la confirmación de la orden, asegurando transparencia en el costo total de los envíos prioritarios.</li>
                                <li>Los repartidores o el personal encargado de la distribución podrán ver las órdenes urgentes destacadas en sus listas de tareas, con indicaciones claras de los plazos de entrega y las prioridades para asegurar un manejo adecuado.</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Gestiones y Logística -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingLogistics">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLogistics" aria-expanded="false" aria-controls="collapseLogistics">
                    Módulo de Gestiones y Logística
                </button>
            </h2>
            <div id="collapseLogistics" class="accordion-collapse collapse" aria-labelledby="headingLogistics" data-bs-parent="#systemModules">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <strong>Optimización de rutas de reparto mediante algoritmos de logística</strong>: El sistema utilizará algoritmos avanzados para optimizar las rutas de reparto, lo que incluirá:
                            <ol>
                                <li>Un algoritmo que calcule la ruta más eficiente para cada repartidor, teniendo en cuenta variables como el tráfico en tiempo real, las condiciones climáticas y las distancias entre entregas.</li>
                                <li>Optimización de las rutas basadas en el número de paquetes por entrega y el tiempo estimado de llegada, para minimizar costos de combustible y maximizar la eficiencia del tiempo de entrega.</li>
                                <li>El sistema ajustará automáticamente las rutas si se presentan imprevistos, como cambios en el tráfico o en las condiciones de la carretera, para garantizar que los repartos se realicen en el menor tiempo posible.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Gestión y monitoreo de flota de transporte (GPS, capacidad, etc.)</strong>: El sistema incluirá herramientas para gestionar y monitorear la flota de transporte de Cargo Expreso en tiempo real. Esto incluirá:
                            <ol>
                                <li>Monitoreo en tiempo real de la ubicación de cada vehículo mediante integración con sistemas GPS, lo que permitirá conocer la ruta exacta de cada repartidor y su posición actual.</li>
                                <li>Control sobre la capacidad de carga de cada vehículo, asegurando que los repartidores no lleven más paquetes de los que el vehículo puede manejar, lo que reduce el riesgo de daños o demoras.</li>
                                <li>Alertas automáticas en caso de que un vehículo se desvíe de su ruta prevista, esté parado durante demasiado tiempo o no cumpla con los tiempos de entrega establecidos.</li>
                                <li>Posibilidad de consultar el historial de rutas y el rendimiento de cada vehículo para análisis posteriores, optimizando el uso de la flota a largo plazo.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Planificación y asignación de tareas a repartidores</strong>: El sistema gestionará la planificación y asignación de tareas a los repartidores de manera eficiente, lo que incluirá:
                            <ol>
                                <li>Asignación automática de paquetes a los repartidores según su ubicación, disponibilidad y capacidad de carga, para evitar sobrecargas de trabajo o rutas ineficientes.</li>
                                <li>El sistema priorizará las entregas según la urgencia de cada paquete (por ejemplo, envíos urgentes o con fecha de entrega específica) y la proximidad de los repartidores a los destinos.</li>
                                <li>Los repartidores podrán ver su lista de tareas en tiempo real, con detalles sobre la dirección, el paquete a entregar, y cualquier instrucción especial para cada envío.</li>
                                <li>Herramientas para reajustar la asignación de tareas en tiempo real si algún repartidor no puede completar su ruta por cualquier motivo, reubicando las entregas entre otros repartidores disponibles.</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Inventario y Almacenes -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingInventory">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInventory" aria-expanded="false" aria-controls="collapseInventory">
                    Módulo de Inventario y Almacenes
                </button>
            </h2>
            <div id="collapseInventory" class="accordion-collapse collapse" aria-labelledby="headingInventory" data-bs-parent="#systemModules">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <strong>Gestión de bodegas y sucursales</strong>: El sistema permitirá la administración centralizada de todas las bodegas y sucursales de Cargo Expreso. Esto incluirá:
                            <ol>
                                <li>Visualización en tiempo real del inventario disponible en cada bodega y sucursal, con detalles de ubicación y cantidad de paquetes.</li>
                                <li>Posibilidad de asignar paquetes a diferentes bodegas en función de su destino, tamaño o prioridad.</li>
                                <li>Herramientas para gestionar el flujo de paquetes entre bodegas, optimizando el espacio y la logística de distribución.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Control de paquetes en tránsito y en espera de envío</strong>: El sistema proporcionará visibilidad en tiempo real sobre los paquetes en tránsito o en espera de ser enviados, lo que incluirá:
                            <ol>
                                <li>Seguimiento detallado del estado de cada paquete, incluyendo su ubicación actual y las etapas del proceso (recepción, en tránsito, en espera, en entrega).</li>
                                <li>Notificaciones automáticas para informar a los responsables del almacén sobre los paquetes que están listos para ser enviados o que requieren acción urgente.</li>
                                <li>Dashboard para los administradores y personal de almacén con un resumen de todos los paquetes en tránsito y pendientes de envío.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Gestión de devoluciones y paquetes no entregados</strong>: El sistema gestionará las devoluciones y paquetes no entregados de manera eficiente, con funcionalidades que incluirán:
                            <ol>
                                <li>Un sistema de seguimiento para identificar paquetes que no se han entregado debido a problemas como direcciones incorrectas o falta de recepción por parte del destinatario.</li>
                                <li>Opciones para que los clientes soliciten devoluciones o reenvíos, con la posibilidad de realizar ajustes en la dirección de entrega o cambiar el método de envío.</li>
                                <li>Gestión automática de inventario para los paquetes devueltos, con notificaciones sobre los pasos a seguir para procesar una devolución o reenvío.</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Facturación y Tarifas -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingBilling">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBilling" aria-expanded="false" aria-controls="collapseBilling">
                    Módulo de Tarifas y Facturación
                </button>
            </h2>
            <div id="collapseBilling" class="accordion-collapse collapse" aria-labelledby="headingBilling" data-bs-parent="#systemModules">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <strong>Cálculo automático de tarifas basadas en peso, dimensiones y destino</strong>: En el sitio web de Cargo Expreso y en la aplicación móvil, los clientes podrán obtener un cálculo automático del costo del envío, lo que incluirá:
                            <ol>
                                <li>Una herramienta de cotización que permita ingresar el peso, dimensiones y destino del paquete.</li>
                                <li>El sistema calculará automáticamente las tarifas basadas en estos factores, mostrando el costo final de envío en tiempo real.</li>
                                <li>Opciones para aplicar descuentos o tarifas promocionales según acuerdos específicos con clientes o programas de fidelidad.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Gestión de recargos por prioridad de entrega</strong>: Los clientes tendrán la opción de elegir una prioridad de entrega, lo que afectará el costo final del envío. Esto incluirá:
                            <ol>
                                <li>Recargos adicionales para envíos urgentes o con entrega garantizada en un plazo reducido (por ejemplo, entrega en 24 horas).</li>
                                <li>Una interfaz que permita a los clientes seleccionar el nivel de prioridad y ver cómo el recargo afecta el costo total del envío.</li>
                                <li>Notificación del recargo aplicable antes de completar la transacción para asegurar que el cliente esté informado.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Emisión de facturas electrónicas e integración con pasarelas de pago</strong>: El sistema permitirá la emisión automática de facturas electrónicas y su integración con pasarelas de pago, lo que incluirá:
                            <ol>
                                <li>Generación de facturas electrónicas en formato PDF o XML, de acuerdo con las normativas fiscales locales.</li>
                                <li>La opción para los clientes de descargar o recibir las facturas por correo electrónico tras el pago.</li>
                                <li>Integración con plataformas de pago en línea (como tarjetas de crédito, PayPal, transferencias bancarias), para realizar pagos de forma segura y rápida.</li>
                                <li>Notificación de éxito o error en la transacción, con detalles claros sobre el estado del pago y el envío.</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Rastreo y Monitoreo -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTracking">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTracking" aria-expanded="false" aria-controls="collapseTracking">
                    Módulo de Rastreo y Monitoreo de Envíos
                </button>
            </h2>
            <div id="collapseTracking" class="accordion-collapse collapse" aria-labelledby="headingTracking" data-bs-parent="#systemModules">
                <div class="accordion-body">
                    <ul>
                        <li>Sistema de seguimiento en tiempo real (tracking) para clientes, con acceso desde plataformas web y móviles.
                            <ol><li>
                                    <strong>Web</strong>: Una interfaz en el sitio web de Cargo Expreso donde los clientes puedan ingresar un número de seguimiento para ver la información actualizada del envío. Esto podría incluir detalles como:
                                    <ul>
                                        <li>La ubicación actual del paquete.</li>
                                        <li>Las etapas completadas del envío (recibido, en tránsito, en distribución, entregado).</li>
                                        <li>Tiempo estimado de entrega.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Móviles</strong>: Una aplicación móvil o una versión optimizada para dispositivos móviles del sitio web que permita realizar las mismas funciones. La app podría también:
                                    <ul><li>Enviar notificaciones push con actualizaciones en tiempo real.</li>
                                        <li>Ofrecer opciones adicionales, como contactar al repartidor o modificar instrucciones de entrega.</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>

                        <li>Registro de movimientos y ubicaciones en cada etapa del envío, incluyendo centros de distribución y estados intermedios.
                            <ol>
                                <li>
                                    <strong>Web</strong>: Una sección dentro del sistema de rastreo donde los clientes puedan consultar un historial detallado del envío, incluyendo:
                                    <ul>
                                        <li>Registro de fechas y horas en las que el paquete pasó por cada centro de distribución.</li>
                                        <li>Estado actual del envío (en tránsito, en espera, en reparto, etc.).</li>
                                        <li>Información sobre posibles retrasos o bloqueos en la entrega.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Móviles</strong>: Funcionalidades similares en la app móvil o la versión optimizada, que incluyan:
                                    <ul>
                                        <li>Visualización de las ubicaciones pasadas y actuales del paquete en un mapa interactivo.</li>
                                        <li>Notificaciones automáticas cuando el paquete cambie de estado o pase por un nuevo centro de distribución.</li>
                                        <li>Opciones para reportar problemas o realizar consultas directamente desde la app.</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>

                        <li>Alertas automáticas sobre retrasos o problemas, enviadas vía correo electrónico, SMS o notificaciones push.
                            <ul>
                                <li><strong>Clientes:</strong> Los clientes recibirán alertas automáticas en tiempo real en caso de:
                                    <ul>
                                        <li>Retrasos en la entrega debido a tráfico, clima u otros imprevistos.</li>
                                        <li>Problemas específicos con su paquete, como direcciones incorrectas o intentos fallidos de entrega.</li>
                                        <li>Cambios importantes en el estado del envío (por ejemplo, \"en espera por el cliente\").</li>
                                    </ul>
                                </li>
                                <li><strong>Administración:</strong> El equipo de logística también recibirá notificaciones internas para:
                                    <ul>
                                        <li>Monitorear eventos críticos que requieran atención inmediata, como paquetes perdidos o dañados.</li>
                                        <li>Evaluar y resolver retrasos recurrentes en ciertas rutas o centros de distribución.</li>
                                        <li>Gestionar problemas escalados reportados por los clientes.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li>Integración con sistemas de geolocalización para visualización en mapas interactivos del recorrido del paquete.
                            <ol>
                                <li>
                                    <strong>Web</strong>: Una funcionalidad dentro del sistema de rastreo que permita a los clientes:
                                    <ul>
                                        <li>Visualizar en un mapa interactivo la ruta completa del paquete, desde su origen hasta el destino.</li>
                                        <li>Consultar puntos clave en el recorrido, como centros de distribución y paradas intermedias.</li>
                                        <li>Recibir actualizaciones en tiempo real sobre la ubicación actual del paquete.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Móviles</strong>: Una funcionalidad similar optimizada para dispositivos móviles, que incluya:
                                    <ul>
                                        <li>Mapa interactivo con opción de zoom y enfoque en la ubicación actual del paquete.</li>
                                        <li>Notificaciones push cuando el paquete esté cerca del destino final.</li>
                                        <li>Opciones para cambiar instrucciones de entrega directamente desde el mapa (si es permitido).</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Administración</strong>: Herramientas para el equipo logístico que permitan:
                                    <ul>
                                        <li>Monitorear en tiempo real la ubicación de múltiples paquetes en una misma interfaz.</li>
                                        <li>Optimizar rutas mediante algoritmos de geolocalización y tráfico.</li>
                                        <li>Identificar retrasos en rutas específicas para tomar medidas correctivas inmediatas.</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>


                        <li>Historial completo del envío accesible para clientes y administradores, incluyendo fechas, horas y firmas de entrega.
                            <ol>
                                <li>
                                    <strong>Web</strong>: Una sección dentro del sistema que permita a los clientes:
                                    <ul>
                                        <li>Consultar un registro detallado de todas las etapas del envío, incluyendo fechas y horas exactas.</li>
                                        <li>Descargar un comprobante con la información del historial completo del envío.</li>
                                        <li>Visualizar la firma electrónica del destinatario al momento de la entrega, si aplica.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Móviles</strong>: Funcionalidades equivalentes en la app móvil o versión optimizada:
                                    <ul>
                                        <li>Historial detallado con la posibilidad de compartir el comprobante de entrega.</li>
                                        <li>Acceso rápido a las firmas y fotos de confirmación, en caso de entregas con evidencia visual.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Administración</strong>: Herramientas avanzadas para el equipo interno:
                                    <ul>
                                        <li>Acceso a un historial completo de todos los envíos realizados por cliente, con opciones de búsqueda avanzada.</li>
                                        <li>Posibilidad de generar reportes agregados de historial para auditorías o consultas legales.</li>
                                        <li>Visualización de las firmas y otros datos críticos, como reintentos de entrega o bloqueos.</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>


                        <li>Detección proactiva de posibles retrasos mediante análisis de tráfico y condiciones climáticas.
                            <ol><li>
                                    <strong>Web</strong>: En el sitio web de Cargo Expreso, los clientes podrían consultar un panel donde se les muestre si su envío está afectado por condiciones externas como el tráfico o el clima. Esto incluiría:
                                    <ul>
                                        <li>Alertas en tiempo real sobre retrasos o desvíos debido a condiciones de tráfico o clima.</li>
                                        <li>Detalles sobre las condiciones específicas que están causando el retraso (por ejemplo, accidentes, tormentas, cierre de carreteras).</li>
                                        <li>Un mapa interactivo que muestre las rutas afectadas y las alternativas disponibles.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Móviles</strong>: La aplicación móvil o la versión optimizada del sitio para dispositivos móviles podría ofrecer las mismas funcionalidades, además de:
                                    <ul>
                                        <li>Notificaciones push sobre cambios en el estado del envío debido a condiciones externas.</li>
                                        <li>Opción para que los clientes modifiquen sus instrucciones de entrega si el retraso afecta la entrega en el tiempo originalmente previsto.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Backend y Análisis de Datos</strong>: Un sistema de análisis de datos que recoja información en tiempo real sobre el tráfico y las condiciones climáticas, utilizando APIs de tráfico y pronósticos meteorológicos. Este sistema podría:
                                    <ul>
                                        <li>Monitorear rutas de envío para identificar posibles congestiones o condiciones adversas que puedan causar retrasos.</li>
                                        <li>Generar alertas internas que permitan a los operadores de Cargo Expreso tomar decisiones proactivas para evitar o mitigar los retrasos.</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>

                        <li>Generación de códigos QR o enlaces únicos para que los clientes puedan compartir el estado del envío con terceros.
                            <ol><li>
                                    <strong>Web</strong>: En el sitio web de Cargo Expreso, los clientes podrán generar un enlace único o un código QR asociado a su envío. Esto incluiría:
                                    <ul>
                                        <li>Opción para que el cliente copie un enlace único que permita a terceros ver el estado actual del paquete.</li>
                                        <li>Generación de un código QR que, al ser escaneado, dirija a los destinatarios a la página con la información actualizada del envío.</li>
                                        <li>Opciones para compartir directamente el enlace o el código QR mediante plataformas de mensajería, correo electrónico, o redes sociales.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Móviles</strong>: La aplicación móvil o la versión optimizada para dispositivos móviles permitiría las mismas funciones, con la ventaja de:
                                    <ul>
                                        <li>Generación de códigos QR directamente desde la app, que se pueden compartir con otros a través de medios como WhatsApp, SMS o correo electrónico.</li>
                                        <li>Visualización de un código QR en la pantalla de la app, que puede ser escaneado por terceros para consultar el estado del envío en tiempo real.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Seguridad y Privacidad</strong>: Para proteger la privacidad de los usuarios y el envío, el sistema debe asegurar que:
                                    <ul>
                                        <li>El enlace o el código QR solo sea accesible por personas autorizadas o los destinatarios del paquete.</li>
                                        <li>Incluir una opción de autenticación (por ejemplo, un PIN o un acceso limitado) si el cliente desea restringir el acceso a la información.</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
