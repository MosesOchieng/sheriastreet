const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: true }));

const reports = [];

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

app.post('/report', (req, res) => {
  const report = {
    name: req.body.name,
    email: req.body.email,
    subject: req.body.subject,
    message: req.body.message,
    date: new Date()
  };

  reports.push(report);

  res.send('Report received!');
});

app.get('/reports', (req, res) => {
  res.send(reports);
});

app.listen(3000, () => {
  console.log('Server running on port 3000');
});
