📦 Flujo Operativo – QuickBite
En este archivo se describe cómo funciona el sistema QuickBite desde la perspectiva operativa, conectando al cliente, backend, base de datos, repartidor y el administrador.

🛠 Componentes Principales
Frontend (Prototipo): HTML/CSS simula la experiencia del cliente.
Backend (PHP): Gestiona solicitudes, pedidos, registro y lógica de negocio.
Base de Datos (MySQL): Guarda pedidos, usuarios, restaurantes, repartidores.
Slack (SaaS): Canal de comunicación entre equipos (operaciones, soporte, administración).

🔁 Flujo General de Pedido
Cliente ingresa al sistema y selecciona un restaurante y productos.
El frontend envía el pedido al backend vía formularios PHP.
El backend registra el pedido en la base de datos (schema.sql).
El sistema simula asignación a un repartidor.
El administrador puede consultar pedidos y estado.
El pedido llega al cliente y se actualiza el estado en la BD.

🔐 Seguridad en el Flujo
El archivo config.php define entorno seguro y activa firewall.
Accesos controlados para cada rol.
Datos sensibles están protegidos en la BD (según definido en SEGURIDAD.md).
