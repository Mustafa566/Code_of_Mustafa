import subprocess 
import webbrowser
from prettytable import PrettyTable

x = PrettyTable()

x.field_names = ["Programs", "Webbrowser"]

x.add_row(["1. VsCode", "7. Youtube playlist"])
x.add_row(["2. League Of Legends", "8. Twitch"])
x.add_row(["3. Chrome", "9. Youtube"])
x.add_row(["4. Xampp", "10. Google"])
x.add_row(["5. Word", " 11. Udemy"])
x.add_row(["6. Discord", " "])

def Home():
    print("\nHello this is a automation bot and I am Mubo.") 
    print("You can type a number and the program will be executed.\n")
    print("Select a number to choose in which device you now use on your PC or LAPTOP ?")
    print("1. Pc")
    print("2. Laptop\n")

def info():
    print("\nNow select witch program you want to open select a number.")
    print(x)

# The first input of the program. And what you want to do.
i = 2
Home()

def openProgramOnPc():
    info()
    WhatProgram = input("\n--> Start: ")  

    # All of the programs
    # VsCode
    if (WhatProgram == "1"):
        subprocess.Popen(["D:/Microsoft VS Code/Code.exe"])

    # League Of Legends
    elif (WhatProgram == "2"):
        subprocess.Popen(["D:/League Of Legends/LeagueClient"])

    # Chrome
    elif (WhatProgram == "3"):
        subprocess.Popen(["C:/Program Files (x86)/Google/Chrome/Application/Chrome"])

    # Xampp
    elif (WhatProgram == "4"):
        subprocess.Popen(["C:/xampp/xampp-control"])

    # Word
    elif (WhatProgram == "5"):
        subprocess.Popen(["C:/Program Files (x86)/Microsoft Office/root/Office16/WINWORD.exe"])

    # Discord
    elif (WhatProgram == "6"):
        subprocess.Popen(["C:/Users/Mustafa Bolat/AppData/Local/Discord/app-0.0.305/Discord.exe"])

    # Playlist
    elif (WhatProgram == "7"):
        webbrowser.open('https://www.youtube.com/playlist?list=PLZ-AXnNtBiWDD8utTRzHULZ5k46LdJ4HD')
    
    # Twitch
    elif (WhatProgram == "8"):
        webbrowser.open('https://www.twitch.tv/directory/following')
    
    # Youtube
    elif (WhatProgram == "9"):
        webbrowser.open('https://www.youtube.com/feed/subscriptions')

    # Google
    elif (WhatProgram == "10"):
        webbrowser.open('https://www.google.nl/')

    # Udemy
    elif (WhatProgram == "11"):
        webbrowser.open('https://www.udemy.com/home/my-courses/learning/')

pcOrLaptop = input("Choose: ")

if pcOrLaptop == "1":
    openProgramOnPc()
else:
    openProgramOnLaptop()

while i > 1:
    openProgramOnPc()


def openProgramOnLaptop():
    info()
    WhatProgram = input("/n--> Start: ")  

    # All of the programs
    # VsCode
    if (WhatProgram == "1"):
        subprocess.Popen(["C:/Users/Gebruiker/AppData/Local/Programs/Microsoft VS Code/Code.exe"])

    # League Of Legends
    elif (WhatProgram == "2"):
        subprocess.Popen(["C:/Riot Games/League of Legends/LeagueClient"])

    # Chrome
    elif (WhatProgram == "3"):
        subprocess.Popen(["C:/Program Files (x86)/Google/Chrome/Application/Chrome"])

    # Xampp
    elif (WhatProgram == "4"):
        subprocess.Popen(["C:/xampp/xampp-control"])

    # Word
    elif (WhatProgram == "5"):
        subprocess.Popen(["C:/Program Files (x86)/Microsoft Office/root/Office16/WINWORD.exe"])

    # Discord
    elif (WhatProgram == "6"):
        subprocess.Popen(["C:/Users/Mustafa Bolat/AppData/Local/Discord/app-0.0.305/Discord.exe"])

    # Playlist
    elif (WhatProgram == "7"):
        webbrowser.open('https://www.youtube.com/playlist?list=PLZ-AXnNtBiWDD8utTRzHULZ5k46LdJ4HD')
    
    # Twitch
    elif (WhatProgram == "8"):
        webbrowser.open('https://www.twitch.tv/directory/following')
    
    # Youtube
    elif (WhatProgram == "9"):
        webbrowser.open('https://www.youtube.com/feed/subscriptions')

    # Google
    elif (WhatProgram == "10"):
        webbrowser.open('https://www.google.nl/')
    
    # Udemy
    elif (WhatProgram == "11"):
        webbrowser.open('https://www.udemy.com/home/my-courses/learning/')

while i > 1:
    openProgramOnLaptop()