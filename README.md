# 🚚 Mudanzas Logística

Sistema web integral de gestión de pedidos y reservas para empresas de mudanzas y servicios logísticos.

## 📋 Funcionalidades Principales

### 📱 Solicitud de Servicios
- **Formulario de contacto interactivo** para solicitar presupuestos
- **Validación de datos** en tiempo real (teléfono, email, fechas)
- **Restricción de reservas en domingos** para optimizar la disponibilidad
- **Confirmación automática por email** al cliente después de la solicitud
- Soporte para múltiples tipos de servicios (traslados residenciales, oficinales, retiros, vaciados, etc.)

### 📅 Calendario de Disponibilidad
- **Calendario interactivo** que muestra eventos y estados de pedidos
- **Visualización de pedidos reservados, pagados y completados** con código de colores
- **Gestión inteligente** de fechas disponibles según el estado de los pedidos
- API REST para obtener eventos del calendario

### 👥 Gestión de Clientes
- **Registro completo** de clientes con teléfono, email y datos personales
- **Historial de pedidos** asociados a cada cliente
- **Seguimiento de transacciones** y facturas

### 📦 Gestión de Pedidos
- **Crear y rastrear pedidos** con descripciones detalladas
- **Múltiples estados** (pendiente, reservado, pagado, completado)
- **Información de origen y destino** para cada servicio
- **Vinculación automática** a fechas, clientes y facturas

### 💳 Sistema de Facturación
- **Generación de facturas** asociadas a pedidos
- **Cálculo automático de IVA** (21%)
- **Seguimiento de precios** (bruto vs. final)

## 🏗️ Arquitectura

El proyecto utiliza el patrón **MVC (Model-View-Controller)** con:

- **Models**: Lógica de acceso a datos y operaciones con la base de datos
- **Controllers**: Procesamiento de solicitudes y validaciones
- **Views**: Presentación al usuario mediante formularios e interfaces
- **Router**: Sistema de enrutamiento flexible basado en parámetros URL

## 🗄️ Base de Datos

Estructura relacional con 4 tablas principales:

- **Clientes**: Información de contacto
- **Pedidos**: Datos de servicios solicitados
- **Fechas**: Calendario de disponibilidad
- **Facturas**: Información de pagos

## 🔧 Stack Tecnológico

- **Backend**: PHP 8.2+
- **Base de Datos**: MySQL / MariaDB
- **Mailer**: PHPMailer para notificaciones por email
- **Frontend**: Bootstrap + JavaScript vanilla
- **Servidor Web**: Apache (XAMPP compatible)

## ✨ Características Destacadas

- ✅ Validación robusta de formularios (teléfono español, email, fechas futuras)
- ✅ Notificaciones automáticas por email con PHPMailer
- ✅ Sistema de rutas dinámico y escalable
- ✅ Gestión de sesiones para mantener datos de usuario
- ✅ Interfaz responsiva y amigable
- ✅ Calendario visual integrado con código de colores
- ✅ Restricciones inteligentes (no domingos, fechas pasadas, etc.)
