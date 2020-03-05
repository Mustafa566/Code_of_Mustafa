import os

FOLDER_PATH = r'C:/Users/Mustafa Bolat/Downloads'

def listDir(dir):
    filenames = os.listdir(dir)
    for filenames in filenames:
        print("file name: " + filenames)
        print("folder path " + os.path.abspath(os.path.join(dir, filenames)) + "\n")

if __name__ == "__main__":
    listDir(FOLDER_PATH)
