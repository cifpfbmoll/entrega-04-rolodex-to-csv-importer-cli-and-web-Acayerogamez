<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Rolodex Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <header class="text-center mb-4">
        <h1>📋 Rolodex Digital con CodeIgniter 4</h1>
        <p class="lead">Digitalizando contactos desde la línea de comandos y la web.</p>
    </header>

    <div class="row">
        <!-- Columna del Formulario -->
        <div class="col-md-4">
            <h2>Añadir Nuevo Contacto</h2>
            <form action="/create" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="phone" id="phone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <button type="submit" class="btn btn-primary w-100">Guardar Contacto</button>
            </form>
        </div>

        <!-- Columna de la Tabla de Contactos -->
        <div class="col-md-8">
            <h2>Contactos Guardados (Total: <?= count($contacts) ?>)</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($contacts)): ?>
                            <?php foreach ($contacts as $contact): ?>
                                <tr>
                                    <td><?= esc($contact['id']) ?></td>
                                    <td><?= esc($contact['name']) ?></td>
                                    <td><a href="tel:<?= esc($contact['phone']) ?>"><?= esc($contact['phone']) ?></a></td>
                                    <td><a href="mailto:<?= esc($contact['email']) ?>"><?= esc($contact['email']) ?></a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center">No hay contactos guardados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
