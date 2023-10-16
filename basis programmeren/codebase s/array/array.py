programmeertalen = ["PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C"]

programmeertalen.extend(["Python", "Swift"])

programmeertalen.sort()

for taal in programmeertalen:
    print(taal)
aantalItems = len(programmeertalen)
print("Aantal items in de array: " + str(aantalItems))
