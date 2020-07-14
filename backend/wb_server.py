import asyncio
import websockets
import mysql.connector
import json
from hashlib import sha256

db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="c0nn3ctatx123",
    database="users"
)

async def handle_conn(websocket, path):
    event = json.loads(await websocket.recv())
    if event["action"] == "regular-user" or event["action"] == "business-user":
        user = sha256(userinfo["user"].encode('utf-8')).hexdigest()
        passw = sha256(userinfo["pass"].encode('utf-8')).hexdigest()

        dbcursor = db.cursor()

        table_type = "business" if event["action"] == "business-user" else "regular"
        query = "INSERT INTO " + table_type + " (username, password) VALUES (%s, %s)"
        val = (str(user), str(passw))
        mycursor.execute(query, val)
        db.commit()
    elif event["action"] == "":
        pass
    # add more events to the bottom of this elif if necessary



if __name__ == "__main__":
    start_server = websockets.serve(handle_conn, "localhost", 8765)
    print("Running")
    asyncio.get_event_loop().run_until_complete(start_server)
    asyncio.get_event_loop().run_forever()
