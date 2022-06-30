text = 'Попьорові пупьбабки насіяв мій друг у чорному поліааааа'
rez = text[:len(text) // 2]
rez = rez.lower()
rez = rez.replace('п', '*')
print("Текст із заміненими буквами п: ", (rez + text[len(text) // 2:len(text)]))
