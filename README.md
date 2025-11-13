<<<<<<< HEAD
# Proyecto Rolodex con CodeIgniter 4

Este proyecto es una implementación de una agenda de contactos (Rolodex) utilizando el framework de PHP CodeIgniter 4. La aplicación permite añadir y visualizar contactos a través de una interfaz web simple y está construida siguiendo el patrón Modelo-Vista-Controlador (MVC).

## Descripción Funcional

La aplicación presenta una interfaz web con dos secciones principales:
- Un **formulario** para introducir el nombre, teléfono y email de un nuevo contacto.
- Una **tabla** que muestra todos los contactos que han sido guardados.

## Tecnologías Utilizadas

- **Framework Backend:** PHP con CodeIgniter 4.
- **Base de Datos:** SQLite 3 (configurada a través de una migración).
- **Frontend:** HTML5 y Bootstrap 5 para un diseño responsive.
- **Entorno de Desarrollo:** WSL (Ubuntu) con el servidor de desarrollo integrado de CodeIgniter (`php spark serve`).

## Cómo Ejecutar el Proyecto

1.  Clonar el repositorio.
2.  Navegar a la carpeta del proyecto.
3.  Instalar las dependencias con `composer install`.
4.  Ejecutar las migraciones de la base de datos con `php spark migrate`.
5.  Iniciar el servidor de desarrollo con `php spark serve`.
6.  Abrir el navegador en `http://localhost:8080`.

## Captura de Pantalla del Funcionamiento

A continuación se muestra la aplicación funcionando con datos de prueba:

![Captura de la aplicación Rolodex](public/img/captura-rolodex.png)
=======
[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/keP9ug1F)
# Rolodex to CSV CLI Importer

A CodeIgniter 4 custom command-line tool for importing contact information from physical Rolodex cards into a digital CSV format.

## 📋 Overview

This command-line application allows travel agents (or any user with physical contact cards) to manually enter contact information and save it to a CSV file for digital recordkeeping.

## 🚀 Features

- **Interactive CLI Input**: Prompts for Name, Phone, and Email
- **CSV Storage**: Automatically appends data to `writable/contacts.csv`
- **Header Management**: Creates CSV header automatically on first use
- **Continuous Loop**: Enter multiple contacts in one session
- **Easy Exit**: Type "exit" or "quit" at the Name prompt to finish

## 📁 File Structure

```
rolodex/
├── app/
│   └── Commands/
│       └── ContactImport.php    # Main command file
├── writable/
│   └── contacts.csv             # Generated CSV file (created automatically)
└── spark                         # CodeIgniter 4 CLI entry point
```

## 🔧 Installation

### If you already have a CodeIgniter 4 project:

1. Copy `app/Commands/ContactImport.php` to your project's `app/Commands/` directory
2. Ensure your `writable/` directory has write permissions (755 or 777)

### If starting from scratch:

1. Install CodeIgniter 4:
   ```bash
   composer create-project codeigniter4/appstarter rolodex
   cd rolodex
   ```

2. Copy the `ContactImport.php` file to `app/Commands/`

3. Ensure proper permissions:
   ```bash
   chmod -R 755 writable/
   ```

## 💻 Usage

Run the command from your project root:

```bash
php spark import:contacts
```

### Example Session

```
===========================================
  Rolodex Contact Importer
===========================================

Enter contact information from your physical Rolodex.
Type "exit" or "quit" at the Name prompt to finish.

CSV file initialized: /path/to/writable/contacts.csv

-------------------------------------------
Full Name: Victor Frankenstein
Phone Number: 555-776-2323
Email Address: doctor@nodedojo.com
✓ Contact saved successfully!

-------------------------------------------
Full Name: Jane Smith
Phone Number: 555-123-4567
Email Address: jane.smith@example.com
✓ Contact saved successfully!

-------------------------------------------
Full Name: exit

Import session completed. Total contacts added: 2
CSV file location: /path/to/writable/contacts.csv
```

## 📄 CSV Output Format

The generated CSV file (`writable/contacts.csv`) has the following structure:

```csv
Name,Phone,Email
Victor Frankenstein,555-776-2323,doctor@nodedojo.com
Jane Smith,555-123-4567,jane.smith@example.com
```

## ⚙️ Technical Details

- **Framework**: CodeIgniter 4
- **Command Group**: Import
- **Command Name**: `import:contacts`
- **PHP Requirements**: PHP 7.4 or higher (CodeIgniter 4 requirement)
- **Dependencies**: Uses only standard CodeIgniter 4 CLI libraries

## 🛠️ Features Implemented

✅ CodeIgniter 4 custom spark command  
✅ Interactive CLI input using `CLI::prompt()`  
✅ CSV file creation and append functionality  
✅ Automatic header row creation  
✅ Continuous input loop with exit condition  
✅ Input validation (empty name check)  
✅ Success/error feedback messages  
✅ Contact counter for session summary  

## 📝 Notes

- The CSV file is stored in the `writable/` directory for security and proper permissions
- Phone and email fields can be empty if needed
- Name field is required (cannot be empty)
- The command uses standard PHP CSV functions (`fputcsv`) for proper formatting
- All data is trimmed before saving to remove extra whitespace

## 🔒 Security Considerations

- File is stored in `writable/` directory (not web-accessible by default)
- No web interface or routes (CLI-only application)
- Uses CodeIgniter's built-in WRITEPATH constant for secure file location

## 🤝 Support

For CodeIgniter 4 documentation, visit: https://codeigniter.com/user_guide/

---

**Created for**: Travel agents and professionals who need to digitize physical contact information  
**Use Case**: Converting physical Rolodex cards to digital CSV format
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
