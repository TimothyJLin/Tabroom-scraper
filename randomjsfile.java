var mysql = require('mysql');

var con = mysql.createConnection({
  host: getenv('HOST'),
  user: getenv('USER'),
  password: getenv('PASSWORD'),
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});