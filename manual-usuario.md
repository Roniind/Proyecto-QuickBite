# 👨‍💻 Manual de Usuario – QuickBite

Este archivo explica cómo navegar y utilizar el prototipo de QuickBite para simular un pedido de comida.

---

## 🧭 Acceso al sistema

1. Abrir el archivo `index.html` ubicado en `/src/prototipo/` con un navegador.
2. El usuario ve un listado de restaurantes y menús simulados.
3. Puede seleccionar productos, añadir al carrito y hacer "pedido".

---

## 🛍️ Simulación de Pedido

- Al hacer clic en "Pedir", el formulario envía la solicitud al backend (PHP).
- El backend registra el pedido y muestra una confirmación (simulada).
- Se actualiza el estado del pedido (ej. "En preparación", "Entregado").

---

## 🔐 Seguridad Simulada

- Accesos diferenciados para usuarios y administradores (simulados).
- Configuración segura simulada en `config/config.php`.
- Firewalls y control de acceso descritos en `SEGURIDAD.md`.

---

## 🛠 Revisión de Pedidos (Administrador)

1. Acceder al archivo `/src/backend/admin.php` (si está implementado).
2. Ver lista de pedidos realizados (desde base de datos o estructura mock).
3. Cambiar el estado del pedido manualmente (simulación).

---

## 📌 Recomendaciones

- Este prototipo no usa conexión en tiempo real.
- Para probar el flujo completo, simula distintos tipos de usuarios.
- Verifica que los archivos PHP estén ejecutándose en un entorno local (XAMPP o similar si deseas probar más allá del frontend).

