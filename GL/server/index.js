const express = require('express');
const app = express();
const mysql = require('mysql');
const cors = require('cors');

app.use(cors());
app.use(express.json());

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'gamelib'
});

app.post('/create', (req, res) => {
    const user = req.body.user;
    const pass = req.body.pass;

    db.query('INSERT INTO usuarios (user, pass) VALUES (?, ?)', [user, pass], (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.send('Values Inserted');
        }
    });
});

app.get('/usuarios', (req, res) => {
    db.query('SELECT * FROM usuarios', (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.send(result);
        }
    });
});

app.get('/resena', (req, res) => {
    db.query('SELECT * FROM resena', (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.send(result);
        }
    });
});

app.post('/resena', (req, res) => {
    const user = req.body.user;
    const juego = req.body.juego;
    const titulo = req.body.titulo;
    const contenido = req.body.contenido;

    db.query('INSERT INTO resena (user, juego, titulo, contenido) VALUES (?, ?, ?, ?)', [user, juego, titulo, contenido], (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.send('Values Inserted');
        }
    });
});

app.put('/update', (req, res) => {
    const user = req.body.user;
    const newJuego = req.body.newJuego;
    const newTitulo = req.body.newTitulo;
    const newContenido = req.body.newContenido;
    const oldTitulo = req.body.oldTitulo;

    db.query('UPDATE resena SET contenido = ?, juego = ?, titulo = ? WHERE user = ? AND titulo = ?', [newContenido, newJuego, newTitulo, user, oldTitulo], (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.send('Values Updated');
        }
    });
});

app.delete('/resena', (req, res) => {
    const user = req.body.user;
    const titulo = req.body.titulo;

    db.query('DELETE FROM resena WHERE user = ? AND titulo = ?', [user, titulo], (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.send('Values Deleted');
        }
    });
});

app.listen(3001, () => {
    console.log('Server is running on port 3001');
});