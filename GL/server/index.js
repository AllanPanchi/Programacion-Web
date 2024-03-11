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

app.listen(3001, () => {
    console.log('Server is running on port 3001');
});