# Backend de QuickBite

Este directorio contiene archivos simulados para la lógica del servidor y conexión con la base de datos del proyecto **QuickBite**.

## Contenido

- `conexion.php`: Simula una conexión a una base de datos alojada en una nube privada.
- `login.php`: Representa el inicio de sesión de usuarios.
- `api/`: Carpeta que contiene ejemplos de endpoints para consumir datos (como restaurantes o pedidos).

## Infraestructura en la nube

- Este backend estaría desplegado en un **servidor seguro en una nube privada**, con acceso restringido mediante firewalls y VPN.
- Se asume una base de datos privada, cifrada, y autenticación con políticas de seguridad Zero Trust.
- Toda la lógica sensible (validación, pagos, gestión de usuarios) se ejecutaría del lado del servidor, fuera del alcance del cliente.

## Nota

Este backend es una simulación conceptual como parte del enfoque académico en Cloud Computing.