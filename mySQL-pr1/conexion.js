import mysql from 'mysql';

let conexion = mysql.createConnection({
    host: 'localhost',
    database: 'pr1_web_p3',
    user: 'root',
    password: '',
    port: 3306
});

conexion.connect(function(err) {
    if (err) {
        throw err;
    } else {
        console.log('Conexión a la base de datos exitosa');
    }
});

conexion.query('SELECT * FROM empleado', function(err, rows) {
    if (err) {
        throw err;
    } else {
        console.log(rows);
        console.log('Número de registros: ' + rows.length);
        console.log('Primer registro: ' + rows[0].nombre);
    }
});

conexion.query('INSERT INTO empleado (idEmpleado, nombre, apellido, edad) VALUES (1234, "Juan", "Pérez", 25)', function(err, result) {
    if (err) {
        throw err;
    }
    console.log('Registro insertado correctamente');
});

conexion.query('UPDATE empleado SET edad = 26 WHERE nombre = "Juan"', function(err, result) {
    if (err) {
        throw err;
    }
    console.log('Registro actualizado correctamente');
});

conexion.query('DELETE FROM empleado WHERE nombre = "Juan"', function(err, result) {
    if (err) {
        throw err;
    }
    console.log('Registro eliminado correctamente');
});

conexion.end();