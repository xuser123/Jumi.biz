# Mehrere PDF-Dateien zusammenfügen
from tkinter.constants import PAGES
from PyPDF2 import PdfFileReader, PdfFileWriter
import tkinter
from tkinter import filedialog

def merge_pdfs(result_name):
   pdf_writer = PdfFileWriter()
   root = tkinter.Tk()
   files = filedialog.askopenfilenames(parent=root,title='PDFs auswählen!')
   for file in root.tk.splitlist(files):
      pdf_reader = PdfFileReader(file)
      pdf_reader.getPage(0)
#            for page in range(pdf_reader.getNumPages()):
      pdf_writer.addPage(pdf_reader.getPage(0))
      # nach rechts rücken und statt 0 "page"
   print('PDFs zusammengefügt.')
   with open(result_name, 'wb') as out:
      pdf_writer.write(out)
      print('PDF-Datei erfolgreich erstellt.')

merge_pdfs('merged.pdf')
# GUI (tkinter) erscheint
