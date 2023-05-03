import cv2
import db
cap = cv2.imread("tst.png")
detector = cv2.QRCodeDetector()
data,b,c= detector.detectAndDecode(cap)
print("[+] QR Code detected, data:", data)
db.dbwrite(data)
print("finish")
