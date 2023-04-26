import sqlite3
def dbwrite(dt):
	try:
    sqliteconn = sqlite3.connect('qr.db')
    cursor = sqliteconn.cursor()
    spl1=dt.split(",")
    insertqr = """INSERT INTO qrusers
                          ( FNAME, LNAME, AREA, SPORT) 
                          VALUES ( ?, ?, ?, ?);"""

        dataparam = (spl1[0],spl1[1],spl1[2],spl1[3])
        cursor.execute(insertqr, dataparam)
        sqliteconn.commit()
        print("Done")
   
    
    except sqlite3.Error as error:
    print("Error while open a sqlite table", error)
    finally:
    if sqliteConnection:
        sqliteConnection.close()
        print("sqlite connection is closed")


	

