import markdown

def to_html(filename):
#def to_markdown(filename):
	with open(filename + '.md', 'r') as file:
		text = file.read()
		html = markdown.markdown(text)
	with open(filename + '.html', 'w') as file:
		file.write(html)

to_html('test')
#to_markdown('test')
