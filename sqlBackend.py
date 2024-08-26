import mysql.connector
mydb = mysql.connector.connect(
  host=process.env.['host'],
  user=process.env.['user'],
  password=process.env.['password'],
  database=process.env.['database'],
  port=process.env.['port'],
#environ['password'].
)
mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM localentries WHERE name='Timothy Lin'")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)
#print(mydb)